<?php
include '../db/paket.php';

if(isset($_COOKIE['username']) && $_COOKIE['status'] == 'logged_in'){

if($_GET['page'] == 'edit_gal')
    $data = $paket->getGal($_GET['id']);
else
    $data = array('id'=>'', 'nama_wisata'=>'', 'caption'=>'', 'gambar'=>'', 'status'=>'');


?>
	<div class="text-center">
		<h1 class="page-header">FORM INPUT</h1>

	</div>

		<div class="jumbotron">
			<form method="post" action="gal_action.php">
						 
			    <input type="hidden" class="form-control" name="id"  placeholder="Nama Wisata" value="<?php echo $data['id'] ?>">
	
			  <div class="form-group">
			    <label>Nama</label>
			    <input type="text" class="form-control" name="nama_wisata"  placeholder="Nama Wisata" value="<?php echo $data['nama_wisata'] ?>">
			  </div>
			  
			  <div class="form-group">
			  	<label>Caption</label>
			  	<textarea class="form-control" placeholder="Masukan Tentang hal yang menarik dari tempat wisata secara singkat" 
			  	 name="caption" rows="3" maxlength="1000"> <?php echo $data['caption'] ?></textarea>
			  </div>
			  
			  <div class="form-group">
			    <label>Photo</label>
			    <input type="file" name="gambar">
			  </div>

			   <div class="form-group">
			    <label>Status</label>
			    <select name="status" class="form-control">
			        <option value="1">Active</option>
			        <option value="0">Non Active</option>
			    </select>
			  </div>

<?php
    if ($_GET['page'] == 'input_gal')
        echo  '<input type="hidden" name="action" value="input_gal">';
    else
        echo '<input type="hidden" name="action" value="edit_gal">';
?>

			  <button type="submit" class="btn btn-primary pull-right">Submit</button>
			</form>
		</div>
<?php } else {
    header('location:login.php');
}
