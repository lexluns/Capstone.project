<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Staff Area | Resources</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/apple-touch-icon-57x57.png">
    <link href="<?php echo base_url();?>userassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/styleAdmin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>userassets/css/jquery-confirm.css" rel="stylesheet">
    <script src="<?php echo base_url();?>userassets/js/sweetalert.min.js"></script>

  </head>

  <style>

#header {
  background-color: white;
  color: black;
  margin-bottom: 0;
  position: relative;
  z-index: 100;
}

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

.year{
  color:red;
  font-size: 12px;
}



  </style>

  <body>

   <header id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <a href="<?php echo base_url();?>index.php/staff_Home" style="text-decoration: none;"><img src="<?php echo base_url();?>assets/images/final.jpg" width = "350px" height = "70px" style="margin-bottom: -25px;">&nbsp;</a> 
          </div>
              <div class="col-md-2 col-sm-6 col-md-offset-8">
            
            <nav id="primary_nav_wrap">
              <ul>


              <li id="specific"><a href="#"><img src="<?php echo  $this->session->userdata('pic'); ?>" id="guestProfilepc" class="avatar img-circle" alt="avatar">&nbsp;<?php echo $this->session->userdata('fname');?> <span class="caret"></span><a>

                <ul>
                  <li><a href="<?php echo base_url(); ?>index.php/staff_profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                  <li><a href="<?php echo base_url();?>index.php/staff_Home/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
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
            <li><a href="<?php echo base_url(); ?>index.php/staff_Home">Museum Overview</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staff_Events">Events</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staff_Gallery">Collections</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staff_Schedule">Schedule</a></li>
            <li  class="active"><a href="<?php echo base_url(); ?>index.php/staff_resource">Learning Resources</a></li>
           
          </ul>
          </ul>
          <!-- <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>index.php/curator_Profile"> Welcome,&nbsp;Alexis!</span></a></li>
          </ul> -->
        </div>
      </div>
    </nav>
   

      

    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo base_url(); ?>index.php/staff_Home" class="list-group-item">
                <i class="glyphicon glyphicon-cog"></i> Museum Overview
              </a>
              <a href="<?php echo base_url(); ?>index.php/staff_Events" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Events <span class="badge"></span></a>

              <a href="<?php echo base_url(); ?>index.php/staff_Gallery" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Collections <span class="badge"></span></a>

              <a href="<?php echo base_url(); ?>index.php/staff_Schedule" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Schedule <span class="badge"></span></a>

              <a href="<?php echo base_url(); ?>index.php/staff_resource" class="list-group-item  active main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Learning Resources <span class="badge"></span></a>

              
              
              <!-- <a href="<?php echo base_url(); ?>index.php/curator_User" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> User Accounts <span class="badge"></span></a> -->
              
            </div>

          </div>
          <div class="col-md-9">
        
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Learning Resources</h3>
              </div>
              <div class="panel-body">

              <?php if(form_error('resourceAuthor')):?>
                <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('resourceAuthor')?>  </div>
              <?php endif; ?>
              <?php if(form_error('resourceTitle')):?>
                <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('resourceTitle')?>  </div>
              <?php endif; ?>
              <?php if(form_error('date_pub')):?>
                <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('date_pub')?>  </div>
              <?php endif; ?>
              <?php if(form_error('journal_book')):?>
                <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('journal_book')?>  </div>
              <?php endif; ?>
              <?php if(form_error('place_of_publication')):?>
                <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('place_of_publication')?>  </div>
              <?php endif; ?>
              <?php if(form_error('publisher')):?>
                <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('publisher')?>  </div>
              <?php endif; ?>
              <?php if(form_error('resourceType')):?>
                <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('resourceType')?>  </div>
              <?php endif; ?>
              <?php if(form_error('resourceFile')):?>
                <div class="alert alert-danger" role="alert" align="center"> <?php echo form_error('resourceFile')?>  </div>
              <?php endif; ?>
             

                              <?php if($this->session->flashdata('success')) : ?>
                   <div class="alert alert-success" role="alert" align="center">
                  <?=$this->session->flashdata('success')?>
                     </div>
                <?php endif; ?>

                <?php if($this->session->flashdata('error')) : ?>
                   <div class="alert alert-danger" role="alert" align="center">
                  <?=$this->session->flashdata('error')?>
                     </div>
                <?php endif; ?>

                <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#createLearning" style="background-color: ;"><span class="glyphicon glyphicon-plus"></span> Add Resources</button>

                        <!-- <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editLearning"><span class="glyphicon glyphicon-edit"></span> Edit resources</button> -->
                      </div>            
                </div>
                <br>

                <?php 
                          if(isset($error)){
                            echo $error; 
                          }
                        ?>
          <div class="table-responsive">        
              <table class="table table-bordered table-hover" id="mytable" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <!-- <th class="text-center">#</th> -->
                    <th class="text-center" style="width:90px;">Author(s)</th>
                    <th class="text-center" style="width:30px;">Year</th>
                    <th class="text-center" style="width:100px;">Title</th>
                    <th class="text-center">Journal/Book</th>
                    <th class="text-center">Place of Publication</th>
                    <th class="text-center">Publisher</th>
                    <th class="text-center" style="width:50px;">Type</th>
                    <th class="text-center" style="width:90px;">Actions</th>
                    <!-- 177px(3) 130px(2) 241px(4) 270(5) other: btn-xs 116px(no btn names) 90px(4xs)-->
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($learning->result() as $row) { ?>
                      <tr>

                        <!-- <td><?= $row->resource_id;?></td>  -->
                        <td><?= $row->resourceAuthor;?></td>
                        <td class="text-center"><?= $row->date_pub;?></td>
                        <td><?= $row->resourceTitle;?></td>
                        <td><?= $row->journal_book;?></td>
                        <td><?= $row->place_of_publication;?></td>
                        <td><?= $row->publisher;?></td>
                        <td class="text-center"><?= $row->resourceType;?></td>
                        <td>
                          
                        <a href="#"><button title="Edit Resources" class="btn btn-success btn-xs" onclick="edit_btn('<?= $row->resource_id?>',
                            '<?= $row->resourceTitle?>',
                            '<?= $row->resourceAuthor?>',
                            '<?= $row->date_pub?>',
                            '<?= $row->journal_book?>',
                            '<?= $row->place_of_publication?>',
                            '<?= $row->publisher?>',
                            '<?= $row->resourceType?>')"><span class="glyphicon glyphicon-edit"></span></button></a>

                          <a href="#" onclick="deleteconfirm(<?php echo $row->resource_id;?>);"><button type="submit" class="btn btn-danger btn-xs confirm" data-toggle="#" data-target="#" id="delbtn" title="Delete Resources"><span class="glyphicon glyphicon-trash"></span></button></a>
                          
                          <a href="<?php echo $row->resourceFile; ?>" target="_blank"><button title="Download Resources" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-download-alt"></span></button><a>

                           <?php if( $row->resourceType == 'Public') : ?>
                      <a href="#"><button disabled="" title="Resource already public cannot send" class="btn btn-info btn-xs" onclick="send_btn('<?= $row->resource_id?>')"><span class="glyphicon glyphicon-envelope"></span></button><a>
         <?php else : ?>
                    <a href="#"><button title="Send Resources" class="btn btn-info btn-xs" onclick="send_btn('<?= $row->resource_id?>')"><span class="glyphicon glyphicon-envelope"></span></button><a>
          <?php endif; ?>
                        </td>
                    
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
  
    <br><br>
    <footer >
      
    </footer>

    <!-- Modals -->
    <?php 
      if(!empty($success_msg)) {
        echo '<p class="statusMsg">'.$success_msg.'</p>';
      } elseif(!empty($error_msg)) {
        echo '<p class="statusMsg">'.$error_msg.'</p>';
        }
    ?>
    <!-- Add Page -->
