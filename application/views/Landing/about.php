<?php include'navbar.php'; ?>
 <?php echo $map['js']; ?>
 
 <head>
  <style type="text/css">

  .nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    /*background-color: #ffd689; light*/
    border-color: #337ab7;
    background-color: #fbb738;
  }

  .dropdown-menu > li > a {
    
    font-size: 18px;

  }

h1 {
    color: #28a745;
}

h4{
  font-weight: bold;
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

.aboutpics {
  width: 355px;
  height: 250px;
}

.BoxTitle{
  font-family: Raleway;
}

.BoxDesc{
  font-family: :Lora;
  font-size: 14px;
}

.timeline-body{
  font-family: :Lora;
  font-size: 14px;
}
.modal{
  margin: 10% auto;
}

  </style>
</head>


<div class="modal fade" id="Details" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">USC Museum</h3>
</div>
    <div class="modal-body">
      
              <div class="contain" style="padding: 1%;">
          
                <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbspThe University of San Carlos Museum was formally inaugurated by Fr. Pres. Rudolf Rahmann, SVD on 23 April 1967. However, the museum began as a repository of the ﬁeldwork conducted by the anthropology and biology departments of the university in the 1950s. Prior to this, a museum with cabinets of curiosity was inaugurated in 1908 at the old Seminario-Colegio de San Carlos located at the original campus beside Plaza Independencia. That museum was unfortunately destroyed, together with its precious collection, during the American liberation bombings in 1945. Located at the university’s downtown campus, it occupies both the north and south wings of the ground ﬂoor of the Arthur Dingman Building, named after the ﬁrst rector of USC.</p>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="Detailss" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Philippine History</h3>
</div>
    <div class="modal-body">
      
              <div class="contain" style="padding: 1%;">
          
                <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp The history of the Philippines from 1521 to 1898, also known as the Spanish Colonial Period, began with the arrival in 1521 of European explorer Ferdinand Magellan sailing for Spain, which heralded the period when the Philippines was a colony of the Spanish Empire, and ended with the outbreak of the Spanish–American War in 1898, which marked the beginning of the American Colonial Era of Philippine history.</p>
</div>
</div>
</div>
</div>
</div>


<div class="container" style="padding-top: 1%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  background-color: #fff;">
<section style="padding-top: 15px;">



        <!-- Projects Row -->
        <div class="row" >

            <div class="col-md-4">
                
                <img src="<?php echo base_url();?>assets/images/1.jpg" style = "width: 100%;height: 100%;">
               
                <h3 class="BoxTitle">
                    USC Museum
                </h3>
                <p class="BoxDesc">&nbsp The University of San Carlos Museum was formally inaugurated by Fr. Pres. Rudolf Rahmann, SVD on 23 April 1967. However, the museum began as a repository of the ﬁeldwork conducted by the anthropology and.. <a href="#" data-target="#Details" data-toggle="modal"> See more </a></p>
            </div>

            <div class="col-md-4">
               
                    <img src="<?php echo base_url();?>assets/images/2.jpg" style = "width: 100%;height: 100%;">
            
                <h3 class="BoxTitle">
                    Collections
                </h3>
                <p class="BoxDesc">&nbsp Its growing collection of excavated ceramics, rare and exotic ﬂora and fauna as well as exemplary ecclesiastical, historical and ethnographic objects are carefully collected, studied, catalogued and exhibited.</p>
            </div>

            <div class="col-md-4"> 
                    
                <img src="<?php echo base_url();?>assets/images/phhisto.jpg" style = "width: 100%;height: 100%;">
         
                <h3 class="BoxTitle">Philippine History</h3>
                <p class="BoxDesc"> &nbsp The history of the Philippines from 1521 to 1898, also known as the Spanish Colonial Period, began with the arrival in 1521 of European explorer Ferdinand Magellan sailing for Spain, which heralded the period.. <a href="#" data-target="#Detailss" data-toggle="modal"> See more </a></p>
            </div>
        </div>


   <div class="row">
         <div class="container">
          <div class="text-center">
            <h3 style="color: black; font-family: avenir;">T I M E L I N E &nbsp O F &nbsp   E V E N T S</h3>
            <br>
            <img src="<?php echo base_url();?>assets/images/linestyle.png" style="margin-top:-55px;"><br>
          </div>
          <ul class="timeline" style="margin-top: -50px;">
            <li>
              <!-- <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div> -->
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title" style="color:orange;">1952</h4>
                </div>
                <div class="timeline-body">
                  <p><i>A growing collection of excavated ceramics, rare and exotic ﬂora and fauna as well as exemplary ecclesiastical, historical and ethnographic objects were already carefully collected, studied, catalogued and exhibited.</i></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted" style="margin-right: 32px;">
              <!-- <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div> -->
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title" style="color:orange;">1960</h4>
                </div>
                <div class="timeline-body">
                  <p><i>Fr. Heinrich Schoenig, SVD and Prof. Julian Jumalon collected the ﬁrst specimens for what would later become the Biological Collection, including pythons and anteaters, in Palawan with Cristobal Plateros and the brothers Samuel and Saul Ochotorena.</i></p>
                </div>
              </div>
            </li>
            <li>
              <!-- <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div> -->
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title" style="color:orange;">1962</h4>
                </div>
                <div class="timeline-body">
                  <p><i>Prof. Juamlon carried out a second collecting trip together with son Osman. Dr. Marcelino Maceda discovered secondary limestone burial urns dating to ca. 100-500 CE in two caves at Menteng in Kulaman Plateau, South Cotabato. Excavation in Carcar and Argao were conducted by Fr. Stephen Fuchs, SVD which yielded the ﬁrst ceramics in the collection of the USC Museum.</i></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted" style="margin-right: 32px;">
              <!-- <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div> -->
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title" style="color:orange;">1963-1966</h4>
                </div>
                <div class="timeline-body">
                  <p><i>Subsequent excavations were conducted at Kulaman Plateau resulting in the retrieval of over 100 pieces of limestone urns. Smithsonian InstittutionCarolinian Expedition to Mindanao was carried out by Prof. Jumalon and Dr. Donald Davis of the Smithsonian, bringing in rare butterﬂy species.</i></p>
                </div>
              </div>
            </li>
            <li>
              <!-- <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div> -->
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title" style="color:orange;">1967</h4>
                </div>
                <div class="timeline-body">
                  <p><i>Leandro and Cecilia CeLocsin - USC Archaeological Project in Pila, Laguna. The USC Downtown Cebu Salvage Archaeological Project led by Dr. Karl Hutterer, SVD and Dr. Rosa C.P. Tenazas following the accidental discovery of human remains by workers digging trenches to bury telephone cables. The USC Museum was formally inauguratedon April 23 by Fr. Pres. Rudolf Rahmann, SVD with First Lady Imelda Romualdez Marcos, a few minutes before husband Pres. Ferdinand Marcos delivered the commencement address to the graduating class.</i></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted" style="margin-right: 32px;">
              <!-- <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div> -->
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title" style="color:orange;">1970</h4>
                </div>
                <div class="timeline-body">
                  <p><i>More collecting trips were carried out by Prof. Jumalon to Bohol, Leyte and Samar. Dr. Marcelino Maceda excavated at the inner courtyard of Fort San Pedro which yielded 18 burials associated with Thai, Vietnamese and Chinese (Yuan Dynasty) ceramics dating to the 14th-15th century AD.</i></p>
                </div>
              </div>
            </li>
        </ul>
        <div class="text-center"><br>
          <img src="<?php echo base_url();?>assets/images/linestyle.png" style="margin-top:-55px;"><br><br>
        </div>
        <p style="margin-right: 28px; text-align: center; margin-top:-55px; font-family: oswald; font-size: 16px;"><i>From three exhibition galleries when it was inaugurated in 1967, the museum has grown into ﬁve indoor galleries , <br> one open gallery and one hallway exhibit area, all added during the presidency of Fr. Dionision M. Miranda, SVD in 2012.</i></p>
    </div>
    

</section>
<br><br>


 
  <?php echo $map['html']; ?>
<br>
</div>











<!-- <footer style="background: #0e3c00 none repeat scroll 0% 0%; color: white;" >
  <div class="row">
    <div class="col-md-6" style="margin-top: 15px;">
      <h5 style="text-align: center;"><i class="fa fa-phone" aria-hidden="true"></i> CONTACT US</h5>
      <p style="text-align: center;">University of San Carlos Address ni dapita</p>
      <p style="text-align: center;">Contacts ni dapita</p>
    </div>
    <div class="col-md-6" style="margin-top: 15px;">
      <h5 style="text-align: center;"><i class="fa fa-phone" aria-hidden="true"></i> SOCIAL MEDIA</h5>
      <p style="text-align: center;">University of San Carlos Email ni dapita</p>
      <p style="text-align: center;">University of San Carlos Email ni dapita</p>
      <p style="text-align: center;">University of San Carlos Email ni dapita</p>
    </div>
    <div class="row" style="padding-bottom: 15px;">
      <div class="col-md-12">
        <p style="text-align: center;">&copy; 2018 University of San Carlos Email ni dapita</p>
      </div>
    </div>
  </div>

</footer> -->

</body>

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


</html>
