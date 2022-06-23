<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['orang']['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['orang']['status']; ?></h6>
                    <p class="card-text"><?= $data['orang']['alamat']; ?>.</p>
                    <a href="<?= DASARURL; ?>" class="card-link"><< Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>