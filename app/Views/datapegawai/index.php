<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="col">
        <h3 class="mb-2">DATA PEGAWAI</h3>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Golongan</th>
                        <th>Telepon</th>
                    </tr>
                        <?php $i = 1;
                        foreach ($pegawai as $row) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row['id_peg']; ?></td>
                            <td><?= $row['nama_peg']; ?></td>
                            <td><?= $row['Alamat']; ?></td>
                            <td><?= $row['JK']; ?></td>
                            <td><?= $row['nama_gol']; ?></td>
                            <td><?= $row['Telp']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>