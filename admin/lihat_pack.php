<?php
include '../db/paket.php';

if(isset($_COOKIE['username']) && $_COOKIE['status'] == 'logged_in'){

$pakets = $paket->getAllPaket();
?>
<h1 class="page-header">
    Lihat Paket
</h1>

<table class="table table-striped">
  <tr>
      <th>NAMA PAKET</th>
      <th>KODE PAKET</th>
      <th>HARGA</th>
      <th>GAMBAR</th>
      <th>STATUS</th>
      <th>ACTION</th>
  </tr>
  <?php
    foreach($pakets as $data){
    ?>
  <tr>
      <td><?php echo $data['nama_paket'] ?></td>
      <td><?php echo $data['kode_paket'] ?></td>
      <td><?php echo $data['harga'] ?></td>
      <td><?php echo $data['img'] ?></td>
      <td><?php echo $paket->showStatus($data['status']) ?></td>
      <td>
          <a href="admin.php?page=pack_edit&kode_paket=<?php echo $data['kode_paket'] ?>"
                  class="btn btn-warning btn-xs">Edit</a>
          <a href="pack_action.php?action=delete&kode_paket=<?php echo $data['kode_paket'] ?>"
                  class="btn btn-danger btn-xs">Delete</a>
      </td>
  </tr>
  <?php } ?>
</table>


<?php } else {
    header('location:login.php');
}