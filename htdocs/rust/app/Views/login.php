<?=  $this->extend('Layout/main_layout.php')  ?>

    <?=  $this->section('content') ?>

    <?= view_cell('\App\Libraries\Login_content::loginItem') ?>

<?= $this->endSection() ?>
