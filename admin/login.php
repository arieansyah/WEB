<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">


<div class="navbar navbar-inverse navbar-fixed-top scrollclass" >
  <div class="container">
      <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button>
      </div>

      <div class="navbar-collapse collapse">
          <div class="text-center">
            <a style="color:#fff" href="../index.php"><h3><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</h3></a>
      </div>
       </div>
   </div>
</div>


<div class="container">

  <div class="form-container">
        <form  method="post" action="login_action.php">
            <h2>LOGIN ADMIN</h2><hr />


             <?php
                if(isset($error))
                {
                  ?>
                    <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                    </div>
                  <?php
                }
              ?>


            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username" required />
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
              <button type="submit" name="submit"  class="btn btn-block btn-primary">
                  <i class="glyphicon glyphicon-log-in"></i>&nbsp;Masuk
                </button>
            </div>
            <br />
            
        </form>
       </div>
</div><!--/.container-->

