<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php if (!empty($mahasiswa)): ?>
            <?php foreach ($mahasiswa as $mhs): ?>
                <li><?= $mhs->nim ?> - <?= $mhs->nama ?> (<?= $mhs->prodi ?>)</li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Tidak ada data</li>
        <?php endif; ?>
    </ul>
</body>
</html>