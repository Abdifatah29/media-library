<?php 
include('inc/data.php');

$pageTitle = "Full Catalog";
//for default
$section = null;

if (isset($_GET["cat"])) {
 if ($_GET["cat"] == "books") {
        $pageTitle = "books";
        $section = "books";
    } else if ($_GET["cat"] == "movies") {
        $pageTitle = "movies";
        $section = "movies";
    } else if ($_GET["cat"] == "music") {
        $pageTitle = "music";
        $section = "music";
    } 
}
include("inc/header.php");?> <!-- Including header.php-->
<div class="section catalog page">
    <div class="wrapper">
    <h1><?php echo $pageTitle ?></h1>
    <ul class="items">
        <?php
        //looping through array
            foreach($catalog as $item) {
                echo "<li><a href='#'><img src='"
                . $item["img"]. "' alt='"
                . $item["title"]. "'/>"
                . "<p>View Details</p>"
                . "</a></li>";
            };
        ?>
        <!-- <li></li>
        <li></li>
        <li></li> -->
    </ul>
    </div>
</div>

<?php include("inc/footer.php")?> <!-- Including footer.php-->
