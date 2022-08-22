<?php 
$answer = $skill_category = ""; // Define variables and initialize with empty values
$skill_answer_err = $skill_category_err  = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){ echo ""; print_r($_POST); // Processing form data when form is submitted
    $input_skill_category = trim($_POST["skillcategory"]); // Validate menu category
    if(empty($input_skill_category)){
        $skill_category_err = "Please select a Skill Category.";     
    } else{
        $skill_category = $input_skill_category;
    }
    $input_skill_answer = trim($_POST["skill_answer"]); // Validate slug
    if(empty($input_skill_answer)){
        $skill_answer_err = "Please enter your Answer.";
    } else{
        $answer = $input_skill_answer;
    }    
    if(empty($skill_category_err) || empty($skill_answer_err)){ // Check input errors before inserting in database
        $sql = "INSERT INTO sc (content, pageid) VALUES (?, ?)"; // Prepare an insert statement
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param_content, $param_skill_category); // Bind variables to the prepared statement as parameters
            $param_content = $answer; // Set parameters
            $param_skill_category = $skill_category; // Set parameters            
            if(mysqli_stmt_execute($stmt)){ // Attempt to execute the prepared statement
                header("location: admin.php?page=sc"); // Records created successfully. Redirect to landing page
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
        <div class="form-group <?php echo (!empty($skill_category_err)) ? 'has-error' : ''; ?>">    
        <label>Page</label>    
        <select class="form-select" name="skillcategory" aria-label="Default select example">
            <option value="">== Select ==</option>
            <?php
            $sql = "SELECT id, category_name FROM categories WHERE cattype = 0";// Attempt select query execution
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
            <span class="help-block"><?php echo $skill_category_err;?></span>
        </div><br>
            <div class="form-group <?php echo (!empty($skill_answer_err)) ? 'has-error' : ''; ?>">
                <label>Content</label>
                <textarea name="skill_answer" rows="4" cols="50" class="form-control"></textarea>
                <span class="help-block"><?php echo $skill_answer_err;?></span>
            </div><br>            
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="admin.php?page=sc" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>        
<?php mysqli_close($link); // Close connection ?>