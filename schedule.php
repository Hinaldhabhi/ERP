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
                                 <button class="btn btn-secondary waves-effect" data-toggle="collapse" href="#schedule_detail"> <i class="ion ion-md-add mr-1"></i> <span>Add Schedule Details</span> </button>
                                 <!-- <button class="btn btn-primary mb-30 d-inline-block"  ></button> -->
                              </div>
                              <h4 class="page-title">Schedule Details</h4>
                           </div>
                        </div>
                     </div>
                     <div id="schedule_detail" class="collapse">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <form class="form-horizontal" role="form">
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="radio">
                                             <input type="radio" name="radio" id="radio1" value="option1" checked="">
                                             <label for="radio1" style="color:blue;">
                                             Daily
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="radio" >
                                             <input type="radio" name="radio" id="radio2" value="option1" checked="">
                                             <label for="radio2"  style="color:blue;">
                                             Weekly
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="col-sm-10">
                                             <select class="form-control">
                                                <option></option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="radio"  style="color:blue;">
                                             <input type="radio" name="radio" id="radio3" value="option1" checked="">
                                             <label for="radio3">
                                             Monthly
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="col-sm-10">
                                             <select class="form-control">
                                                <option></option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="radio"  style="color:blue;">
                                             <input type="radio" name="radio" id="radio4" value="option1" checked="">
                                             <label for="radio4">
                                             On Date
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="col-sm-10">
                                             <select class="form-control">
                                                <option></option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="radio"  style="color:blue;">
                                             <input type="radio" name="radio" id="radio6" value="option1" checked="">
                                             <label for="radio6">
                                             Till Date
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="col-sm-10">
                                             <select class="form-control">
                                                <option></option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <label>
                                          Message
                                          </label>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group row">
                                             <div class="col-md-10">
                                                <input type="text" class="form-control" value="Some text value...">
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