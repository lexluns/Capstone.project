<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Gallery</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
    <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/script.js"> </script>
    <script src="<?php echo base_url();?>userassets/js/sweetalert.min.js"></script>


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
     

      
.box{
    width:100%;
    height:450px;
}

/*Stop*/
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


              <li id="specific"><a href="#"><img src="<?php echo  $this->session->userdata('pic'); ?>" id="guestProfilepc" class="avatar img-circle" alt="avatar"> <?php echo $this->session->userdata('fname');?> <span class="caret"></span><a>

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
              <a href="<?php echo base_url(); ?>index.php/curator_Home" class="list-group-item ">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/curator_Events" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Gallery" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_Schedule" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_resource" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span></a>
              <a href="<?php echo base_url(); ?>index.php/curator_User" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> User Accounts <span class="badge"></span></a>
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
                   <div class="row">
                   <div class="col-sm-1" style="margin-top: 5px; width: 2%;"><a href="<?php echo site_url('curator_Gallery');?>" style = "text-decoration-color: none; color: white;"><span class="glyphicon glyphicon-arrow-left" style="font-size: 20px; " title="Back"></span></a></div>

          <div class="col-sm-2" style="margin-top: 8px;"> <h3 class="panel-title">View Item</h3></div>
<!-- 
        -->

                    </div>
              </div>
              <div class="panel-body">

<?php foreach($retdata as $data) : ?>
              <div class="container-fluid">


                          
                
                <div class="row">

                     <a  href="<?php echo site_url('curator_edit_artifact/index/'.$data->arti_id);?>" style ="text-decoration:none; color: white;"> <button class="btn btn-primary" type="button" style="margin-bottom: 10px;" title="Update Item">
          <span class="glyphicon glyphicon-pencil"></span></button></a>

<!-- <?php echo site_url('curator_Gallery/delete/'.$data->arti_id);?> -->

               <a  href="javascript:void(0);" onclick="deleteconfirm(<?php echo $data->arti_id;?>);" style ="text-decoration:none; color: white;"> <button class="btn btn-danger" type="button" style="margin-bottom: 10px;" title="Delete Item">
          <span class="glyphicon glyphicon-trash"></span></button></a>


         <a  href="<?php echo site_url('curator_Gallery/pdf/' .$data->arti_id);?>" target="_blank" style ="text-decoration:none; color: white;"> <button class="btn btn-default" type="button" style="margin-bottom: 10px;" title="Print report">
          <span class="glyphicon glyphicon-print"></span></button></a>
                  

                </div>

                   <?php if($this->session->flashdata('edit')) : ?>
                          <div class="alert alert-success">
                           <center><?=$this->session->flashdata('edit')?></center>
                            </div>  
                          <?php endif; ?>

          
<center>
   
                <div style ="width: 60%;" id="carousel-example-generic"  data-interval="false" class="carousel slide" data-ride="carousel">

 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="box" style="background-color: black;">
        
        <img class="img-responsive img-hover" style ="width: 100%;  height: 100%;background-image: url('<?php echo $data->arti_img1 ?>'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " >
      </div>
      
    </div>
    <div class="item">
      <div class="box" style="background-color: black;">
        

         <img class="img-responsive img-hover" style ="width: 100%;  height: 100%;background-image: url('<?php echo $data->arti_img2 ?>'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " >
      </div>
      
    </div>
    <div class="item">
      <div class="box" style="background-color: black;">
          <img class="img-responsive img-hover" style ="width: 100%;  height: 100%;background-image: url('<?php echo $data->arti_img3 ?>'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " >
      </div>
      
    </div>

        <div class="item">
      <div class="box" style="background-color: black;">
          <img class="img-responsive img-hover" style ="width: 100%;  height: 100%;background-image: url('<?php echo $data->arti_img4 ?>'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " >
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
          


</center>
   <br>




              <div class="row">
                     <div class="col-md-7" >
                    <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Accession number or catalogue number</label>
                        <br> <?php echo $data->acc_number ?>
                    </div>

                    <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Name of object or Species</label>
                        <br> <?php echo $data->name_obj ?> 
                    </div>

                     <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Institution</label>
                        <br> <?php echo $data->institution ?>
                    </div>

                    <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Ownership</label>
                        <br> <?php echo $data->owner ?>
                    </div>
                
             
                              <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Mode, Source & Place of acquisition</label>
                        <br>  <?php echo $data->mode ?>
                 </div>
                  
                <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Description, Techniques, Possible Title, Signature, Measurements</label>
                        <br> <?php echo $data->description ?>
                 </div>

                  <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Conservation, Restoration, Museugraphical notes</label>
                        <br> <?php echo $data->conserv ?>
                 </div>

                  <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">History</label>
                        <br> <?php echo $data->hist ?>
                 </div>

                <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">References</label>
                        <br> <?php echo $data->reference ?>
                 </div>

                  <div class="form-group" style="font-size: 16px">
                        <label class="control-label" >Name of artist, or Class, Order, Family, Genus</label>
                        <br> <?php echo $data->name_art ?>
                  </div>

                   <div class="form-group" style="font-size: 16px">
                        <label class="control-label" >Location in Museum</label>
                        <br> <?php echo $data->locate ?>
                    </div>


              </div>

              <div class="col-md-5">

                <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Classification</label>
                        <br> <?php echo $data->classify ?>
                    </div>

                    <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Place of origin</label>
                        <br> <?php echo $data->place_orig ?>
                    </div>

                  <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Material(s)</label>
                        <br> <?php echo $data->material ?>
                 </div>
                              <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Date of acquisition</label>
                        <br> <?php echo $data->date_acq ?>
              </div>
                  
                <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Price paid, Estimated value(dated)</label>
                        <br>  <span>₱</span> <?php echo $data->price ?>
                 </div>

                <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Cultural or Ethnic group</label>
                        <br> <?php echo $data->cultural ?> 
                </div>

                <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Function, Use, Utilisation</label>
                        <br> <?php echo $data->function ?> 
                </div>

                <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Collector, Expedition</label>
                        <br> <?php echo $data->collector ?>
                </div>

                <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Chronology, Doubtful attribution</label>
                        <br>   <?php echo $data->chronology ?>
                </div>

               <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Style, School, Influences</label>
                        <br>  <?php echo $data->style ?> 
                </div>

                 <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Dimension</label>
                        <br>  <?php echo $data->Dimensions ?> 
                </div>

               <div class="form-group" style="font-size: 16px;">
                        <label class="control-label">Current restrictions</label>
                        <br>  <?php 

                        if($data->arti_restrict == 'restricted')
                        {
                          echo "Curator's View";

                        } if($data->arti_restrict == 'museum')
                        {
                          echo "Museum Staff View";

                        } if($data->arti_restrict == 'public')
                        {
                          echo "Public View";

                        }  



                        ?> 
                </div> 
              </div>






             
                <?php endforeach; ?> 
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

    <script type="text/javascript">
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
     window.location = url+"index.php/curator_Gallery/delete/"+id;
  } else {
    return false;
    // swal("Your imaginary file is safe!");
  }
});
}


    </script>

  </body>
</html>
