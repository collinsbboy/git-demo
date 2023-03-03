<?=  $this->extend('Layout/main_layout.php')  ?>

    <?=  $this->section('content') ?>

    <div class="air__layout">

    <?= view_cell('\App\Libraries\Admin\PrintUpperDataSheet_content::printItem') ?>
    
    </div>

<?= $this->endSection() ?>