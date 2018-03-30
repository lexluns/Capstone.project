<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | USC Museum</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>assets/css/styleAdmin.css" rel="stylesheet">
   
  </head>

  <style>

    body {

      background: none;
      border-top: 4px solid orange;

    }

    button {
      margin-top: 50px;
    } 

    .logoadmin {
      width: 510px;
      height: 170px;
      margin-top: -15px;
      /*margin-right: 25px;*/
    }

    #motto {
      color: green;
      font-size: 12px;
    }

    #header {
      background: none;

    }


    .well {
      border-radius: 0;
      background: white;  
    }

    .haha {
      color: #0B0080;
    }
    
    /*#hehe:hover {
      background: green;
      color: white;
      letter-spacing: 3px;
    }*/

    .text-center {
      margin-left: -15px;
    }


    .forgot {
      text-decoration: none;
      color: black;
    }

    .forgot:hover {
      text-decoration: none;
      color: green;
    }

     .back {
      text-decoration: none;
      color: black;
    }

    .back:hover {
      text-decoration: none;
      color: green;
    }


@media (max-width: 469px) {
  img {
    width: 300px;
    height: 100px;
  }
}


  </style>
  <body>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"><img src="<?php echo base_url();?>assets/images/museum50.jpg" class="logoadmin" style="margin-top: 2%;"></h1>
           <p style="text-align: center; font-size: 21px; color: #585858; font-family: Shadows into Light;">Where your curiosity ends and knowledge begins..</p>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4" style="margin-top: -30px;">


<?php
  $attrib = array ('class' => 'well' , 'id' => 'login');
  echo form_open('login/userlogin', $attrib);
  echo '<br>';
  ?>

                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="useremail">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="userpass" >
                    <?php if($this->session->flashdata('message2')) : ?>
                  
                   <br> <p style="color:red;">* <?=$this->session->flashdata('message2')?></p>
                   
                    <?php endif; ?>
                    <?php if($this->session->flashdata('message')) : ?>
                  
                    <br><p style="color:red;">* <?=$this->session->flashdata('message')?></p>
                   
                    <?php endif; ?>


                  </div>
                  <button id="hehe" type="submit" class="form-control" style="margin-top: 20px;"> LogIn</button>


                     <?php if($this->session->flashdata('success')) : ?>
                      <br>
                          <div class="alert alert-success">
                           <center><?=$this->session->flashdata('success')?></center>
                            </div>  
                          <?php endif; ?>
                  <br>
                <h5 class="haha"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Forgot Password?<a href="<?php echo base_url();?>index.php/forget" class="forgot"> Click here! <i class="fa fa-hand-o-left" aria-hidden="true"></i></a></h5>
                <h5 class="haha"><i class="fa fa-user-plus" aria-hidden="true"></i> No Account yet?<a href="<?php echo base_url();?>index.php/register" class="forgot"> Register here! <i class="fa fa-hand-o-left" aria-hidden="true"></i></a></h5>
                <h5><a href="<?php echo base_url();?>index.php/Home" class="back"><i class="fa fa-home" aria-hidden="true"></i> Back to Home</a></h5>

  <?php echo form_close(); ?>


          </div>
        </div>
      </div>
    </section>


  
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
