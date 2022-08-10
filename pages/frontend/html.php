<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
      <li class="breadcrumb-item">Frontend</li>
      <li class="breadcrumb-item active" aria-current="page">HTML</li>
   </ol>
</nav>
<div class="accordion" id="accordionExample">
<?php
$sql = 'SELECT * FROM categories WHERE slug = "'.$page.'"'; 
if($result = mysqli_query($link, $sql)){
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_row($result); 
      $sql_content = 'SELECT * FROM qa WHERE pageid = '.$row[0].'';
      if($result_content = mysqli_query($link, $sql_content)) {
          if(mysqli_num_rows($result_content) > 0) {
              while($row_content = mysqli_fetch_array($result_content)) { ?>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading<?=$row_content["id"]?>">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$row_content["id"]?>" aria-expanded="true" aria-controls="collapseOne">
                     <strong><?=$row_content["question"]?></strong>
                     </button>
                  </h2>
                  <div id="collapse<?=$row_content["id"]?>" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <?=$row_content["answer"]?>
                     </div>
                  </div>
               </div>
               <?php
              }
          }
      }  
   }
}
?>
</div>