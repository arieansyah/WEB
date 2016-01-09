<?php 
include 'db/paket.php';

$pakets = $paket->getAllPaket();

?>

<!--PACKAGES SECTION-->
<section class="for-full-back color-bg-one" id="packages">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2 ">
                <h1>Tour Packages</h1>
            </div>
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h5>
                       exciting adventure travel to Borneo identical with forests and rare animals
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="for-full-back color-white" >
    <div class="container">
        <div class="row text-center g-pad-bottom">
<?php
   foreach($pakets as $data){
?>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="team-member">
                    <img src="img/paket/<?php echo $data['img'] ?>" class="img-thumbnail"    alt="">
                    <h3><a href="TanjungP.php"><strong><?php echo $data['nama_paket'] ?></strong></a></h3>
                </div>
                <div class="alert alert-danger">
                    <?php echo $data['caption'] ?>
                </div>
            </div>
<?php } ?>    
        </div>
    </div>

</section>
<!--END SECTION-->