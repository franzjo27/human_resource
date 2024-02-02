<section>
    <div class="container">

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card mt-150">
                    <div class="text-danger">
                    </div>
                    <div class="card-header pt-4">
                        <h5>ICP Employee - Documents</h5>
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


                            <div id="row" class="p-3">
                                <div class="card-title">
                                    <label class="fs-18" for="degree">Dependent's PSA:<span class="text-danger">*</span></label>
                                    <form action="<?= base_url('hr/documents/dependent_psa') ?>" class="dropzone" id="my-awesome-dropzone">
                                    </form>
                               
                                </div>
                            </div>

                            <div id="newinput" class=""></div>
                            <div class="mt-5">
                                <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/news') ?>"> <i class="fa fa-rotate-left"></i>Back</a>
                                <a class="btn btn-primary none ml-2 ht" href="<?= base_url('hr/documents/tor_diploma') ?>"> Next</a>
                                <!--  <input type="submit" class="btn btn-primary ml-2" value="Next"> -->
                                <a class="btn btn-secondary none text-light ht ml-2" href="<?= site_url('hr/documents/tor_diploma') ?>">Skip</a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>

    </div>




</section>