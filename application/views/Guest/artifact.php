<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
         <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-dropdownhover.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/modern-bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>userassets/css/jquery-ui.css" type="text/css" media="all" />  
    <link rel="stylesheet" href="<?php echo base_url();?>userassets/css/ui.css" type="text/css" media="all" />
    <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>userassets/js/jquery-ui.min.js" type="text/javascript"></script> 
     <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url();?>assets/js/bootstrap-dropdownhover.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <script type="text/javascript">
     var jQuery_3_2_1 = $.noConflict(true);
    </script>
    <title>USC MUSEUM - <?php echo $title?></title>
   
      


<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');
@import url(https://fonts.googleapis.com/css?family=Roboto);
@import url('https://fonts.googleapis.com/css?family=Avenir');
@import url('https://fonts.googleapis.com/css?family=Pacifico');
@import url('https://fonts.googleapis.com/css?family=Montserrat');


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


 

@keyframes bounce {
  0%, 20%, 60%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  40% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  80% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px);
  }
}

.hide-bullets {
list-style:none;
margin-left: -40px;
margin-top:20px;
}


.event-meta-submenu-item:hover{
  animation: bounce .3s;
}

.event-meta-submenu-item{

  margin-right: 10%;

}


.event-summary{
font-family: 'Muli', sans-serif;
  width: 100%;
  height: 500px;
  background-color: orange;
}

.event-info{
   width: 100%;
    height: 50%;
    background: rgba(0,0,0,.7);
    color: #fff;
    padding: 3rem 4rem 1rem;

}

.event-title{

    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1;
    margin: 0 0 1rem;
    color: white;

}


.event-subtitle {
    font-size: 2.3rem;
    font-weight: 600;
    line-height: 1;
    margin-bottom: 1rem;
}



.event-description {
    min-height: 7.5rem;
}



.event-menus{
    color: #9cacb2;
}

.event-meta-menu{

    align-items: center;
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 1rem 0 2rem;
    padding: 0;
}


.event-meta-menu-item{

  margin-right: 3rem;

}

@media (max-width:1000px) {

.event-summary{
  width: 100%;
  height: 500px;
}

.event-info{
height: 50%;
width: 100%;
}

.event-title{
  font-size: 200%;
}
.event-description{
  font-size: 90%;
}
.event-subtitle{
  font-size:  100%;
}
}






.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }

.peopleCarouselImg img {
  width: 100%;
  height: 100%;
  max-height: 700px;
}




.wrapper{
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-right: 6%;
    margin-left: 6%;
    margin-bottom: 5%;
    background-color: #fff;

}


.wrapperz{
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-right: 6%;
    margin-left: 6%;
    margin-bottom: 5%;
    padding: 15px;
    background-color: #fff;
}


footer { 
    background: #0e3c00 none repeat scroll 0% 0%;
    color: #fff;
    padding: 30px 0;
    clear: both;
}

.navbar-nav {
  font-family: Avenir;
  font-size: 13px;
}


.navbar {
  border-top: orange 5px solid;
}
.top {
    background-color: white;
}


.button {
            display: inline-block;
            padding: 15px 25px;
            margin: 25px 0 75px 0;
            border-radius: 3px;
            color: #fff;
            background: #000;
            letter-spacing: .4em;
            text-decoration: none;
            font-size: 13px;
        }
.button:hover {
            background: #3b587a;
        }
.desc {
            max-width: 250px;
            text-align: left;
            font-size:14px;
            padding-top:30px;
            line-height: 1.4em;
        }
.resize {
            background: #222;
            display: inline-block;
            padding: 6px 15px;
            border-radius: 22px;
            font-size: 13px;
        }
@media (max-height: 700px) {
            .sticky {
                position: relative;
            }
        }
@media (max-width: 600px) {
            .resize {
                display: none;
            }
        }


@media (max-width:800px) {
  .container{
    width:100%;
  }
}

.imgcontain2, .imgcontain, .imgcontain1{
    height: 40%;
    width: 100%;
    float: left;
}

@media (max-width:1000px) {

  .imgcontain2, .imgcontain, .imgcontain1{
      width: 100%;
      height: 30%;
      margin-right: 30px;
      padding-bottom: 20px;
  }

}



.aboutpics {
    width: 100%;
    height: 100%;
    position: relative;
}

h3 {
    color: #28a745;
}

p {
    text-align: justify;
}

@media (max-width:1000px) {
  .container{
    width:100%;
  }
}


.modal-header {
  padding-bottom: 5px;
}

.modal-footer {
      padding: 0;
  }
    
.modal-footer .btn-group button {
  height:40px;
  border-top-left-radius : 0;
  border-top-right-radius : 0;
  border: none;
  border-right: 1px solid #ddd;
}
  
.modal-footer .btn-group:last-child > button {
  border-right: 0;
}

.hide-bullets {
list-style:none;
margin-left: -40px;
margin-top:20px;
}


