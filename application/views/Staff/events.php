<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff | Events</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url();?>userassets/js/sweetalert.min.js"></script>



  </head>

<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');
@import url(https://fonts.googleapis.com/css?family=Roboto);
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

.DeleteButton {
  -moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
  -webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
  box-shadow:inset 0px 1px 0px 0px #f29c93;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100));
  background:-moz-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
  background:-webkit-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
  background:-o-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
  background:-ms-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
  background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100',GradientType=0);
  background-color:#fe1a00;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
  border-radius:3px;
  border:1px solid #d83526;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:11px;
  padding:8px 15px;
  text-decoration:none;
  text-shadow:0px 1px 0px #b23e35;
}
.DeleteButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00));
  background:-moz-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
  background:-webkit-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
  background:-o-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
  background:-ms-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
  background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00',GradientType=0);
  background-color:#ce0100;
}
.DeleteButton:active {
  position:relative;
  top:1px;
}

.EditButton {
  -moz-box-shadow:inset 0px 1px 0px 0px #fce2c1;
  -webkit-box-shadow:inset 0px 1px 0px 0px #fce2c1;
  box-shadow:inset 0px 1px 0px 0px #fce2c1;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25));
  background:-moz-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-webkit-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-o-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-ms-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:linear-gradient(to bottom, #ffc477 5%, #fb9e25 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25',GradientType=0);
  background-color:#ffc477;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
  border-radius:3px;
  border:1px solid #eeb44f;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:11px;
  padding:8px 15px;
  text-decoration:none;
  text-shadow:0px 1px 0px #cc9f52;
}
.EditButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
  background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
  background-color:#fb9e25;
}
.EditButton:active {
  position:relative;
  top:1px;Edit
}
.AddButton {
  -moz-box-shadow:inset 0px 39px 0px -24px #3dc21b;
  -webkit-box-shadow:inset 0px 39px 0px -24px #3dc21b;
  box-shadow:inset 0px 39px 0px -24px #3dc21b;
  background-color:#44c767;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
  border-radius:4px;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:12px;
  padding:6px 15px;
  text-decoration:none;
  text-shadow:0px 1px 0px #2f6627;
}
.AddButton {
  -moz-box-shadow:inset 0px 39px 0px -24px #3dc21b;
  -webkit-box-shadow:inset 0px 39px 0px -24px #3dc21b;
  box-shadow:inset 0px 39px 0px -24px #3dc21b;
  background-color:#44c767;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
  border-radius:4px;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:12px;
  padding:6px 15px;
  text-decoration:none;
  text-shadow:0px 1px 0px #2f6627;
}
.AddButton:hover {
  background-color:#5cbf2a;
  text-decoration: none;
}
.AddButton:active {
  position:relative;
  top:1px;
}
.ViewButton {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
  background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
  background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
  background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
  background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
  background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
  background-color:#ffffff;
  -moz-border-radius:6px;
  -webkit-border-radius:6px;
  border-radius:6px;
  border:1px solid #dcdcdc;
  display:inline-block;
  cursor:pointer;
  color:#666666;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffffff;
}
.ViewButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
  background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
  background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
  background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
  background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
  background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
  background-color:#f6f6f6;
}
.DeetsButton {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
  background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
  background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
  background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
  background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
  background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
  background-color:#ededed;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
  border-radius:4px;
  border:1px solid #dcdcdc;
  display:inline-block;
  cursor:pointer;
  color:#777777;
  font-family:Arial;
  font-size:11px;
  font-weight:bold;
  padding:8px 18px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffffff;
}
.DeetsButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
  background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
  background-color:#dfdfdf;
}
.DeetsButton:active {
  position:relative;
  top:1px;
}
.ViewButton:active {
  position:relative;
  top:1px;
}      
.viewHead{
  color: #4682b4; 
  font-size: 30px; 
  font-family: Raleway;
}  
.viewdeets{
  font-size: 15px;
  font-family: Raleway;
}
.FeaturedButton {
  -moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
  -webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
  box-shadow:inset 0px 1px 0px 0px #97c4fe;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #3d94f6), color-stop(1, #1e62d0));
  background:-moz-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
  background:-webkit-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
  background:-o-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
  background:-ms-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
  background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0',GradientType=0);
  background-color:#3d94f6;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
  border-radius:3px;
  border:1px solid #337fed;
  display:inline-block;
  cursor:pointer;
  color: white;
  font-family:Arial;
  font-size:11px;
  padding:8px 15px;
  text-decoration:none;
  text-shadow:0px 1px 0px #1570cd;
}
.FeaturedButton:hover {
 background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #1e62d0), color-stop(1, #3d94f6));
  background:-moz-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
  background:-webkit-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
  background:-o-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
  background:-ms-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
  background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6',GradientType=0);
  background-color:#1e62d0;
}
.FeaturedButton:active {
  position:relative;
  top:1px;
}
.NotFeaturedButton {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
  background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
  background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
  background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
  background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
  background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
  background-color:#ededed;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
  border-radius:3px;
  border:1px solid #dcdcdc;
  display:inline-block;
  cursor:pointer;
  color: #777777;
  font-family:Arial;
  font-size:11px;
  padding:8px 15px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffffff;
}
.NotFeaturedButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
  background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
  background-color:#dfdfdf;
}
.NotFeaturedButton:active {
  position:relative;
  top:1px;
}
  </style>

