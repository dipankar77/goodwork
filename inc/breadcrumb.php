<?php
$sql_bc = 'SELECT * FROM categories WHERE slug = "'.$page.'"';
if($result_bc = mysqli_query($link, $sql_bc)) {
   if(mysqli_num_rows($result) > 0) { 
      $row_bc = mysqli_fetch_row($result_bc);
   }
}
?>
<!--<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
      <li class="breadcrumb-item">Frontend</li>
      <li class="breadcrumb-item active" aria-current="page">HTML</li>
   </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>-->