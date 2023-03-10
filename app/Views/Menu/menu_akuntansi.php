<?= $this->extend('MyLayout/template') ?>

<?= $this->section('content') ?>


<main class="p-md-3 p-2">
    <h3 style="color: #566573;">Akuntansi</h3>

    <hr>

    <div class="row mt-4">
        <div class="col-md-4">
            <a class="text-decoration-none" href="<?= base_url() ?>/header">
                <div class="card mb-3 shadow" style="border: 1px solid #1762A5;">
                    <h5 class="card-header" style="background-color: #1762A5; color: #fff;">Kas & Bank</h5>
                    <div class="card-body text-dark">

                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="text-decoration-none" href="<?= base_url() ?>/corousel_desktop">
                <div class="card mb-3 shadow" style="border: 1px solid #1762A5;">
                    <h5 class="card-header" style="background-color: #1762A5; color: #fff;">Akun</h5>
                    <div class="card-body text-dark">

                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="text-decoration-none" href="<?= base_url() ?>/corousel_desktop">
                <div class="card mb-3 shadow" style="border: 1px solid #1762A5;">
                    <h5 class="card-header" style="background-color: #1762A5; color: #fff;">Pendapatan</h5>
                    <div class="card-body text-dark">

                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="text-decoration-none" href="<?= base_url() ?>/corousel_desktop">
                <div class="card mb-3 shadow" style="border: 1px solid #1762A5;">
                    <h5 class="card-header" style="background-color: #1762A5; color: #fff;">Pengeluaran</h5>
                    <div class="card-body text-dark">

                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="text-decoration-none" href="<?= base_url() ?>/corousel_desktop">
                <div class="card mb-3 shadow" style="border: 1px solid #1762A5;">
                    <h5 class="card-header" style="background-color: #1762A5; color: #fff;">Aset</h5>
                    <div class="card-body text-dark">

                    </div>
                </div>
            </a>
        </div>
    </div>
</main>

<?= $this->include('MyLayout/js') ?>

<?= $this->endSection() ?>