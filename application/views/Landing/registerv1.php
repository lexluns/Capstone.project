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
  <script>
document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
</script>
  <style>
@import url('https://fonts.googleapis.com/css?family=Raleway');
@import url('https://fonts.googleapis.com/css?family=Shadows into Light');
@import url('https://fonts.googleapis.com/css?family=Avenir');
@import url('https://fonts.googleapis.com/css?family=Oswald');
@import url('https://fonts.googleapis.com/css?family=Lora');
@import url('https://fonts.googleapis.com/css?family=Fjalla One');

body {
      background: none;
      border-top: 3px solid orange;
}

button {
      margin-top: 50px;
} 

    .logoadmin {
      width: 510px;
      height: 170px;
      margin-top:-20px;   
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
  <body oncontextmenu="return false;">
<div class="eventmenu">
<br>
    <a href="<?php echo base_url(); ?>index.php/Home" align="right" style="color: #339933; margin: 1%;">← Back To Home</a>
</div> 

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"><img src="<?php echo base_url();?>assets/images/museum50.jpg" class="logoadmin"></h1>
            <p style="text-align: center; margin-bottom: 3%; font-size: 21px; color: #585858; font-family: Shadows into Light;">Where your curiosity ends and knowledge begins..</p>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container" style="margin-bottom:20px;">
        <div class="row">
          <div class="col-md-4 col-md-offset-2" style="margin-top: -60px;">

           
   
<?php
  $attrib = array ('id' => 'login');
  echo form_open('register/reg', $attrib);
  ?>
         
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Email Address</label>
                       
                        <input type="email" class="form-control" value="<?php echo set_value('eadd'); ?>" name="eadd"  placeholder="Johndoe@gmail.com" required = "">
                         <?php if(form_error('eadd')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('eadd')?>  </div>
                         <?php endif; ?>
                    </div>

                     

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Password</label>
                        <input type="password" class="form-control" value="<?php echo set_value('pass'); ?>" name="pass"  placeholder="Password" required=""  >
                        <?php if(form_error('pass')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('pass')?>  </div>
                         <?php endif; ?>
                    </div>

            

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Confirm Password</label>
                        <input type="password" class="form-control" value="<?php echo set_value('confpass'); ?>"  name="confpass" placeholder="Confirm password" required=""  >
                        <?php if(form_error('confpass')):?>
                          <br>
                            <div class="alert alert-danger"role="alert" align="center"> <?php echo form_error('confpass')?>  </div>
                         <?php endif; ?>
                    </div>


                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">First Name</label>
                        <input type="text" class="form-control"  name="fname" pattern=".*\S+." placeholder="First name"  title="Can only accept characters" style="text-transform: capitalize;" required="">
                         <?php if(form_error('fname')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('fname')?>  </div>
                         <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Last Name</label>
                        <input type="text" class="form-control"  name="lname" pattern=".*\S+." placeholder="Last name"  title="Can only accept characters" style="text-transform: capitalize;" required="">
                        <?php if(form_error('lname')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('lname')?>  </div>
                         <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Birthdate</label>
                        <input type="date" class="form-control" name="bdate" placeholder="YYYY-MM-DD" required="" >
                        <?php if(form_error('bdate')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('bdate')?>  </div>
                         <?php endif; ?>
                    </div>
                        
                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Age</label>
                        <input max='100' class="form-control" min="10" max="99" size="6" type="number" name="age" placeholder="age" required="" >
                        <?php if(form_error('age')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('age')?>  </div>
                         <?php endif; ?>
                    </div>

            </div>

            <div class="col-md-4" style="margin-top: -30px;">


                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Address</label>
                        <input class="form-control"  name="address" pattern=".*\S+." placeholder="Address" required="" >
                        <?php if(form_error('address')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('address')?>  </div>
                         <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Contact Number</label>
                        <input type="tel" class="form-control"  name="contact_num" pattern="^\d{4}\d{3}\d{4}$" placeholder="Contact Number" required="" >
                        <?php if(form_error('address')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('address')?>  </div>
                         <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Occupation</label><br>
                        <input type="radio"  name="occupation" value="Employed"  checked>&nbsp;Employed&nbsp;
                        <input type="radio"  name="occupation" value="Student" >&nbsp;Student&nbsp;
                        <input type="radio"  name="occupation" value="Researcher" >&nbsp;Researcher<br>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Institution</label>
                        <input class="form-control"  name="school" pattern=".*\S+." placeholder="Institution" required="" >
                        <?php if(form_error('school')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('school')?>  </div>
                         <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Purpose</label>
                        <input class="form-control"  name="purpose" pattern=".*\S+." placeholder="Purpose of register" required="" >
                        <?php if(form_error('purpose')):?>
                          <br>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('purpose')?>  </div>
                         <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Topic of Research</label>
                        <textarea class="form-control" rows="2" name="topic" pattern=".*\S+." placeholder="Optional" ></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input type="checkbox"  name="terms" value="" required>&nbsp;<strong>*</strong><span style="font-size:11px;">By signing up, you agree to our <a href="" data-toggle="modal" data-target="#terms">Terms of Agreement and Privacy Policy</a> and to receive emails, newsletters and updates.</span>
                    </div>

              
                      <p align="right">
                         <input type="submit" class="btn btn-success" style="padding-right: 40px; padding-left: 40px; margin-top: -10px; letter-spacing: 1px;">
                     </p>


              </div>       
                       

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


<div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="myTerms">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myTerms">Terms and Agreement</h4>
      </div>
      <div class="modal-body">
        <p style="font-size: 14px; margin-bottom: 10px;">If you are registering as a guest in our website, then by your action you agree and accept that we may collect information such as your name, age, and other contact details that you give when you register or sign in to our website. We use your information, both personal and anonymous to: </p><br> 
        <i><p>1. Provide a service or product you have requested.</p> 
        <p>2. Communicate with you.</p>
        <p>3. Improve existing experiences, services and products or to create new ones.</p> 
        <p>4. Measure the effectiveness of our digital marketing.</p></i> 
      </div>
    </div>     
  </div>
</div>

    <!-- <footer id="footer" style="background: #0e3c00 none repeat scroll 0% 0%">
      <p>Copyright USC Museum, &copy; 2017</p>
      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>                 

    </footer> -->

  
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
