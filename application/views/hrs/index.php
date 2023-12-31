<?php

/*  if($this->session->userdata('user_info'))
 {
    //echo $this->session->userdata('user_info')->fname;
    $user_info = $this->session->userdata('user_info');
    echo $user_info->fname;
 }
 */
// $this->session->unset_userdata('user_info'); //pang logout

?>
<div class="container-fluid">
    <!--     <div class="my-4 fs-25 text-primary">
        <? //php // if ($this->session->flashdata('msg')) : 
        ?>
            <p><?php //echo $this->session->flashdata('msg'); 
                ?></p>
        <? // php // endif; 
        ?>
    </div> -->
    <div class="container">
        <section>
            
            <div class="container-fluid">
                <div class="row mt-2">
                    <?php
                    $modules =  array(
                        'access' => array(

                            'img_alt'  => 'Give an Access Account',
                            'link'   => base_url('hr_access/grant_access/'),
                            'button' => 'Grant an Access'
                        ),
                        'Onboarding' => array(

                            'img_alt'  => 'alt text',
                            'link'   => base_url('cms/events/index'),
                            'button' => 'Onboarding'
                        ),

                        'Employees' => array(

                            'img_alt'  => 'alt text',
                            'link'   => site_url('hr/employee/'),
                            'button' => 'Access Employee Details'
                        )
                    );
                    ?>
                    <?php foreach ($modules as $module_name => $module) : ?>
                        <div class="col-md-4 my-3">
                            <div class="card p-1 border-0">
                                <div class="card-body">
                                    <div class=" mt-4 mb-5   iccolor">
                                        <div class="float-left ml-4 mt-2">
                                            <div class="fs-20 mt-2 ">
                                                <strong>I C P</strong>
                                            </div>
                                            <div class="fs-25 mt-n3 ml-1">
                                                <?php echo strtoupper($module_name); ?>
                                            </div>
                                            <a class="underline mt-n3" href="<?php echo $module['link']; ?>" role="button"><?php echo $module['button']; ?></a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-4  ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</div>