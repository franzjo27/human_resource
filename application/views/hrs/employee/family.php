<section>
    <div class="container">
    <?php echo form_open_multipart(site_url('hr/family/add'), null, 'id="" class="form-horizontal" style=""'); ?>
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
                                <h5>Employee Family/Dependent Information</h5>
                            </div>


                            <div id="row">
                                <div class="card-title ">
                                    <label class="fs-18" for="lname">Fullname:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mt-n2" name="fullname[]" id="lname" placeholder="eg: Juan Dela Cruz" required>
                                </div>
                                <div class="card-title ">
                                    <label class="fs-18" for="lname">Birthday:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mt-n2" name="dob[]" id="lname" placeholder="eg: 0000-00-00" required>
                                </div>
                                <div class="card-title ">
                                    <label class="fs-18" for="lname">Relation:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mt-n2" name="relation[]" id="lname" placeholder="eg: Child" required>
                                </div>
                                <input type="hidden" name="pointer[]" value="">

                            </div>
                            <div id="newinput"></div>
                        </div>
                        <div id="newinput"></div>
                        <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/news') ?>"> <i class="fa fa-rotate-left"></i>Back</a>
                        <button id="rowAdder" type="button" class="btn btn-primary ml-2">
                            <span class="bi bi-plus-square-dotted">
                            </span> Add form
                        </button>
                        <input type="submit" class="btn btn-primary ml-2" value="Next">

                    </div>

                </div>


            </div>
        </div>

    </div>

    </div>

    </form>
</section>

<script type="text/javascript">
    $("#rowAdder").click(function() {
        newRowAdd = '<div id="row">' +
            '<div class="card-title ">' +
            '<label class="fs-18" for="lname">Fullname:<span class="text-danger">*</span></label>' +
            '<input type="text" class="form-control mt-n2" name="fullname[]" id="lname" placeholder="eg: Juan Dela Cruz" required>' +
            '</div>' +
            '<div class="card-title ">' +
            '<label class="fs-18" for="lname">Birthday:<span class="text-danger">*</span></label>' +
            '<input type="text" class="form-control mt-n2" name="dob[]" id="lname" placeholder="eg: 0000-00-00" required>' +
            '</div>' +
            '<div class="card-title ">' +
            '<label class="fs-18" for="lname">Relation:<span class="text-danger">*</span></label>' +
            '<input type="text" class="form-control mt-n2" name="relation[]" id="lname" placeholder="eg: Child" required>' +
            '</div>' +
            '<button class="btn btn-danger" id="DeleteRow" type="button">Remove form</button>' +
            '<input type="hidden" name="pointer[]"  value="">' +
            '</div>';
        $('#newinput').append(newRowAdd);
    });
    $("body").on("click", "#DeleteRow", function() {
        $(this).parents("#row").remove();
    })
</script>

