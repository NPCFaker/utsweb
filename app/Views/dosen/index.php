<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Dosen</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">JK</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telp</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1;
                    foreach ($dosen as $d) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $d['nidn'] ?></td>
                            <td><?= $d['nm_dosen'] ?></td>
                            <td><?= $d['jk'] ?></td>
                            <td><?= $d['alamat'] ?></td>
                            <td><?= $d['telp_dosen'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>