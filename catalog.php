<?php 
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
<div class="section page">
    <h1><?php echo $pageTitle ?></h1>
</div>

<?php include("inc/footer.php")?> <!-- Including footer.php-->
