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
                                 <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#loadingregister_details"> <i class="ion ion-md-add mr-1"></i> <span>Add Trip Register (Driver Wise) Details</span> </button>
                                 <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                              </div>
                              <h4 class="page-title">Trip Register details</h4>
                           </div>
                        </div>
                     </div>
                     <div id="loadingregister_details" class="collapse">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">

                                       <div class="col-md-6">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <h6 style="color: blue;text-align: center;" class="pull-right">Trip Register</h6>
                                                   <label for="userName">Group Type<span class="text-danger">*</span></label>
                                                <div class="row">
                                                   <div class="col-md-10">
                                                       <select class="form-control">
                                                         <option></option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-2">
                                                      <input type="button" name="" class="btn btn-secondary" value="show">
                                                   </div>
                                                 </div>  
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">View List<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-10">
                                                         <select class="form-control">
                                                         <option>Trip Reg sum 1</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-2">
                                                      <input type="button" name="" class="btn btn-secondary" value="....">
                                                   </div>
                                                   
                                                 </div>  
                                                </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Find By<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                             
                                          </div>
                                          
                                    </div>
                                    <div class="col-md-6">
                                          <div class="row">
                                 
                                          <div class="table-responsive">
                                             <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                              <!--  <thead class="primary">
                                                   <tr>
                                                      <th>Sr.No</th>
                                                      <th>Lr.No</th>
                                                      <th>LrExtn</th>
                                                      <th>Date</th>
                                                      <th>Vehicle</th>
                                                      <th>From</th>
                                                      <th>To</th>
                                                      <th>Freight</th>
                                                     <th></th>
                                                   </tr>
                                                </thead> -->
                                                <tbody>
                                                   <tr>
                                                      <td> No From</td>
                                                      <td></td>
                                                      <td></td>
                                                        
                                                   </tr>
                                                   <tr>
                                                      <td>Data From</td>
                                                      <td></td>
                                                      <td></td>
                                                   </tr>
                                                   <tr>
                                                      <td>Driver Name</td>
                                                      <td></td>
                                                      <td></td>
                                                   </tr>
                                                   <tr>
                                                      <td>Vehicle No</td>
                                                      <td></td>
                                                      <td></td>
                                                      
                                                   </tr>
                                                   
                                                   <tr>
                                                      <td>Station To</td>
                                                      <td></td>
                                                      <td></td>
                                                   </tr>
                                                   <tr>
                                                      <td></td>
                                                      <td></td>
                                                      <td></td>
                                                   </tr>
                                                  
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
 
                                 </div>
                              </div>                          
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-12">
                                       <div class="row">
                                          <div class="table-responsive">
                                             <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="primary">
                                                   <tr>
                                                      <th>Driver</th>
                                                      <th>Count</th>
                                                      <th>Trip KM</th>
                                                      <th>Weight</th>
                                                      <th>Total Trip Exp</th>
                                                     
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td></td>
                                                      <td>879</td>
                                                      <td>0</td>
                                                      <td>45.110</td>
                                                      <td></td>
                                                      
                                                   </tr>
                                                   
                                                   
                                                </tbody>
                                             
                                             </table>
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