<!DOCTYPE html>
<html lang="en">
   <?php include_once('include/headerscript.php'); ?>
   <body data-layout="horizontal">
      <div id="wrapper">
         <?php include_once('include/header.php'); ?>
         <div class="content-page">
            <div class="content-page">
               <!-- Start content -->
               <div class="content">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <div class="page-title-box">
                              <div class="page-title-right">
                                 <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#registerme"> <i class="ion ion-md-add mr-1"></i> <span>Register Form</span> </button>
                                 <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                              </div>
                              <h4 class="page-title">Register Details</h4>
                           </div>
                        </div>
                     </div>
                     <div id="registerme" class="collapse">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                         <lable>ID</lable>
                                            <input type="text" class="form-control" value="">
                                         </div>
                                         </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                         <lable>Company Name</lable>
                                            <input type="text" class="form-control" value="">
                                         </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                         <lable>Name</lable>
                                            <input type="text" class="form-control" value="">
                                         </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                         <lable>Email</lable>
                                            <input type="text" class="form-control" value="">
                                         </div>
                                         </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-6">
                                       <button type="button" class="btn btn-secondary waves-effect width-xl">Online Register</button>
                                         </div>
                                    </div>

                                    <br>
                               
                                 </form>
                                 <div class="row justify-content-center">
                                       <div class="col-md-3">
                                       <button type="button" class="btn btn-secondary waves-effect width-xl">Cancel</button>
                                         </div>
                                    </div>  
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- container -->
            </div>
            <?php include_once('include/footer.php');?>
            <!-- end Footer -->
         </div>
         <!-- ============================================================== -->
         <!-- End Page content -->
         <!-- ============================================================== -->
      </div>
      <?php include_once('include/footerscript.php');?>
   </body>
</html>