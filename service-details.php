<?php

require "header.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

}else{
    $id = 1;
}

?>
<!-- header close -->

<!-- subheader begin -->
<section id="subheader" class="no-bottom" data-stellar-background-ratio="0.5">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <?php
                        switch($id){
                            case 1:
                                echo  "OCEAN FREIGHT";
                            break;
                            case 2:
                                echo  "AIR FREIGHT";
                            break;
                            case 3:
                                echo  "CARGO EXPRESS";
                            break;
                            case 4:
                                echo  "LOGISTICS";
                            break;
                            case 5:
                                echo  "WAREHOUSING";
                            break;
                            default:
                            echo  "CUSTOM BROKRAGE";
                        }
                         ?>
                        <span>Secure &amp; Reliable</span>
                    </h1>
                    <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<div class="clearfix"></div>

<!-- content begin -->
<div id="content" class="no-padding">

    <!-- section begin -->
    <?php 
    switch($id){
        case 1:
            require "ocean.html";
        break;
        case 2:
            require "air.html";
        break;
        case 3:
            require "cargo.html";
        break;
        case 4:
            require "logistics.html";
        break;
        case 5:
            require "warehousing.html";
        break;
        default:
            require "brokage.html";
    }
    
    ?>
    <!-- section close -->






</div>
<!-- content close -->

<!-- footer begin -->
<?php

        require "footer.php";
        
        ?>