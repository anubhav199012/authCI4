<?= $this->extend('layouts/dashapp') ?>

<?= $this->section('navbar') ?>
    <?= $this->include('templates/navbar') ?>
<?= $this->endSection() ?>

<?= $this->section('sidebar') ?>
    <?= $this->include('templates/sidebar') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('components/profile_card') ?>
<?= $this->endSection() ?>


