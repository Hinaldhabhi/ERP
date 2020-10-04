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
                           <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#LRentry_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add LR Entry</span> </button>
                           <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                        </div>
                        <h4 class="page-title">LR Entry</h4>
                     </div>
                  </div>
               </div>
               <div id="LRentry_detail" class="collapse">
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
                                                <option>To Be Billed</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Branch<span class="text-danger">*</span></label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="BARODA" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Lr No<span class="text-danger">*</span></label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="5764" class="form-control" id="userName">
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
                                             <label>Load Date</label>
                                             <div class="input-group">
                                                <input type="date" class="form-control" placeholder="mm/dd/yyyy">
                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>ULD Date</label>
                                             <div class="input-group">
                                                <input type="date" class="form-control" placeholder="mm/dd/yyyy">
                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Vehicle No<span class="text-danger">*</span></label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="GJ-o6 Ab-7274" class="form-control" id="userName">
                                          </div>
                                       </div>
                                       <div class="col-md-6 mt-5">
                                          <div class="checkbox">
                                             <input id="checkbox0" type="checkbox">
                                             <label for="checkbox0" style="color:blue">
                                             Own Vehicle
                                             </label>
                                          </div>
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
                                             <label for="userName">Billing Party<span class="text-danger">*</span></label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="B.M.ROAD LINES PVT LTD" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="userName">From<span class="text-danger">*</span></label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="PANIPAT" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="userName">To<span class="text-danger">*</span></label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="DAHEJ" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="userName">Material</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="M.E.G" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Load wt</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="24.04" class="form-control" id="userName">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Charge Wt</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="24.65" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Pkg Type</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">No of Pkg</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="userName">Mat. Inv No</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Inv Date</label>
                                             <div class="input-group">
                                                <input type="date" class="form-control" placeholder="mm/dd/yyyy">
                                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Material Amt</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Frieght Rate</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="1750" class="form-control" id="userName">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName"> Rate Formula</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Rate * Weight" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Company KM</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">GST Paid By</label>
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="None" class="form-control" id="userName">
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
                                          <div class="checkbox">
                                             <input id="checkbox" type="checkbox">
                                             <label for="checkbox" style="color:blue">
                                             RC Book
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkbox">
                                             <input id="checkbox" type="checkbox">
                                             <label for="checkbox" style="color:blue">
                                             TDS Form
                                             </label>
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
                                             <input type="text" name="nick" parsley-trigger="change" required="" placeholder="5764" class="form-control" id="userName">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <table class="table table-bordered m-0">
                                             <thead>
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
                                                   <th scope="row">1</th>
                                                   <td>Freight</td>
                                                   <td>0</td>
                                                   <td>0</td>
                                                   <td>42003.50</td>
                                                   <td>FREIGH</td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">2</th>
                                                   <td>Total Freight</td>
                                                   <td>0</td>
                                                   <td>0</td>
                                                   <td>42003.50</td>
                                                   <td>FREIGH</td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">3</th>
                                                   <td>Net Freight</td>
                                                   <td>0</td>
                                                   <td>0</td>
                                                   <td>42003.50</td>
                                                   <td>FREIGH</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <br>
                                                <input type="button"   class="btn btn-secondary" style="width: 200px;" value="POD Pending">
                                                <input type="button"   class="btn btn-secondary" style="width: 200px;" value="Delivery Address">
                                                <input type="button"   class="btn btn-secondary" style="width: 200px;" value="SaveAs"><br>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <br>
                                                   <input type="button"   class="btn btn-secondary" style="width: 200px;" value="E-Way Bill No">
                                                   <input type="button"   class="btn btn-secondary" style="width: 200px;" value="Document">
                                                   <input type="button"   class="btn btn-secondary" style="width: 200px;" value="SMS"><br>
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