<?php include'navbar.php'; ?>
<style type="text/css">

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
<body >


<div class="wrapper" style="padding: 2%;">
<h1 style="font-family: Montserrat; font-weight: bold;">Collections</h1>


   <div class="row">
     


      <?php
              //Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
         
         <div style="margin-top: 10px; padding: 0;" class="col-md-<?php echo $bootstrapColWidth; ?>">
                  
                  <a href="<?php echo base_url(); ?>index.php/landing_artifact_1" style="text-decoration:none; background-position: center;"  >
                  <div class="content" >
                  <div class="content-overlay"></div>
                  <div class="eventdp"  style="width: 100%; height: 300px;background-image: url('<?php echo base_url();?>assets/images/2_collect.jpeg'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " ></div>
                  <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Figurine (anthropomorphic)</h3>
                  <p class="content-text" style="text-align: center;">
                  &nbsp 74.8.8
                  </p></a></div></div>
                  
                 </div>  



      <?php
              //Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
         
         <div style="margin-top: 10px; padding: 0;" class="col-md-<?php echo $bootstrapColWidth; ?>">
                  
                  <a href="<?php echo base_url(); ?>index.php/landing_artifact_2" style="text-decoration:none; background-position: center;"  >
                  <div class="content" >
                  <div class="content-overlay"></div>
                  <div class="eventdp"  style="width: 100%; height: 300px;background-image: url('<?php echo base_url();?>assets/images/3_collect.jpeg'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " ></div>
                  <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Kristong Nakuyapan (Fainted Christ)</h3>
                  <p class="content-text" style="text-align: center;">
                  &nbsp 
                  </p></a></div></div>
                  
                 </div> 




      <?php
              //Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
         
         <div style="margin-top: 10px; padding: 0;" class="col-md-<?php echo $bootstrapColWidth; ?>">
                  
                  <a href="<?php echo base_url(); ?>index.php/landing_artifact_3" style="text-decoration:none; background-position: center;"  >
                  <div class="content" >
                  <div class="content-overlay"></div>
                  <div class="eventdp"  style="width: 100%; height: 300px;background-image: url('<?php echo base_url();?>assets/images/4_collect.jpeg'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " ></div>
                  <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Basket with cover</h3>
                  <p class="content-text" style="text-align: center;">
                  &nbsp 59.1.1a
                  </p></a></div></div>
                  
                 </div> 

   </div>
        


   <div class="row">
     


      <?php
              //Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
         
         <div style="margin-top: 10px; padding: 0;" class="col-md-<?php echo $bootstrapColWidth; ?>">
                  
                  <a href="<?php echo base_url(); ?>index.php/landing_artifact_4" style="text-decoration:none; background-position: center;"  >
                  <div class="content" >
                  <div class="content-overlay"></div>
                  <div class="eventdp"  style="width: 100%; height: 300px;background-image: url('<?php echo base_url();?>assets/images/5_collect.jpeg'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " ></div>
                  <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Iro-e platter</h3>
                  <p class="content-text" style="text-align: center;">
                  &nbsp 2017-JAP1-196
                  </p></a></div></div>
                  
                 </div>  



      <?php
              //Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
         
         <div style="margin-top: 10px; padding: 0;" class="col-md-<?php echo $bootstrapColWidth; ?>">
                  
                  <a href="<?php echo base_url(); ?>index.php/landing_artifact_5" style="text-decoration:none; background-position: center;"  >
                  <div class="content" >
                  <div class="content-overlay"></div>
                  <div class="eventdp"  style="width: 100%; height: 300px;background-image: url('<?php echo base_url();?>assets/images/1_collect.jpeg'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " ></div>
                  <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Pangolin</h3>
                  <p class="content-text" style="text-align: center;">
                  &nbsp 
                  </p></a></div></div>
                  
                 </div> 



   </div>
        

        
    </div>











<footer style="background: #0e3c00 none repeat scroll 0% 0%; margin-top: 60px; color: white;">

  <div class="row">
    <div class="col-md-6" style="margin-top: 25px;">
    <!-- <h5 style="color: orange; letter-spacing: 1px; font-weight: bold;"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp;&nbsp;>CONTACT US</h5> -->
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp;P. del Rosario Street, Cebu City Philippines 6000</p>
      <p style="text-align: center; letter-spacing: 3px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+63(32)253-1000</p>
      <p style="text-align: center; letter-spacing: 2px;"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>&nbsp;&nbsp;usc.museum@gmail.com</p>
    </div>
    <div class="col-md-6" style="margin-top:25px;">
      <!-- <h5><i class="fa fa-phone" aria-hidden="true"></i> SOCIAL MEDIA</h5> -->
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-facebook-official" aria-hidden="true"></i> www.facebook.com/uscmuseum</p>
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-instagram" aria-hidden="true"></i> www.instagram.com/uscmuseum</p>
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-twitter" aria-hidden="true"></i> www.twitter.com/uscmuseum</p>
    </div>
    <div class="row">
      <div class="col-md-12" style="margin-bottom: 10px;">
        <br>
        <p style="text-align: center; letter-spacing: 1px; color: orange;">2018 &copy; University of San Carlos - Museum</p>
      </div>
    </div>
  </div>

</footer>
</body>
</html>