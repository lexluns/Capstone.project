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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/timeline.css">
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-dropdownhover.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <title><?php echo $title ?> | USC MUSEUM</title>
   


<style>

@import url('https://fonts.googleapis.com/css?family=Raleway');
@import url(https://fonts.googleapis.com/css?family=Roboto);
@import url('https://fonts.googleapis.com/css?family=Avenir');
@import url('https://fonts.googleapis.com/css?family=Pacifico');
@import url('https://fonts.googleapis.com/css?family=Montserrat');

.navbar-nav {
  font-family: Avenir;
  font-size: 13px;
}

.navbar-nav > li {
  padding-left: 37px;
}

.dropdown-menu > li > a {
    font-size: 16px;
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



/* NAVBAR PROFILE */

#primary_nav_wrap
{
  margin-top:15px;
  margin-left:-12px;
}

#primary_nav_wrap ul
{
  list-style:none;
  position:relative;
  float:left;
  margin:0;
  padding:0;
  z-index: 1;
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

#divColorRes{
 box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
 background-color: #fff;
border-radius: 5px;
margin-left: 12px;
margin-right: 12px;
padding-top: 12px;
padding-bottom: 12px;
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

@media (max-width: 767px) {

      #navnav {
      margin-top: -20px;
      }   
  }  

</style>

</head>
<body style="overflow-x: hidden;background-color:#eaeaea;">

<header class="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
               <a href="<?php echo base_url(); ?>index.php/Home"> <img src="<?php echo base_url();?>assets/images/final.jpg" width = "350px" height = "70px"></a>
            </div>

                        <div class="col-md-2 " style="float: right;">
          
            <nav id="primary_nav_wrap">
              <ul>
  
              
              <li id=""><a href="#"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i> Account <span class="caret"></span><a>
                <ul>
                  <li><a href="<?php echo base_url(); ?>index.php/login"><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp;Sign In</a></li>
                
                  <li><a href="<?php echo base_url();?>index.php/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
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
       <li><a href="<?php echo base_url(); ?>index.php/Home">HOME </a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Events">EVENTS</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/artifacts">COLLECTIONS</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/resource">RESOURCES</a></li>
        <li class="dropdown" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
          <a href="#" class="dropdown-toggle" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft"  data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">VIRTUAL TOUR <span class="caret"></span></a>

              <ul class="dropdown-menu"  data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                <li class="dropdown"><a href="<?php echo base_url(); ?>index.php/virtual">Main Museum </a></li>
                <li class="dropdown"><a href="<?php echo base_url(); ?>index.php/virtual_arcenas">Arcenas Galleries</a></li>   
             
              </ul>
          

        </li>
                  <li><a href="<?php echo base_url(); ?>index.php/about">ABOUT</a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>