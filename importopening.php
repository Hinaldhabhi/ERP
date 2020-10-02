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
                              <button class="btn btn-secondary waves-effect" data-toggle="" href="#registerme"> <i class="ion ion-md-add mr-1"></i> <span>Register Form</span> </button>
                              <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                           </div>
                           <h4 class="page-title">Register Details</h4>
                        </div>
                     </div>
                  </div>
                  <div id="registerme" class="">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="card-box">
                              <form class="form-horizontal" role="form">
                                 <div class="row">
                                    <div class="col-md-2">
                                       <label>
                                       Select Category
                                       </label>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="col-sm-10">
                                          <input type="text" class="form-control" value="">
                                       </div>
                                    </div>
                                    <div class="col-md-2">
                                       <button type="button" class="btn btn-secondary waves-effect width-md">Select Comapany</button>
                                    </div>
                                 </div>
                                 <div class="row mt-5">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-6">
                                       <div class="col-sm-10">
                                          <div class="checkbox">
                                             <input id="checkbox1" type="checkbox">
                                             <label for="checkbox1">
                                             Import Opening Balance
                                             </label>
                                          </div>
                                       </div>
                                       
                                    </div>

                                    
                              </form>
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