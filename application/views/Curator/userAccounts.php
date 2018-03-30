<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Accounts</title>
    <!-- Bootstrap core CSS -->
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>userassets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/style.css" rel="stylesheet">

          
    <script src="<?php echo base_url();?>userassets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/jquery.dataTables.min.js"></script>
     <script src="<?php echo base_url();?>userassets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script>

  </head>

    <style>
    
/* NAVBAR PROFILE */

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
  width:187px;
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

/* END */ /* END */
/* END */ /* END */
/* END */ /* END */

.indexImg {
    width: 80px;
    height: 80px;
  }

#header {
  background-color: white;
  color: black;
  margin-bottom: 0;
    position: relative;
  z-index: 100;
}
.navbar {
  min-height: 33px !important;
  margin-bottom:20px;
  border-radius:0;
  border-top: 4px solid orange;
  border-bottom: 0;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form{
  border-color: orange;
}

.navbar-default .navbar-toggle{
  border-color: white;
}

#space {
  letter-spacing: 1px;
}

  </style>

  <body>
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" >Create New Account</h4>
      </div>
      <div class="modal-body" id="addoutput" >
        
         <?php
  echo form_open_multipart('add_user/regmodal');
  ?>
         


                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Email Address</label>
                       
                        <input type="email" class="form-control" value="<?php echo set_value('eadd'); ?>" name="eadd" pattern="[A-Za-z]+{ }" placeholder="Johndoe@gmail.com" required="">
                         
                    </div>
                      <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">User Type</label><br>
                        <input type="radio"  name="user_type" value="Curator" checked >&nbsp;Curator&nbsp;
                        <input type="radio"  name="user_type" value="Staff" >&nbsp;Staff&nbsp; 
                        <input type="radio"  name="user_type" value="Guest" >&nbsp;Guest&nbsp;
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Password</label>
                        <input type="password" class="form-control" value="<?php echo set_value('pass'); ?>" name="pass" pattern="[A-Za-z]+{/}+{ }" placeholder="Password" required=""  >
                        
                    </div>
            

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Confirm Password</label>
                        <input type="password" class="form-control" value="<?php echo set_value('confpass'); ?>"  name="confpass"  pattern="[A-Za-z]+{ }" placeholder="Confirm password" required=""  >
                       
                    </div>  

                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">First Name</label>
                        <input type="text" class="form-control"  name="fname" pattern="[A-Za-z]+{ }" placeholder="First name"  title="Can only accept characters" style="text-transform: capitalize;" required="">
                    </div>
                    <div class="form-group">
                        <label  class="control-label" style="font-size: 13px">Last Name</label>
                        <input type="text" class="form-control"  name="lname" pattern="[A-Za-z]+{ }" placeholder="Last name"  title="Can only accept characters" style="text-transform: capitalize;" required="">
                    </div>
                   
              <!-- 
                      <p align="right">
                         <input type="submit" class="btn btn-success" ></input>
                     </p> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <input type="submit" class="btn btn-success" ></input>
      </div>
    </div>
          
  <?php echo form_close(); ?>  
  </div>
