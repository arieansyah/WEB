<?php
include '../db/paket.php';

if(isset($_COOKIE['username']) && $_COOKIE['status'] == 'logged_in'){

$pakets = $paket->getAllGal();
?>
<h1 class="page-header">
    Lihat Gallery
</h1>

<table class="table table-striped">
  <tr>
      <th>NAMA WISATA</th>
      <th>GAMBAR</th>
      <th>CAPTION</th>
      <th>STATUS</th>
      <th>ACTION</th>
  </tr>
  <?php
    foreach($pakets as $data){
    ?>
  <tr>
      <td><?php echo $data['nama_wisata'] ?></td>
      <td><?php echo $data['gambar'] ?></td>
      <td><?php echo $data['caption'] ?></td>
      <td><?php echo $data['status'] ?></td>
      <td>
          <a href="admin.php?page=edit_gal&id=<?php echo $data['id'] ?>"
                  class="btn btn-warning btn-xs">Edit</a>
          <a href="gal_action.php?action=delete&id=<?php echo $data['id'] ?>"
                  class="btn btn-danger btn-xs">Delete</a>
      </td>
  </tr>
  <?php } ?>
</table>


<?php } else {
    header('location:login.php');
}