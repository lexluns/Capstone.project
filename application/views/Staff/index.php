<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Area | Museum</title>
         <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>userassets/css/bootstrap.css"> -->
                       <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet">  
    <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
    <!-- <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script> -->
  </head>

  <style>

#header {
  background-color: white;
  color: black;
  margin-bottom: 0;
  position: relative;
  z-index: 100;
}

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
           

  .indexImg {
    width: 80px;
    height: 80px;
  }
  
/*@media (min-width: 768px){
.navbar-right {
    float: right!important;
    margin-right: -15px;
}
}



@media (min-width: 768px){
.navbar-header {
    float: left;
}
}


@media (min-width: 768px){
.navbar-nav {
    float: left;
    margin: 0;
}
}

@media (min-width: 768px){
.navbar-nav>li {
    float: left;
}
}
@media (min-width: 768px){
.navbar-nav {
    float: left;
    margin: 0;
}


}
*/
  </style>

  <body>
  <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <a href="<?php echo base_url();?>index.php/staff_Home" style="text-decoration: none;"><img src="<?php echo base_url();?>assets/images/final.jpg" width = "350px" height = "70px" style="margin-bottom: -25px;">&nbsp;</a> 
          </div>
              <div class="col-md-2 col-sm-6 col-md-offset-8">
            
            <nav id="primary_nav_wrap">
              <ul>


              <li id="specific"><a href="#"><img src="<?php echo  $this->session->userdata('pic'); ?>" id="guestProfilepc" class="avatar img-circle" alt="avatar">&nbsp;<?php echo $this->session->userdata('fname');?> <span class="caret"></span><a>

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
            <li  class="active"><a href="<?php echo base_url(); ?>index.php/staff_Home">Museum Overview</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staff_Events">Events</a></li>
            <li ><a href="<?php echo base_url(); ?>index.php/staff_Gallery">Collections</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staff_Schedule">Schedule</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staff_resource">Learning Resources</a></li>
            
          </ul>
        
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo base_url(); ?>index.php/staff_Home" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/staff_Events" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/staff_Gallery" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/staff_Schedule" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/staff_resource" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span></a>
               
            </div>


              <!-- <div class="well">
                <h4>Disk Space Used</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                </div>
              </div>
              <h4>Bandwidth Used </h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                      40%
              </div>
            </div>
              </div> -->

          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
              <!-- Latest Logs -->

            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Activity Overview</h3>
              </div>
 <div class="panel-body">
                                <div class="col-md-3">
                  <div class="well dash-box">
          <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $disp->num_rows();?></h2>
                    <h4>Users</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $dispitems->num_rows();?></h2>
                    <h4>Items</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <?php echo $dispres->num_rows();?></h2>
                    <h4>Learning Resources</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><?php echo $dispevents->num_rows();?></h2>
                    <h4>Events</h4>
                  </div>
                </div>

              </div>
              </div>

          </div>
        </div>
      </div>
    </section>


    <footer>

    </footer>

    <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script>
  </body>
</html>
