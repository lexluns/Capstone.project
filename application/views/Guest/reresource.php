<!DOCTYPE html>
<html>

<?php include'navbar.php'; ?>
<head>


    
</head>
<style>

/*.navbar-nav > li {

    padding-left: 0;
    padding-right: 0;
    margin: 0 8px 0 8px;
    letter-spacing: 1px;
}*/

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


.nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    /*background-color: #ffd689; light*/
    border-color: #337ab7;
    background-color: #fbb738;
  }

  .dropdown-menu > li > a {
    
    font-size: 18px;

  }

   .nav-tabs >li > a {
    padding: 15px 15px 15px 15px;
    color: green;
  }

  .nav-tabs > li.active > a, 
  .nav-tabs > li.active > a:hover, 
  .nav-tabs > li.active > a:focus {
    color: green;
    padding: 15px 15px 15px 15px;
  }
    
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

<body style="background-color: #eaeaea;" >

    <div class="wrapper" style="box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: #fff; padding:15px; padding-right: 40px;">
<h1 style="font-style: Raleway;">Learning Resources</h1><br>
        
           <div class="row" style="margin-top:-10px;">  


    <ul class="nav nav-tabs" style="margin-bottom: 10px; margin-left: 10px;">
      <li role="presentation" >
        <a href="<?php echo base_url();?>index.php/guest_resource" class="tabtab"><span class="glyphicon glyphicon-globe"></span> Public Resources</a>
      </li>
        <li role="presentation" class="active"><a href="<?php echo base_url();?>index.php/guest_reresource" class="tabtab"><span class="glyphicon glyphicon-ok"></span> Received Resources</a></li>
      </ul>
          <?php if($restricted->num_rows() > 0) : ?>
           <?php $numOfCols = 2; $rowCount = 0; $bootstrapColWidth = 12 / $numOfCols; ?>
                <?php foreach($restricted->result() as $row) { ?>
            <div class="col-md-<?php echo $bootstrapColWidth;?>" id="divColorRes">   

            <div class="media">
              <div class="media-left">
                
                <img class="media-object avatar img-rounded" src="<?php echo $row->resourceImage;?>">

              
              </div>
              <div class="media-body" style="">
                <h4 class="media-heading" style="font-style: italic; font-size: 15px; margin-top: 20px;">Title:&nbsp;<?php echo $row->resourceTitle;?></h4>
  <h4 class="media-heading" style="font-style: italic; font-size: 15px;">Author:&nbsp;<?php echo $row->resourceAuthor;?></h4>
  <h4 class="media-heading" style="font-style: italic; font-size: 15px;">Year: <?php echo $row->date_pub;?></h4>
  <h4 class="media-heading" style="font-style: italic; font-size: 15px;">Journal/Book:&nbsp;<?php echo $row->journal_book;?></h4>
  <h4 class="media-heading" style="font-style: italic; font-size: 15px;">Place of Publication:&nbsp;<?php echo $row->place_of_publication;?></h4>
  <h4 class="media-heading" style="font-style: italic; font-size: 15px;">Publisher:&nbsp;<?php echo $row->publisher;?></h4>

  <a href="<?php echo $row->resourceFile;?>" target="_blank">
                <button style=" border:none ; background-color: #65b581; margin-top: 8px; margin-left: 40px;" class="btn btn-warning btn-xs" data-toggle="#" data-target="#" onclick="#" id="#"><i class="fa fa-download" aria-hidden="true"></i> Download</button> 
                </a>
    
              </div>
            </div>

              </div>

               <?php $rowCount++;
        if($rowCount % $numOfCols == 0) {
            echo '</div><div class="row">';
            echo '<br>';
        } // end if
                              
   } //end of foreach //       
?> <!-- end php -->



            </div>
            
<?php else : ?>   

<center>

 <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>You have not received any resources.</h2>
                <div class="error-details">
                    Please contact administrator for more information.
                </div>
            </div>
            </div>

</center>
        <?php endif; ?> 
        

    </div>

<!-- </div> -->


<footer style="background: #0e3c00 none repeat scroll 0% 0%; margin-top: 60px; color: white;">

  <div class="row">
    <div class="col-md-6" style="margin-top: ;">
    <!-- <h5 style="color: orange; letter-spacing: 1px; font-weight: bold;"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp;&nbsp;>CONTACT US</h5> -->
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp;P. del Rosario Street, Cebu City Philippines 6000</p>
      <p style="text-align: center; letter-spacing: 3px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+63(32)253-1000</p>
      <p style="text-align: center; letter-spacing: 2px;"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>&nbsp;&nbsp;usc.museum@gmail.com</p>
    </div>
    <div class="col-md-6" style="margin-top:;">
      <!-- <h5><i class="fa fa-phone" aria-hidden="true"></i> SOCIAL MEDIA</h5> -->
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-facebook-official" aria-hidden="true"></i> www.facebook.com/uscmuseum</p>
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-instagram" aria-hidden="true"></i> www.instagram.com/uscmuseum</p>
      <p style="text-align: center; letter-spacing: 1px;"><i class="fa fa-twitter" aria-hidden="true"></i> www.twitter.com/uscmuseum</p>
    </div>
    <div class="row">
      <div class="col-md-12" style="margin-bottom:;">
        <br>
        <p style="text-align: center; letter-spacing: 1px; color: orange;">2018 &copy; University of San Carlos - Museum</p>
      </div>
    </div>
  </div>

</footer>



</body>

    <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script>
    

</html>

<!-- <script>


 


 $(document).ready(function(){ 


   $(document).on('click','#viewbtn',function(e){
      var id = $(this).data('id')
      var title = $(this).data('title')
      var desc = $(this).data('description')

      var output =  '<p><strong>User ID :</strong> ' + id + '</p>' +
                    '<p>Title : ' + title + '</p>' +
                    '<p>User Type : ' + desc + '</p>' +
                    

        $('#usermodal').html(output)

   })

 
});


</script>  -->
