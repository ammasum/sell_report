<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="<?php echo base_url() ?>assets/js/vue.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jspdf.debug.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jspdf.plugin.autotable.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            $this->load->view('partials/navbar');
            if(current_url() === base_url('index.php/Main/index')){
                $this->load->view('partials/input_form_view');
            }else if(current_url() === base_url('index.php/Sell/lists')){
                $this->load->view('partials/list_view');
            }else if(current_url() === base_url('index.php/Sell/random')){
                $this->load->view('partials/random_sell');
            }
        ?>
    </div>
    <script src="<?php echo base_url() ?>assets/js/app.js"></script>
</body>
</html>