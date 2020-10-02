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
                              <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#challan_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add Challan Details</span> </button>
                              <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                           </div>
                           <h4 class="page-title">Challan details</h4>
                        </div>
                     </div>
                  </div>
                  <div id="challan_detail" class="collapse">
                     <div class="row">  
                        <div class="col-sm-12">
                           <div class="card-box">
                              <form class="form-horizontal" role="form">
                                 <div class="row">
                                    <div class="col-md-4">
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
                                                <label for="userName">Ch No<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="57245" class="form-control" id="userName">
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
                                    

                                    <div class="col-md-4">
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
                                                <label for="userName">Broker<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">From<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="RANIA" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">To<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="MAHUVAD" class="form-control" id="userName">
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
                                    </div>

                                    <div class="col-md-4">
                                       <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Charge Wt<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
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
                                                <label for="userName">Frieght Rate<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="0.00" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Formula<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div> 

                                          <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userName">Add LR No<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                            </div>
                                       </div>           
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="checkbox">
                                          <input id="checkbox1" type="checkbox">
                                          <label for="checkbox1">
                                            Select All
                                           </label>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                    <button class="btn btn-light waves-effect waves-light">Select All</button>
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
                                               <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-sort="ascending" aria-label="Name: activate to sort column descending">Sr No</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Position: activate to sort column ascending">Lr No</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Office: activate to sort column ascending">Lr Extn</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Age: activate to sort column ascending">Vehicle</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Start date: activate to sort column ascending">Date</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Consignor</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Consignee</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">From</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">To</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Material</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Pkg Type</th>
                                               <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  aria-label="Salary: activate to sort column ascending">Ld. Wt</th>
                                             </tr>
                                        </thead>

                                        <tbody>
                             
                                        <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1">1</td>
                                                <td>57541</td>
                                                <td></td>
                                                <td>GJ-06-AC-4568</td>
                                                <td>07-02-2020</td>
                                                <td></td>
                                                <td></td>
                                                <td>RANIA</td>
                                                <td>NAHUVAD</td>
                                                <td></td>
                                                <td>20.46</td>
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
                                       <div class="col-md-4">
                                       <div class="form-group">
                                                <label for="userName">Remark</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                       </div>
                                       <div class="col-md-2 mt-4">
                                       <div class="form-group">
                                             <button type="button" class="btn btn-secondary waves-effect width-md">Trip Expense</button>
                                             </div>
                                       </div>
                                       <div class="col-md-3">
                                       <div class="form-group">
                                                <label for="userName">Sel LR</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
                                             </div>
                                       </div>
                                       <div class="col-md-3">
                                       <div class="form-group">
                                                <label for="userName">Tot LR</label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" id="userName">
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