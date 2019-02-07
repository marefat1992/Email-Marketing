<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
               <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">
           <?php $msg = $this->session->flashdata('msg'); ?>
              <?php if (isset($msg)): ?>
                 <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                   </div>
              <?php endif ?>

        <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                 <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
        <?php endif ?>
          <div class="card">
              <div class="card-body">
                    <h1><i class="fa fa-list"></i> Subscriptions</h1>
                    
                            <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><td>
     <?php if ($this->session->userdata('role') == 'admin'): ?>
         <a href="<?php echo base_url('admin/user/user_powers') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i>New</a> &nbsp;<br>
            <div class="dropdown"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Created at
                  </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">created at</a>
              <a class="dropdown-item" href="#">Updated at</a>
            </div>
            <button type="button"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></button>
         </div></th>
                              <div class="row">
                                    <div class="col-md-2">
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <option>customer</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <optgroup label="Picnic">
                                                <option>plan</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <optgroup label="Picnic">
                                                <option>All status</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <optgroup label="Picnic">
                                                <option>All Times</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <optgroup label="Picnic">
                                                <option>All payment</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                  
                                </div>
                <!-- check logged user role permissions -->

                    <?php if(check_power(1)):?>
                        <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                    <?php endif; ?>
                <?php endif ?>
                

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <tbody>
                                
                                <tr>
                                <td><img src="<?php echo base_url('assets/images/background/socialbg.jpg'); ?>" width="90px" height="90px;"></td>
                                   <td>
                                    <td><div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div></td>
                                    <td><div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                                    </div></td>

                                    <td>
                                    
                                            <div class="label label-table label-danger">Inactive</div>
                                            <div class="label label-table label-success">Active</div>
                    
                                    </td>
                                    <td class="text-nowrap">

                                        
                                           <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>

                                            <a id="delete" data-toggle="modal" data-target="#" href="#"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>


                                    

                                            <!-- check logged user role permissions -->

                                            
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                                            
                                            
                                                <a href="#" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>
                                            

    

                                        
                                        
                        
                                            <a href="#" data-toggle="tooltip" data-original-title="Deactive"> <i class="fa fa-close text-danger m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Active"> <i class="fa fa-check text-info m-r-10"></i> </a>
                                        
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
 
<div class="modal fade" id="confirm">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
            <div class="form-body">
                
                Are you sure want to delete? <br> <hr>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-danger"> Delete</a>
                
            </div>

      </div>


    </div>
  </div>
</div>