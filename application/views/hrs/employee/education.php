<section>
    <div class="container">
        <?php echo form_open_multipart(base_url('hr/education/add'), null, 'id="" class="form-horizontal" style=""'); ?>
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
                                <h5>Education Information</h5>
                            </div>

                            <div id="row">
                                <div class="card-title ">
                                    <label class="fs-18" for="degree">Degree:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mt-n2" name="degree[]" id="degree" placeholder="eg: Bachelor of Arts in Education " require>
                                </div>
                                <div class="card-title ">
                                    <label class="fs-18" for="major">Major:<span class="text-danger"></span></label>
                                    <input type="text" class="form-control mt-n2" name="major[]" id="major" placeholder="eg: TLE" require>
                                </div>
                                <div class="card-title ">
                                    <label class="fs-18" for="minor">Minor:<span class="text-danger"></span></label>
                                    <input type="text" class="form-control mt-n2" name="minor[]" id="minor" placeholder="eg: Computer Studies" require>
                                </div>
                                <div class="card-title ">
                                    <label class="fs-18" for="school">School:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mt-n2" name="school[]" id="school" placeholder="eg: ICI-College Santa Maria Bulacan" require>
                                </div>
                                <div class="card-title ">
                                    <label class="fs-18" for="date_grad">Date Graduated:<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control mt-n2" name="date_grad[]" id="date_grad" placeholder="eg: yyyy-mm-dd" require>
                                </div>
                            </div>

                            <div id="newinput"></div>
                            <div class="mt-5">
                                <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/news') ?>"> <i class="fa fa-rotate-left"></i>Back</a>
                                <button id="rowAdder" type="button" class="btn btn-primary ml-2">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD
                                </button>
                                <input type="submit" class="btn btn-primary ml-2" value="Next">
                            </div>
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
            '<hr class="mt-4">' +
            '<div class="card-title ">' +
            '<label class="fs-18" for="degree">Degree:<span class="text-danger">*</span></label>' +
            '<input type="text" class="form-control mt-n2" name="degree[]" id="degree" placeholder="eg: Bachelor of Arts in Education " require>' +
            '</div>' +
            '<div class="card-title ">' +
            '<label class="fs-18" for="major">Major:<span class="text-danger"></span></label>' +
            '<input type="text" class="form-control mt-n2" name="major[]" id="major" placeholder="eg: TLE" require>' +
            '</div>' +
            '<div class="card-title">' +
            '<label class="fs-18" for="minor">Minor:<span class="text-danger"></span></label>' +
            '<input type="text" class="form-control mt-n2" name="minor[]" id="minor" placeholder="eg: Computer Studies" require>' +
            '</div>' +
            '<div class="card-title ">' +
            '<label class="fs-18" for="school">School:<span class="text-danger">*</span></label>' +
            '<input type="text" class="form-control mt-n2" name="school[]" id="school" placeholder="eg: ICI-College Santa Maria Bulacan" require>' +
            '</div>' +
            '<div class="card-title ">' +
            '<label class="fs-18" for="date_grad">Date Graduated:<span class="text-danger">*</span></label>' +
            '<input type="date" class="form-control mt-n2" name="date_grad[]" id="date_grad" placeholder="eg: yyyy-mm-dd" require>' +
            '</div>' +
            '<button class="btn btn-danger" id="DeleteRow" type="button">Remove</button>' +
            '</div>';
        $('#newinput').append(newRowAdd);
    });
    $("body").on("click", "#DeleteRow", function() {
        $(this).parents("#row").remove();
    })
</script>