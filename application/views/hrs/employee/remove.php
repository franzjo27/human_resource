<script>

function confirm_modal(delete_url, title) {
        jQuery('#modal_delete_m_n').modal('show', {
            backdrop: 'static',
            keyboard: false
        });
        jQuery("#modal_delete_m_n .grt").text(title);
        document.getElementById('delete_link_m_n').setAttribute("href", delete_url);
        document.getElementById('delete_link_m_n').focus();
    }




    /* ,

error: function() { // error handling

    $(".table-students-error").html("");

    $("#table-students").append('<tbody class="table-students-error"><tr><th colspan="4">No data found in the server</th></tr></tbody>');

    $("#table-students_processing").css("display", "none");



} 
*/
</script>

            <!--       <tbody>
            <?php foreach ($event_lists as $event_list) : ?>
                    <tr>
                        <td class="align-middle"><img src="<?= base_url('image/ici_news_image/' . $event_list->image) ?>" style="width:2em; " /></td>
                        <td class="align-middle"><?= $event_list->title ?></td>
                        <td class="align-middle"><?= date('F m, Y', strtotime($event_list->date_created)) ?></td>
                        <td class="align-middle">
                            <a class="underline text-success" href="<?= site_url('events/edit/' . $event_list->id) ?>"> Update <i class="fa fa-edit"></i></a>

                            <a class="underline text-danger" data-toggle="modal" onclick="confirm_modal('<?= site_url('events/delete/' . $event_list->id); ?>', 'title')" data-target="#delete" href="">
                                Delete <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody> -->