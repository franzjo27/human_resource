<section>
    <div class="container">
        <?php echo form_open_multipart(site_url('hr_access/grant_access/update'), null, 'id="" class="form-horizontal" style=""'); ?>
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <div class="card mt-150">
                    <div class="text-danger">
                    </div>
                    <div class="card-header pt-4">
                        <h5>ICP Employee </h5>
                    </div>
                    <div class="ml-3 fs-18 text-danger">
                        <?php if ($this->session->flashdata('upload_err')) : ?>
                            <p><?php echo $this->session->flashdata('upload_err'); ?></p>
                        <?php endif; ?>
                        <?php if (validation_errors()) : ?>
                            <p><?php echo validation_errors(); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="card-body shadow-lg">
                        <div class="form-group">
                            <div class="card-title mt-1">
                                <h5>New Employee Account </h5>
                            </div>
                            <div class="card-title ">
                                <label class="fs-18" for="emp_number">Employee Number<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" value="<?= $user->emp_number ?>" name="emp_number" id="emp_number" placeholder="eg: ICPSMB20220252" require>
                            </div>
                            <input type="hidden" value="<?= $user->id ?>" name="id">
                            <div class="card-title ">
                                <label class="fs-18" for="status">Status: <span class="text-danger">*</span> </label>
                                <select class="form-control mt-n2" name="status" id="marita_stat" id="status" require>
                                    <?php
                                    if ($user->status == 1)
                                        $stats = 'Regular';
                                    if ($user->status == 2)
                                        $stats = 'Trainee';
                                    if ($user->status == 3)
                                        $stats = 'Provisionary';
                                    if ($user->status == 4)
                                        $stats = 'Temporary';
                                    ?>
                                    <option value="<?= $user->status ?>"><?= $stats ?></option>
                                    <?php
                                    foreach ($status as $row) {
                                        echo '<option value="' . $row->id . '">' . $row->status . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="card-title ">
                                <label class="fs-18" for="institution">Institution: <span class="text-danger">*</span> </label>
                                <select class="form-control mt-n2" name="institution" id="institution" require>
                                    <?php
                                    if ($user->institution == 1)
                                        $rws = 'ICI';
                                    if ($user->institution == 2)
                                        $rws = 'ICA';
                                    if ($user > institution == 3)
                                        $rws = 'ICP Santa Maria';
                                    if ($user->institution == 4)
                                        $rws = 'ICI Balagatas';
                                    if ($user->institution == 5)
                                        $rws = 'ICP Marilao';
                                    if ($user->institution == 6)
                                        $rws = 'ICI FlexEd';
                                    if ($user->institution == 7)
                                        $rws = 'ICP Meycauayan';
                                    if ($user->institution == 8)
                                        $rws = 'ICP San Jose Delmonte';
                                    ?>

                                    <option value="<?= $user->institution ?>"><?= $rws  ?></option>
                                    <?php
                                    foreach ($insti as $rows) {
                                        echo '<option value="' . $rows->id . '">' . $rows->name . '</option>';
                                    }
                                    ?>
                                </select>

                                
                            </div>
                            <p class="card-text"></p>
                            <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/news') ?>"> <i class="fa fa-rotate-left"></i>Back</a>
                            <input type="submit" class="btn btn-primary ml-2" value="Update">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </form>
</section>