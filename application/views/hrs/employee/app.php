<style>
    table.dataTable td {
        vertical-align: middle !important;
    }
</style>
<script>
    var logs_datatable = $('#table-list').DataTable({

        "processing": true,

        "serverSide": true,

        "order": [0, "desc"],

        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "ajax": {
            url: "<?php echo base_url('cms/'.$this->router->fetch_class() . '/data_table'); ?>", // json datasource
            type: 'post'
         
        }

    });

    function confirm_modal(delete_url, title) {
        jQuery('#modal_delete_m_n').modal('show', {
            backdrop: 'static',
            keyboard: false
        });
        jQuery("#modal_delete_m_n .grt").text(title);
        document.getElementById('delete_link_m_n').setAttribute("href", delete_url);
        document.getElementById('delete_link_m_n').focus();
    }
</script>