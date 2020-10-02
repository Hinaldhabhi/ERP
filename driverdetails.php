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
                              <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#branch_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add Driver details</span> </button>
                              <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                           </div>
                           <h4 class="page-title">Driver Details</h4>
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
                                             <div class="form-group">
                                                <label for="userName">Driver Name<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="driver name" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">A/C Type<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="A/C type" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Op. Balance<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                             <label for="userName">Op. Balance<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <h6 style="color:red">Permanent Address</h6>
                                       
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Add 1</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="PAREWAR, POST AHIRAI" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Add 2</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="BAZAR, AHIRAI" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Area</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="KHUSINAGAR" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">City</label>
                                                <input type="text" name="nick" parsley-trigger="change" required=""  class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">State</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="uttar Pradesh" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Mobile No</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="9875487541" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Date</label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" id="datepicker">
                                                   <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Salary</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="9000" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Vehicle No</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="GJ06-AV-6794" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="checkbox">
                                                <input id="checkbox0" type="checkbox">
                                                <label for="checkbox0" style="color:blue">
                                                      Active
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="checkbox">
                                                <input id="checkbox0" type="checkbox">
                                                <label for="checkbox0" style="color:blue">
                                                      Add Driver in A/C Master
                                                </label>
                                             </div>
                                          </div>
                                       </div>

                                      

                                    </div>
                                    <div class="col-md-6">
                                       <div class="row">
                                       <h6 style="color:red">Driving Licence information</h6>
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">No<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                    
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Issue By<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Issue Date</label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" id="datepicker">
                                                   <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Expiry Date</label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" id="datepicker">
                                                   <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                       <h6 style="color:red">Hazardous Licence Information</h6>
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">No<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                       
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Issue By<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Issue Date</label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" id="datepicker">
                                                   <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label>Expiry Date</label>
                                                <div class="input-group">
                                                   <input type="text" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" id="datepicker">
                                                   <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                   <input type="file" class="filestyle" data-buttonname="btn-default">
                                             </div>
                                          </div>
                                       </div> 


                                    </div>
                                 </div>
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