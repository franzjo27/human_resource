<section>
    <div class="container">
        <?php echo form_open_multipart(base_url() . 'cms/users/add', null, 'id="" class="form-horizontal" style=""'); ?>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card mt-150">
                    <div class="text-danger">
                    </div>
                    <div class="card-header pt-4">
                        <h3>ICI-College CMS New User</h3>
                    </div>
                    <div class="ml-3 fs-25 text-danger ">
                        <?php if ($this->session->flashdata('upload_err')) : ?>
                            <p><?php echo $this->session->flashdata('upload_err'); ?></p>
                        <?php endif; ?>
                        <?php if (validation_errors()) : ?>
                            <p><?php echo validation_errors(); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="card-body shadow-lg">
                        <div class="form-group">

                            <div class="card-title">
                                <label class="fs-18" for="last_name">Last Name:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-n2" name="lname" id="last_name" placeholder="Last Name">
                            </div>

                            <div class="card-title">
                                <label class="fs-18" for="first_name">First Name:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-n2" name="fname" id="first_name" placeholder="First Name">
                            </div>

                            <div class="card-title">
                                <label class="fs-18" for="middle_name">Middle Name:</label>
                                <input type="text" class="form-control mt-n2" name="mname" id="middle_name" placeholder="Middle Name">
                            </div>

                            <div class="card-title">
                                <label class="fs-18" for="username">Username:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-n2" name="username" id="username" placeholder="Username">
                            </div>

                            <div class="card-title">
                                <label class="fs-18" for="userlvl">User Level<span class="text-danger">*</span></label>
                                <select id="userlvl" name="user_lvl" class="form-control mt-n2">
                                    <option value="">Select</option>
                                    <option value="users">User</option>
                                    <option value="admin">Administrator</option>
                                </select>
                            </div>
                            <div class="card-title">
                                <label for="image">User's Photo<span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                        <p class="card-text"></p>
                        <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/users') ?>"> <i class="fa fa-rotate-left"></i> Back</a>
                        <input type="submit" class="btn btn-primary ml-2" value="Save">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
</section>