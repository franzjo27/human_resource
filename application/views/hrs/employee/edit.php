<section>

    <div class="container">
        <form action="" method="post">

            <div class="form-row">
                <div class="col-md-10 offset-md-1">

                    <div class="card mt-150">
                        <div class="text-danger">
                            <?php
                            if (validation_errors()) {
                                echo validation_errors();
                            }
                            ?>
                        </div>
                        <div class="card-header pt-4">
                            <h3>Update selected ICP news</h3>
                        </div>

                        <div class="card-body shadow-lg">
                            <div class="form-group">

                                <div class="card-title">
                                    <label for="html" class="mt-n2 fs-20">Save as Draft:</label>

                                    <label class="switch ml-2">
                                        <input class="" type="checkbox" name="display" value="0">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="card-title">
                                    <label for="title" class="fs-18">Title:</label>
                                    <input type="text" value="<?= $news->title ?>" class="form-control" name="title" id="title" placeholder="Events Title">
                                </div>

                                <div class="card-title">
                                    <label for="slug" class="fs-18">Slug:<span class="text-danger">*</span> </label>
                                    <input type="text" value="<?= $news->slug ?>" class="form-control" name="slug" id="slug" placeholder="eg: your-news-title">
                                </div>

                                <div class="card-title">
                                    <label for="description" class="fs-18">Description:</label>
                                    <input type="text" value="<?= $news->description ?>" class="form-control" name="description" id="description" placeholder="Events Description">
                                </div>

                                <div class="card-title">
                                    <label for="Events-details" class="fs-18">Events Details</label>
                                    <textarea class="form-control" id="content" name="news" rows="3" placeholder="Events-Details"><?= $news->content ?></textarea>
                                </div>

                                <p class="card-text"></p>
                                <a class="btn btn-secondary none text-light ht" href="<?= base_url('cms/newss') ?>"> <i class="fa fa-rotate-left"></i> Back</a>
                                <input type="submit" class="btn btn-primary ml-2" value="Update">


                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </form>
</section>