</div>

     <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <a href="<?php echo base_url();?>index.php/curator_Home" style="text-decoration: none;"><img src="<?php echo base_url();?>assets/images/final.jpg" width = "350px" height = "70px" style="margin-bottom: -25px;">&nbsp;</a> 
          </div>
              <div class="col-md-2 col-sm-6 col-md-offset-8">
            
            <nav id="primary_nav_wrap">
              <ul>


              <li id="specific"><a href="#"><img src="<?php echo  $this->session->userdata('pic'); ?>" id="guestProfilepc" class="avatar img-circle" alt="avatar"> <?php echo $this->session->userdata('fname');?> <span class="caret"></span><a>

                <ul>
                  <li><a href="<?php echo base_url(); ?>index.php/curator_profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                  <li><a href="<?php echo base_url();?>index.php/curator_Home/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                </ul>
              <li>

            </ul>
           </nav>
         

            </div>




        </div>
      </div>
    </header>

    <nav class="navbar navbar-default">
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
            <li><a href="<?php echo base_url(); ?>index.php/curator_Home">Museum Overview</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_Events">Events</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_Gallery">Collections</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_Schedule">Schedule</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_resource">Learning Resources</a></li>
            <li  class="active"><a href="<?php echo base_url(); ?>index.php/curator_User">User Accounts</a></li>
          </ul>
          
        </div>
      </div>
    </nav>


    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo base_url(); ?>index.php/curator_Home" class="list-group-item ">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/curator_Events" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Gallery" class="list-group-item "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Schedule" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_resource" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_User" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> User Accounts <span class="badge"></span></a>
            </div>

          </div>
              <div class="col-md-9">
                    
                        <div class="panel panel-default">
                          <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">User Accounts</h3>
                          </div>
                          <div class="panel-body">

                            <?php if(form_error('eadd')):?>
                            <div class="alert alert-danger"role="alert" align="center"> <?php echo form_error('eadd')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('pass')):?>
                            <div class="alert alert-danger"role="alert" align="center"> <?php echo form_error('pass')?>  </div>
                         <?php endif; ?>

                          <?php if(form_error('confpass')):?>
                            <div class="alert alert-danger"role="alert" align="center"> <?php echo form_error('confpass')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('fname')):?>
                            <div class="alert alert-danger"role="alert" align="center"> <?php echo form_error('fname')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('lname')):?>
                            <div class="alert alert-danger"role="alert" align="center"> <?php echo form_error('lname')?>  </div>
                         <?php endif; ?>




                           <button class="btn btn-success" data-toggle="modal" data-target="#addModal"  type='button'  style="margin-bottom:5px;">Add New User</button>
                            
                           <!-- error messages -->
                           <?php if($this->session->flashdata('success')) : ?>
                          <div class="alert alert-success" role="alert" align="center">
                          <p ><?=$this->session->flashdata('success')?></p>
                          </div>
                          <?php endif; ?>
