<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password | USC Museum</title>
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
  echo form_open('reset_pass/resetpass', $attrib);
  echo '<br>';
  ?>

                  <div class="form-group">
                    <label>New Password</label>
                    
                    <input type="password" class="form-control" placeholder="Enter new password" name="newpass">
                  </div>

                   <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm password" name="confpass">
                  </div>

                        <?php if(form_error('newpass')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('newpass')?>  </div>
                         <?php endif; ?>

                   <?php if($this->session->flashdata('error')) : ?>
                  
                    <br><p style="color:red;">* <?=$this->session->flashdata('error')?></p>
                   
                    <?php endif; ?>

                  <input type="hidden" name="code" value= "<?php echo $code ?>" >


                  <button id="hehe" type="submit" class="form-control" style="margin-top: 20px;"> Submit</button>
                          
  <?php echo form_close(); ?>


          </div>
        </div>
      </div>
    </section>


  
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
