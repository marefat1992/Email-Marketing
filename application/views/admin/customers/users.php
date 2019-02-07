

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Customer</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">All Customer</li>
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
                    <h1><i class="fa fa-list"></i>Customers</h1>

                <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New Customer</a> &nbsp;
                 <th><P>sort by</P><div class="dropdown"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Created at
                  </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">created at</a>
              <a class="dropdown-item" href="#">Updated at</a>
            </div>
            <button type="button"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></button>
         </div></th>
                    <!-- check logged user role permissions -->

                    <?php if(check_power(1)):?>
                        <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                    <?php endif; ?>
                <?php endif ?>
                

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                
                                <tr>
                                <td><img src="<?php echo base_url('assets/images/background/socialbg.jpg'); ?>" width="90px" height="90px;"></td>
                                   <td> <?php echo $user['first_name'].' '.$user['last_name']; ?><br>
                                    <?php echo $user['email']; ?><br>
                                     <?php echo my_date_show_time($user['created_at']); ?><br>
                                    <<?php echo $user['country']; ?></td>
                                    <td><div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div></td>
                                    <td><div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                                    </div></td>

                                    <td>
                                        <?php if ($user['status'] == 0): ?>
                                            <div class="label label-table label-danger">Inactive</div>
                                        <?php else: ?>
                                            <div class="label label-table label-success">Active</div>
                                        <?php endif ?>
                                    </td>
                                    <td class="text-nowrap">

                                        <?php if ($this->session->userdata('role') == 'admin'): ?>
                                            <a href="<?php echo base_url('admin/user/update/'.$user['id']) ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>

                                            <a id="delete" data-toggle="modal" data-target="#confirm_delete_<?php echo $user['id'];?>" href="#"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>


                                        <?php else: ?>

                                            <!-- check logged user role permissions -->

                                            <?php if(check_power(2)):?>
                                               <a href="<?php echo base_url('admin/user/update/'.$user['id']) ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                                            <?php endif; ?>
                                        <div class="col-sm-3" style="width: 155px;">
                              <select class="selectpicker m-b-20" data-style="btn-default">
                                   <option data-tokens="ketchup mustard"></option>
                                                                      <option data-tokens="frosting">Name</option>
                            
                                           <option data-tokens="mustard"> <?php if(check_power(3)):?>
                                                <a href="<?php echo base_url('admin/user/delete/'.$user['id']) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>
                                            <?php endif; ?></option>


                                        <?php endif ?>

                                        
                                        
                                        <?php if ($user['status'] == 1): ?>
                                            <a href="<?php echo base_url('admin/user/deactive/'.$user['id']) ?>" data-toggle="tooltip" data-original-title="Deactive"> <i class="fa fa-close text-danger m-r-10"></i> </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url('admin/user/active/'.$user['id']) ?>" data-toggle="tooltip" data-original-title="Active"> <i class="fa fa-check text-info m-r-10"></i> </a>
                                        <?php endif ?>
                           </select>
                        </div>
                                        
                                    </td>
                                </tr>

                            <?php endforeach ?>

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>



<?php foreach ($users as $user): ?>
 
<div class="modal fade" id="confirm_delete_<?php echo $user['id'];?>">
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
                <a href="<?php echo base_url('admin/user/delete/'.$user['id']) ?>" class="btn btn-danger"> Delete</a>
                
            </div>

      </div>


    </div>
  </div>
</div>


<?php endforeach ?>