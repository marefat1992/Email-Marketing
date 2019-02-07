<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">settings</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
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
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
     <div class="col-md-12">
            <div class="card">
                <div class="card-body p-b-0">
                    <h3 class="card-title">Settings</h3>
                 </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs customtab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">general</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">System Email</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#URLs" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">System URLs</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Background Job</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">License</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Upgrade Manager</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home2" role="tabpanel">
                        <div class="p-20">
                            <h2>General</h2>
                            <div class="form-group">
                                    <label class="col-md-12">Site name</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Email Marketimg webapp" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Site keyword</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Email Marketimg webapp" class="form-control form-control-line">
                                    </div>
                                </div>
                     <div class="form-group">
                        <div class="col-md-5">
                            <label>Site logo(small)*</label>
                               <span class="input-group-addon btn-file"> <i class="fa fa-plus"></i>  
                               <input type="file" name="..."> no chosen file</span></div>
                         </div>
                    </div>
                     <div class="form-group">
                        <div class="col-md-5">
                            <label>Site logo(large)*</label>
                               <span class="input-group-addon btn-file"> <i class="fa fa-plus"></i>  
                               <input type="file" name="..."> no chosen file</span></div>
                         </div>
                    </div>
                </div>
                    <div class="tab-pane  p-20" id="profile2" role="tabpanel">2</div>
                    <div class="tab-pane  p-20" id="URLs" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane p-20" id="messages2" role="tabpanel">3</div>
                </div>
            </div>
        </div>
    </div>    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->