<?=  $this->extend('Layout/main_layout.php')  ?>

    <?=  $this->section('content') ?>

    <div class="air__layout">

    <?= view_cell('\App\Libraries\Teacher\NSingle_content::nsingleItem') ?>
    
    </div>

<?= $this->endSection() ?>