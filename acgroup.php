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
                              <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#ac_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add A/C Group Details</span> </button>
                              <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                           </div>
                           <h4 class="page-title">A/C Group Details</h4>
                        </div>
                     </div>
                  </div>
                  <div id="ac_detail" class="collapse">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="card-box">
                              <form class="form-horizontal" role="form">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="userName"> Group Name<span class="text-danger">*</span></label>
                                          <input type="text" name="nick" parsley-trigger="change" required="" placeholder="UNSECONDSEW LOANS" class="form-control" id="userName">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="userName"> Under Group<span class="text-danger">*</span></label>
                                          <input type="text" name="nick" parsley-trigger="change" required="" placeholder="LOANS" class="form-control" id="userName">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="userName"> Display In<span class="text-danger">*</span></label>
                                          <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Balance Sheet" class="form-control" id="userName">
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="row">
                                    <div class="col-md-12">
                                       <div class="dropdown">
                                          <label for="userName"> Document For<span class="text-danger">*</span></label>
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Vehicle
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="deopdownmENUbUTTON">
                                          <a class="dropdown-item" href="#">Active</a>
                                          </div>
                                       </div>
                                    </div>
                                    </div> -->
                                 <div class="row">
                                    <div class="col-md-6"  style="padding-top: 25px">
                                       <button type="button" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5" id="submit_completed">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box table-responsive">
                           <h4 class="header-title"><b>Buttons example</b></h4>
                           <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead>
                                 <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                 </tr>
                                 <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                 </tr>
                              </tbody>
                           </table>
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