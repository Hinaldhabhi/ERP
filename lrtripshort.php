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
                                 <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#loadingcum_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add LR Trip  Details</span> </button>
                                 <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                              </div>
                              <h4 class="page-title">LR/Trip  Short details</h4>
                           </div>
                        </div>
                     </div>
                     <div id="loadingcum_detail" class="collapse">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Lr Type<span class="text-danger">*</span></label>
                                                    <select class="form-control" disabled="">
                                                       <option>To Be Billed</option>
                                                    </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Branch<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="BARODA" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Lr No<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="5764" class="form-control" id="userName">
                                                      </div>
                                                      <div class="col-md-6">
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div> 
                                       </div>
                                       <div class="col-md-4">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Load Date<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <input type="date" placeholder="03-09-2020" class="form-control" id="userName">
                                                      </div>
                                                      <div class="col-md-6">
                                                         <input type="button"  class="btn btn-secondary" value="SMS">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">UnLoad Date<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <input type="date" placeholder="" class="form-control" id="userName">
                                                      </div>
                                                      <div class="col-md-6">
                                                         <input type="button"  class="btn btn-secondary" value="Documents">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Vehicle No<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <input type="text" placeholder="GJ06-AZ-7727" class="form-control" id="userName">
                                                      </div>
                                                      <div class="col-md-6">
                                                         <input type="checkbox"><label class="text-primary">Own Vehicle</label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Chln NO<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="5764" class="form-control" id="userName"><br>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <input type="button" class="btn btn-secondary" value="..."><br>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Ref. No<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="5587" class="form-control" id="userName"><br>
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
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">
                                       <div class="col-md-4">
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
                                                   <label for="userName">Cinsignee<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Billing Party<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-10">
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="B.M ROADLINES P LTD" class="form-control" id="userName">
                                                      </div>
                                                      <div class="col-md-2">
                                                         <input type="button"  class="btn btn-secondary" value="...">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Broker<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-10">
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="B.M ROADLINES P LTD" class="form-control" id="userName">
                                                      </div>
                                                      <div class="col-md-2">
                                                         <input type="button"  class="btn btn-secondary" value="...">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div> 
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Driver Name<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
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
                                                   <label for="userName">Material<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="M.E.G." class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <label for="userName">Mat. Rate<span class="text-danger">*</span></label>
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                                      </div>
                                                      <div class="col-md-6">
                                                         <label for="userName">Pkg.<span class="text-danger">*</span></label>
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div> 
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Pkg. Type<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Mat. Inv No.<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="M.E.G." class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div> 
                                       </div>
                                       <div class="col-md-4">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Load Wt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="24.002" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Unloading Wt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.000" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Charge Wt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="24.002" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Short Wt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.000" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Allowed Short %<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Allowed Short Wt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.000" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Actual Short Wt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.000" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Short Rate<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Short Wt Amt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Material Amt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Net KM<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Trip KM<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">DCPI NO<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">DCPI Dt<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">GP No<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Order NO<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Container NO<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">CRC NO<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Size<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
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
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Remark<span class="text-danger">*</span></label>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                      </div>
                                                      <div class="col-md-6">
                                                         <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12"><br>
                                                         <input type="button" value="Trip Expese" class="btn btn-secondary">
                                                         <input type="button" class="btn btn-secondary" value="POD Pending">
                                                         <input type="button" class="btn btn-secondary" value="E-Eay Bill No">
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