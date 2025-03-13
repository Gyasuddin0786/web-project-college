<?php
include_once("header.php");
$q = "select * from image_slider";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result);
?>
<br>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <?php
        for ($i = 0; $i < $count; $i++) {
        ?>

            <li data-target="#demo" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 1) {
                                                                                echo "active";
                                                                            } ?>"></li>
        <?php
        }
        ?>

    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <?php
        $i = 1;
        while ($img1 = mysqli_fetch_array($result)) {
        ?>
            <div class="carousel-item <?php if ($i == 1) {
                                            echo "active";
                                        } ?>">
                <img src="images/slider/<?php echo $img1[1]; ?>" alt="Los Angeles" class="img-fluid">
            </div>
        <?php
            $i++;
        }
        ?>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<br>
<?php
include_once("footer.php");
