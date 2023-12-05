<html>

<head>
    <title>Codeigniter Dynamic Dependent Select Box using Ajax</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .box {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container box">
        <br />
        <br />
        <h3 align="center">Codeigniter Dynamic Dependent Select Box using Ajax</h3>
        <br />
        <div class="form-group">
            <select name="country" id="country" class="form-control input-lg">
                <option value="">Select Province</option>
                <?php
                foreach ($prov as $row) {
                    echo '<option value="' . $row->provCode . '">' . $row->provDesc . '</option>';
                }
                ?>
            </select>
        </div>
        <br />
        <div class="form-group">
            <select name="state" id="state" class="form-control input-lg">
                <option value="">Select State</option>
            </select>
        </div>
        <br />
        <div class="form-group">
            <select name="city" id="city" class="form-control input-lg">
                <option value="">Select City</option>
            </select>
        </div>
    </div>
</body>

</html>
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