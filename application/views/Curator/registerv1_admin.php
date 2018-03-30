<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | USC Museum</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/styleAdmin.css" rel="stylesheet">

  </head>

  <style>

     body {

      background: none;
      border-top: 3px solid orange;

    }

    button {
      margin-top: 50px;
    } 

    .logoadmin {
      width: 510px;
      height: 154px;
      /*margin-right: 25px;*/
    }


    #header {
      background: none;
    }

    .well {
      border-radius: 0;  
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
      color: orange;
    }

     .back {
      text-decoration: none;
      color: black;
    }

    .back:hover {
      text-decoration: none;
      color: green;
    }

    .btn-default:hover {

      background: green;
      color: white;
    }


  </style>
  <body>

    <!-- <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/Home" title = "Back to Home">University of San Carlos - Museum</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div>
      </div>
    </nav> -->

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"><img src="<?php echo base_url();?>assets/images/usc2.png" class="logoadmin"></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container" style="margin-bottom:20px;">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">

           
   
<?php
  $attrib = array ('class' => 'well'  , 'id' => 'login');
  echo form_open('add_user/reg', $attrib);
  ?>
         


                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Email Address</label>
                       
                        <input type="text" class="form-control" value="<?php echo set_value('eadd'); ?>" name="eadd" pattern="[A-Za-z]+{ }" placeholder="Johndoe@gmail.com" required="">
                         <?php if(form_error('eadd')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('eadd')?>  </div>
                         <?php endif; ?>
                    </div>

                     <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">User Type</label><br>
                        <input type="radio"  name="user_type" value="Curator" checked required="">Curator
                        <input type="radio"  name="user_type" value="Staff" required="">Staff
                        <input type="radio"  name="user_type" value="Guest" required="">Guest<br>
                    </div>

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Password</label>
                        <input type="password" class="form-control" value="<?php echo set_value('pass'); ?>" name="pass" pattern="[A-Za-z]+{/}+{ }" placeholder="Password" required="" >
                        <?php if(form_error('pass')):?>
                            <div class="alert alert-danger"role="alert" align="center"> <?php echo form_error('pass')?>  </div>
                         <?php endif; ?>
                    </div>

            

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Confirm Password</label>
                        <input type="password" class="form-control" value="<?php echo set_value('confpass'); ?>"  name="confpass"  pattern="[A-Za-z]+{ }" placeholder="Confirm password" required="" >
                        <?php if(form_error('confpass')):?>
                            <div class="alert alert-danger"role="alert" align="center"> <?php echo form_error('confpass')?>  </div>
                         <?php endif; ?>
                    </div>


                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">First Name</label>
                        <input type="text" class="form-control"  name="fname" pattern="[A-Za-z]+{ }" placeholder="First name" required="" title="Can only accept characters">
                    </div>
                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Last Name</label>
                        <input type="text" class="form-control"  name="lname" pattern="[A-Za-z]+{ }" placeholder="Last name" required="" title="Can only accept characters">
                    </div>
                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Birthdate</label>
                        <input type="date" class="form-control" name="bdate" placeholder="YYYY-MM-DD" required="">
                    </div>
                        
                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Age</label>
                        <input type="number" min='1' max='100' class="form-control"  name="age" pattern="[A-Za-z]+{ }" placeholder="age" required="">
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Address</label>
                        <textarea class="form-control"  name="address" pattern="[A-Za-z]+{ }" placeholder="Address" required=""></textarea>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Contact Number</label>
                        <input type="tel" class="form-control"  name="contact_num" pattern="[A-Za-z]+{ }" placeholder="Contact Number" required="">
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Occupation</label><br>
                        <input type="radio"  name="occupation" value="Student" required="">Employed
                        <input type="radio"  name="occupation" value="Student" required="">Student
                        <input type="radio"  name="occupation" value="Researcher" required="">Researcher<br>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">School</label>
                        <textarea class="form-control"  name="school" pattern="[A-Za-z]+{ }" placeholder="School" required=""></textarea>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Purpose</label>
                        <textarea class="form-control"  name="purpose" pattern="[A-Za-z]+{ }" placeholder="Purpose of register" required=""></textarea>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Topic of Research</label>
                        <textarea class="form-control"  name="topic" pattern="[A-Za-z]+{ }" placeholder="Optional" ></textarea>
                    </div>
      

              
                      <p align="right">
                         <input type="submit" class="btn btn-success" ></input>
                     </p>

                       <span id="confirmMessage" class="confirmMessage"></span>
                   <?php if($this->session->flashdata('message2')) : ?>
                    <div class="alert alert-success" role="alert" align="center">
                    <p style="color:green;"><?=$this->session->flashdata('message2')?></p>
                    </div>
                    <?php endif; ?>

  <?php echo form_close(); ?>
  </div>
</div>

 
                  
                  
             
          </div>
        </div>
      </div>
    </section>

    <!-- <footer id="footer" style="background: #0e3c00 none repeat scroll 0% 0%">
      <p>Copyright USC Museum, &copy; 2017</p>
      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>                 

    </footer> -->

  
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