#custom-search-input {
        margin:0;
        margin-top: 10px;
        padding: 0;
    }
 
    #custom-search-input .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-input button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color:#D9230F;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }




    .imageres{


    max-width: 60%;
    height: 200px;
    margin:0 0 0 0;
    padding:0 0 0 0;
    }


    ul.galeria, ul.galeria > li {
    list-style: none;
    margin: 0;
    padding: 0;
}


ul.galeria > li {
  margin: 10px;
    float: left;
}
@media(max-width:639px){
    ul.galeria > li {
        width: 50%;
    }
}
@media(min-width:640px){
    ul.galeria > li {
        width: 33.33333333333333%;
    }
}
@media(min-width:768px){
    ul.galeria > li {
        width: 33.33333333333333%;
    }
}
@media(min-width:992px){
    ul.galeria > li {
        width: 25%;
    }
}
@media(min-width:1200px){
    ul.galeria > li {
        width: 25%;
    }
}


ul.galeria > li img {
    width: 50%;
}


.no-gutter [class^="col-"] {
    padding-left:0;
    padding-right:0;
}


* {
  -webkit-transition: all .10s ease-in-out;
  transition: all .10s ease-in-out;
}

.zui-pager--center {
  text-align: center;
}
.zui-pager--right {
  text-align: right;
}
.zui-pager .btn-group {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: inline-block;
}
.zui-pager .btn-group__item {
  display: inline-block;
  margin: 0;
  padding: 0;
  height: 40px;
  float: left;
}
.zui-pager .btn-group__item .btn {
  margin: 0;
  padding: .5em 1em;
  border: 0;
  font-weight: 300;
  background-color: transparent;
  color: #bbb;
}

.zui-pager .btn-group__item .current {
  color: #739600;
  font-weight: bold;
}

