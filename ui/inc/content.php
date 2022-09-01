<?php
$sql = 'SELECT * FROM menus WHERE slug = "'.$page.'"';
if($result = mysqli_query($link, $sql)) {
   if(mysqli_num_rows($result) > 0) { 
      $row = mysqli_fetch_row($result); //echo "<pre>"; print_r($row);
      if($row[4]==0 AND $page != 'quiz' AND $page != 'apps') {
         $sql_content = 'SELECT * FROM sc WHERE pageid = '.$row[0].'';
      } else if($row[4]==0 AND $page == 'quiz') {
         $sql_content = 'SELECT * FROM menus WHERE cattype = 2';
      } else if($row[4]==0 AND $page == 'apps') {
         $sql_content = 'SELECT * FROM menus WHERE cattype = 3';         
      } else if($row[4]==2) {
         $sql_content = 'SELECT * FROM menus WHERE pageid = '.$row[0].'';
      } else if($row[4]==1) {
         $sql_content = 'SELECT * FROM qa WHERE pageid = '.$row[0].'';         
      } else {
         $sql_content = 'SELECT * FROM sc WHERE pageid = '.$row[0].'';
      } //echo $sql_content."<br>";
      if($result_content = mysqli_query($link, $sql_content)) {
         if(mysqli_num_rows($result_content) > 0) {         
?>
<?php if($row[4]==0 AND $page != 'quiz' AND $page != 'apps') { ?>
<?php
while($row_content = mysqli_fetch_array($result_content)) { ?>
<?=$row_content["content"]?>
<?php } ?>
<?php } else if($row[4]==0 AND $page == 'quiz') { ?>
<div class="row">
   <div class="col-md-12">
      <div class="page-header clearfix">
         <h2 class="text-center">Quiz</h2>
      </div>
      <br>
      <div class="row">
         <?php while($row_content = mysqli_fetch_array($result_content)) { ?>
         <div class="col-sm-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title"><?=$row_content["category_name"];?></h5>
                  <p class="card-text"># questions available.</p>
                  <a href="?page=<?=$row_content["slug"];?>" class="btn btn-primary">Start</a>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</div>
<?php } else if($row[4]==0 AND $page == 'apps') { ?>
<div class="row">
   <div class="col-md-12">
      <div class="page-header clearfix">
         <h2 class="text-center">Apps</h2>
      </div>
      <br>
      <div class="row">
         <?php while($row_content = mysqli_fetch_array($result_content)) { ?>
         <div class="col-sm-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title"><?=$row_content["category_name"];?></h5>
                  <p class="card-text"># apps available.</p>
                  <a href="?page=<?=$row_content["slug"];?>" class="btn btn-primary">View Apps</a>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</div>
<?php } else if($row[4]==2) { ?>
quiz details   
<?php } else if($row[4]==1) { ?>   
   <div class="accordion" id="accordionExample">
<?php
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
<?php } ?>
</div>
<?php } else { ?>

<?php } ?>
<?php
          }
      }
   }
}
?>