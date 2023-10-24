<section>

    <div class="container">
        <form action="" method="post">
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
                            <h3>Update selected ICI-College CMS user</h3>
                        </div>
                        <div class="card-body shadow-lg">
                            <div class="form-group">

                                <h5 class="card-title">
                                    <label for="last_name">Last Name:<span class="text-danger">*</span></label>
                                    <input type="text" value="<?= $user->lname ?>" class="form-control" name="lname" id="last_name" placeholder="Last Name">
                                </h5>

                                <h5 class="card-title">
                                    <label for="first_name">First Name:<span class="text-danger">*</span></label>
                                    <input type="text" value="<?= $user->fname ?>" class="form-control" name="fname" id="first_name" placeholder="First Name">
                                </h5>

                                <h5 class="card-title">
                                    <label for="middle_name">Middle Name:</label>
                                    <input type="text" value="<?= $user->mname ?>" class="form-control" name="mname" id="middle_name" placeholder="Middle Name">
                                </h5>

                                <h5 class="card-title">
                                    <label for="username">Username:<span class="text-danger">*</span></label>
                                    <input type="text" value="<?= $user->uname ?>" class="form-control" name="username" id="username" placeholder="Username">
                                </h5>

                                <h5 class="card-title">
                                    <label for="userlvl">User Level<span class="text-danger">*</span></label>
                                    <select id="userlvl" name="user_lvl" class="form-control">
                                        <option value="<?= $user->userlevel ?>"><?= $user->userlevel ?></option>
                                        <option value="users">User</option>
                                        <option value="admin">Administrator</option>
                                    </select>
                                </h5>
                            </div>
                            <p class="card-text"></p>
                            <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/users') ?>"> <i class="fa fa-rotate-left"></i> Back</a>
                            <input type="submit" class="btn btn-primary ml-2" value="Update">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </form>
</section>