.zui-pager .btn[disabled]:hover {
  box-shadow: inset 0px -2px 0px 0px #e6e6e6;
  cursor: default;
}
.zui-pager__input {
  display: inline-block;
  vertical-align: top;
  margin-left: 10px;
}
.zui-pager__input > input {
  width: 2em;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 0;
  line-height: 1;
}
.zui-pager .i-chevron-left,
.zui-pager .i-chevron-right {
  margin: 15px;
  border-style: solid;
  border-color: #3a3a3a;
  width: 6px;
  height: 6px;
  display: block;
  cursor: pointer;
}
.zui-pager .i-chevron-left {
  border-width: 1px 0 0 1px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.zui-pager .i-chevron-right {
  border-width: 1px 1px 0 0;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

.i-caret-down {
  border-width: 3px;
  border-style: solid;
  border-color: black transparent transparent transparent;
  position: absolute;
  top: 18px;
  right: 3px;
}

.small .btn {
  position: relative;
  box-shadow: 0 0 0 transparent !important;
  padding-right: 20px !important;
  padding-left: 5px !important;
}
.small span:nth-of-type(1) {
  font-weight: bold;
  color: #739600;
}
.small span:nth-of-type(2) {
  margin: 0 5px;
}
.small .select-overlay {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
}

.postbox{
    height: 50%;
    width: 45%;
    background-color: white;
    padding: 5px;
    /*box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
    overflow: hidden;
    display: block; 
    word-wrap: break-word; 
    float: left;
    margin: 0 5% 0 0;
}

.eventpic{
    height: 150px;
    width: 100px;
    margin: 0 15px 0 0;
    float: left;
}

.img-portfolio {
    margin-bottom: 30px;

}

@media(max-width:767px) {
    .img-portfolio {
        margin-bottom: 15px;
    }

}


#imgg{

  background-image:url('../assets/images/3.jpeg');
    margin-bottom:10px;
    border-radius: 5px;
 } 
#divColor{
 box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
 background-color: #fff;
border-radius: 5px;
}
#imgh{
   width: 100%;
  height: 100%;
  max-height: 20%;
margin-top: 5%;
margin-bottom: 5%
}

#ph{
  margin-top: 5%;
  margin-bottom: 5%;
   text-align:left;
   font-family:"Courier";
   border-radius: 5px;
   background-color:#ebebe0;


}

      .customimage{
      width: 300px;
      height: 180px;
      } 

   @media (max-width: 767px) {

      .customimage{
      width: 100%;
      height: 100%;
      }   
      }    

         @media (max-width: 600px) {

      .customimage{
      width: 100%;
      height: 100%;
      }   
      }    

       @media (max-width: 1000px) {

      .customimage{
      width: 100%;
      height: 100%;
      }   
      }    
 
   .error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}

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

</head>
<body style="overflow-x: hidden;background-color:#eaeaea;">

<header class="top" style="    position: relative;
  z-index: 100;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
               <a href="<?php echo base_url(); ?>index.php/Guest_Home"> <img src="<?php echo base_url();?>assets/images/final.jpg" width = "350px" height = "70px"></a>
            </div>

       

              <div class="col-md-2 " style="float: right;">
            
            <nav id="primary_nav_wrap">
              <ul>


              <li id="specific"><a href="#"><img src="<?php echo  $this->session->userdata('pic'); ?>" id="guestProfilepc" class="avatar img-circle" alt="avatar"> <?php echo $this->session->userdata('fname');?> <span class="caret"></span><a>

                <ul>
                  <li><a href="<?php echo base_url(); ?>index.php/Guest_profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                  <li><a href="<?php echo base_url();?>index.php/Guest_Home/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                </ul>
              <li>

            </ul>
           </nav>
         

            </div>


        </div>
    </div>
</header>

<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <!-- <div class="text-center"> -->
      <ul class="nav navbar-nav">
       <li><a href="<?php echo base_url(); ?>index.php/Guest_Home">HOME </a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Guest_Events">EVENTS</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Guest_artifacts">COLLECTIONS</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Guest_resource">RESOURCES</a></li>
        <li class="dropdown" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
          <a href="#" class="dropdown-toggle" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft"  data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">VIRTUAL TOUR<span class="caret"></span></a>

              <ul class="dropdown-menu"  data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                <li class="dropdown"><a href="<?php echo base_url(); ?>index.php/guest_virtual">Main Museum </a></li>
                <li class="dropdown"><a href="<?php echo base_url(); ?>index.php/guest_virtual_arcenas">Arcenas Galleries</a></li>   
             
              </ul>
          

        </li>
                  <li><a href="<?php echo base_url(); ?>index.php/Guest_about">ABOUT</a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>

<body style="background-color: #eaeaea;">


 


<div class="container" style="padding-top: 1%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  background-color: #fff;">
<h1 style="font-family: Montserrat; font-weight: bold;">Collections</h1> 


    			<div class="row">


                    <div class="col-md-3" >
                <?php 
                echo form_open_multipart ('guest_artifacts/search');?>
                   <div id="custom-search-input">
                            <div class="input-group"  style="width: 100%;" >
   <input type="text" class="search-query form-control" id="id_input" name="search" placeholder="Search Name" />
                                       
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">
                                        <span class=" glyphicon glyphicon-search" style="color: green;"></span>
                                    </button>
                                </span>
                            </div>  
                        </div>
 


              
                 <?php echo form_close(); ?>
                      
          </div>

                     <div class="col-md-1" style="margin-top: 10px;" >
                        <?php if($this->session->flashdata('cancelbutt')) : ?>
                  <a href="<?php echo site_url('guest_artifacts/cancelsearch');?>">
                  <?=$this->session->flashdata('cancelbutt')?>
                  </a>
            <?php endif; ?>
                     </div>


                 </div>
               

                <?php if($this->session->flashdata('Results')) : ?>
                             <br>
                    <div style="color: #808080; font-family: arial,sans-serif;">
                    &nbsp
                           About <?=$this->session->flashdata('Results')?> Result(s)
                            </div>  
                          <?php endif; ?>

                 <!--View-->
  <?php if($results->num_rows() > 0) : ?>
 <?php
              //Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
          <div class="row" style="margin-top: 10px;  ">
           <?php foreach($results->result() as $img) : ?>
         <div style="margin-top: 10px; padding: 0;" class="col-md-<?php echo $bootstrapColWidth; ?>">
                  
                  <a href="<?php echo site_url('guest_artifacts/view/'.$img->arti_id);?>" style="text-decoration:none; background-position: center;"  >
                  <div class="content" >
                  <div class="content-overlay"></div>
                  <div class="eventdp"  style="width: 100%; height: 300px;background-image: url('<?php echo $img->arti_img1 ?>'); background-repeat: no-repeat; background-size: contain;  background-position: center center;  " ></div>
                  <div class="content-details fadeIn-bottom">
                  <h3 class="content-title"><?php echo $img->name_obj;?></h3>
                  <p class="content-text" style="text-align: center;">
                  &nbsp <?php echo $img->acc_number;?>
                  </p></a></div></div>
                  
                 </div>  
                 
     
              <?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) 
      echo '</div><div class="row">';
      ?>
      <?php endforeach; ?>  
        </div>
       

     <?php else : ?>
      <center>
         <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    Data not found</h2>
                <div class="error-details">
                    Sorry, there may be no data yet or the requested data is incorrect
                </div>
            </div>
       </center>     
      <?php endif; ?> 
             
   <br>


<center>
<?php echo $links; ?>

</center>

        <!-- Footer -->

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

        <script type="text/javascript">  
        $(this).ready( function() {  
            $("#id_input").autocomplete({  
 
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "<?php echo base_url(); ?>index.php/guest_artifacts/lookup",  
                        dataType: 'json',  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){  
                                add(data.message);  
                                console.log(data);    
                            }  
                        },  
                    });  
                },  
                     
            });  
        });  
        </script>

</body>
</html>