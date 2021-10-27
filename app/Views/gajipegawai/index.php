<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="col">
        <h3 class="mb-2">DATA GAJI PEGAWAI</h3>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Golongan</th>
                        <th>Jumlah Gaji</th>
                    </tr>
                    <?php $i = 1;
                    foreach ($pegawai as $row) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row['id_peg']; ?></td>
                            <td><?= $row['nama_peg']; ?></td>
                            <td><?= $row['nama_gol']; ?></td>
                            <td><?= $row['jml_gaji']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>