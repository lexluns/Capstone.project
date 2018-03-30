<?php include'navbar.php'; ?>
<body style="background-color: #eaeaea;">


<?php foreach($retdata as $data) : ?>

    <div class="container" style="padding-top: 30px; box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: #fff;">

 <div class="eventmenu">
    <a href="<?php echo base_url(); ?>index.php/guest_artifacts" align="right" style="color: #339933;">← Back To Collections</a>
</div> 
<br>                  

              
         <a  href="<?php echo site_url('guest_artifacts/pdf/' .$data->arti_id);?>" target="_blank" style ="text-decoration:none; color: white;"> <button class="btn btn-default" type="button" style="margin-bottom: 10px;" title="Print report">
          <span class="glyphicon glyphicon-print"></span></button></a>
                  



              <div class="container-fluid">
                
               

              <div class="row"> 

              <div class="col-md-7">
        <div  id="carousel-example-generic"  data-interval="false" class="carousel slide" data-ride="carousel">

 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="box" >
        <center>
        <img class="img-responsive img-hover" src="<?php echo $data->arti_img1 ?>"  >
        </center>
      </div>
      
    </div>
    <div class="item">
      <div class="box">
        
          <center>
          <img class="img-responsive img-hover" src="<?php echo $data->arti_img2 ?>"  >
            </center>

      </div>
      
    </div>
    <div class="item">
      <div class="box" >
           <center>
          <img class="img-responsive img-hover" src="<?php echo $data->arti_img3 ?>"  >
             </center>
      </div>
      
    </div>

        <div class="item">
      <div class="box" >
       <center>
         <img class="img-responsive img-hover" src="<?php echo $data->arti_img4 ?>"  >
          </center>
      </div>
      
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="background-image:none;">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="background-image:none;">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
       
              </div>

              <div class="col-md-5" >

                    <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Name of object or Species</label>
                        <br> <?php echo $data->name_obj ?> 
                    </div>

                     <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Catalogue number</label>
                        <br> <?php echo $data->acc_number ?>
                    </div>

                    <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Dimension</label>
                        <br> <?php echo $data->Dimensions ?>
                    </div>

                    <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Collection/Ownership</label>
                        <br> <?php echo $data->owner ?>
                    </div>


                  <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Description</label>
                        <br> <?php echo $data->description ?>
                 </div>

                    <br>


            



              </div>




              </div>





            <?php endforeach; ?>







              </div>

                




              <br>
<br>


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