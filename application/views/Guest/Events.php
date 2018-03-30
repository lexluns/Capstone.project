<?php include'navbar.php'; ?>

<style>
.viewHead{
  color: #4682b4; 
  font-size: 30px; 
  font-family: Raleway;
  text-align: center;
}  
.viewdeets{
  font-size: 15px;
  font-family: Raleway;
  text-align: center;
}
.event-summary{
    font-family: 'Muli', sans-serif;
    width: 100%;
    height: 500px;
}

background-image{
    -webkit-filter: blur(10px);
  -moz-filter: blur(10px);
  -o-filter: blur(10px);
  -ms-filter: blur(10px);
  filter: blur(10px);
}

  .nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    /*background-color: #ffd689; light*/
    border-color: #337ab7;
    background-color: #fbb738;
  }

.dropdown-menu > li > a {  
    font-size: 18px;
}

    @media (max-width: 767px) {

      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {

      color: orange;    

      }
    }
</style>

<body>
<div class="modal fade" id="viewEvent" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content" style="padding: 2%;">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  

    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
      <li><a data-toggle="tab" href="#tab2">Event Photo</a></li>
    </ul>

    <div class="modal-body" id="modalBody">
    <div class="contain">

<div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">

  </div>

  <div id="tab2" class="tab-pane fade">

  </div>
</div>
              

</div>
</div>

</div>
</div>
</div>

<div class="wrapper" style="padding: 2%;">



<h1 style="font-family: Montserrat; font-weight: bold;">Featured Events</h1> 

<div class="eventmenu" style="float: right;">
<a href="<?php echo base_url(); ?>index.php/guest_allevents" align="right" style="color: #339933;">View All Events →</a>
</div>
<br><br>


<div>
<div>

<?php if($results->num_rows() > 0) : ?>

<?php foreach ($results->result() as $data_item){ ?>
  <?php if($data_item->event_label == 'Featured'){ ?>
    <div class="event-summary" style="background-image: url(<?php echo $data_item->event_photo;?>); background-repeat:no-repeat; background-size: cover;">
    <br><br><br><br><br><br>
        <div class="event-info">
            
        <h2 class="event-title"><?php echo $data_item->event_name;?></h2>
        <div class="event-subtitle"><?php echo $data_item->event_subname;?></div>
        <div class="event-description" style="text-overflow: ellipsis; width: 100%; overflow: hidden; white-space: nowrap;"><?php echo $data_item->event_desc;?><br><a href="#" id="viewbtn" data-toggle="modal" data-event_id="<?php echo "$data_item->event_id";?>" data-event_photo="<?php echo "$data_item->event_photo";?>" data-event_name="<?php echo "$data_item->event_name";?>" data-event_subname="<?php echo "$data_item->event_subname";?>" data-event_desc="<?php echo "$data_item->event_desc";?>" data-event_start="<?php echo "$data_item->event_start";?>" data-event_end="<?php echo "$data_item->event_end";?>" data-event_tags="<?php echo "$data_item->event_tags";?>" data-target="#viewEvent">See more</a></div>

        <div class="event-menus">
            <ul class="event-meta-menu">
                <li class="event-meta-submenu-item">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                    <?php echo $data_item->event_start;?>
                </li>
                <li class="event-meta-submenu-item">
                    <?php echo $data_item->event_tags;?>
                </li>

            </ul>
         </div>

        </div>

    </div>

     <br><br>
</div>

<?php } ?>
<?php } ?>

<?php else : ?>

      <center>
         <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    Featured Events not set</h2>
                <div class="error-details">
                    Sorry, there may be no featured events yet please contact the administrator for details.
                </div>
            </div>
            </div>
</center>     
<?php endif; ?> 

<center>
<?php echo $links; ?>
</center>
</div>
</div>
<script>
  $(document).on('click','#viewbtn',function(e){
      var event_id = $(this).data('event_id')
      var event_name = $(this).data('event_name')
      var event_subname = $(this).data('event_subname')
      var event_desc = $(this).data('event_desc')
      var event_start = $(this).data('event_start')
      var event_end =  $(this).data('event_end')
      var event_tags = $(this).data('event_tags')
      var event_photo = $(this).data('event_photo')


      var output =  '<center><p class="viewHead"><b>' + event_name + '</b></p>' +
                    '<p class="viewdeets"><b>' + event_subname + '</b></p><br>' +
                    '<p class="viewdeets"><b>Description</b><br>' + event_desc + '</p></center><br>' +
                    '<center><p class="viewdeets" style="color: #A9A9A9;"><b><span class="glyphicon glyphicon-calendar"></span>&nbsp' + event_start + '</b>&nbsp &nbsp' +
                    '<b>' + event_tags + '</b></p><center>'

      var output2 = '<center><img src="' + event_photo + '" height="80%" width="80%"></center>'
            
        $('#tab1').html(output)

        $('#tab2').html(output2)

   });

</script>

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
</html>