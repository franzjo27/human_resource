<section>
    <div class="container-fluid" style="min-height:500px;">

        <div class="my-4 fs-18 ">
            <?php if ($this->session->flashdata('msg')) :  ?>
                <p class="ml-2 text-success"><?php echo $this->session->flashdata('msg'); ?></p>
            <?php endif;  ?>
        </div>

        <h2 class="mt-5 mb-3 ml-3 text-primary">ICP Employees</h2>
        <div class="text-right mr-4 mb-3">
            <a class="none mb-2 text-light btn btn-primary" href="<?= site_url('hr_access/Grant_access/add') ?>">Add New </a>
            <a class="none mb-2 text-secondary fs-20 ml-3" href="<?= site_url('Dashboard') ?>">Dashboard <i class="fa fa-table-columns"></i></a>
        </div>

        <table class="table table-striped table-hover mt-3 " id="myTable">
            <caption>Immaculate Conception Polytechnic</caption>
            <thead>
                <tr>
                    <th>Employee Number</th>
                    <th>Status</th>
                    <th>institution</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $row) {
                    if ($row->institution == 1)
                        $insti = 'ICI';
                    if ($row->institution == 2)
                        $insti = 'ICA';
                    if ($row->institution == 3)
                        $insti = 'ICP Santa Maria';
                    if ($row->institution == 4)
                        $insti = 'ICI Balagatas';
                    if ($row->institution == 5)
                        $insti = 'ICP Marilao';
                    if ($row->institution == 6)
                        $insti = 'ICI FlexEd';
                    if ($row->institution == 7)
                        $insti = 'ICP Meycauayan';
                    if ($row->institution == 8)
                        $insti = 'ICP San Jose Delmonte';

                    if ($row->status == 1)
                        $stat = 'Regular';
                    if ($row->status == 2)
                        $stat = 'Trainee';
                    if ($row->status == 3)
                        $stat = 'Provisionary';
                    if ($row->status == 4)
                        $stat = 'Temporary';
                ?>
                    <tr>
                        <td><?= $row->emp_number; ?></td>
                        <td><?= $stat; ?></td>
                        <td><?= $insti; ?></td>

                        <td>
                            <a class="none btn btn-sm btn-warning" href="<?= site_url('hr_access/Grant_access/view/'. $row->id) ?>">Update</a>

                            <a class="none btn btn-sm btn-danger" href="">Delete</a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
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