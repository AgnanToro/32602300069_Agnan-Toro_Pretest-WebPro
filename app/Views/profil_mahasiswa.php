<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <h1>Profil Mahasiswa</h1>
    
    <?php if (!empty($mahasiswa)) : ?>
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
            <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= esc($mhs['nim']) ?></td>
                <td><?= esc($mhs['nama']) ?></td>
                <td><?= esc($mhs['prodi']) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p style="color: red;">Data mahasiswa tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