<div class="modal fade" id="createLearning" tabindex="-1" role="dialog" aria-labelledby="myModalLearning">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLearning">Add Learning Resources</h4>
      </div>
      <div class="modal-body">
         <?php echo form_open_multipart('staff_resource/createResource'); ?>
        <div class="form-group">
          <label>Author(s)</label>
          <input type="hidden" class="form-control" name="resource_id" placeholder="Resource ID" value="">
          <input type="text" class="form-control" name="resourceAuthor" value="" required style="text-transform: capitalize;">
        </div>
         <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="resourceTitle" value="" required style="text-transform: capitalize;">
        </div>
        <div class="form-group">
          <label>Year of Publication</label><span class="year">&nbsp;*Must be a valid year</span>
          <input type="number" class="form-control" name="date_pub" min="1200" max="4000" required>
        </div>
        <div class="form-group">
          <label>Journal/Book</label>
          <input type="text" class="form-control" name="journal_book" value="" required style="text-transform: capitalize;">
        </div>
        <div class="form-group">
          <label>Place of Publication</label>
          <input type="text" class="form-control" name="place_of_publication" value="" required style="text-transform: capitalize;">
        </div>
        <div class="form-group">
          <label>Publisher</label>
          <input type="text" class="form-control" name="publisher" value="" required style="text-transform: capitalize;">
        </div>
        <div class="form-group">
          <label>Restriction Type</label>
          <div class="radio">
            <label class="radio-inline">
            <input type="radio" class="rad_btn" name="resourceType" id="inlineRadio1" value="Public" checked="" > Public</label>
            <label class="radio-inline">
            <input type="radio" class="rad_btn" name="resourceType" id="inlineRadio1" value="Restricted" > Restricted</label>
            <label class="radio-inline">
            <input type="radio" class="rad_btn" name="resourceType" id="inlineRadio1" value="Museum" > Museum</label>
          </div>
        </div>
        <div class="form-group">
          <label>File</label>
          <span class="label label-default">For Documents/PDF only </span>
          <input type="file" name="resourceFile" id="file" class="form-control" onchange="return fileValidation()" required>
        </div>
        <div class="form-group">
          <label>Image</label>
          <span class="label label-default">For Images only </span>&nbsp;&nbsp;
        <img src="<?php echo base_url()?>userassets/images/13-512.png" id="imagePreview" width="100px" height="100px"><br><br>
          <input type="file" name="resourceImage" id="file2" class="form-control" onchange="return fileValidation2()">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <?php echo form_close() ?>
    </div>
      
  </div>
