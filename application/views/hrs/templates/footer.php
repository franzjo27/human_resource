<footer>
    <section id="footer" style="background-color:#009AD9;">
        <br>
        <div class="container-fluid mt-5">
            <div class="d-flex justify-content-center mb-2">
                <img style="width:200px" class="image-fluid image-fluid d-none d-md-block d-lg-block d-xg-block " src="<?= base_url('assets/images/icp/logo.png') ?>" alt="Immaculate Conception Politechnic Logo">
            </div>
            <div class="text-center text-light ">
                <h2> <strong> Immaculate Conception Politechnic</strong></h2>
                <h3>Innovate. Connect. Inspire.</h3>
                <div class="mt-4" id="ContactUs">
                    <h6>
                        #47 A. Bonifacio St., Likod Simbahan,
                    </h6>
                    <h6>
                        Poblacion, Santa Maria Bulacan
                    </h6>
                    <h6>
                        (044) 641-3808 | (044) 298-1267
                    </h6>
                </div>
            </div>
        </div>
        <br>
        <div class="mt-5 text-center text-light">
            © <?php echo date('Y'); ?> Copyright Immaculate Conception Institutions
        </div>
    </section>
</footer>

</body>
<!-- jQuery library -->
<script src=" https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?= base_url('/vendor/datatables/datatables/media/js/jquery.dataTables.js') ?>"></script>
<!--     <script type="text/javascript" charset="utf8" src="<?= base_url('/vendor/datatables/datatables/media/js/jquery.js') ?>"></script> -->
<script type="text/javascript" charset="utf8" src="<?= base_url('/vendor/datatables/datatables/media/js/dataTables.bootstrap4.js') ?>"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<?php
$js_path = APPPATH . 'views/hrs/' . $this->router->fetch_class() . '/app.php';

if (file_exists($js_path)) {
    include $js_path;
}


?>

<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>



<script>
    $(document).ready(function() {
        $('#country').change(function() {
            var provCode = $('#country').val();
            if (provCode != '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>Phil_location/fetch_state",
                    method: "POST",
                    data: {
                        provCode: provCode
                    },
                    success: function(data) {
                        $('#state').html(data);
                        $('#city').html('<option value="">Select City</option>');
                    }
                });
            } else {
                $('#state').html('<option value="">Select State</option>');
                $('#city').html('<option value="">Select City</option>');
            }
        });

        $('#state').change(function() {
            var citymunCode = $('#state').val();
            if (citymunCode != '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>Phil_location/fetch_city",
                    method: "POST",
                    data: {
                        citymunCode: citymunCode
                    },
                    success: function(data) {
                        $('#city').html(data);
                    }
                });
            } else {
                $('#city').html('<option value="">Select City</option>');
            }
        });

    });
</script>