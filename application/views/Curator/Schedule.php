<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Schedule</title>
    <!-- Bootstrap core CSS -->
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>userassets/js/fullcalendar/fullcalendar.min.css" />
    <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/fullcalendar/gcal.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script>

<!--     <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script> -->
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


input[type=checkbox]{
  height: 0;
  width: 0;
  visibility: hidden;
}

.labelforswitch {
  cursor: pointer;
  text-indent: -9999px;
  width: 40px;
  height: 20px;
  background: grey;
  display: block;
  border-radius: 100px;
  position: relative;
}

.labelforswitch:after {
  content: '';
  position: absolute;
  top: 4px;
  left: 5px;
  width: 13px;
  height: 13px;
  background: #fff;
  border-radius:20px;
  transition: 0.25s;
}

input:checked + .labelforswitch {
  background: #da6455;
}

input:checked + .labelforswitch:after {
  left: calc(100% - 5px);
  transform: translateX(-100%);
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
     
  body{
  background:#f4f4f4;
}

/* Navbar */


.navbar-nav > li > a, .navbar-brand{
  padding-top:6px !important;
  padding-bottom:0 !important;
  height: 33px;
}

.navbar-default {
  background-color: #0e3c00;

}
.navbar-default .navbar-brand {
  color: #ecf0f1;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: orange;
}
.navbar-default .navbar-text {
  color: white;
}
.navbar-default .navbar-nav > li > a {
  color: white;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: orange;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: white;
  background-color: orange;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #ffbbbc;
  background-color: #c0392b;
}
.navbar-default .navbar-toggle {
  border-color: white;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: white;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ecf0f1;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ecf0f1;
}
.navbar-default .navbar-link {
  color: #ecf0f1;
}
.navbar-default .navbar-link:hover {
  color: #ffbbbc;
}

/* Custom */
.main-color-bg{
  background-color: #0e3c00 !important;
  /*border-color: #c0392b !important;*/
  color:#ffffff !important;
}



#header .create{
  padding-top: 20px;
}

/* Breadcrumb */
.breadcrumb{
  background:#cccccc;
  color:#333333;
}

.breadcrumb a{
  color:#333333;
}

/* Progress Bars */
.progress-bar{
  background:#333333;
  color:#ffffff;
}

.dash-box{
  text-align:center;
}

#login{
  margin-top:30px;
}

/* Footer */
footer{
  background:#333333;
  color:#ffffff;
  text-align:center;
  width: 100%;
  height: 100%;
}


@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ecf0f1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffbbbc;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffbbbc;
    background-color: #c0392b;
  }
}


    .indexImg {
    width: 80px;
    height: 80px;
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
  </style>
  <body>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("curator_Schedule/add_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Task Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" required>
                </div>
        </div>
       <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form_datetime" name="start_date" readonly required>
                </div>
        </div>

        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form_datetime" name="end_date" readonly required>
                </div>
        </div>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Notes</label>
                <div class="col-md-8 ui-front">
                    <textarea class="form-control" name="description" rows="4"></textarea>
                </div>
      </div><br><br><br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add Event">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
</div>





<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
      </div>
      <div class="modal-body">

      <?php echo form_open(site_url("curator_Schedule/edit_event"), array("class" => "form-horizontal")) ?>
    
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Task Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="name" required>
        </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form_datetime" name="start_date" id="start_date" required>
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form_datetime" name="end_date" id="end_date" required>
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Notes</label>
                <div class="col-md-8 ui-front">
                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                </div>
        </div>

        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Added By:</label>
                <div class="col-md-8 ui-front">
                <p id="logname"></p>
                </div>
        </div>
      <!--   DELETE -->

        <!-- <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading" style="margin-top: 20px;">Delete Event</label>
                    <div class="col-md-8">
                                <input type="checkbox" id="switch"  value="1" name="delete" />
                                <label for="switch" class="labelforswitch"></label>
                    </div>
            </div> -->

         <!-- END OF DELETE -->

            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <!--   <a href="#" class="DelTaskButton">Delete</a> -->
        <input type="submit" class="btn btn-primary" value="Update Event">

        <?php echo form_close() ?>
        
      </div>
    </div>
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

    <nav class="navbar navbar-default"  >
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
            <li ><a href="<?php echo base_url(); ?>index.php/curator_Gallery">Collections</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>index.php/curator_Schedule">Schedule</a></li>
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

              <a href="<?php echo base_url(); ?>index.php/curator_Home" class="list-group-item ">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/curator_Events" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Gallery" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Schedule" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_resource" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span></a>
            <a href="<?php echo base_url(); ?>index.php/curator_User" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> User Accounts <span class="badge"></span></a>
             
            </div>

          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Schedule</h3>
              </div>
              <div class="panel-body">
                
                         <?php if(form_error('name')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('name')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('start_date')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('start_date')?>  </div>
                         <?php endif; ?>

                         <?php if(form_error('end_date')):?>
                            <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('end_date')?>  </div>
                         <?php endif; ?>

                    <div class="container-fluid">
          

                      <div id="calendar">
                        <script type="text/javascript">
                            $(document).ready(function() {

                                var date_last_clicked = null;

                            $('#calendar').fullCalendar({
                        eventSources: [
                     {
                        events: function(start, end, timezone, callback) {
                             $.ajax({
                            url: "<?php echo base_url(); ?>index.php/curator_Schedule/get_events",
                            dataType: 'json',
                            data: {
                            start: start.unix(),
                            end: end.unix()
                             },
                            success: function(msg) {
                                 var events = msg.events;
                                callback(events);
                              }
                              });
                          }
                      },
                  ],
                  dayClick: function(date, jsEvent, view) {
                // date_last_clicked = $(this);
                // $(this).css('background-color', '#bed7f3');
                $('#addModal').modal();
            },
              eventClick: function(event, jsEvent, view) {
                    $('#name').val(event.title);
                    $('#description').val(event.description);
                    $('#start_date').val(moment(event.start).format('YYYY-MM-DD HH:mm'));
                    $data = event.logname;
                    document.getElementById("logname").innerHTML = $data;
                    if(event.end) {
                      $('#end_date').val(moment(event.end).format('YYYY-MM-DD HH:mm'));
                    } else {
                      $('#end_date').val(moment(event.start).format('YYYY-MM-DD HH:mm'));
                    }
                    $('#event_id').val(event.id);
                    $('#editModal').modal();
            },
          });
                            });
          
                        </script>
                    </div>
                    </div>
          








              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
  <script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>
</body>

</html>
