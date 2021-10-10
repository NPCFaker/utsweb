<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Mata Kuliah</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Semester</th>
                        <th scope="col">SKS</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1;
                    foreach ($matkul as $mk) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $mk['kode_mk'] ?></td>
                            <td><?= $mk['nm_mk'] ?></td>
                            <td><?= $mk['sem'] ?></td>
                            <td><?= $mk['sks'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>