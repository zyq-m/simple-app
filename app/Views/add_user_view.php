<?= $this->extend('layout/default_view') ?>

<?= $this->section('content') ?>

<!-- Card Section -->
<div class="max-w-4xl py-10 lg:py-14">
    <!-- Card -->
    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
                Add User
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Provide all the details including name, password and etc.
            </p>
        </div>

        <form action="<?= base_url('user') ?>" method="post">
            <!-- Grid -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                <div class="sm:col-span-3">
                    <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Full name
                    </label>
                    <div class="hs-tooltip inline-block">
                        <button type="button" class="hs-tooltip-toggle ml-1">
                            <svg class="inline-block w-3 h-3 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                        </button>
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible w-40 text-center z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-sm dark:bg-slate-700" role="tooltip">
                            Displayed on public forums, such as Preline
                        </span>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <input id="af-account-full-name" name="first-name" type="text" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Maria">
                        <input type="text" name="last-name" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Boone">
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Email
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="af-account-email" name="email" type="email" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="maria@site.com">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Password
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <div class="space-y-2">
                        <input id="af-account-password" name="password" type="password" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Enter password">
                        <input type="password" name="re-password" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Re-type password">
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <div class="inline-block">
                        <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                        <span class="text-sm text-gray-400 dark:text-gray-600">
                            (Optional)
                        </span>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <input id="af-account-phone" name="phone" type="text" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="+x(xxx)xxx-xx-xx">
                        <select class="py-2 px-3 pr-9 block w-full sm:w-aull border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <option selected>Mobile</option>
                            <option>Home</option>
                            <option>Work</option>
                            <option>Fax</option>
                        </select>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-account-gender-checkbox" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Gender
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <label for="af-account-gender-checkbox" class="flex py-2 px-3 block w-full bordll border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="radio" name="gender" value="male" class="shrink-0 mt-0ll border border-gray-200 rounded-full text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox" checked>
                            <span class="text-sm text-gray-500 ml-3 dark:text-gray-400">Male</span>
                        </label>

                        <label for="af-account-gender-checkbox-female" class="flex py-2 px-3 block w-full bordll border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="radio" name="gender" value="female" class="shrink-0 mt-0ll border border-gray-200 rounded-full text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-female">
                            <span class="text-sm text-gray-500 ml-3 dark:text-gray-400">Female</span>
                        </label>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <div class="mt-5 flex justify-end gap-x-2">
                <button type="reset" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    Cancel
                </button>
                <button type="submit" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    Add user
                </button>
            </div>
        </form>
    </div>
    <!-- End Card -->
</div>
<!-- End Card Section -->

<?= $this->endSection() ?>