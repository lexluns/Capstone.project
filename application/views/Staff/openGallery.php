<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Area | Gallery</title>
         <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>userassets/css/jquery-ui.css" type="text/css" media="all" />  
    <link rel="stylesheet" href="<?php echo base_url();?>userassets/css/ui.css" type="text/css" media="all" />
    <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>userassets/js/jquery-ui.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script> 
    <script type="text/javascript">
     var jQuery_3_2_1 = $.noConflict(true);
    </script>
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
           

  .indexImg {
    width: 80px;
    height: 80px;
  }
.zui-pager--center {
  text-align: center;
}
.zui-pager--right {
  text-align: right;
}
.zui-pager .btn-group {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: inline-block;
}
.zui-pager .btn-group__item {
  display: inline-block;
  margin: 0;
  padding: 0;
  height: 40px;
  float: left;
}
.zui-pager .btn-group__item .btn {
  margin: 0;
  padding: .5em 1em;
  border: 0;
  font-weight: 300;
  background-color: transparent;
  color: #bbb;
}

.zui-pager .btn-group__item .current {
  color: #739600;
  font-weight: bold;
}

.zui-pager .btn[disabled]:hover {
  box-shadow: inset 0px -2px 0px 0px #e6e6e6;
  cursor: default;
}
.zui-pager__input {
  display: inline-block;
  vertical-align: top;
  margin-left: 10px;
}
.zui-pager__input > input {
  width: 2em;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 0;
  line-height: 1;
}
.zui-pager .i-chevron-left,
.zui-pager .i-chevron-right {
  margin: 15px;
  border-style: solid;
  border-color: #3a3a3a;
  width: 6px;
  height: 6px;
  display: block;
  cursor: pointer;
}
.zui-pager .i-chevron-left {
  border-width: 1px 0 0 1px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.zui-pager .i-chevron-right {
  border-width: 1px 1px 0 0;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.i-caret-down {
  border-width: 3px;
  border-style: solid;
  border-color: black transparent transparent transparent;
  position: absolute;
  top: 18px;
  right: 3px;
}

.small .btn {
  position: relative;
  box-shadow: 0 0 0 transparent !important;
  padding-right: 20px !important;
  padding-left: 5px !important;
}
.small span:nth-of-type(1) {
  font-weight: bold;
  color: #739600;
}
.small span:nth-of-type(2) {
  margin: 0 5px;
}
.small .select-overlay {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
}
.img-portfolio {
    margin-bottom: 30px;

}

@media(max-width:767px) {
    .img-portfolio {
        margin-bottom: 15px;
    }

}

    .ui-menu {  
                list-style:none;  
                padding: 2px;  
                margin: 0;  
                display:block;  
            }  
            .ui-menu .ui-menu {  
                margin-top: -3px;  
            }  
            .ui-menu .ui-menu-item {  
                margin:0;  
                padding: 0;  
                zoom: 1;  
                float: left;  
                clear: left;  
                width: 100%;  
                font-size:80%;  
            }  
            .ui-menu .ui-menu-item a {  
                text-decoration:none;  
                display:block;  
                padding:.2em .4em;  
                line-height:1.5;  
                zoom:1;  
            }  
            .ui-menu .ui-menu-item a.ui-state-hover,  
            .ui-menu .ui-menu-item a.ui-state-active {  
                font-weight: normal;  
                margin: -1px;  
            }  
      .customimage{
      width: 300px;
      height: 180px;
      } 
   @media (max-width: 767px) {

      .customimage{
      width: 100%;
      height: 100%;
      }   
      }    

         @media (max-width: 600px) {

      .customimage{
      width: 100%;
      height: 100%;
      }   
      }    

       @media (max-width: 1000px) {

      .customimage{
      width: 100%;
      height: 100%;
      }   
      }    
 
  .error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
 

.content {
  -webkit-box-flex: auto;
  -ms-flex: auto;
  flex: auto; 
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: auto;
  overflow: hidden;
}

.content .content-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
  height: 99%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content:hover .content-overlay{
  opacity: 1;
}

.content-image{
  max-height: 100%;
  max-width: 100%;

}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content-details p{
  color: #fff;
  font-size: 0.8em;
}

.fadeIn-bottom{
  top: 80%;
}

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
            <li><a href="<?php echo base_url(); ?>index.php/staff_Home">Museum Overview</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staff_Events">Events</a></li>
            <li  class="active"><a href="<?php echo base_url(); ?>index.php/staff_Gallery">Collections</a></li>
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
              <a href="<?php echo base_url(); ?>index.php/staff_Home" class="list-group-item ">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/staff_Events" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/staff_Gallery" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>
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
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Gallery Overview</h3>
              </div>
              <div class="panel-body">




                <div class="row">
                  

                      <div class="container" style="width: 100%;">

                                              <?php if($this->session->flashdata('success')) : ?>
                          <div class="alert alert-success">
                           <center><?=$this->session->flashdata('success')?></center>
                            </div>  
                          <?php endif; ?>

                             <?php if($this->session->flashdata('delete')) : ?>
                          <div class="alert alert-success">
                           <center><?=$this->session->flashdata('delete')?></center>
                            </div>  
                              <?php endif; ?>


                                                      <?php if($this->session->flashdata('error')) : ?>
                          <div class="alert alert-danger">
                           <center><?=$this->session->flashdata('error')?></center>
                            </div>  
                          <?php endif; ?>

     <a  href="<?php echo base_url(); ?>index.php/staff_register_artifact" style ="text-decoration:none; color: white;"> <button class="btn btn-success" type="button" style="margin-bottom: 10px;" title="Add Artifact">
          <span class="glyphicon glyphicon-plus"></span></button></a>
           <div class="row">




          <div class="col-md-3">
                <?php 
                echo form_open_multipart ('staff_Gallery/search');?>
                   <div id="custom-search-input">
                            <div class="input-group"  style="width: 100%;" >
   <input type="text" class="search-query form-control" id="id_input" name="search" placeholder="Search Name" />
                                       
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>  
                        </div>
 


              
                 <?php echo form_close(); ?>
                    
                  
          </div>

          <div class="col-md-1" >
           <?php if($this->session->flashdata('cancelbutt')) : ?>
                  <a href="<?php echo site_url('staff_Gallery/cancelsearch');?>">
                  <?=$this->session->flashdata('cancelbutt')?>
                  </a>
            <?php endif; ?>
          </div>

        </div>

                   
                          <?php if($this->session->flashdata('Results')) : ?>
                             <br>
                    <div style="color: #808080; font-family: arial,sans-serif;">
                    &nbsp
                           About <?=$this->session->flashdata('Results')?> Result(s)
                            </div>  
                          <?php endif; ?>
                  










<!--View-->

  <?php if($results->num_rows() > 0) : ?>
 <?php
              //Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
          <div class="row" style="margin-top: 10px;  ">
           <?php foreach($results->result() as $img) : ?>
         <div style="margin-top: 10px; padding: 0;" class="col-md-<?php echo $bootstrapColWidth; ?>">
                  
                  <a href="<?php echo site_url('staff_Gallery/view/'.$img->arti_id);?>" style="text-decoration:none; background-position: center;"  >
                  <div class="content" >
                  <div class="content-overlay"></div>
                  <div class="eventdp"  style="width: 100%; height: 300px;background-image: url('<?php echo $img->arti_img1 ?>'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " ></div>
                  <div class="content-details fadeIn-bottom">
                  <h3 class="content-title"><?php echo $img->name_obj;?></h3>
                  <p class="content-text" style="text-align: center;">
                  &nbsp <?php echo $img->acc_number;?>
                  </p></a></div></div>
                  
                 </div>  
                 
     
              <?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) 
      echo '</div><div class="row">';
      ?>
      <?php endforeach; ?>  
        </div>
       

     <?php else : ?>
      <center>
         <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    Data not found</h2>
                <div class="error-details">
                    Sorry, there may be no data yet or the requested data is incorrect
                </div>
            </div>
       </center>     
      <?php endif; ?> 
             

             
      

             
      
   









<center>

<?php echo $links; ?>


</center>

              </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      
    </footer>

        <script type="text/javascript">  
        $(this).ready( function() {  
            $("#id_input").autocomplete({  
 
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "<?php echo base_url(); ?>index.php/staff_Gallery/lookup",  
                        dataType: 'json',  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){  
                                add(data.message);  
                                console.log(data);    
                            }  
                        },  
                    });  
                },  
                     
            });  
        });  
        </script>
 

  </body>
</html>
