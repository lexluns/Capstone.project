<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Area | Resources</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/jquery-confirm.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/sweetalert.css" rel="stylesheet">
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
            <li class="active"><a href="<?php echo base_url(); ?>index.php/curator_Home">Museum Overview</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_Events"> Events</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_Gallery">Collections</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/curator_Schedule">Schedule</a></li>
            <li  ><a href="<?php echo base_url(); ?>index.php/curator_resource">Learning Resources</a></li>
            <li ><a href="<?php echo base_url(); ?>index.php/curator_User">User Accounts</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo base_url(); ?>index.php/curator_Home" class="list-group-item  active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/curator_Events" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Gallery" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Schedule" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_resource" class="list-group-item  "><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_User" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> User Accounts <span class="badge"></span></a>

            </div>

          </div>
          <div class="col-md-9">




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



























        
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Action Logs</h3>
              </div>
              <div class="panel-body">
            
          <div class="table-responsive">        
 <table class="table table-bordered table-hover" id="mytable" cellspacing="0" width="100%">
                <thead>
                  <tr>
                     <th class="text-center">Action</th>
                    <th class="text-center">Action by</th>
                    <th class="text-center">Name of affected</th>
                    <th class="text-center">Date of action</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($display as $eachdata) { ?>
                        <tr>
                         <td class="text-center"><?php echo $eachdata->Action;?></td>
                        <td class="text-center"><?php echo $eachdata->Action_by;?></td>
                        <td class="text-center"><?php echo $eachdata->Name_item;?></td>
                        <td class="text-center"><?php echo $eachdata->Action_time;?></td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
          </div>
      </div>


    </div>
  </div>


















</div>
</section>
  
    <br><br><br>
    <footer id="footer">
      
    </footer>

































<!-- END -->   

  </body>
</html>

<script type="text/javascript">
 $(document).ready(function(){ 

   $('#mytable').dataTable({
    "aLengthMenu": [[5, 10, 50, 70, -1], [5, 10, 50, 70, "All"]],
  });




  $('#viewModal').on('show.bs.modal', function(e) {
      var Userid = $(e.relatedTarget).data('id');
      $(e.currentTarget).find('input[name="User_id"]').val(Userid);

      var lname = $(e.relatedTarget).data('lname-id');
      $(e.currentTarget).find('input[name="user_lname"]').val(lname);

       var fname = $(e.relatedTarget).data('fname-id');
      $(e.currentTarget).find('input[name="user_fname"]').val(fname);

       var uname = $(e.relatedTarget).data('uname-id');
      $(e.currentTarget).find('input[name="uname"]').val(uname);

       var user_type = $(e.relatedTarget).data('utype-id');
      $(e.currentTarget).find('input[name="user_type"]').val(user_type);


  });

 
});

</script> 
