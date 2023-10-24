 <!--           <tbody>
 <?php foreach ($users as $user) : ?>
                    <tr>
                        <td class="align-middle"><img src="<?= base_url('image/ici_news_image/' . $user->image) ?>" style="width:3em; " /></td>
                        <td class="align-middle"><?= $user->lname . ' ' . $user->fname . ' ' . $user->mname ?></td>
                        <td class="align-middle"><?= $user->uname ?></td>
                        <td class="align-middle"><?= date('F m, Y', strtotime($user->date_created)) ?></td>
                        <td class="align-middle">
                            <a class="underline text-success" href="<?= site_url('users/edit/' . $user->id) ?>"> Update <i class="fa fa-edit"></i></a>
                            |
                            <a class="underline text-danger" data-toggle="modal" onclick="confirm_modal('<?= site_url('users/delete/' . $user->id) ?>', 'title')" data-target="#delete" href="">
                                Delete <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody> -->

 <script>
     /* ,
                          error: function() { // error handling

                            $(".table-students-error").html("");

                            $("#table-students").append('<tbody class="table-students-error"><tr><th colspan="4">No data found in the server</th></tr></tbody>');

                            $("#table-students_processing").css("display", "none");



                        } 
             */
 </script>