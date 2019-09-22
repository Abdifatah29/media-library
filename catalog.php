<?php 
$pageTitle = "Full Catalog";

if (isset($_GET["cat"])) {
 if ($_GET["cat"] == "books") {
        $pageTitle = "books";
    } else if ($_GET["cat"] == "movies") {
        $pageTitle = "movies";
    } else if ($_GET["cat"] == "music") {
        $pageTitle = "music";
    } 
}
include("inc/header.php");?> <!-- Including header.php-->
<div class="section page">
    <h1><?php echo $pageTitle ?></h1>
</div>

<?php include("inc/footer.php")?> <!-- Including footer.php-->
