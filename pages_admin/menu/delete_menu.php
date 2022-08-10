<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){ // Process delete operation after confirmation
    $sql = "DELETE FROM categories WHERE id = ?"; // Prepare a delete statement
    if($stmt = mysqli_prepare($link, $sql)){ // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id); // Set parameters
        $param_id = trim($_POST["id"]);
        if(mysqli_stmt_execute($stmt)){ // Attempt to execute the prepared statement
            header("location: admin.php?page=menu"); // Records deleted successfully. Redirect to landing page
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt); // Close statement
    mysqli_close($link); // Close connection
} else{
    if(empty(trim($_GET["id"]))){ // Check existence of id parameter
        header("location: error.php"); // URL doesn't contain id parameter. Redirect to error page
        exit();
    }
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>Delete Record</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?page=delete_menu&id=<?php echo trim($_GET["id"]); ?>" method="post">
                <div class="alert alert-danger">
                    <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                    <p>Are you sure you want to delete this record?</p><br>
                    <p>
                        <input type="submit" value="Yes" class="btn btn-danger">
                        <a href="?page=menu" class="btn btn-default">No</a>
                    </p>
                </div>
            </form>
        </div>
    </div>        
</div>