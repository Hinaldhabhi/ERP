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
                                 <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#loadingcum_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add Round Trip  Details</span> </button>
                                 <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                              </div>
                              <h4 class="page-title">Round Trip details</h4>
                           </div>
                        </div>
                     </div>
                     <div id="loadingcum_detail" class="collapse">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">
                                       <div class="col-md-5">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Branch<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Trip No.<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Extn<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Date</label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Vehicle</label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Driver</label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Start KM<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Return KM<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Trip KM<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Used Diesel<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Dsl Average<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group" align="center">
                                                   <input type="button" class="btn btn-secondary" value="Select LR" style="width: 200px;"><br><br>
                                                   <input type="checkbox"><label>Select All</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Total LR<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Selected LR<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">LR Freight<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Vh Freight<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Remark<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-7">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="row">
                                                   <div class="card-box table-responsive">
                                                      <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                         <thead class="primary">
                                                            <tr>
                                                               <th>Sr.No</th>
                                                               <th>Lr.No.</th>
                                                               <th>Date</th>
                                                               <th>Vehicle</th>
                                                               <th>Party</th>
                                                               <th>From</th>
                                                               <th>To</th>
                                                               <th>Weight</th>
                                                               <th>Freight</th>
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
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <br>
                                                      <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                         <thead class="primary">
                                                            <tr>
                                                               <th>Charges</th>
                                                               <th>Qty</th>
                                                               <th>Date</th>
                                                               <th>Rate</th>
                                                               <th>Amount</th>
                                                               <th>Cr. A/c. Name</th>
                                                               <th>Date</th>
                                                               <th>Dr. A/c. Name</th>
                                                               <th>Narration</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>Sr.</td>
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
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <form class="form-horizontal" role="form">
                                                      <div class="row">
                                                         <div class="col-md-12">
                                                            <div class="row">
                                                               <div class="col-md-12">
                                                                  <div class="form-group">
                                                                     <label for="userName">Remark<span class="text-danger">*</span></label>
                                                                     <div class="row">
                                                                        <div class="col-md-4">
                                                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                           <input type="button"   class="btn btn-secondary" id="userName" value="Trip Expense"> 
                                                                         </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md-12">
                                                            <div class="row">
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label for="userName">Set LR<span class="text-danger">*</span></label>
                                                                     <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-4">
                                                                  <div class="form-group">
                                                                      <label for="userName">Tot LR<span class="text-danger">*</span></label>
                                                                     <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                                                  </div>
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
                           </div>
                        </div>
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
                                 <th>Sr.No</th>
                                 <th>Lr.No.</th>
                                 <th>Lr Extn</th>
                                 <th>Vehicle</th>
                                 <th>Date</th>
                                 <th>Consignor</th>
                                 <th>Consignee</th>
                                 <th>From</th>
                                 <th>To</th>
                                 <th>Material</th>
                                 <th>Pkg Type</th>
                                 <th>Ld. Wt</th>
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
                        <form class="form-horizontal" role="form">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="userName">Remark<span class="text-danger">*</span></label>
                                          <div class="row">
                                             <div class="col-md-4">
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                             </div>
                                             <div class="col-md-4">
                                                <input type="button"   class="btn btn-secondary" id="userName" value="Trip Expense"> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label for="userName">Set LR<span class="text-danger">*</span></label>
                                          <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label for="userName">Tot LR<span class="text-danger">*</span></label>
                                          <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                       </div>
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