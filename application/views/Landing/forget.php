<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forget Password | USC Museum</title>
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

    <header id="header" style="margin-top: 50px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"><img src="<?php echo base_url();?>assets/images/museum50.jpg" class="logoadmin"></h1>
            <p style="text-align: center; font-size: 21px; color: #585858; font-family: Shadows into Light;">Where your curiosity ends and knowledge begins..</p>
          </div>
        </div>
      </div>
    </header>

    <section id="main" >
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4" style="margin-top: -30px;">


<?php
                $attrib = array('class' => 'well' ,'id'=>'login');
                echo form_open('forget/userforget',$attrib);
                echo '<br>';
                ?>
           
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name="uname" required>  <?php if($this->session->flashdata('message2')) : ?>
                  
                    <p style="color:red;">* <?=$this->session->flashdata('message2')?></p>
                   
                    <?php endif; ?>
                  </div>
          
                  <button type="submit" class="btn btn-default btn-block" style="margin-top: 20px;">Submit</button>
                  <br>
                  <h5><a href="<?php echo base_url();?>index.php/login" class="back">&#8592; Back to Home </a></h5> 
                   <span id="confirmMessage" class="confirmMessage"></span>
                 
                       <?php if($this->session->flashdata('message1')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                    <p style="color:green;"><?=$this->session->flashdata('message1')?></p>
                    </div>
                    <?php endif; ?>
              <?php echo form_close(); ?>


          </div>
        </div>
      </div>
    </section>


  
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
