<?php 
$menu_name = $menu_slug = $pcategory = $type = ""; // Define variables and initialize with empty values
$menu_name_err = $menu_slug_err = $pcategory_err = $type_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){ echo ""; print_r($_POST); // Processing form data when form is submitted
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
    $input_menu_name = trim($_POST["menu_name"]); // Validate menu name
    if(empty($input_menu_name)){
        $menu_name_err = "Please enter a Menu Name.";
    } else{
        $menu_name = $input_menu_name;
    }
    $input_menu_slug = trim($_POST["slug"]); // Validate slug
    if(empty($input_menu_slug)){
        $menu_slug_err = "Please enter a Menu Slug.";
    } else{
        $menu_slug = $input_menu_slug;
    }    
    if(empty($menu_name_err)){ // Check input errors before inserting in database
        $sql = "INSERT INTO categories (category_name, pid, cattype) VALUES (?, ?, ?)"; // Prepare an insert statement
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sii", $param_head, $param_pcategory, $param_type); // Bind variables to the prepared statement as parameters
            $param_head = $menu_name; // Set parameters
            $param_pcategory = $pcategory; // Set parameters
            $param_type = $type; // Set parameters
            if(mysqli_stmt_execute($stmt)){ // Attempt to execute the prepared statement
                header("location: admin.php?page=menu"); // Records created successfully. Redirect to landing page
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt); // Close statement
    }
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Create Record</h2>
        </div>
        <p>Please fill this form and submit to add record to the database.</p>
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
            <option value="<?php echo $row["id"]; ?>" <?php if(isset($_POST["pcategory"]) && $_POST["pcategory"]==$row["id"]) echo "selected"; ?>><?php echo $row["category_name"]; ?></option>
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
            <option value="0" <?php if(isset($_POST["type"]) && $_POST["type"]==0) echo "selected"; ?>>Parent</option>
            <option value="1" <?php if(isset($_POST["type"]) && $_POST["type"]==1) echo "selected"; ?>>Question and Answer</option>
            <option value="2" <?php if(isset($_POST["type"]) && $_POST["type"]==2) echo "selected"; ?>>Quiz</option>
            <option value="3" <?php if(isset($_POST["type"]) && $_POST["type"]==3) echo "selected"; ?>>App</option>
            </select>
            <span class="help-block"><?php echo $type_err;?></span>
        </div><br>                
            <div class="form-group <?php echo (!empty($menu_name_err)) ? 'has-error' : ''; ?>">
                <label>Menu Name</label>
                <input type="text" name="menu_name" class="form-control" value="<?php if(isset($_POST["menu_name"])) echo $_POST["menu_name"]; ?>">
                <span class="help-block"><?php echo $menu_name_err;?></span>
            </div>
            <div class="form-group <?php echo (!empty($menu_slug_err)) ? 'has-error' : ''; ?>">
                <label>Menu Slug</label>
                <input type="text" name="slug" class="form-control" value="<?php if(isset($_POST["slug"])) echo $_POST["slug"]; ?>">
                <span class="help-block"><?php echo $menu_slug_err;?></span>
            </div><br>            
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="admin.php?page=category" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>        
<?php mysqli_close($link); // Close connection ?>