</div>



  <!-- EDIT -->


<div class="modal fade" id="editLearning" tabindex="-1" role="dialog" aria-labelledby="myModalLearning">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLearning">Edit Learning Resources</h4>
      </div>
      <div class="modal-body">
         <?php echo form_open_multipart('staff_resource/updateResources'); ?>
        <div class="form-group">
          <label>Author(s)</label>
          <input type="hidden" class="form-control" name="resource_id" id="resource_id" placeholder="Resource ID" value="">
          <input type="text" class="form-control" name="resourceAuthor" id="resourceAuthor" value="" required style="text-transform: capitalize;">
        </div>
         <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="resourceTitle" id="resourceTitle" value="" required style="text-transform: capitalize;">
        </div>
        <div class="form-group">
          <label>Year of Publication</label><span class="year">&nbsp;*Must be a valid year</span>
          <input type="text" class="form-control" name="date_pub" id="date_pub" value="" min="1200" max="4000" required>
        </div>
        <div class="form-group">
          <label>Journal/Book</label>
          <input type="text" class="form-control" name="journal_book" id="journal_book" value="" required style="text-transform: capitalize;">
        </div>
        <div class="form-group">
          <label>Place of Publication</label>
          <input type="text" class="form-control" name="place_of_publication" id="place_of_publication" value="" required style="text-transform: capitalize;">
        </div>
        <div class="form-group">
          <label>Publisher</label>
          <input type="text" class="form-control" name="publisher" id="publisher" value="" required style="text-transform: capitalize;">
        </div>
        <div class="form-group">
          <label>Restriction Type</label>
          <div class="radio">
            <label class="radio-inline">
            <input type="radio" class="rad_btn" name="resourceType" id="inlineRadio1" value="Public" checked="" > Public</label>
            <label class="radio-inline">
            <input type="radio" class="rad_btn" name="resourceType" id="inlineRadio1" value="Restricted" > Restricted</label>
            <label class="radio-inline">
            <input type="radio" class="rad_btn" name="resourceType" id="inlineRadio1" value="Museum" > Museum</label>
          </div>
        </div>
        <div class="form-group">
          <label>File</label>
          <span class="label label-default">For Documents/PDF only </span>
          <input type="file" name="resourceFile" id="file3"class="form-control" onchange="return fileValidation3()">
        </div>
        <div class="form-group">
          <label>Image</label>
          <span class="label label-default">For Images only </span>&nbsp;&nbsp;
          <img src="<?php echo base_url()?>userassets/images/13-512.png" id="imagePreview4" width="100px" height="100px"><br><br>
          <input type="file" name="resourceImage" id="file4"class="form-control" onchange="return fileValidation4()">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" onclick="isEdit();" name="update" value="Update" class="btn btn-primary">Update</button>
      </div>
      <?php echo form_close() ?>
    </div>    
  </div>