<body>
<div class="modal fade" id="addarti" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Add Event</h3>
</div>
    <div class="modal-body">
      
              <div class="contain">



                <?php echo form_open_multipart ('staff_Events/addevents');?>
          
                    <div class="form-group">
                        <label >Event Display Photo</label>
                        <input type="file" class="form-control" name="eventdp" required>
                   </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Event Title</label>
                        <input type="text" class="form-control" name="etitle" pattern="[A-Za-z]+{ }" required title="Can only accept characters">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Tagline</label>
                        <input type="text" class="form-control" name="etagline" pattern="[A-Za-z]+{/}+{ }" required title="Can only accept characters" maxlength="200">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Description</label>
                        <textarea rows="4" class="form-control"  name="edescription"  pattern="[A-Za-z]+{ }" required title="Can only accept characters" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Date Start</label>
                        <input type="date" class="form-control"  name="estart"  pattern="[A-Za-z]+{ }" required title="Can only accept characters">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Date End</label>
                        <input type="date" class="form-control"  name="eend"  pattern="[A-Za-z]+{ }" required title="Can only accept characters">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Tags</label>
                        <input type="text" class="form-control"  name="etag"  pattern="[A-Za-z]+{ }"  title="Can only accept characters">
                    </div>
                    
                     <input type="submit" class="btn btn-success" ></input>

                <?php echo form_close(); ?>

</div>
</div>
</div>
</div>
</div>




<div class="modal fade" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Edit Event</h3>
</div>
    <div class="modal-body">
      
              <div class="contain">
          
                <?php echo form_open_multipart ('staff_Events/updateevents');?>

                    <div class="form-group">
                        <label>Event Display Photo</label>
                        <input type="file" name="event_photo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Event Title</label>
                        <input type="hidden" class="form-control" name="event_id" id="event_id">
                        <input type="text" class="form-control" name="event_name" id="event_name" pattern="[A-Za-z]+{ }" required title="Can only accept characters">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Tagline</label>
                        <input type="text" class="form-control" name="event_subname" id="event_subname" pattern="[A-Za-z]+{/}+{ }" required title="Can only accept characters" maxlength="200">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Description</label>
                        <textarea class="form-control"  name="event_desc" id="event_desc"  pattern="[A-Za-z]+{ }" required title="Can only accept characters" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Date Start</label>
                        <input type="date" class="form-control"  name="event_start" id="event_start"  pattern="[A-Za-z]+{ }" required title="Can only accept characters">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Date End</label>
                        <input type="date" class="form-control"  name="event_end" id="event_end"  pattern="[A-Za-z]+{ }" required title="Can only accept characters">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="font-size: 13px">Tags</label>
                        <input type="text" class="form-control"  name="event_tags" id="event_tags"  pattern="[A-Za-z]+{ }"  title="Can only accept characters">
                    </div>

                     <input type="submit" class="btn btn-success" ></input>

                  <?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div>



<div class="modal fade" id="viewEvent" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Event Details</h3>
</div>
    <div class="modal-body" id="modalBody">
    <div class="contain">

              

