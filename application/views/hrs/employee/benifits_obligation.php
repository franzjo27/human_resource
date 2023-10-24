<section>

    <div class="container">
        <?php echo form_open_multipart(site_url('hr/benifits_obligations/add'), null, 'id="" class="form-horizontal" style=""'); ?>
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <div class="card mt-150">
                    <div class="text-danger">

                    </div>
                    <div class="card-header pt-4">
                        <h5>ICP Employee - Details</h5>
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
                            <div class="card-title mt-4">
                                <h5>Benefits and Obligations</h5>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="tin_no">Tin No.:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-n2" name="tin_no" id="tin_no" placeholder="eg: 000-000-000-00000" require>
                            </div>
                            <div class="card-title ">
                                <label class="fs-18" for="tax_code">Tax Code:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-n2" name="tax_code" id="tax_code" placeholder="eg: 00000" require>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="sss_no">SSS:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-n2" name="sss_no" id="sss_no" placeholder="eg: 00-0000000-0" require>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="philhealth_no">PhilHealth<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="philhealth_no" id="philhealth_no" placeholder="eg: 00-000000000-0" require>
                            </div>
                            <div class="card-title ">
                                <label class="fs-18" for="pagibig_no">PagIbig<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="pagibig_no" id="pagibig_no" placeholder="eg: 0000-0000-0000" require>
                            </div>

                            <p class="card-text"></p>
                            <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/news') ?>"> <i class="fa fa-rotate-left"></i>Back</a>
                            <input type="submit" class="btn btn-primary ml-2" value="Next">

                        </div>


                    </div>
                </div>

            </div>






        </div>

    </div>

    </form>
</section>