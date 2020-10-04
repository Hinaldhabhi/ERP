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
                                 <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#loadingcum_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add Loading Cum Memo Details</span> </button>
                                 <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                              </div>
                              <h4 class="page-title">Loading Cum Memo details</h4>
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
                                                   <label for="userName">Type<span class="text-danger">*</span></label>
                                                   <select class="form-control">
                                                      <option></option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
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
                                                   <label for="userName">Ld No<span class="text-danger">*</span></label>
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
                                             <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="userName"></label>
                                                  
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">&nbsp; &nbsp; &nbsp;
                                                  
                                                   
                                                </div>
                                                </div> -->
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Loading Date<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">UnLoad Date<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Vehicle No.<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="userName">Memo No:<span class="text-danger">*</span></label>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                                   <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                                   <input type="button" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control btn btn-secondary" id="userName" value="Trip Expense">
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
                                 <div class="col-sm-12">
                                    <form class="card-box form-horizontal" role="form">
                                       <div class="row">
                                          <div class="col-md-6">
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
                                                      <label for="userName">Considnee<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="userName">Transporter / Billing Party<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="userName">Vehicle Owner / Broker<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
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
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="userName">To<span class="text-danger">*</span></label>
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
                                                <div class="col-md-12">
                                                   <div class="form-group">
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
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="userName">No. of Pkg</label>
                                                               <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="userName">Net KM</label>
                                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                            </div>
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
                                                      <label for="userName">Commission<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="userName">A/C Name<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label for="userName">Chq No.<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label for="userName">Date<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="userName">Narration<span class="text-danger">*</span></label>
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
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <form class="card-box form-horizontal" role="form">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="row">
                                                <div class="col-md-8">
                                                   <div class="form-group">
                                                      <label for="userName">Remark<span class="text-danger">*</span></label>
                                                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName"><br>
                                                      <input type="file" class="filestyle">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <div class="input-group">
                                                   <input type="button" class="form-control btn btn-secondary" value="POD">&nbsp; &nbsp;
                                                   <input type="button" class="form-control btn btn-secondary" value="E-Way Bill No" >
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