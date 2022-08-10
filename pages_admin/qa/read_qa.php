<?php
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){ // Check existence of id parameter before processing further
    require_once "inc/config.php"; // Include config file
    $sql = "SELECT * FROM categories WHERE id = ?"; // Prepare a select statement
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id); // Bind variables to the prepared statement as parameters
        $param_id = trim($_GET["id"]); // Set parameters
        if(mysqli_stmt_execute($stmt)){ // Attempt to execute the prepared statement
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC); /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $head = $row["category_name"]; // Retrieve individual field value
            } else{
                header("location: admin.php?page=error"); // URL doesn't contain valid id parameter. Redirect to error page
                exit();
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt); // Close statement
    mysqli_close($link); // Close connection
} else{
    header("location: admin.php?page=error"); // URL doesn't contain id parameter. Redirect to error page
    exit();
}
//echo "<pre>"; print_r($row);
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>View Record</h1>
        </div>
        <div class="form-group">
        <p class="form-control-static">
            <label>Menu Name</label>: <?php echo $row["category_name"]; ?><br>
            <label>Menu slug</label>: <?php echo $row["slug"]; ?><br>
            <label>Menu pid</label>: <?php echo $row["pid"]; ?><br>
            <label>Menu cattype</label>: <?php echo $row["cattype"]; ?>
        </p>
        </div>
        <p><a href="admin.php?page=menu" class="btn btn-primary">Back</a></p>
    </div>
</div>