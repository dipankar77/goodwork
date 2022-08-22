<?php
require_once "inc/config.php"; // Include config file
$head = $menu_slug = $pcategory = $type = ""; // Define variables and initialize with empty values
$head_err = $menu_slug_err = $pcategory_err = $type_err = "";
if(isset($_POST["id"]) && !empty($_POST["id"])){ // Processing form data when form is submitted
    $id = $_POST["id"]; // Get hidden input value
    $input_pcategory = trim($_POST["pcategory"]); // Validate menu category
    if(empty($input_pcategory)){
        $pcategory_err = "Please select a Parent Menu.";     
    } else{
        $pcategory = $input_pcategory;
    }
    $input_type = trim($_POST["type"]); // Validate menu type
    if(empty($input_type)){
        $type_err = "Please select a Menu Type.";     
    } else{
        $type = $input_type;
    }     
    $input_head = trim($_POST["head"]); // Validate head
    if(empty($input_head)){
        $head_err = "Please enter a head.";
    } elseif(!filter_var($input_head, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $head_err = "Please enter a valid head.";
    } else{
        $head = $input_head;
    }
    $input_menu_slug = trim($_POST["slug"]); // Validate slug
    if(empty($input_menu_slug)){
        $menu_slug_err = "Please enter a Menu Slug.";
    } else{
        $menu_slug = $input_menu_slug;
    }     
    if(empty($head_err) && empty($content_err) && empty($tags_err)){ // Check input errors before inserting in database
        // Prepare an update statement
        $sql = "UPDATE categories SET category_name=? WHERE id=?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param_head, $param_id); // Bind variables to the prepared statement as parameters
            $param_head = $head; // Set parameters
            $param_id = $id;
            if(mysqli_stmt_execute($stmt)){ // Attempt to execute the prepared statement
                header("location: admin.php?page=category"); // Records updated successfully. Redirect to landing page
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt); // Close statement
    }
    mysqli_close($link); // Close connection
} else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){ // Check existence of id parameter before processing further
        $id =  trim($_GET["id"]); // Get URL parameter
        $sql = "SELECT * FROM categories WHERE id = ?"; // Prepare a select statement
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id); // Bind variables to the prepared statement as parameters
            $param_id = $id; // Set parameters
            if(mysqli_stmt_execute($stmt)){ // Attempt to execute the prepared statement
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $head = $row["category_name"]; // Retrieve individual field value
                    $menu_slug = $row["slug"];
                    $pcategory = $row["pid"];
                    $type = $row["cattype"];
                } else{
                    header("location: admin.php?page=error"); // URL doesn't contain valid id. Redirect to error page
                    exit();
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt); // Close statement
    }  else{
        header("location: admin.php?page=error"); // URL doesn't contain id parameter. Redirect to error page
        exit();
    }
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Update Record</h2>
        </div>
        <p>Please edit the input values and submit to update the record.</p>
        <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
        <div class="form-group <?php echo (!empty($pcategory_err)) ? 'has-error' : ''; ?>">    
        <label>Parent Menu</label>    
        <select class="form-select" name="pcategory" aria-label="Default select example">
            <option value="">== Select ==</option>
            <option value="0">None</option>
            <?php
            $sql = "SELECT * FROM categories WHERE pid = 0";// Attempt select query execution
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $row["id"]; ?>" <?php if($pcategory==$row["id"]) echo "selected"; ?>><?php echo $row["category_name"]; ?></option>
            <?php
                    }
                }
            }
            ?>
            </select>
            <span class="help-block"><?php echo $pcategory_err;?></span>
        </div><br>
        <div class="form-group <?php echo (!empty($type_err)) ? 'has-error' : ''; ?>">
        <label>Menu Type</label>    
        <select class="form-select" name="type" aria-label="Type Select">
            <option value="">== Select ==</option>
            <option value="0" <?php if($type==0) echo "selected"; ?>>Parent</option>
            <option value="1" <?php if($type==1) echo "selected"; ?>>Question and Answer</option>
            <option value="2" <?php if($type==2) echo "selected"; ?>>Quiz</option>
            <option value="3" <?php if($type==3) echo "selected"; ?>>App</option>
            </select>
            <span class="help-block"><?php echo $type_err;?></span>
        </div><br>                
            <div class="form-group <?php echo (!empty($head_err)) ? 'has-error' : ''; ?>">
                <label>head</label>
                <input type="text" name="head" class="form-control" value="<?php echo $head; ?>">
                <span class="help-block"><?php echo $head_err;?></span>
            </div><br>
            <div class="form-group <?php echo (!empty($menu_slug_err)) ? 'has-error' : ''; ?>">
                <label>Menu Slug</label>
                <input type="text" name="slug" class="form-control" value="<?php echo $menu_slug; ?>">
                <span class="help-block"><?php echo $menu_slug_err;?></span>
            </div><br>             
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="admin.php" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
<?php mysqli_close($link); // Close connection ?>