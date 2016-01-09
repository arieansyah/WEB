<?php
include '../db/paket.php';

if(isset($_COOKIE['username']) && $_COOKIE['status'] == 'logged_in'){

if($_GET['page'] == 'pack_edit')
    $data = $paket->getPaket($_GET['kode_paket']);
else
    $data = array('nama_paket'=>'', 'kode_paket'=>'', 'harga'=>'', 'caption'=>'', 'status'=>'');

?>
	<div class="text-center">
		<h1 class="page-header">FORM INPUT</h1>
		<hr/>
	</div>

		<div class="jumbotron">
			<form method="post" action="pack_action.php">
			  <div class="form-group">
			    <label>Nama Paket</label>
			    <input type="text" class="form-control" name="nama_paket"  placeholder="Nama Paket" value="<?php echo $data['nama_paket'] ?>">
			  </div>
			  <div class="form-group">
			    <label>Kode Paket</label>
			    <input type="text" class="form-control" name="kode_paket" maxlength="5" placeholder="Kode Paket. Ex : 12345" 
			    value="<?php echo $data['kode_paket'] ?>">			
			  </div>
			  <div class="form-group">
			    <label>Harga</label>
			    <input type="text" class="form-control" name="harga" placeholder="Harga Paket. Ex : 1000000" value="<?php echo $data['harga'] ?>">			
			  </div>
			  <div class="form-group">
			  	<label>Caption</label>
			  	<textarea class="form-control" placeholder="Masukan Tentang hal yang menarik dari tempat wisata secara singkat" 
			  	 name="caption" rows="3" maxlength="1000"> <?php echo $data['caption'] ?></textarea>
			  </div>
			  <div class="form-group">
			    <label>Status</label>
			    <select name="status" class="form-control">
			        <option value="1">Active</option>
			        <option value="0">Non Active</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label>Photo <small>247X345</small></label>
			    <input type="file" name="img">
			  </div>

<?php
    if ($_GET['page'] == 'input')
        echo  '<input type="hidden" name="action" value="input">';
    else
        echo '<input type="hidden" name="action" value="pack_edit">';
?>

			  <button type="submit" class="btn btn-primary pull-right">Submit</button>
			</form>
		</div>
<?php } else {
    header('location:login.php');
}
