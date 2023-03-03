<?=  $this->extend('Layout/main_layout.php')  ?>

    <?=  $this->section('content') ?>

    <?= view_cell('\App\Libraries\Navigator_content::navigatorItem') ?>

    <div class="air__layout">

    <?= view_cell('\App\Libraries\Navbar_content::navbarItem') ?>

    <?= view_cell('\App\Libraries\Admin\Remarks_content::remarksItem') ?>

    <?= view_cell('\App\Libraries\Footer_content::footerItem') ?>
    
    </div>

<?= $this->endSection() ?>