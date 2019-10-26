<h3>Data Buku</h3>

<a href="<?php echo base_url('home/create') ?>">Tambah Data</a>

<p></p>

<table border="1" cellpadding="10">
  <thead>
    <tr>
      <td><b>id</b></td>
      <td><b>Name</b></td>
      <td><b>Stok</b></td>
      <td><b>Image</b></td>
      <td><b>Deskripsi</b></td>
      <td><b>Aksi</b></td>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($tampilkan_data as $data){
    ?>
      <tr>
        <td align="center"><?php echo $books->id; ?></td>
        <td><?php echo $books->name; ?></td>
        <td><?php echo $books->stok;?></td>
        <td><?php echo $books->image; ?></td>
        <td><?php echo $books->deskripsi; ?></td>
        <td>
          <a href="<?php echo base_url('home/update/').$data->id ?>">Update</a> | 
          <a href="<?php echo base_url('home/delete/').$data->id ?>">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
