<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom_css.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f62ecbdf9e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/vendor/datatables/datatables/media/css/dataTables.bootstrap4.css') ?>">
    <!-- datepicker -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- textarea -->
    <script src='<?= base_url('/vendor/tinymce/tinymce/tinymce.min.js') ?>'></script>

    <script>
        tinymce.init({
            selector: 'textarea#content'
        });
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <title>Immaculate Conception Polytechnic</title>
</head>

<body>
    <section id="header">

        <div class="container-fluid ">
            <div class="pt-2 text-right ">

                <a id="t-color" class="none" href="https://www.facebook.com/ICInstitutionsPH/"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                <a style="color:red" class="ml-3 mr-5 none" href="https://www.youtube.com/channel/UCsCW9PzReI-629THym4OBPA"><i class="fa-brands fa-youtube fa-lg"></i></a>

            </div>
            <div class="row mb-3">
                <div class="col-md-9">
                    <div class="float-left">
                        <img style="width:110px" class="image-fluid d-none d-md-block d-lg-block d-xg-block mt-n3" src="<?= base_url('assets/images/icp/logo.png') ?>" alt="Immaculate Conception Polytechnic Logo">
                    </div>
                    <div class="float-left">
                        <a class="navbar-brand none" href="<?= base_url('Dashboard')  ?>">
                            <div>
                                <h3>Immaculate Conception</h3>
                            </div>
                            <div class="mt-n3 ">
                                <h2 class="font-weight-bold"> Polytechnic</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">

                </div>
                <div class="col"></div>
            </div>

        </div>


    </section>