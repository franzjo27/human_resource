<section>
    <div class="container">
        <?php echo form_open_multipart(base_url('hr/documents/marriage_cert'), null, 'id="" class="form-horizontal" style=""'); ?>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card mt-150">
                    <div class="text-danger">
                    </div>
                    <div class="card-header pt-4">
                        <h5 class="text-dark">ICP Employee - Documents</h5>
                    </div>
                    <div class="ml-3 fs-18 text-danger">
                        <?php if ($this->session->flashdata('upload_err')) : ?>
                            <p><?php echo $this->session->flashdata('upload_err'); ?></p>
                        <?php endif; ?>
                        <?php if (validation_errors()) : ?>
                            <p><?php echo validation_errors(); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="card-body shadow-lg ">
                        <div class="text-danger ml-3">
                            <?php if ($this->session->flashdata('errmsg')) :  ?>
                                <p class="ml-2 text-success "><?php echo $this->session->flashdata('errmsg'); ?></p>
                            <?php endif;  ?>
                        </div>
                        <div class="form-group">
                         <!--    <div class="card-title mt-4">
                                <h5>Employee Documents</h5>
                            </div> -->
                            <br>
                            <div id="row" class="ml-lg-5">
                                <div class="card-title ">
                                    <label class="fs-18" for="degree">Marriage Certificate (female only):<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file mt-1" id="image" name="image" required>
                                </div>
                            </div>

                            <div id="newinput" class=""></div>
                            <div class="mt-5">
                                <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/news') ?>"> <i class="fa fa-rotate-left"></i>Back</a>
                                <input type="submit" class="btn btn-primary ml-2" name='submit' value="Next">
                                <a class="btn btn-secondary none text-light ht ml-2" href="<?= site_url('hr/documents/dependent_psa') ?>">Skip</a>
                            </div>
                        </div>
                        
                    </div>


                </div>
            </div>

        </div>

    </div>

    </form>


</section>