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
                              <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#trip_expense"> <i class="ion ion-md-add mr-1"></i> <span>Trip Expense</span> </button>
                              <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                           </div>
                           <h4 class="page-title">Trip Expense</h4>
                        </div>
                     </div>
                  </div>
                  <div id="trip_expense" class="collapse">
                     <div class="row">  
                        <div class="col-sm-12">
                           <div class="card-box">
                              <form class="form-horizontal" role="form">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label for="userName">Branch<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="BARODA" class="form-control" id="userName">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Trip No<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="57245" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Trip No<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="57245" class="form-control" id="userName">
                                             </div>
                                          </div>
                                          
                                       </div>
                                       
                                       
                                       <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group"> 
                                                <label> Date</label>
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
                                                <label>ULD  Date</label>
                                                     <div class="input-group">
                                                     <input type="text" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" id="datepicker">
                                                     <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                     </div>
                                             </div>
                                        </div>
                                       </div>
                                      
                                    </div>
                                    

                                    <div class="col-md-3">
                                       <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Vehicle<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="GJ-06-AC-4521" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div>     

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Driver<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Category<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">From<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="MAHUVAD" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">To<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="GANDHIDHAM" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div>           
                                    </div>

                                    <div class="col-md-3">
                                       <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Start KM<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div>     

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Return KM<span class="text-danger">*</span></label>
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
                                                <label for="userName">Vh Frieght<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                              
                                    </div>

                                    <div class="col-md-3">
                                       <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Used Diesle<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div>     

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Given Diesle<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Bal Diesle<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Dsl Average<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0" class="form-control" id="userName">
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
                     <div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                        <thead>
                                            <tr role="row">
                                               <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Name: activate to sort column descending"></th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Position: activate to sort column ascending">Charges</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Office: activate to sort column ascending">Qty</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Age: activate to sort column ascending">Rate</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Start date: activate to sort column ascending">Amount</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Cr. A/C. Name</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Date</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Dr. A/C. Name</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Narration</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Vou.Type</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Chq.No</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">chq.Date</th>
                                             </tr>
                                        </thead>

                                        <tbody>
                             
                                        <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1">1</td>
                                                <td>Total Trip Exp</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0.00</td>
                                                <td></td>
                                                <td></td>
                                                <td>TRIP EXPENSE</td>
                                                <td></td>
                                                <td>JOURNAL</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                           
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1">2</td>
                                                <td>Driver Balance</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0.00</td>
                                                <td></td>
                                                <td></td>
                                                <td>CASH ON HAND</td>
                                                <td></td>
                                                <td>JOURNAL</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                             <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"></td>
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
                                    </table></div></div>

                                    <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                                <label for="userName">Remark</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                       </div>
                                       <div class="col-md-2 mt-4">
                                       <div class="form-group ml-auto">
                                             <button type="button" class="btn btn-light waves-effect width-md">Import Standard</button>
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