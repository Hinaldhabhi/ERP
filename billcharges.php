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
                                 <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#billcharges"> <i class="ion ion-md-add mr-1"></i> <span>Bill Charges</span> </button>
                                 <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                              </div>
                              <h4 class="page-title">Bill Charges Details </h4>
                           </div>
                        </div>
                     </div>
                     <div id="billcharges" class="collapse">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-2 control-label" style="color:red;">Find By</label>
                                             <div class="col-sm-10">
                                                <select class="form-control">
                                                   <option></option>
                                                   <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row mt-3">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Charges For</label>
                                             <div class="col-sm-9">
                                                <select class="form-control">
                                                   <option>Trip Expense</option>
                                                   <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Charges Name</label>
                                             <div class="col-sm-9">
                                                <input type="text" class="form-control" value="" placeholder="Driver Balance">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Display Name</label>
                                             <div class="col-sm-9">
                                                <input type="text" class="form-control" value="" placeholder="Driver Balance">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Heading</label>
                                             <div class="col-sm-9">
                                                <input type="text" class="form-control" value="" placeholder="Driver Balance">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Display After</label>
                                             <div class="col-sm-9">
                                                <select class="form-control">
                                                   <option></option>
                                                   <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Property</label>
                                             <div class="col-sm-9">
                                                <select class="form-control">
                                                   <option>nutral</option>
                                                   <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Category</label>
                                             <div class="col-sm-9">
                                                <select class="form-control">
                                                   <option>Driver balance</option>
                                                   <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Cartage Payment</label>
                                             <div class="col-sm-9">
                                                <select class="form-control">
                                                   <option></option>
                                                   <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label">Vehicle Expenses</label>
                                             <div class="col-sm-9">
                                                <select class="form-control">
                                                   <option></option>
                                                   <option></option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row mt-2">
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <label class="col-sm-3 control-label"> </label>
                                             <div class="col-sm-9">
                                                <div class="checkbox">
                                                   <input id="checkbox1" type="checkbox">
                                                   <label for="checkbox1" style="color:skyblue;">
                                                   Standard trip Charge
                                                   </label>
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