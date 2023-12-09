<div style="margin-top: 10px;">
    <h3>Data Pegawai</h3>
</div>

<a href="#" onclick="tambah()" class="btn btn-info" style="color:white;">Tambah Data</a>

<table class="table">
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>Umur</td>
        <td>Alamat</td>
        <td>Foto</td>
        <td colspan="2">Aksi</td>
    </tr>
    <?php foreach ($list_data as $dt) : ?>
        <tr>
            <td><?= $dt->Pegawai_Id ?></td>
            <td><?= $dt->Pegawai_nama ?></td>
            <td><?= $dt->Pegawai_umur ?></td>
            <td><?= $dt->Pegawai_alamat ?></td>
            <td><?= $dt->foto ?></td>
            <td><a href="<?= base_url("Admin/delete/").$dt->Pegawai_Id ?>">Hapus</a></td>
            <td><a href="#" onclick="ubah(<?= $dt->Pegawai_Id ?>)">Ubah</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah data Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Admin/saveData')?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="method">
                    <input type="hidden" name="id">
                    <input type="text" class="form-control mt-3" placeholder="Nama" name="nama">
                    <input type="text" class="form-control mt-3" placeholder="Umur" name="umur">
                    <input type="text" class="form-control mt-3" placeholder="Alamat" name="alamat">
                    <input type="file" class="form-control mt-3" placeholder="Foto" name="foto">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>