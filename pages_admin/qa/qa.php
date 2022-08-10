<div class="row">
   <div class="col-md-12">
      <div class="page-header clearfix">
         <h2 class="text-center">QA Management</h2>
         <a href="admin.php?page=create_qa" class="btn btn-primary">Add QA</a>
      </div>
      <br>
      <?php
         $sql = "SELECT * FROM qa";// Attempt select query execution
         if($result = mysqli_query($link, $sql)){
           if(mysqli_num_rows($result) > 0){
      ?>
        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                <th>#</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Skill Category</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['question']; ?></td>
                <td><?php echo $row['answer']; ?></td>
                <td><?php echo $row['pageid']; ?></td>
                <td>
                    <a href='admin.php?page=read_qa&id=<?php echo $row['id']; ?>' title='View Record' data-toggle='tooltip'><i class='bi bi-eye-fill'></i></a>
                    <a href='admin.php?page=update_qa&id=<?php echo $row['id']; ?>' title='Update Record' data-toggle='tooltip'><i class='bi bi-pencil-fill'></i></a>
                    <a href='admin.php?page=delete_qa&id=<?php echo $row['id']; ?>' title='Delete Record' data-toggle='tooltip'><i class='bi bi-file-x-fill'></i></a>
                </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
      <?php mysqli_free_result($result); ?>
      <?php } else { ?>
        <p class='lead'><em>No Record Found.</em></p>
      <?php }} else { ?>
        ERROR: Could not able to execute <?php echo $sql.' '.mysqli_error($link); ?>
      <?php } ?>   
      <?php mysqli_close($link); // Close connection ?>
   </div>
</div>