<!-- 
                           <?php if($this->session->flashdata('msg3')) : ?>
                          <div class="alert alert-danger" role="alert" align="center">
                          <p ><?=$this->session->flashdata('msg3')?></p>
                          </div>
                          <?php endif; ?> -->

                          <?php if($this->session->flashdata('msg2')) : ?>
                          <div class="alert alert-danger" role="alert" align="center">
                          <p ><?=$this->session->flashdata('msg2')?></p>
                          </div>
                          <?php endif; ?>

                          <?php if($this->session->flashdata('msg1')) : ?>
                          <div class="alert alert-danger" role="alert" align="center">
                          <p ><?=$this->session->flashdata('msg1')?></p>
                          </div>
                          <?php endif; ?>

                           







                          <!-- errors end -->
                  
                           <br>
                           <br>
                           



                            <table class="table table-bordered table-hover" id="mytable" cellspacing="0" width="100%">

                             
                                    <thead>
                                      <tr>
                                      
                                        <th class="text-center">Last Name</th>
                                        <th class="text-center">First Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">User Type</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center" style="width:150px;">Actions</th>
                                       
                                      </tr>
                                    </thead>
                                  
                                      <tbody>
                                        <?php foreach($display as $eachdata){ ?>
                                          <tr>
                                          
                                            <td class="text-center"><?php echo $eachdata->user_lname;?></td>
                                            <td class="text-center"><?php echo $eachdata->user_fname;?></td>
                                            <td class="text-center"><?php echo $eachdata->uname;?></td>
                                            <td class="text-center"><?php echo $eachdata->user_type;?></td>
                                            <td class="text-center"><?php echo $eachdata->user_status;?></td>

                                            <td style="text-align: center;"> 
                                              <button class="btn btn-default" type="button"  data-toggle="modal" 
                                              data-id="<?php echo "$eachdata->User_id";?>"
                                              data-lname="<?php echo "$eachdata->user_lname";?>"
                                              data-fname="<?php echo "$eachdata->user_fname";?>"
                                              data-uname="<?php echo "$eachdata->uname";?>"
                                              data-utype="<?php echo "$eachdata->user_type";?>"
                                              data-status="<?php echo "$eachdata->user_status";?>"
                                              data-bdate="<?php echo "$eachdata->user_bdate";?>"
                                              data-age="<?php echo "$eachdata->age";?>"
                                              data-address="<?php echo "$eachdata->address";?>"
                                              data-contact="<?php echo "$eachdata->contact_num";?>"
                                              data-occupation="<?php echo "$eachdata->occupation";?>"
                                              data-school="<?php echo "$eachdata->school";?>"
                                              data-purpose="<?php echo "$eachdata->purpose";?>"
                                              data-topic="<?php echo "$eachdata->topic";?>"
                                              data-dp="<?php echo "<img src = $eachdata->user_dp height='200px' width='200px' align='right' class='avatar img-rounded'>";?>"



                                              data-target="#viewModal" id="viewbtn">View</button>  
      <?php if($eachdata->user_status == 'Active') : ?>
       <a  href="<?php echo site_url('curator_User/stats/'.$eachdata->User_id .$eachdata->user_status );?>" style ="text-decoration:none; color: white;"> <button class="btn btn-danger" type="button">
          Block</button></a>
         <?php else : ?>
       <a  href="<?php echo site_url('curator_User/statsactivate/'.$eachdata->User_id .$eachdata->user_status );?>" style ="text-decoration:none; color: white;"> <button class="btn btn-success" type="button">
          Unblock</button></a>
          <?php endif; ?>
          </td>

                              </div>
                           
                            
                          </div>
                          </div>

              </div>
        </div>
      </div>
    </section>

          <!-- start of modal -->

   <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLearning">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLearning">Account Details</h4>
      </div>
      <div class="modal-body" id="usermodal" >
     

          
      

    
              </div>
            </div>

           </tr>

                      
                      <?php } ?>
        </div>
    
          <!-- end of modal -->





    

   
  </body>
</html>

<script>


 


 $(document).ready(function(){ 

   $('#mytable').dataTable({
    "aLengthMenu": [[5, 10, 50, 70, -1], [5, 10, 50, 70, "All"]],
  });


   $(document).on('click','#viewbtn',function(e){
      var User_id = $(this).data('id')
      var uname = $(this).data('uname')
      var utype = $(this).data('utype')
      var lname = $(this).data('lname')
      var fname = $(this).data('fname')
      var status =  $(this).data('status')
      var bdate = $(this).data('bdate')
      var age = $(this).data('age')
      var address = $(this).data('address')
      var contact = $(this).data('contact')
      var occupation = $(this).data('occupation')
      var school = $(this).data('school')
      var purpose = $(this).data('purpose')
      var topic = $(this).data('topic')
      var dp = $(this).data('dp')

      var output =  '<p class="avatar img-rounded">' + dp + '</p>' +
                    '<p>User ID: ' + User_id + '</p>' +
                    '<p>Full Name: ' + fname + ' ' + lname + '</p>' +
                    '<p>User Type: ' + utype + '</p>' +
                    '<p>User Status: ' + status + '</p>' +
                    '<p>Birthdate: ' + bdate + '</p>' +
                    '<p>Age: ' + age + '</p>' + 
                    '<p>Address: ' + address + '</p>' +
                    '<p>Contact Number: ' + contact + '</p>' +
                    '<p>Occupation: ' + occupation + '</p>' +
                    '<p>School: ' + school + '</p>' +
                    '<p>Purpose: ' + purpose + '</p>' +
                    '<p>Topic: ' + topic + '</p>' 




        $('#usermodal').html(output)

   })

 
});


</script> 
