<section>

    <div class="container">
        <?php echo form_open_multipart(site_url('hr/employee/add'), null, 'id="" class="form-horizontal" style=""'); ?>
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

                                <div class="card-title ">
                                    <label for="image">Employee Image:<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file mt-n2" id="image" name="image" requir>
                                </div>

                                <div class="card-title mt-4">
                                    <h5>Employee Full Name</h5>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="lname">Last Name:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mt-n2" name="lname" id="lname" placeholder="eg: Dela Cruz" requir>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="fname">First Name<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="fname" id="fname" placeholder="eg: Juan" requir>
                                </div>
                                <div class="card-title ">
                                    <label class="fs-18" for="mname">Middle Name<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="mname" id="mname" placeholder="eg: Santos" requir>
                                </div>
                                <div class="card-title mt-4">
                                    <h5> Address & Contacts</h5>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="prov">Province<span class="text-danger">*</span> </label>
                                    <select class="form-control mt-n2" name="prov" id="prov">
                                        <option value="">Select</option>
                                        <option value="test">test</option>
                                    </select>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="mun">Municipality<span class="text-danger">*</span> </label>
                                    <select class="form-control mt-n2" name="mun" id="mun">
                                        <option value="">Select</option>
                                        <option value="test">test</option>
                                    </select>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="brgy">Barangay<span class="text-danger">*</span> </label>
                                    <select class="form-control mt-n2" name="brgy" id="">
                                        <option value="">Select</option>
                                        <option value="test">test</option>
                                    </select>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="contact">Contact:<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="contact" id="contact" placeholder="eg: 09050000000" requir>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="email">Email:<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="email" id="email" placeholder="eg: youremail@email.com" requir>
                                </div>

                                <div class="card-title mt-4">
                                    <h5>Date of Birth and Citizenship:</h5>
                                </div>


                                <div class="card-title ">
                                    <label class="fs-18" for="dbirth">Date of birth<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="dob" id="dbirth" placeholder="eg: 0000-00-00" requir>
                                </div>


                                <div class="card-title ">
                                    <label class="fs-18" for="pbirth">Place of Birth<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="pbirth" id="pbirth" placeholder="eg: Santa Maria Bulacan" requir>
                                </div>


                                <div class="card-title ">
                                    <label class="fs-18" for="citizen">Citizenship: <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="citizen" id="citizen" placeholder="eg: Filipino" requir>
                                </div>
                                <div class="card-title mt-4">
                                    <h5>Other Details</h5>
                                </div>
                                <div class="card-title ">
                                    <label class="fs-18" for="religion"> Religion: <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="religion" id="religion" placeholder="eg: Catholic" requir>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="mstatus">Marital Status: <span class="text-danger">*</span> </label>

                                    <select class="form-control mt-n2" name="marital_stat" id="marita_stat" id="" requir>
                                        <option value="">Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Separated">Married</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="weight"> Weight: <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="weight" id="weight" placeholder="eg: 90kg " requir>
                                </div>

                                <div class="card-title ">
                                    <label class="fs-18" for="height"> Height:<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control mt-n2" name="height" id="height" placeholder="eg: 5'8 feet " requir>
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