</div>




<!-- SEND -->

<!-- SEND -->

<div class="modal fade" id="sendLearning" tabindex="-1" role="dialog" aria-labelledby="myModalLearning">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php echo form_open_multipart('staff_resource/ressend'); ?>
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLearning">Send Learning Resources</h4>
      </div>
        <div class="modal-body">
          <div class="form-group">
            <label>User email</label>
            <input type="hidden" class="form-control" name="resource_id" id="resource_id2" placeholder="Resource ID" value="">
    <input type="email" class="form-control" name="resource_email" value="" placeholder="Enter User email">
          </div>
        <!-- <div class="modal-footer"> -->
          <button class="btn btn-default" onClick="#">Send</button>
        <!-- </div> -->
        <?php echo form_close() ?>

<br>
<br>
                     <div class="table-responsive">        
              <table class="table table-bordered table-hover" id="example" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="text-center" >Last Name</th>
                    <th class="text-center" >First Name</th>
                    <th class="text-center" >Email</th>
                    <th class="text-center">User Type</th>
                    <th class="text-center">Status</th>
                    <!-- 177px(3) 130px(2) 241px(4) 270(5) other: btn-xs 116px(no btn names) 90px(4xs)-->
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($display as $eachdata){ ?>
                      <tr onclick="myFunc(<?php echo $eachdata->uname;?>);" >
                        <td class="text-center"><?php echo $eachdata->user_lname;?></td>
                        <td class="text-center"><?php echo $eachdata->user_fname;?></td>
                        <td class="text-center"><?php echo $eachdata->uname;?></td>
                        <td class="text-center"><?php echo $eachdata->user_type;?></td>
                        <td class="text-center"><?php echo $eachdata->user_status;?></td>
                    
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
          </div>

      </div>
    </div>
  </div>
</div>



    
    <script src="<?php echo base_url();?>userassets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>userassets/js/swal2.js"></script>
    <script src="<?php echo base_url();?>userassets/js/jquery-confirm.js"></script>



  </body>
</html>

<script>



$(document).ready( function () {
  var table = $('#example').DataTable();
} );




$(document).ready(function(){


  $('#mytable').dataTable({
    "aLengthMenu": [[10, 30, 50, 100, -1], [10, 30, 50, 100, "All"]],
  });

  

}); 

 function edit_btn(id,title,author,date,place,book,publisher,type){
          
          $('#editLearning').modal('show');
          $("#resource_id").val(id);
          $("#resourceTitle").val(title);
          $("#resourceAuthor").val(author);
          $("#date_pub").val(date);
          $("#place_of_publication").val(place);
          $("#journal_book").val(book);
          $("#publisher").val(publisher);
          $(".rad_btn[value='"+ type +"']").prop('checked', true); 
}

 function send_btn(id){
          
          $("#sendLearning").modal('show');
          $("#resource_id2").val(id);

 }

function fileValidation(){
  // $("#createLearning").modal('show');
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.docx|\.doc|\.pdf|\.txt|\.ppt|\.pptx|\.xls|\.xlsx)$/i;
    if(!allowedExtensions.exec(filePath)){
        // alert('Please upload Document file having extensions like .doc /.docx /.pdf /.ppt /.pptx /.xls /.xlsx ONLY');
        $.alert({
            boxWidth: '48%',
            useBootstrap: false,
            columnClass: 'col-md-6 col-md-offset-3',
            icon: 'fa fa-warning',
            title: 'Encountered an error!',
            content: 'Please upload Document file having extensions like .doc /.docx /.pdf /.ppt /.pptx /.xls /.xlsx ONLY.',
            type: 'red',
            });
        fileInput.value = '';
        return false;
    } 
}


