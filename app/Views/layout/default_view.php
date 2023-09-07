<!DOCTYPE html>
<html lang="en" class="h-full light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title', true) ?></title>
    <link href="<?= base_url('dist/output.css') ?>" rel="stylesheet">
</head>

<body class="bg-gray-50 dark:bg-slate-900">
    <?= $this->include('layout/sidebar_view') ?>

    <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="<?= base_url('node_modules/preline/dist/preline.js') ?>"></script>
    <?= $this->renderSection('javascript') ?>
</body>

</html>