<?=  $this->extend('Layout/main_layout.php')  ?>

    <?=  $this->section('content') ?>


    <div class="air__layout">

    <?= view_cell('\App\Libraries\Navbar_content::navbarItem') ?>

    <?= view_cell('\App\Libraries\Student\Test_content::testItem') ?>
    
    </div>

<?= $this->endSection() ?>