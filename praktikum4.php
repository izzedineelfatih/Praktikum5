

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit dan Tambah Barang</title>
</head>
<body>
    <h1><?php echo $edit_mode ? 'Edit Barang' : 'Tambah Barang'; ?></h1>
    
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $edit_mode ? $edit_barang['id'] : ''; ?>">
        
        <label for="nama">Nama Barang:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $edit_mode ? $edit_barang['nama'] : ''; ?>" required><br><br>

        <label for="kategori">Kategori Barang:</label><br>
        <input type="text" id="kategori" name="kategori" value="<?php echo $edit_mode ? $edit_barang['kategori'] : ''; ?>" required><br><br>

        <label for="harga">Harga Barang:</label><br>
        <input type="text" id="harga" name="harga" value="<?php echo $edit_mode ? $edit_barang['harga'] : ''; ?>" required><br><br>

        <input type="submit" name="<?php echo $edit_mode ? 'update' : 'tambah'; ?>" value="<?php echo $edit_mode ? 'Update Barang' : 'Tambah Barang'; ?>">
    </form>

    <h1>Daftar Barang</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($barang as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['nama']; ?></td>
            <td><?php echo $item['kategori']; ?></td>
            <td><?php echo $item['harga']; ?></td>
            <td>
                <a href="?edit=<?php echo $item['id']; ?>">Edit</a> | 
                <a onclick = "return confirm('Yakin ingin hapus')"  href="?hapus=<?php echo $item['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
