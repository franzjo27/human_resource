<section>

    <div class="container">
        <?php echo form_open_multipart(site_url('hr/employee/add'), null, 'id="" class="form-horizontal" style=""'); ?>
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

                            <div class="card-title ">
                                <label for="image">Employee Image:<span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file mt-n2" id="image" name="image" required>
                            </div>

                            <div class="card-title mt-4">
                                <h5>Employee Full Name</h5>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="lname">Last Name:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mt-n2" name="lname" id="lname" placeholder="eg: Dela Cruz" required>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="fname">First Name<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="fname" id="fname" placeholder="eg: Juan" required>
                            </div>
                            <div class="card-title ">
                                <label class="fs-18" for="mname">Middle Name<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="mname" id="mname" placeholder="eg: Santos" required>
                            </div>
                            <div class="card-title mt-4">
                                <h5> Address & Contacts</h5>
                            </div>

                            <div class="card-title ">
                                <!--     <label class="fs-18" for="prov">Province<span class="text-danger">*</span> </label>
                                    <select class="form-control mt-n2" name="country" id="country">
                                        <option value="">Select</option>
                                        
                                    </select> -->

                                <label for="country">Province<span class="text-danger">*</span> </label>
                                <select name="prov" id="country" class="form-control input-lg">
                                    <option value="">Select Province</option>
                                    <?php
                                    foreach ($prov as $row) {
                                        echo '<option value="' . $row->provCode . '">' . $row->provDesc . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="mun">Municipality<span class="text-danger">*</span> </label>

                                <select name="mun" id="state" class="form-control input-lg">
                                    <option value="">Select Municipality</option>
                                </select>

                                </select>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="brgy">Barangay<span class="text-danger">*</span> </label>
                                <select name="brgy" id="city" class="form-control input-lg text-uppercase">
                                    <option value="">Select Barangay</option>
                                </select>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="street">House Number|Building|Street|:<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="street" id="street" placeholder="eg: Block 1 Lot 7 village name" required>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="contact">Contact:<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="contact" id="contact" placeholder="eg: 09050000000" required>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="email">Email:<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="email" id="email" placeholder="eg: youremail@email.com" required>
                            </div>

                            <div class="card-title mt-4">
                                <h5>Date of Birth and Citizenship:</h5>
                            </div>


                            <div class="card-title ">
                                <label class="fs-18" for="datepicker">Date of birth<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="dob"id ="datepicker" placeholder="eg: 11/27/2023" required>

                            </div>


                            <div class="card-title ">
                                <label class="fs-18" for="pbirth">Place of Birth<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="pbirth" id="pbirth" placeholder="eg: Santa Maria Bulacan" required>
                            </div>


                            <div class="card-title ">
                                <label class="fs-18" for="citizen">Citizenship: <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="citizen" id="citizen" placeholder="eg: Filipino" required>
                            </div>
                            <div class="card-title mt-4">
                                <h5>Other Details</h5>
                            </div>
                            <div class="card-title ">
                                <label class="fs-18" for="religion"> Religion: <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="religion" id="religion" placeholder="eg: Catholic" required>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="mstatus">Marital Status: <span class="text-danger">*</span> </label>

                                <select class="form-control mt-n2" name="marital_stat" id="marita_stat" id="" required>
                                    <option value="">Select</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Separated">Married</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="weight"> Weight: <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="weight" id="weight" placeholder="eg: 90kg " required>
                            </div>

                            <div class="card-title ">
                                <label class="fs-18" for="height"> Height:<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control mt-n2" name="height" id="height" placeholder="eg: 5'8 feet " required>
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