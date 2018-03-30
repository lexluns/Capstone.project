<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Staff Area | Profile</title>
           <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
      <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
  </head>

  <style>

  #header {
    background:white;
    color:black;
    padding-bottom: 0px;
    margin-bottom: 0px;
    position: relative; /* dont forget */
    z-index: 100; /* dont forget */
  }

  /* NAVBAR PROFILE */ /* NAVBAR PROFILE */ /* NAVBAR PROFILE */ /* NAVBAR PROFILE */ /* NAVBAR PROFILE */
  /* NAVBAR PROFILE *//* NAVBAR PROFILE *//* NAVBAR PROFILE *//* NAVBAR PROFILE *//* NAVBAR PROFILE */
  /* NAVBAR PROFILE *//* NAVBAR PROFILE *//* NAVBAR PROFILE *//* NAVBAR PROFILE *//* NAVBAR PROFILE */

#primary_nav_wrap
{
  margin-top:15px;
}

#primary_nav_wrap ul
{
  list-style:none;
  position:relative;
  float:left;
  margin:0;
  padding:0;

}


#primary_nav_wrap ul a
{
  display:block;
  /*color:#333;*/
  color:black;
  text-decoration:none;
  /*font-weight:700;*/
  font-size:15px;
  line-height:40px;
  padding:0 10px;
  letter-spacing: 1px;
  font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;
  padding-left: -5px;
}

#primary_nav_wrap ul li
{
  position:relative;
  float:left;
  margin:0;
  padding:0;
  /*padding-right: 15px;*/
  padding-left: 13px;
  
}

/*#primary_nav_wrap ul li.current-menu-item
{
  background:#ddd
}*/

#primary_nav_wrap ul li:hover
{
  /*background:#f6f6f6;*/
  background: #F5F5F5;
}

#primary_nav_wrap ul ul
{
  display:none;
  position:absolute;
  top:100%;
  left:0;
  background:#fff;
  padding:0;
  
}

#primary_nav_wrap ul ul li
{
  float:none;
  width:180px;
}

/*#primary_nav_wrap ul ul a
{
  line-height:120%;
  padding:8px 12px;
}
*/

#primary_nav_wrap ul ul ul
{
  top:0;
  left:100%;
}

#primary_nav_wrap ul li:hover > ul
{
  display:block;
}

#guestProfilepc {
  width: 40px; 
  height: 40px; 
  /*border: 2px solid green; */
  margin-top: 4.5px;
  /*background-color: transparent;
  border: 2px solid green;*/
  margin-left: -20px;
}

/* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END */
/* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END */
/* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END *//* END */ /* END */



  .navbar {
    min-height: 33px !important;
    margin-bottom:20px;
    border-radius:0;
    border-top: 4px solid orange;
    border-bottom: 0;
  }

  #nohover {
    color: white;
  }

  #redhover:hover {
    color: red;
  }

  .navbar-default .navbar-collapse, .navbar-default .navbar-form{
    border-color: orange;
  }

  .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
    background-color: green;
  }

  .navbar-default .navbar-toggle{
    border-color: orange;
  }

  .active1{
    background-color: orange;
  }

  #space {
    letter-spacing: 1px;
  }

  #rightside {
    float: right;
  }

  .avatar {
      width: 160px;
      height: 160px;
  }

 
  </style>

  <body>

      <!-- HEADER -->
  <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <a href="<?php echo base_url();?>index.php/staff_Home" style="text-decoration: none;"><img src="<?php echo base_url();?>assets/images/final.jpg" width = "350px" height = "70px" style="margin-bottom: -15px;">&nbsp;</a> 
          </div>
              <div class="col-md-2 col-sm-6 col-md-offset-8">
            
            <nav id="primary_nav_wrap">
              <ul>


              <li id="specific"><a href="#"><img src="<?php echo  $this->session->userdata('pic'); ?>" id="guestProfilepc" class="avatar img-circle" alt="avatar"> <?php echo $this->session->userdata('fname');?> <span class="caret"></span><a>

                <ul>
                  <li><a href="<?php echo base_url(); ?>index.php/staff_profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                  <li><a href="<?php echo base_url();?>index.php/staff_Home/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                </ul>
              <li>

            </ul>
           </nav>
         

            </div>




        </div>
      </div>
    </header>
        <!-- HEADER -->


        <!-- NAVBAR -->
        <nav class="navbar navbar-default" id="profileLine">
          <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>index.php/staff_Home">Museum Overview</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/staff_Events">Events</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/staff_Gallery">Collections</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/staff_Schedule">Schedule</a></li>
                <li  class=""><a href="<?php echo base_url(); ?>index.php/staff_resource">Learning Resources</a></li>
                
              </ul>
            
            </div>
          </div>
        </nav>
        <!-- NAVBAR --> 


        <!-- ALERT -->
        <!-- <div class="container-fluid">
            <div class="alert alert-success" role="alert"><strong id="space">University of San Carlos - Museum | " Scientia - Virtus - Devotio "</strong>
            </div>
          </div> -->
          <!-- ALERT -->



          <!-- SECTION LIST-->
          <section id="main">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                  <div class="list-group">
                    <!-- 1 -->
                    <a href="<?php echo base_url(); ?>index.php/staff_Home" class="list-group-item">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview <span class="badge"></span>
                        </a>
                        <!-- 2 -->
                        <a href="<?php echo base_url(); ?>index.php/staff_Events" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span>
                        </a>
                        <!-- 3 -->
                        <a href="<?php echo base_url(); ?>index.php/staff_Gallery" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span>
                        </a>
                        <!-- 4 -->
                        <a href="<?php echo base_url(); ?>index.php/staff_Schedule" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span>
                        </a>
                        <!-- 5 -->
                        <a href="<?php echo base_url(); ?>index.php/staff_resource" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span>
                        </a>

                              
                        <!-- 6 -->
                        
      
                        <!-- 8 -->
                        <!-- <a href="<?php echo base_url(); ?>index.php/staff_Profile" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile <span class="badge"></span>
                        </a> -->
                        <!-- END -->
                  </div><!-- LIST -->
                </div><!-- COL-MD-3 -->
                  <div class="col-md-9">
                    <div class="panel panel-default">
                      <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Profile Information</h3>
                      </div><!-- PANEL HEADING -->
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

                          <div class="row">
                            <div class="col-md-12">
                              <!-- <div class="alert alert-info alert-dismissible" role="alert" id="hide">
                                      <strong><i class="glyphicon glyphicon-fire"></i> This is an alert!</strong> Use this to show important messages to the user.
                                    </div> --><!-- ALERT -->
                                      <div class="row">
                                        <div class="col-md-5">
                                          <div class="text-center">
                                            <?php foreach($staff_info->result() as $row) { ?>
                                            <img src="<?php echo $row->user_dp;?>" class="avatar img-circle" alt="avatar">
                                              <strong><h3><?php echo $row->user_fname;?>&nbsp;<?php echo $row->user_lname;?></h3></strong> 
                                              <span class="label label-primary">&nbsp;S T A F F&nbsp;</span>
                                              <hr>
                                              <?php echo form_open_multipart('staff_Profile/upload_profile_image'); ?>
                                              <form>
                                                <div class="form-group">
                                                  <input type="hidden" class="form-control" name="User_id" value="<?php echo $row->User_id; ?>">
                                                  <input type="file" class="form-control" name="user_dp" value="">
                                                </div>
                                                <div class="form-group">
                                                  <input type="submit" class="btn btn-success btn-sm" style="float:left;" value="Upload Image">
                                                </div>
                                                <br>
                                              </form>
                                              <?php form_close(); ?>
                                             
                                          </div><!-- TEXT CENTER -->
                                          <br>
                                            <!-- CHANGE PASS -->
                                              <?php $attrib = array('class' => 'form-horizontal');
                                              echo form_open_multipart('staff_Profile/changePassword',$attrib); ?>
                                            <form class="form-horizontal">
                                                                 <div class="form-group">
                       <input type="hidden" class="form-control" name="User_id" value="<?php echo $row->User_id;?>">
                        <label for="inputPassword" class="col-sm-5 control-label">Old Password:</label>
                          <div class="col-sm-7">
                            <input type="password" class="form-control" name="oldpass" value="" required>
                          </div>
                      </div>
                                                  <div class="form-group">
                                                    <label for="newpassword" class="col-sm-5 control-label">New Password:
                                                    </label>
                                                      <div class="col-sm-7">
                                                        <input type="password" class="form-control" name="npass" value="" required>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="repassword" class="col-sm-5 control-label">Re-Type Password:
                                                    </label>
                                                      <div class="col-sm-7">
                                                        <input type="password" class="form-control" name="rpass" value="" required>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <div class="col-sm-offset-5 col-sm-7">
                                                        <input type="submit" class="btn btn-success btn-sm" value="Change Password">
                                                    </div>
                                                  </div><!-- FORM GroUP -->
                                            </form><!-- FORM END -->
                                           <?php form_close(); ?>
                                            <!-- CHANGE PASS -->  
                                        </div><!-- COL MD 5 -->

                                          <!-- INFO -->
                                        <div class="col-md-7"><br>
                                          
                                          <?php $attrib = array('class' => 'form-horizontal'); 
                                          echo form_open_multipart('staff_Profile/InfoSubmit',$attrib); ?>
                                          <!-- <form class="form-horizontal" role="form"> -->
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-sm-3 control-label">First Name:</label>
                                                  <div class="col-sm-9">
                                                    <input type="hidden" class="form-control" name="User_id" value="<?php echo $row->User_id;?>" >
                                                    <input type="text" class="form-control" name="user_fname" value="<?php echo $row->user_fname;?>" style="text-transform: capitalize;">
                                                  </div>
                                            </div>
                                            <!-- <div class="form-group">
                                              <label class="col-sm-3 control-label">Middle Name:</label>
                                                <div class="col-sm-9">
                                                  <input class="form-control" type="text" name="user_mname" value="<?php echo $row->user_mname;?>">
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                              <label class="col-sm-3 control-label">Last name:</label>
                                                <div class="col-sm-9">
                                                  <input class="form-control" type="text" name="user_lname" value="<?php echo $row->user_lname;?>" style="text-transform: capitalize;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-3 control-label">Address:</label>
                                                <div class="col-sm-9">
                                                <input class="form-control" type="text" name="address" value="<?php echo $row->address;?>">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                              <label class="col-sm-3 control-label">Institution:</label>
                                                <div class="col-sm-9">
                                                <input class="form-control" type="text" name="school" value="<?php echo $row->school;?>" style="text-transform: capitalize;">
                                                </div>
                                              </div>
                                            <div class="form-group">
                                              <label class="col-sm-3 control-label">Occupation:</label>
                                                <div class="col-sm-9">
                                                <input class="form-control" type="text" name="occupation" value="<?php echo $row->occupation;?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-3 control-label">Date of Birth:</label>
                                                <div class="col-sm-9">
                                                  <input class="form-control" type="date" name="bdate" value="<?php echo $row->user_bdate;?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-3 control-label">Age:</label>
                                                <div class="col-sm-9">
                                                  <input class="form-control" type="text" name="age" value="<?php echo $row->age;?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-sm-3 control-label">Contact No:</label>
                                                <div class="col-sm-9">
                                                  <input class="form-control" type="text" name="contact_num" value="<?php echo $row->contact_num;?>">
                                                </div>
                                            </div>
                                         <div class="form-group">
                                              <div class="col-sm-offset-3 col-sm-9">
                                                  <input type="submit" class="btn btn-success btn-sm" value="Edit Information">
                                              </div>
                                            </div>  
                                    <!-- </form> --><!-- FORM END INFO -->
                                          <?= form_close(); ?>
                                          <?php } ?>   
                                        </div><!-- COL MD 7 -->
                                      </div><!-- ROW -->
                            </div><!-- COL MD 12 -->
                          </div><!-- ROW -->
                        </div><!-- PANEL BODY -->
                    </div><!-- PANEL-->
                  </div><!-- COL-MD-9 -->
              </div><!-- ROW -->
            </div><!-- CONTAINER FLUID -->
          </section><!-- SECTION END -->


  </body>


    <footer id="footer">
      
    </footer>

      <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script>

</html>