
<!--GALLERY SECTION-->
    <section class="for-full-back color-bg-one" id="gallery">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1>GALLERY</h1>
                </div>
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2 ">
                        <h5>
                            Amazing pictures in Borneo
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="for-full-back color-white" >
        <div class="container">
          <div class="row">

<?php
  $pakets = $paket->getAllGal();

   foreach($pakets as $data){
?>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="img/<?php echo $data["gambar"] ?>" alt="" style="width:500px;height:300px">
                  <div class="caption">
                    <h3><?php echo $data['nama_wisata'] ?></h3>
                    <p><?php echo $data['caption'] ?></p>
                  </div>
                </div>
              </div>
<?php } ?>         
          </div>
        </div>
    </section>
<!--END SECTION-->







