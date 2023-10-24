<section>
    <div class="container-fluid" style="min-height:500px;">
        <h2 class="mt-5 mb-3 ml-3 text-primary">ICI-College CMS Users</h2>
        <div class="my-4 fs-18">
            <?php if ($this->session->flashdata('msg')) : ?>
                <p class="ml-2 text-success"><?php echo $this->session->flashdata('msg'); ?></p>
            <?php endif; ?>
        </div>
        <div class="text-right mr-4 mb-3">
            <a class="none mb-2 text-light btn btn-primary " href="<?= base_url('cms/users/add') ?>">Add New </a>
            <a class="none mb-2 text ml-2 btn btn-secondary " href="<?= base_url('cms') ?>">Dashboard <i class="fa fa-table-columns"></i></a>
        </div>
        
        <table class="table table-striped table-hover mt-3" id="table-list">
            <caption>ICI-College</caption>
            <thead>
                <tr>                  
                    <th>Name</th>
                    <th>Date</th>
                    <th>Options</th>
                </tr>
            </thead>
        </table>
    </div>
</section>
<div class="modal fade" id="delete" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">Are you sure to Delete this <span class="grt"></span> ?</h4>
            </div>
            <div class="modal-footer mt-2 text-center border-0">
                <div>
                    <a class="btn btn-danger none" id="delete_link_m_n" href="#">Delete</a>
                    <a class="btn btn-success none" data-dismiss="modal" id="delete_cancel_link" href="#">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
