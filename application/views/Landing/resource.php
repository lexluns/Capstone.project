<?php include'navbar.php'; ?>
<style>

/*.navbar-nav > li {

    padding-left: 0;
    padding-right: 0;
    margin: 0 8px 0 8px;
    letter-spacing: 1px;
}*/
/*
.dropdown-menu > li > a {

    display: block;
    padding-top: 15px;
    padding-right: 0px;
    padding-bottom: 15px;
    padding-left: 10px;
    clear: both;
    font-size: 19px;
    line-height: 0px;
    font-weight: normal;
    white-space: nowrap;
    color: black;
}
*/

.glyphicon glyphicon-refresh {
    font-size: 20px;
}



.nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    /*background-color: #ffd689; light*/
    border-color: #337ab7;
    background-color: #fbb738;
  }

  .dropdown-menu > li > a {
    
    font-size: 18px;

  }

  /*@media (max-width: 900px){
    .navbar-nav {
      
    }

  }*/
    
    @media (max-width: 767px) {
      
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        text-align: center;
        font-size: 16px;
        margin-left: -80px;
        letter-spacing: 1px;
      }
    }

    @media (max-width: 767px) {

      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {

      color: orange;    

      }
    }


    .media-object {
      width: 164px;
      height: 174px;
    }


</style>
<body>



<div class="wrapper" style="padding: 2%;">
<h1 style="font-family: Montserrat; font-weight: bold;">Learning Resources</h1><br>
      
        <div class="row" style="margin-top:5px;">  

           <?php $numOfCols = 1; $rowCount = 0; $bootstrapColWidth = 12 / $numOfCols; ?>

            <div class="col-md-<?php echo $bootstrapColWidth;?>">   

            <div class="media">
              <div class="media-left">
    
                <img class="media-object avatar img-rounded" src="<?php echo base_url();?>assets/uploads/defaltpicxzxzxzxzxzxzxzxzxzx.png">

                <a href="<?php echo base_url();?>assets/documents/Fort-San-Pedro-Maceda.pdf" target="_blank">
                <button style=" border:none ; background-color: #65b581; margin-top: 8px; margin-left: 40px;" class="btn btn-warning btn-xs"><i class="fa fa-download fa-lg" aria-hidden="true"></i> Download</button> 
                </a>

              </div>
              <div class="media-body" >
                <h3 class="media-heading">Fort San Pedro</h3>
                <h4 class="media-heading" style="font-style: italic; font-size: 15px;">By:&nbsp;Marcelino N. Maceda</h4>
                <h4 class="media-heading" style=" font-size: 15px;">Date Published:&nbsp;1973</h4>
                <h4 class="media-heading" style=" font-size: 15px;">Journal/Book:&nbsp;Fu Jen Studies</h4>
                <h4 class="media-heading" style=" font-size: 15px;">Place of Publication:&nbsp;Taipei, Taiwan</h4>
                <h4 class="media-heading" style=" font-size: 15px;">Publisher:&nbsp;Fu Jen University</h4>


              </div>
            </div>

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