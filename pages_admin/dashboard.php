<?php
$sql_menu = "SELECT count(id) FROM categories";
if($result_menu = mysqli_query($link, $sql_menu)) {
   if(mysqli_num_rows($result_menu) > 0) {
      $row_menu = mysqli_fetch_row($result_menu);
   }
}
$sql_sc = "SELECT count(id) FROM sc";
if($result_sc = mysqli_query($link, $sql_sc)) {
   if(mysqli_num_rows($result_sc) > 0) {
      $row_sc = mysqli_fetch_row($result_sc);
   }
}
$sql_qa = "SELECT count(id) FROM qa";
if($result_qa = mysqli_query($link, $sql_qa)) {
   if(mysqli_num_rows($result_qa) > 0) {
      $row_qa = mysqli_fetch_row($result_qa);
   }
}
?>
<div class="row">
   <div class="col-md-12">
      <div class="page-header clearfix">
         <h2 class="text-center">Dashboard</h2>
      </div>
      <br>
      <div class="row">
         <div class="col-sm-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Menu</h5>
                  <p class="card-text">#<?=$row_menu[0];?> menus available.</p>
                  <a href="?page=menu" class="btn btn-primary">Manage</a>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">SC - Static Content</h5>
                  <p class="card-text">#<?=$row_sc[0];?> SCs available.</p>
                  <a href="?page=sc" class="btn btn-primary">Manage</a>
               </div>
            </div>
         </div>         
         <div class="col-sm-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">QA</h5>
                  <p class="card-text">#<?=$row_qa[0];?> QAs available.</p>
                  <a href="?page=qa" class="btn btn-primary">Manage</a>
               </div>
            </div>
         </div>
      </div><br>
      <div class="row">
      <div class="col-sm-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Quiz</h5>
                  <p class="card-text">#99 quiz available.</p>
                  <a href="?page=quiz" class="btn btn-primary">Manage</a>
               </div>
            </div>
         </div>           
         <div class="col-sm-4">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">App</h5>
                  <p class="card-text">#99 Apps available.</p>
                  <a href="?page=app" class="btn btn-primary">Manage</a>
               </div>
            </div>
         </div>
      </div>      
   </div>
</div>