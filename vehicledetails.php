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
                              <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#branch_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add Vehicle details</span> </button>
                              <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                           </div>
                           <h4 class="page-title">Vehicle Details</h4>
                        </div>
                     </div>
                  </div>
                  <div id="branch_detail" class="collapse">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="card-box">
                              <form class="form-horizontal" role="form">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="userName">Vehicle Number<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="GJ06-AZ-1942" class="form-control" id="userName">
                                                   </div>
                                                </div>
                                                
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <input type="radio" checked>
                                                   <label for="userName" class="text-primary">Own</label>&nbsp; &nbsp;
                                                    <input type="radio">
                                                   <label for="userName" class="text-primary">Attach</label>
                                                   
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   
                                                   <input type="file" name="Document">
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-10">
                                             <div class="form-group">
                                                <label for="userName">Vehicle Owner<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="JAYESHBHAI M NAYAK" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                        <div class="row">
                                          <div class="col-md-10">
                                             <div class="form-group">
                                             <label for="userName">Owner PAN No.<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-2">
                                              <input type="checkbox"><span>RC BOOK</span>
                                          </div>
                                       </div>
                                       
                                       <div class="row">
                                          <div class="col-md-10">
                                             <div class="form-group">
                                             <label for="userName">Owner Mobile<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-2">
                                              <input type="checkbox"><span>TDS Form</span>
                                          </div>
                                       </div>
                                       
                                       <div class="row">
                                          <div class="col-md-10">
                                             <div class="form-group">
                                                <label for="userName">Driver Name<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                        <div class="row">
                                          <div class="col-md-10">
                                             <div class="form-group">
                                             <label for="userName">Driver Mobile<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-10">
                                             <div class="form-group">
                                                <label for="userName">Category</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Bill No.</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Model</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Purchase Date</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Register Date</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Engine No.</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Tr. Chassis No.</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>


                                        <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Chassis No.</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Tr. Tank No</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Empty Weight</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Size</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Passing Weight</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Std. Average</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Purchase Amt</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Loan Amount</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Loan A/c Name</label>
                                                <input type="text" name="nick" parsley-trigger="change" required=""  class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Installment Amt</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Bank HP</label>
                                                <select class="form-control">
                                                <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>

                                       
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Installment Date</label>
                                               <select class="form-control">
                                                <option>0</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Payment A/C Name</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Charge Amt</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Charge Date</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                     </div>
                                    <div class="col-md-6">
                                       <div class="row">
                                       <h6 style="color:red">Tax Expiry Dates</h6>
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Passing Date<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                    
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">State Permit Date<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Insurance Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Tax Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Fitness Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>N. Permit Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>PUC Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Calibration Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Explosive Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Half Year Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Year Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Hydro Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Authorisation Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Other Date<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-md-6">
                                             <div class="form-group">
                                             
                                                <div class="input-group">
                                                   <input type="button" class="form-control btn btn-secondary"
                                                   value="Bank Details">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                             
                                                <div class="input-group">
                                                   <input type="button" class="form-control btn btn-secondary" value="Bank List">
                                                   
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