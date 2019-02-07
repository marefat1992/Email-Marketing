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
                <li class="breadcrumb-item active">Feedback Loop handlers</li>
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
    <!-- Row -->
  <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Feedback Loop handler</h4>
                </div>
                <div class="card-body">
                    <form action="#" class="form-horizontal">
                        <div class="form-body">
                            <h3 class="box-title"><i class="fa fa-plus"></i> New Feedback Loop handler</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"> Name*</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="">
                                         </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Hostname*</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control" placeholder="">
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">port*</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control" placeholder="">
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Username*</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control" placeholder="">
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Email*</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control form-control" placeholder="">
                                         </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Password*</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control" placeholder="">
                                         </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">encryption</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select">
                                                <option value="">tls</option>
                                                <option value="">starttls</option>
                                                <option value="">notls</option>
                                                <option value="">ssl</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">protocol*</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select">
                                                <option value="">imap</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                          </div>
                        <hr>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success">Save</button>
                                            <button type="button" class="btn btn-inverse">test</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
