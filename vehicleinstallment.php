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
                                 <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#loadingcum_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add Vehicle Installment  Details</span> </button>
                                 <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                              </div>
                              <h4 class="page-title">Vehicle Installment details</h4>
                           </div>
                        </div>
                     </div>
                     <div id="loadingcum_detail" class="collapse">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <label for="userName">Month<span class="text-danger">*</span></label>
                                                         <select class="form-control">
                                                            <option></option>
                                                         </select>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <label for="userName">Month<span class="text-danger">*</span></label>
                                                         <select class="form-control">
                                                            <option></option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="form-group">
                                                         <br>
                                                         <input type="button" name="nick" parsley-trigger="change" required="" placeholder="" class="btn btn-secondary" value="OK" id="userName">
                                                      </div>
                                                   </div>
                                                </div> 
                                                </div>
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
                                 <div class="table-responsive">
                                    <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                          <thead class="primary">
                                             <tr>
                                                <th>Sr</th>
                                                <th>Vehicle No</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Loan By</th>
                                                <th>Payment Details</th>
                                                <th>Payment</th>
                                                <th>By A/c Name</th>
                                                <th>Chq. No.</th>
                                                <th>Remark</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td></td>      
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                
                                             </tr>
                                             <tr>
                                                <td></td>      
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                               
                                             </tr>
                                             <tr>
                                                <td></td>      
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
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
                        <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="card-box">
                                    <form class="form-horizontal" role="form">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label for="userName">Remark<span class="text-danger">*</span></label>
                                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                            
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label for="userName">Tot Amt<span class="text-danger">*</span></label>
                                                         
                                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
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