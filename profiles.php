<?php include("inc/config.php"); ?>
<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?> 
<?php include("inc/breadcrumb.php"); ?>
<?php
//echo $page."<br>";
if($page == "quiz") {
    include("quiz.php");
} else {
    include("inc/content.php");
}
?>
<?php //include("inc/content.php"); ?>
<?php include("inc/footer.php"); ?>                                       