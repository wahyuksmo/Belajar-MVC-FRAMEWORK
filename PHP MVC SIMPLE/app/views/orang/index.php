<div class="container mt-5">
    <div class="row">
        <div class="col">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= DASARURL; ?>/orang/tambah" method="post">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option selected>Open this select menu</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Meninggal">Meninggal</option>
                                    <option value="Lajang">Lajang</option>
                                </select>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <h4>Data Orang </h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($data['orang'] as $or) :  ?>
                        <tr>
                            <th scope="row"><?= $nomor++; ?></th>
                            <td><?= $or['nama']; ?></td>
                            <td>
                                <a href="<?= DASARURL; ?>/orang/detail/<?= $or['id']; ?>" class="btn btn-sm btn-primary">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>