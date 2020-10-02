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
                              <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#branch_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add Loading Slip details</span> </button>
                              <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                           </div>
                           <h4 class="page-title">Loading Slip Details</h4>
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
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="userName">Type<span class="text-danger">*</span></label>
                                               <select class="form-control">
                                                <option></option>
                                                </select>
                                             </div>
                                          </div>

                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Branch<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="userName">Ld No.<span class="text-danger">*</span></label>
                                               <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>

                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Extn<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="userName">Load Date<span class="text-danger">*</span></label>
                                               <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>

                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">ULD Date<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="col-md-8">
                                             <div class="form-group">
                                             <label for="userName">Vehicle No.<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                              <input type="checkbox"><span  class="text-primary">Own Vehicle</span>
                                          </div>
                                       </div>
                                       
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                             <label for="userName">Consignor<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Consignee<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                             <label for="userName">Transpoter<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">From</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">To</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Material</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Load Wt</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Charge Wt</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Pkg. Type</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">No. of Pkg.</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Mat. Inv No.</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Inv Date</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Material Amt</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>


                                        <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Freight Rate</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Rate Formula</label>
                                                <select class="form-control">
                                                <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Company KM</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">GST Paid By</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Remark</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <input type="checkbox"><span  class="text-primary">RC BOOK</span>&nbsp; &nbsp;
                                                <input type="checkbox"><span  class="text-primary">TDS Form</span>
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
                                                <label for="userName">CR GST</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Challan No.</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">CN GST</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="row">
                                          <div class="table-responsive">
                                             <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="primary">
                                                   <tr>
                                                      <th></th>
                                                      <th>Charges</th>
                                                      <th>Qty</th>
                                                      <th>Rate</th>
                                                      <th>Amount</th>
                                                      <th></th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>sr.</td>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr><tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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
                                                   </tr>
                                                   <tr>
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

                                       <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                             
                                                <div class="input-group">
                                                   <input type="button" class="form-control btn btn-secondary" value="POD Received" style="width: 150px;">&nbsp; &nbsp;
                                                   <input type="button" class="form-control btn btn-secondary" value="Delivery Address" style="width: 150px;">&nbsp; &nbsp;
                                                   <input type="button" class="form-control btn btn-secondary" value="SaveAS" style="width: 150px;">
                                                   
                                                </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                        <div class="row">
                                           <div class="col-md-12">
                                             <div class="form-group">
                                             
                                                <div class="input-group">
                                                   <input type="button" class="form-control btn btn-secondary" value="E-WayBill No" style="width: 150px;">&nbsp; &nbsp;
                                                   <input type="button" class="form-control btn btn-secondary" value="Document" style="width: 150px;">&nbsp; &nbsp;
                                                   <input type="button" class="form-control btn btn-secondary" value="SMS" style="width: 150px;">
                                                   
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