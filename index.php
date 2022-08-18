<?php include("inc/config.php"); ?>
<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?> 
<?php include("inc/breadcrumb.php"); ?>
<?php if($page == "html_quiz") {
    include("pages/frontend/html_quiz.php");
} else {
    include("inc/content.php");
}
?>
<?php //include("inc/content.php"); ?>
<?php include("inc/footer.php"); ?>                                       