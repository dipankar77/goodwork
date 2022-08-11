<?php
   $sql_bc = 'SELECT * FROM categories WHERE slug = "'.$page.'"';
   if($result_bc = mysqli_query($link, $sql_bc)) {
      if(mysqli_num_rows($result_bc) > 0) { 
         $row_bc = mysqli_fetch_row($result_bc); //echo $row_bc[3]."<br>".$row_bc[2];
   ?>
<?php      
   if($page=="home") {
   ?>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Home</li>
   </ol>
</nav>
<?php } else { ?>
<?php if ($row_bc[3]==0 && $row_bc[2]==$page) { ?>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?=ucwords($page);?></li>
   </ol>
</nav>
<?php } ?>
<?php if ($row_bc[3]!=0 && $row_bc[2]==$page) { 
   $sql_pc = 'SELECT category_name FROM categories WHERE id = '.$row_bc[3].'';
   if($result_pc = mysqli_query($link, $sql_pc)) {
      if(mysqli_num_rows($result_pc) > 0) {
         $row_pc = mysqli_fetch_row($result_pc);
      }
   }
?>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
      <li class="breadcrumb-item"><?=$row_pc[0];?></li>
      <li class="breadcrumb-item active" aria-current="page"><?=ucwords($page);?></li>
   </ol>
</nav>
<?php } ?>   
<?php } ?>
<?php } } ?>