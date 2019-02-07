<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"></h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                        <h4 class="m-t-0 text-info">$58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                        <h4 class="m-t-0 text-primary">$48,356</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- End Bread crumb and right sidebar toggle -->
     <!-- Start Page Content -->

    <div class="row">
      <div class="col-12">
        <div class="card">
           <div class="card-body">
             <h1><i class="fa fa-list"></i> Feedback Loop handlers</h1>
              <?php if ($this->session->userdata('role') == 'admin'): ?>
                <a href="<?php echo base_url('admin/ui/notification'); ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> New feedback loop handler</a> &nbsp;
                   <!-- Large button groups (default and split) -->
                       <!-- Example split danger button -->
                <th><P>sort by</P><div class="dropdown"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Name
                  </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">created at</a>
              <a class="dropdown-item" href="#">Updated at</a>
            </div>
            <button type="button"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></button>

         </div></th>
                    <!-- check logged user role permissions -->
                 </tr>
                    <?php if(check_power(1)):?>
                        <a href="<?php //echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                    <?php endif; ?>
                <?php endif ?>
                

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <tbody>
                           <!-- <?php //foreach ($users as $user): ?>-->
                                
                             <tr>
                                <td>
                                 <center><i class="fa fa-retweet" aria-hidden="true" style="font-size: 167px;"></i>
                                    <p>you have no bounce handler</p>
                                 </center>     
                                </td>
                             </tr>

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>



<?php //foreach ($users as $user): ?>
 
<div class="modal fade" id="confirm_delete_<?php echo $user['id'];?>">
  

      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->

    
</div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->