</div>
</div>
</div>
</div>
</div>


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
            <li class="active"><a href="<?php echo base_url(); ?>index.php/staff_Events">Events</a></li>
            <li ><a href="<?php echo base_url(); ?>index.php/staff_Gallery">Collections</a></li>
            <li ><a href="<?php echo base_url(); ?>index.php/staff_Schedule">Schedule</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staff_resource">Learning Resources</a></li>
                      
          </ul>
        </div>
      </div>
    </nav>
    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo base_url(); ?>index.php/staff_Home" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/staff_Events" class="list-group-item  active main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/staff_Gallery" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/staff_Schedule" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/staff_resource" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span></a>
                
            </div>

          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Event Management</h3>
              </div>
              <div class="panel-body">
                          
                        <?php if(form_error('event_name')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('event_name')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('event_subname')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('event_subname')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('event_desc')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('event_desc')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('event_start')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('event_start')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('event_end')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('event_end')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('event_tags')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('event_tags')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('event_dp')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('event_dp')?>  </div>
                         <?php endif; ?>

                         
                         <?php if(form_error('etitle')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('etitle')?>  </div>
                         <?php endif; ?>

                           <?php if(form_error('etagline')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('etagline')?>  </div>
                         <?php endif; ?>

                           <?php if(form_error('edescription')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('edescription')?>  </div>
                         <?php endif; ?>

                           <?php if(form_error('estart')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('estart')?>  </div>
                         <?php endif; ?>

                           <?php if(form_error('eend')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('eend')?>  </div>
                         <?php endif; ?>

                           <?php if(form_error('etag')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('etag')?>  </div>
                         <?php endif; ?>

                           <?php if(form_error('eventdp')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('eventdp')?>  </div>
                         <?php endif; ?>

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
             
                <a href="<?php echo base_url(); ?>index.php/staff_Events">
                <button type="button" class="ViewButton" title="List View">
                <span class="glyphicon glyphicon-th-list"></span>
                </button></a>
                <a href="<?php echo base_url(); ?>index.php/staff_Events2">
                <button type="button" class="ViewButton" title="Grid View">
                <span class="glyphicon glyphicon-th"></span>
                </button></a>
                <a href="#" class="AddButton" data-toggle="modal" data-target = "#addarti" style="float: right;">Add Event</a>

                <br><br>

                <div class="wrapper list"> 


             <!--  Event Table -->
              <div class="table-responsive">        
              <table class="table table-bordered table-hover" id="event-table" cellspacing="0" width="100%">
            
                      <thead>
                        <tr>
                          <th class="text-center" style="width:300px;">Name</th>
                          <th class="text-center" style="width:80px;">Photo</th>
                          <th class="text-center">Date</th>
                          <th class="text-center" style="width:200px;">Actions</th>
                        </tr>
                      </thead>
               


                 <tbody>
                    <?php foreach ($event as $data_item){ ?> 
                      <tr>
                       <td><p style="color: #4682b4; font-size: 20px; font-family: Raleway;"><b><?php echo $data_item->event_name;?></b></p></td>
                        <td><img class="eventdp"  style="width: 100px; height: 75px;" src="<?php echo $data_item->event_photo;?>"/></td>
                        <td class="text-center"><?php echo $data_item->event_start;?></td> 
                        <td><center><a href="#" class="DeetsButton" id="viewbtn" data-toggle="modal" data-event_id="<?php echo "$data_item->event_id";?>" data-event_name="<?php echo "$data_item->event_name";?>" data-event_subname="<?php echo "$data_item->event_subname";?>" data-event_desc="<?php echo "$data_item->event_desc";?>" data-event_start="<?php echo "$data_item->event_start";?>" data-event_end="<?php echo "$data_item->event_end";?>" data-event_tags="<?php echo "$data_item->event_tags";?>" data-target="#viewEvent">View</a>
                          <a href="#" onclick="editeventbtn('<?= $data_item->event_id?>','<?= $data_item->event_name?>', '<?= $data_item->event_subname?>', '<?= $data_item->event_desc?>', '<?= $data_item->event_start?>', '<?= $data_item->event_end?>', '<?= $data_item->event_tags?>')" class="EditButton" title="Edit"><span class="glyphicon glyphicon-pencil"></a>
                          <a onclick="deleteconfirm(<?php echo $data_item->event_id;?>);" class="DeleteButton"><span class="glyphicon glyphicon-trash" title="Delete"></a>

                          <?php if($data_item->event_label == 'Featured') : ?>
                          <a href="<?php echo site_url('staff_Events/unfeature/'.$data_item->event_id.$data_item->event_label);?>" class="FeaturedButton"><span class="glyphicon glyphicon-star" title="Unfeature"></span></a>
                          <?php else : ?>
                          <a href="<?php echo site_url('staff_Events/feature/'.$data_item->event_id.$data_item->event_label);?>" class="NotFeaturedButton"><span class="glyphicon glyphicon-star" title="Feature"></span></a>
                          <?php endif; ?>
                          </center>
                        </td>               
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
              </div>
            

             <!--  End of Event Table -->



               </div>
               </div>      
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
    <script src="<?php echo base_url();?>userassets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/dataTables.bootstrap.min.js"></script>

 <script>
    $(document).ready(function(){

      $('#event-table').dataTable();

    }); 

 $(document).on('click','#viewbtn',function(e){
      var event_id = $(this).data('event_id')
      var event_name = $(this).data('event_name')
      var event_subname = $(this).data('event_subname')
      var event_desc = $(this).data('event_desc')
      var event_start = $(this).data('event_start')
      var event_end =  $(this).data('event_end')
      var event_tags = $(this).data('event_tags')

      var output =  '<center><p class="viewHead"><b>' + event_name + '</b></p>' +
                    '<p class="viewdeets"><b>' + event_subname + '</b></p><br>' +
                    '<p class="viewdeets"><b>Description</b><br>' + event_desc + '</p></center><br>' +
                    '<center><p class="viewdeets" style="color: #A9A9A9;"><b><span class="glyphicon glyphicon-calendar"></span>&nbsp' + event_start + '</b>&nbsp &nbsp' +
                    '<b>' + event_tags + '</b></p><center>'
            
        $('#modalBody').html(output)

   })
    </script>
    
    <script>
        function editeventbtn(event_id,event_name,event_subname,event_desc,event_start,event_end,event_tags)
        {
          $("#editEvent").modal('show');
          $("#event_id").val(event_id);
          $("#event_name").val(event_name);
          $("#event_subname").val(event_subname);
          $("#event_desc").val(event_desc);
          $("#event_start").val(event_start);
          $("#event_end").val(event_end);
          $("#event_tags").val(event_tags);
        }

        function deleteconfirm(id){
  var url = "<?php echo base_url();?>";
        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
     window.location = url+"index.php/staff_events/deleteEvents/"+id;
  } else {
    return false;
    // swal("Your imaginary file is safe!");
  }
});
}
    </script>

</body>
</html>
