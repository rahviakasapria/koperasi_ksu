<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body id="page-top">

<div id="wrapper">

<div id="content-wrapper">

    <div class="container-fluid">

    <br>

    <div class="card mb-3">
        <div class="card-header">
            Halaman Ganti Password</div>

        <div class="card-body">
            <div class="table-responsive">
            <?= $this->session->set_flashdata('message'); ?>
            <form action="<?php echo base_url().'admin/a_settings'; ?>" method="post">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <div class="col-md-100">
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            <?= form_error('current_password', '<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                </div>
                <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <div class="col-md-100">
                            <input type="password" class="form-control" id="new_password1" name="new_password1">
                            <?= form_error('new_password1', '<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                </div>
                <div class="form-group">
                    <label for="new_password2">Repeat Password</label>
                    <div class="col-md-100">
                            <input type="password" class="form-control" id="new_password2" name="new_password2">
                            <?= form_error('new_password2', '<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-md-100">
                            <button type="submit" class="btn btn-primary">Ganti Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </tbody> 
            </table>
        </div>
        </div>
    </div>
    </div>
    
</div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->


</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->




</body>
</html>