function fileValidation2(){
    // $("#editLearning").modal('show');
    var fileInput = document.getElementById('file2');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.bmp)$/i;
    if(!allowedExtensions.exec(filePath)){
        // alert('Please upload Image file having extensions like .jpeg /.jpg /.png /.bmp /.gif ONLY.');
        $.alert({
            boxWidth: '48%',
            useBootstrap: false,
            columnClass: 'col-md-6 col-md-offset-3',
            icon: 'fa fa-warning',
            title: 'Encountered an error!',
            content: 'Please upload Image file having extensions like .jpeg /.jpg /.png /.bmp /.gif ONLY.',
            type: 'red',
            });
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);
                console.log(e.target.result);
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}


function fileValidation3(){
  // $("#createLearning").modal('show');
    var fileInput = document.getElementById('file3');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.docx|\.doc|\.pdf|\.txt|\.ppt|\.pptx|\.xls|\.xlsx)$/i;
    if(!allowedExtensions.exec(filePath)){
        // alert('Please upload Document file having extensions like .doc /.docx /.pdf /.ppt /.pptx /.xls /.xlsx ONLY');
        $.alert({
            boxWidth: '48%',
            useBootstrap: false,
            columnClass: 'col-md-6 col-md-offset-3',
            icon: 'fa fa-warning',
            title: 'Encountered an error!',
            content: 'Please upload Document file having extensions like .doc /.docx /.pdf /.ppt /.pptx /.xls /.xlsx ONLY.',
            type: 'red',
            });
        fileInput.value = '';
        return false;
    } 
}


function fileValidation4(){
    // $("#editLearning").modal('show');
    var fileInput = document.getElementById('file4');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.bmp)$/i;
    if(!allowedExtensions.exec(filePath)){
        // alert('Please upload Image file having extensions like .jpeg /.jpg /.png /.bmp /.gif ONLY.');
        $.alert({
            boxWidth: '48%',
            useBootstrap: false,
            columnClass: 'col-md-6 col-md-offset-3',
            icon: 'fa fa-warning',
            title: 'Encountered an error!',
            content: 'Please upload Image file having extensions like .jpeg /.jpg /.png /.bmp /.gif ONLY.',
            type: 'red',
            });
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview4').attr('src', e.target.result);
                console.log(e.target.result);
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}


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
     window.location = url+"index.php/staff_resource/deleteResources/"+id;
  } else {
    return false;
    // swal("Your imaginary file is safe!");
  }
});
}

</script> 
