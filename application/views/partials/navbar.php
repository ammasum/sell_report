<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item
                <?php
                    if(current_url() === base_url("index.php/Main/index")){
                        echo "active";
                    }
                ?>
                "
            >
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Main/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item
                <?php
                    if(current_url() === base_url("index.php/Sell/lists")){
                        echo "active";
                    }
                ?>
                "
            >
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Sell/lists">List</a>
            </li>
            <li class="nav-item
                <?php
                    if(current_url() === base_url("index.php/Sell/random")){
                        echo "active";
                    }
                ?>
                "
            >
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Sell/random">Random</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link disabled" href="#">Disabled</a>-->
<!--            </li>-->
        </ul>
    </div>
</nav>