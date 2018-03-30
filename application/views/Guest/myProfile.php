<?php include'navbar.php'; ?>
<html>

<style>

/*.navbar-nav > li {

    padding-left: 0;
    padding-right: 0;
    margin: 0 8px 0 8px;
    letter-spacing: 1px;
}*/

.dropdown-menu > li > a {

    display: block;
    padding-top: 15px;
    padding-right: 0px;
    padding-bottom: 15px;
    padding-left: 10px;
    clear: both;
    font-size: 19px;
    line-height: 0px;
    font-weight: normal;
    white-space: nowrap;
    color: black;
}


#spaceTop {
  margin-top: 20px;
}

#guestProfile {
  width: 180px;
  height: 180px;
}

.nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    /*background-color: #ffd689; light*/
    border-color: #337ab7;
    background-color: #fbb738;
  }

  .dropdown-menu > li > a {
    
    font-size: 18px;

  }

  /*@media (max-width: 900px){
    .navbar-nav {
      
    }

  }*/
    
    @media (max-width: 767px) {
      
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        text-align: center;
        font-size: 16px;
        margin-left: -80px;
        letter-spacing: 1px;
      }
    }

    @media (max-width: 767px) {

      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {

      color: orange;    

      }
    }


</style>

<body  style="background-color: #eaeaea;">


  <div class="wrapper">
    <div class="container">
     
            </div>
              <div class="panel-body">
                   <?php if($this->session->flashdata('error')) : ?>
                          <div class="alert alert-danger">
                           <center><?=$this->session->flashdata('error')?></center>
                            </div>  
                          <?php endif; ?>

                             <?php if($this->session->flashdata('success')) : ?>
                          <div class="alert alert-success">
                           <center><?=$this->session->flashdata('success')?></center>
                            </div>  
                          <?php endif; ?>

                 <div class="col-md-12" >
                 <div class="row">
                   <div class="col-md-6">
                    <div class="text-center">
                      <!-- <?php foreach($guest_info->result() as $row) { ?> -->
                      <img src="<?php echo $row->user_dp;?>" id="guestProfile" class="avatar img-circle" alt="avatar">                     
                      <strong><h3 style="color:black;"><?php echo $row->user_fname;?>&nbsp;<?php echo $row->user_lname;?></h3></strong>
                    
                      <span class="label label-success" id="textSpacing">&nbsp;G U E S T&nbsp;</span>
                      <hr>


                    </div>

                    
                    <?php $attrib = array('class' => 'form-horizontal'); 
                    echo form_open_multipart('guest_profile/upload_profile_image',$attrib); ?> 
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="ProfileImage" class="col-sm-4 control-label">Profile Image:</label>
                          <div class="col-sm-8">
                            <input type="hidden" class="form-control" name="User_id" value="<?php echo $row->User_id; ?>">
                            <input type="file" class="form-control" name="user_dp" value="" required="">
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <input type="submit" class="btn btn-success btn-sm" value="Upload Image">
                        </div>
                      </div>
                      <hr>
                    </form>
                    <?php form_close(); ?>  
                   
                  
                   <?php $attrib = array('class' => 'form-horizontal');
                     echo form_open_multipart('guest_profile/changePassword',$attrib); ?>
                    <form>
                     <input type="hidden" class="form-control" name="User_id" value="<?php echo $row->User_id;?>">
                     <div class="form-group">
                        <label for="inputPassword" class="col-sm-4 control-label">Old Password:</label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control" name="oldpass" value="" required>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="col-sm-4 control-label">New Password:</label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control" name="npass" value="" required>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="col-sm-4 control-label">Re-Type Password:</label>
                          <div class="col-sm-8">
                            <input type="password" class="form-control" name="rpass" value="" required>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <input type="submit" class="btn btn-success btn-sm" value="Change Password">
                        </div>
                      </div>
                    </div>
                  </form>
                 <?php form_close(); ?>



                    <div class="col-md-6" >
                     
                    <?php $attrib = array('class' => 'form-horizontal',); 
                    echo form_open_multipart('guest_profile/InfoSubmit',$attrib); ?>                
                        <form name="myForm" onsubmit="return validateForm()" method="post">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">First Name:</label>
                          <div class="col-sm-9">
                            <input type="hidden" class="form-control" name="User_id" value="<?php echo $row->User_id;?>">
   
   <input type="text" pattern=".*\S+." class="form-control" name="user_fname" id="user_fname" value="<?php echo $row->user_fname;?>" required style="text-transform: capitalize;">
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="col-sm-3 control-label">Last name:</label>
                            <div class="col-sm-9">
     <input class="form-control" pattern=".*\S+." style="text-transform: capitalize;"    type="text" name="user_lname" value="<?php echo $row->user_lname;?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Address:</label>
                            <div class="col-sm-9">
                            <input class="form-control" pattern=".*\S+."   type="text" name="address" value="<?php echo $row->address;?>" required>
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="col-sm-3 control-label">Institution:</label>
                            <div class="col-sm-9">
                            <input class="form-control" pattern=".*\S+."  type="text" name="school" value="<?php echo $row->school;?>" required>
                            </div>
                          </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Occupation:</label>
                            <div class="col-sm-9">
                            <input class="form-control" pattern=".*\S+." type="text" name="occupation" value="<?php echo $row->occupation;?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Date of Birth:</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="date" name="bdate" value="<?php echo $row->user_bdate;?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Age:</label>
                            <div class="col-sm-9">
                              <input class="form-control" min="10" max="99" size="6" type="number" name="age" value="<?php echo $row->age;?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Contact No:</label>
                            <div class="col-sm-9">
        <input class="form-control" type="tel" pattern="^\d{4}\d{3}\d{4}$" name="contact_num" value="<?php echo $row->contact_num;?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-3 col-sm-9">
                          <input type="submit" class="btn btn-success btn-sm" value="Edit Information"></input>
                          </div>
                        </div>
                      </form>
                    </div>
                  <?= form_close(); ?>
                    <?php } ?>
                 </div>
               </div>
              </div>
        
      </div>
    </div>
  </div>

<footer style="background: #0e3c00 none repeat scroll 0% 0%; margin-top: 60px;">

  <div class="row">
    <div class="col-md-6" style="margin-top: 5px;">
    <!-- <h5 style="color: orange; letter-spacing: 1px; font-weight: bold;"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp;&nbsp;>CONTACT US</h5> -->
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp;P. del Rosario Street, Cebu City Philippines 6000</p>
      <p style="text-align: center; letter-spacing: 3px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+63(32)253-1000</p>
      <p style="text-align: center; letter-spacing: 2px;"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>&nbsp;&nbsp;usc.museum@gmail.com</p>
    </div>
    <div class="col-md-6" style="margin-top:5px;">
      <!-- <h5><i class="fa fa-phone" aria-hidden="true"></i> SOCIAL MEDIA</h5> -->
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-facebook-official" aria-hidden="true"></i> www.facebook.com/uscmuseum</p>
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-instagram" aria-hidden="true"></i> www.instagram.com/uscmuseum</p>
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-twitter" aria-hidden="true"></i> www.twitter.com/uscmuseum</p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <br>
        <p style="text-align: center; letter-spacing: 1px; color: orange;">2018 &copy; University of San Carlos - Museum</p>
      </div>
    </div>
  </div>

</footer>



</body>
<!-- 39 57 1 20 40 22-->
</html>
<!-- <script>
  $(document).ready(function(){

      $('#showEdit').hide();

  });

</script> -->

