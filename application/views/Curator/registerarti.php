<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Register Item</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
    <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/script.js"></script>
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

  	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
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
   

/*body {
    font: 12px 'Open Sans';
}
*/
.form-control, .thumbnail {
    border-radius: 2px;
}
.btn-danger {
    background-color: #B73333;
}

/* File Upload */
.fake-shadow {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.fileUpload {
    position: relative;
    overflow: hidden;
}

.fileUpload2 {
    position: relative;
    overflow: hidden;
}

.fileUpload3 {
    position: relative;
    overflow: hidden;
}


.fileUpload4 {
    position: relative;
    overflow: hidden;
}


.fileUpload #logo-id {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

.fileUpload #logo-id2 {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

.fileUpload #logo-id3 {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

.fileUpload #logo-id4 {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}



.onlythree{    
width: 50px;    
border: 0;    
}    


.img-preview {
    max-width: 100%;
}

.img-preview2 {
    max-width: 100%;
}

.img-preview3 {
    max-width: 100%;
}

.img-preview4 {
    max-width: 100%;
}




    .indexImg {
    width: 80px;
    height: 80px;
  }
   a:hover >.glyphicon-arrow-left{
  color: orange;

}


  </style>

  <body>
   <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <a href="<?php echo base_url();?>index.php/curator_Home" style="text-decoration: none;"><img src="<?php echo base_url();?>assets/images/final.jpg" width = "350px" height = "70px" style="margin-bottom: -25px;">&nbsp;</a> 
          </div>
              <div class="col-md-2 col-sm-6 col-md-offset-8">
            
            <nav id="primary_nav_wrap">
              <ul>


              <li id="specific"><a href="#"><img src="<?php echo  $this->session->userdata('pic'); ?>" id="guestProfilepc" class="avatar img-circle" alt="avatar">&nbsp;<?php echo $this->session->userdata('fname');?> <span class="caret"></span><a>

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
            <li class="active"><a href="<?php echo base_url(); ?>index.php/curator_Gallery">Collections</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_Schedule">Schedule</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_resource">Learning Resources</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_User">User Accounts</a></li>
          </ul>
         
        </div>
      </div>
    </nav>



    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo base_url(); ?>index.php/curator_Home" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/curator_Events" class="list-group-item "><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Gallery" class="list-group-item  active main-color-bg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Schedule" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_resource" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_User" class="list-group-item "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> User Accounts <span class="badge"></span></a>
             
            </div>

          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                                  <div class="row">
                    <div class="col-sm-1" style="margin-top: 5px; width: 3%; "><a href="<?php echo base_url(); ?>index.php/curator_Gallery" style = "text-decoration-color: none; color: white;"><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px; " title="Back to gallery"></span></a></div>
                    <div class="col-sm-3"  style="margin-top:7px;" >
                 <h3 class="panel-title">Register Item</h3>
                 </div>
 
                    </div>
              </div>
      <div class="panel-body">
              


                 <?php if($this->session->flashdata('error')) : ?>
                   <div class="alert alert-danger" role="alert" align="center">
                  <?=$this->session->flashdata('error')?>
                     </div>
                <?php endif; ?>



                 <?php
                echo form_open_multipart ('curator_register_artifact/addarti');?>

        
                <div class="row">


                      <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px;">Accession number or catalogue number </label>
 <input type="text" style="width: 40%;"  id="accnumber" required="" class="form-control" onblur="check_if_exists();" name="accnumber"> <p id="msg"> </p>
                    </div>
                     <?php if(form_error('accnumber')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('accnumber')?>  </div>
                         <?php endif; ?>

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Classification</label>
                        <input type="text"   class="form-control" name="classify" required="">
                    </div>

                                         <?php if(form_error('classify')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('classify')?>  </div>
                         <?php endif; ?>

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Name of object or Species</label>
                        <input type="text"   class="form-control" name="nameobj" required="">
                    </div>

                                         <?php if(form_error('nameobj')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('nameobj')?>  </div>
                         <?php endif; ?>



                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Name of artist, or Class, Order, Family, Genus</label>
                        <input type="text"    class="form-control" name="nameartist" required="">
                    </div>

                                         <?php if(form_error('nameartist')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('nameartist')?>  </div>
                         <?php endif; ?>


                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Material(s)</label>
                        <input type="text" class="form-control"   name="material" required="">
                    </div>


                                         <?php if(form_error('material')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('material')?>  </div>
                         <?php endif; ?>


                   <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Date of acquisition</label>
                        <input type="date" class="form-control"  name="dateacq" required="">
                  </div>


                                       <?php if(form_error('dateacq')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('dateacq')?>  </div>
                         <?php endif; ?>





                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Institution</label>
                        <input type="text"  class="form-control" name="institution" required="">
                    </div>

                                         <?php if(form_error('institution')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('institution')?>  </div>
                         <?php endif; ?>

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Ownership</label>
                        <input type="text"  class="form-control" name="ownership" required="">
                    </div>

                                         <?php if(form_error('ownership')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('ownership')?>  </div>
                         <?php endif; ?>

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Location in Museum</label>
                        <input type="text"   class="form-control" name="location" required="">
                    </div>

                                         <?php if(form_error('location')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('location')?>  </div>
                         <?php endif; ?>

                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Place of origin</label>
                        <input type="text"  class="form-control" name="origin" required="">
                    </div>

                                         <?php if(form_error('origin')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('origin')?>  </div>
                         <?php endif; ?>
                    
                  </div>
                <div class="col-md-4">


                <div class="form-group">
              <label class="control-label" style="font-size: 13px">Price paid, Estimated value(dated) </label>
                          <div class="input-group"> 
        <span class="input-group-addon">₱</span>
        <input type="text" name="price" autocomplete="off" class="form-control numberOnly" required="" />
    </div> 
                  </div>

                                       <?php if(form_error('price')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('price')?>  </div>
                         <?php endif; ?>



                  <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Collector, Expedition</label>
                        <input type="text" class="form-control"  name="collector" required="">
                  </div>

                                       <?php if(form_error('price')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('price')?>  </div>
                         <?php endif; ?>

                 <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Cultural or Ethnic group</label>
                        <input type="text" class="form-control"   name="culture" required="">
                  </div>

                                       <?php if(form_error('culture')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('culture')?>  </div>
                         <?php endif; ?>


                 <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Function, Use, Utilisation</label>
                        <input type="text" class="form-control"   name="function" required="">
                  </div>


                                       <?php if(form_error('function')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('function')?>  </div>
                         <?php endif; ?>

                  <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Chronology, Doubtful attribution</label>
                        <input type="text"   class="form-control" name="chronology" required="">
                  </div>


                                       <?php if(form_error('chronology')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('chronology')?>  </div>
                         <?php endif; ?>



                  <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Style, School, Influences </label>
                        <input type="text"   class="form-control" name="style" required="">
                  </div>


                                       <?php if(form_error('style')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('style')?>  </div>
                         <?php endif; ?>



                  <div class="form-group">
                        <label class="control-label" style="font-size: 13px">History</label>
                        <input type="text"   class="form-control" name="history" required="">
                  </div>


                                       <?php if(form_error('history')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('history')?>  </div>
                         <?php endif; ?>

                  <div class="form-group">
                      <label class="control-label" style="font-size: 13px">References</label>
                      <input type="text"  class="form-control" name="reference" required="">
                  </div>


                                       <?php if(form_error('history')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('history')?>  </div>
                         <?php endif; ?>

                  <div class="form-group">
                      <label class="control-label" style="font-size: 13px">Dimension</label>
                      <input type="text"  class="form-control" name="dimensions" required="">
                  </div>

                                       <?php if(form_error('dimensions')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('dimensions')?>  </div>
                         <?php endif; ?>

             <div class="form-group">
                 <label >Restrictions for viewing</label>
                   <br><input type="radio" name="restri" value="restricted" checked=""> Restricted<br>
                   <input type="radio" name="restri" value="museum"> Museum<br>
                   <input type="radio" name="restri" value="public"> Public
            </div>

                                 <?php if(form_error('restri')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('restri')?>  </div>
                         <?php endif; ?>
          
              </div>

              <div class="col-md-4">
				                <div id="carousel-example-generic"  data-interval="false" class="carousel slide" data-ride="carousel">

				 
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <div class="box">
						<div class="form-group">
				              <div class="main-img-preview">
				                <img class="thumbnail img-preview" src="<?php echo base_url();?>assets/uploads/addpics.jpg" title="Preview Logo">
				              </div>
				              <div class="input-group">
				                <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
				                <div class="input-group-btn">
				                  <div class="fileUpload btn btn-success fake-shadow">
				                    <span><i class="glyphicon glyphicon-upload"></i> Upload Picture</span>
				                    <input id="logo-id" name="pic1" type="file" class="attachment_upload">
				                  </div>
				                </div>
				              </div>
				              <p class="help-block"  style="font: 12px 'Open Sans';">* For the 1st Slide</p>
				            </div>  
								      
				      </div>
				      
				    </div>
				    <div class="item">
				      <div class="box">
				        	<div class="form-group">
				              <div class="main-img-preview">
				                <img class="thumbnail img-preview2" src="<?php echo base_url();?>assets/uploads/addpics.jpg" title="Preview Logo">
				              </div>
				              <div class="input-group">
				                <input id="fakeUploadLogo2" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
				                <div class="input-group-btn">
				                  <div class="fileUpload btn btn-success fake-shadow">
				                    <span><i class="glyphicon glyphicon-upload"></i> Upload Picture</span>
				                    <input id="logo-id2" name="pic2" type="file" class="attachment_upload">
				                  </div>
				                </div>
				              </div>
				              <p class="help-block"  style="font: 12px 'Open Sans';">* For the 2nd Slide</p>
				            </div>  
				      </div>
				      
				    </div>
				    <div class="item">
				      <div class="box">
				         						<div class="form-group">
				              <div class="main-img-preview">
				                <img class="thumbnail img-preview3" src="<?php echo base_url();?>assets/uploads/addpics.jpg" title="Preview Logo">
				              </div>
				              <div class="input-group">
				                <input id="fakeUploadLogo3" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
				                <div class="input-group-btn">
				                  <div class="fileUpload btn btn-success fake-shadow">
				                    <span><i class="glyphicon glyphicon-upload"></i> Upload Picture</span>
				                    <input id="logo-id3" name="pic3" type="file" class="attachment_upload">
				                  </div>
				                </div>
				              </div>
				              <p class="help-block" style="font: 12px 'Open Sans';">* For the 3rd Slide</p>
				            </div>  
				      </div>
				      
				    </div>



                        <div class="item">
              <div class="box">
                            <div class="form-group">
                      <div class="main-img-preview">
                        <img class="thumbnail img-preview4" src="<?php echo base_url();?>assets/uploads/addpics.jpg" title="Preview Logo">
                      </div>
                      <div class="input-group">
                        <input id="fakeUploadLogo4" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                        <div class="input-group-btn">
                          <div class="fileUpload btn btn-success fake-shadow">
                            <span><i class="glyphicon glyphicon-upload"></i> Upload Picture</span>
                            <input id="logo-id4" name="pic4" type="file" class="attachment_upload">
                          </div>
                        </div>
                      </div>
                      <p class="help-block" style="font: 12px 'Open Sans';">* For the 4th Slide</p>
                    </div>  
              </div>
              
            </div>



				  </div>
				 
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="background-image:none; height: 72%;">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="background-image:none; height: 72%;">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>

              </div>





                     
              </div>

              <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Mode, Source & Place of acquisition</label>
                        <textarea type="text" class="form-control" style="width: 80%; height: 130px;"  name="mode" required="required"></textarea>
              </div>


                                       <?php if(form_error('mode')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('mode')?>  </div>
                         <?php endif; ?>

            <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Description, Techniques, Possible Title, Signature, Measurements</label>
                        <textarea type="text" class="form-control" style="width: 80%; height: 130px;"  name="descp" required="required"></textarea>
              </div>



                                       <?php if(form_error('descp')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('descp')?>  </div>
                         <?php endif; ?>

                          <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Conservation, Restoration, Museugraphical notes </label>
                        <textarea type="text" class="form-control" style="width: 80%; height: 130px;"  name="conserv" required="required"></textarea>
              </div>



                                       <?php if(form_error('conserv')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('conserv')?>  </div>
                         <?php endif; ?>






  

              <input type="submit" class="btn btn-success"  ></input>

  <?php echo form_close(); ?>


               
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>






    <footer id="footer">
      
    </footer>

    <script type="text/javascript">




          function check_if_exists() {

var accnumber = $("#accnumber").val();

$.ajax(
    {
        type:"post",
        url: "<?php echo base_url(); ?>index.php/curator_register_artifact/filename_exists",
        data:{ accnumber:accnumber},
        success:function(response)
        {
            if (response == true) 
            {
                $('#msg').html(' ');
            }
            else 
            {
                $('#msg').html('<span style="color:red;">Accession number already existed</span>');
            }  
        }
    });
}


$(document).ready(function() {
    var brand = document.getElementById('logo-id');
    var brand2 = document.getElementById('logo-id2');
    var brand3 = document.getElementById('logo-id3');
    var brand4 = document.getElementById('logo-id4');
    brand.className = 'attachment_upload';
    brand2.className = 'attachment_upload';
    brand3.className = 'attachment_upload';
    brand4.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

     brand2.onchange = function() {
        document.getElementById('fakeUploadLogo2').value = this.value.substring(12);
    };

        brand3.onchange = function() {
        document.getElementById('fakeUploadLogo3').value = this.value.substring(12);
    };

     brand4.onchange = function() {
        document.getElementById('fakeUploadLogo4').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

        function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview2').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }


    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview3').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }



        function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview4').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }





    $("#logo-id").change(function() {
        readURL(this);
    });
    $("#logo-id2").change(function() {
        readURL2(this);
    });
    $("#logo-id3").change(function() {
        readURL3(this);
    });
    $("#logo-id4").change(function() {
        readURL4(this);
    });


$('.numberOnly').on('keydown', function(e) {
  
  if (this.selectionStart || this.selectionStart == 0) {
  // selectionStart won't work in IE < 9
  
  var key = e.which;
  var prevDefault = true;
  
  var thouSep = ",";  // your seperator for thousands
  var deciSep = ".";  // your seperator for decimals
  var deciNumber = 2; // how many numbers after the comma
  
  var thouReg = new RegExp(thouSep,"g");
  var deciReg = new RegExp(deciSep,"g");
  
  function spaceCaretPos(val, cPos) {
    /// get the right caret position without the spaces
    
    if (cPos > 0 && val.substring((cPos-1),cPos) == thouSep)
      cPos = cPos-1;
    
    if (val.substring(0,cPos).indexOf(thouSep) >= 0) {
      cPos = cPos - val.substring(0,cPos).match(thouReg).length;
    }
    
    return cPos;
  }
  
  function spaceFormat(val, pos) {
    /// add spaces for thousands
    
    if (val.indexOf(deciSep) >= 0) {
      var comPos = val.indexOf(deciSep);
      var int = val.substring(0,comPos);
      var dec = val.substring(comPos);
    } else{
      var int = val;
      var dec = "";
    }
    var ret = [val, pos];
    
    if (int.length > 3) {
      
      var newInt = "";
      var spaceIndex = int.length;
      
      while (spaceIndex > 3) {
        spaceIndex = spaceIndex - 3;
        newInt = thouSep+int.substring(spaceIndex,spaceIndex+3)+newInt;
        if (pos > spaceIndex) pos++;
      }
      ret = [int.substring(0,spaceIndex) + newInt + dec, pos];
    }
    return ret;
  }
  
  $(this).on('keyup', function(ev) {
    
    if (ev.which == 8) {
      // reformat the thousands after backspace keyup
      
      var value = this.value;
      var caretPos = this.selectionStart;
      
      caretPos = spaceCaretPos(value, caretPos);
      value = value.replace(thouReg, '');
      
      var newValues = spaceFormat(value, caretPos);
      this.value = newValues[0];
      this.selectionStart = newValues[1];
      this.selectionEnd   = newValues[1];
    }
  });
  
  if ((e.ctrlKey && (key == 65 || key == 67 || key == 86 || key == 88 || key == 89 || key == 90)) ||
     (e.shiftKey && key == 9)) // You don't want to disable your shortcuts!
    prevDefault = false;
  
  if ((key < 37 || key > 40) && key != 8 && key != 9 && prevDefault) {
    e.preventDefault();
    
    if (!e.altKey && !e.shiftKey && !e.ctrlKey) {
    
      var value = this.value;
      if ((key > 95 && key < 106)||(key > 47 && key < 58) ||
        (deciNumber > 0 && (key == 110 || key == 188 || key == 190))) {
        
        var keys = { // reformat the keyCode
          48: 0, 49: 1, 50: 2, 51: 3,  52: 4,  53: 5,  54: 6,  55: 7,  56: 8,  57: 9,
          96: 0, 97: 1, 98: 2, 99: 3, 100: 4, 101: 5, 102: 6, 103: 7, 104: 8, 105: 9,
          110: deciSep, 188: deciSep, 190: deciSep
        };
        
        var caretPos = this.selectionStart;
        var caretEnd = this.selectionEnd;
        
        if (caretPos != caretEnd) // remove selected text
        value = value.substring(0,caretPos) + value.substring(caretEnd);
        
        caretPos = spaceCaretPos(value, caretPos);
        
        value = value.replace(thouReg, '');
        
        var before = value.substring(0,caretPos);
        var after = value.substring(caretPos);
        var newPos = caretPos+1;
        
        if (keys[key] == deciSep && value.indexOf(deciSep) >= 0) {
          if (before.indexOf(deciSep) >= 0) newPos--;
          before = before.replace(deciReg, '');
          after = after.replace(deciReg, '');
        }
        var newValue = before + keys[key] + after;
        
        if (newValue.substring(0,1) == deciSep) {
          newValue = "0"+newValue;
          newPos++;
        }
        
        while (newValue.length > 1 && newValue.substring(0,1) == "0" && newValue.substring(1,2) != deciSep) {
          newValue = newValue.substring(1);
          newPos--;
        }
        
        if (newValue.indexOf(deciSep) >= 0) {
          var newLength = newValue.indexOf(deciSep)+deciNumber+1;
          if (newValue.length > newLength) {
            newValue = newValue.substring(0,newLength);
          }
        }
        
        newValues = spaceFormat(newValue, newPos);
        
        this.value = newValues[0];
        this.selectionStart = newValues[1];
        this.selectionEnd   = newValues[1];
      }
    }
  }
  
  $(this).on('blur', function(e) {
    
    if (deciNumber > 0) {
      var value = this.value;
      
      var noDec = "";
      for (var i = 0; i < deciNumber; i++) noDec += "0";
      
      if (value == "0" + deciSep + noDec) {
        this.value = ""; //<-- put your default value here
      } else if(value.length > 0) {
        if (value.indexOf(deciSep) >= 0) {
          var newLength = value.indexOf(deciSep) + deciNumber + 1;
          if (value.length < newLength) {
            while (value.length < newLength) value = value + "0";
            this.value = value.substring(0,newLength);
          }
        }
        else this.value = value + deciSep + noDec;
      }
    }
  });
  }
});

});



    </script>

  </body>
</html>
