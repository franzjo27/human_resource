<section>

    <div class="container">
<form action="<?= base_url('users/c_pass') ?>" method="post">
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <div class="card mt-150">
                    <div class="text-danger">
                        <?php
                        if (validation_errors()) {
                            echo validation_errors();
                        }
                        ?>
                    </div>
                    <div class="card-header">
                        <h3>Change Password</h3>
                    </div>

                    <div class="card-body shadow-lg">
                        <div class="form-group">

                            <h5 class="card-title">
                                <label for="pword">Password:<span class="text-danger">*</span></label>
                                <input type="password"  class="form-control" name="pword" id="pword" placeholder="Password">
                            </h5>

                            <h5 class="card-title">
                                <label for="cpword">Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="cpword" id="cpword" placeholder="Confirm Password">
                            </h5>

                           

                    
                            </div>
                            <p class="card-text"></p>
                            <input type="submit" class="btn btn-primary " value="Change Password">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </form>
</section>