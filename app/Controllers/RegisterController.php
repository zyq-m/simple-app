<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Shield\Controllers\RegisterController as ShieldRegister;
use App\Models\ProfileModel;
use CodeIgniter\Shield\Entities\User;

class RegisterController extends ShieldRegister
{
    public function registerAction(): RedirectResponse
    {
        // $user = $this->getUserProvider();
        $profileModel = model(ProfileModel::class);

        $data_user = [
            'username' => null,
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];

        // Get the User Provider (UserModel by default)
        $userModel = auth()->getProvider();

        $user = new User($data_user);
        $userModel->save($user);

        // To get the complete user object with ID, we need to get from the database
        $user = $userModel->findById($userModel->getInsertID());

        // Add to default group
        $userModel->addToDefaultGroup($user);

        // Save into table profile
        $data_profile = [
            'userId' => $userModel->getInsertID(),
            'name' => $this->request->getPost('first-name') . ' ' . $this->request->getPost('last-name'),
            'phone' => $this->request->getPost('phone'),
            'gender' => $this->request->getPost('gender'),
        ];

        $profileModel->save($data_profile);

        return redirect()->to('home');
    }
}
