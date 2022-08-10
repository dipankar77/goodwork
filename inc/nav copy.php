<?php
            // $menu_slugs = array();
            // while($row_submenu = mysqli_fetch_array($result_submenu)) {
            //    $menu_slugs[] = $row_submenu['slug'];
            // }
            //echo "<pre>"; print_r($menu_slugs);
?>
<!--<a class="nav-link <?php if($page == $row_menu['slug'] || in_array($page, $menu_slugs)) echo "active "; ?><?php if(mysqli_num_rows($result_submenu) > 0) { echo "dropdown "; } ?><?php if(mysqli_num_rows($result_submenu) > 0) { echo "dropdown-toggle"; } ?>" <?php if(mysqli_num_rows($result_submenu) > 0) { echo 'data-bs-toggle="dropdown" role="button" aria-expanded="false"'; } ?> href="?page=<?=$row_menu['slug']; ?>"><?=$row_menu['category_name']; ?></a>-->
<?php require_once "inc/config.php"; // Include config file ?>
<?php $sql_frontend = "SELECT * FROM categories WHERE pid = 1";// Attempt select query execution ?>
<?php //mysqli_free_result($result); ?>   
<?php //mysqli_close($link); // Close connection?>
<ul class="nav nav-pills mt-4 mb-4">
   <li class="nav-item">
      <a class="nav-link <?php if($page=='home' || $page=='') { echo 'active';} ?>" aria-current="page" href="?page=home">Home</a>
   </li>
   <li class="nav-item dropdown">
      <a class="nav-link <?php if($page=='html' || $page=='css' || $page=='javascript' || $page=='jquery' || $page=='ajax' || $page=='bootstrap' || $page=='talwindcss' || $page=='react' || $page=='vue') { echo 'active';} ?> dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Frontend</a>
      <ul class="dropdown-menu">
         <?php
            if($result = mysqli_query($link, $sql_frontend)){
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)) { ?>
         <?php if($row['cattype']==1) { ?>
         <li><a class="dropdown-item" href="?page=html"><?=$row['category_name'];?></a></li>
         <?php } ?>        
         <?php if($row['cattype']==2) { ?>
         <li>
            <hr class="dropdown-divider">
         </li>
         <li><a class="dropdown-item" href="?page=html_quiz"><?=$row['category_name'];?></a></li>
         <?php } ?>
         <?php if($row['cattype']==3) { ?>
         <li>
            <hr class="dropdown-divider">
         </li>
         <li><a class="dropdown-item" href="?page=html_quiz"><?=$row['category_name'];?></a></li>
         <?php } ?>      
         <?php } ?>
         <?php } else { ?>
         <li><a class="dropdown-item" href="?page=html"><em>NA</em></a></li>
         <?php } } else { ?>
         <li><a class="dropdown-item" href="?page=html"><em>Error</em></a></li>
         ?> 
         <?php } ?>      
      </ul>
   </li>
   <li class="nav-item">
      <a class="nav-link <?php if($page=='contact') { echo 'active';} ?>" href="?page=contact">Contact</a>
   </li>
</ul>
<!--
   <ul class="nav nav-pills mt-4 mb-4">
     <li class="nav-item">
       <a class="nav-link <?php if($page=='home' || $page=='') { echo 'active';} ?>" aria-current="page" href="?page=home">Home</a>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link <?php if($page=='html' || $page=='css' || $page=='javascript' || $page=='jquery' || $page=='ajax' || $page=='bootstrap' || $page=='talwindcss' || $page=='react' || $page=='vue') { echo 'active';} ?> dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Frontend</a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="?page=html">HTML</a></li>
         <li><a class="dropdown-item" href="?page=css">CSS</a></li>
         <li><a class="dropdown-item" href="?page=javascript">JavaScript</a></li>
         <li><a class="dropdown-item" href="?page=jquery">jQuery</a></li>
         <li><a class="dropdown-item" href="?page=ajax">AJAX</a></li>
         <li><a class="dropdown-item" href="?page=bootstrap">Bootstrap</a></li>
         <li><a class="dropdown-item" href="?page=talwindcss">Talwind CSS</a></li>
         <li><a class="dropdown-item" href="?page=react">React</a></li>
         <li><a class="dropdown-item" href="?page=vue">Vue.js</a></li>
         <li><hr class="dropdown-divider"></li>
         <li><a class="dropdown-item" href="?page=html_quiz">HTML Quiz</a></li>
         <li><hr class="dropdown-divider"></li>
         <li><a class="dropdown-item" href="?page=frontend_apps">Frontend Apps</a></li>      
       </ul>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link <?php if($page=='php' || $page=='wordpress' || $page=='codeigniter' || $page=='laravel') { echo 'active';} ?> dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Backend</a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="?page=php">PHP</a></li>
         <li><a class="dropdown-item" href="?page=wordpress">WordPress</a></li>
         <li><a class="dropdown-item" href="?page=codeigniter">CodeIgniter</a></li>
         <li><a class="dropdown-item" href="?page=laravel">Laravel</a></li>      
       </ul>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link <?php if($page=='mysql' || $page=='mongodb') { echo 'active';} ?> dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Database</a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="?page=mysql">MySQL</a></li>
         <li><a class="dropdown-item" href="?page=mongodb">mongoDB</a></li>
       </ul>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link <?php if($page=='aws' || $page=='azure') { echo 'active';} ?> dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cloud</a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="?page=aws">AWS</a></li>
         <li><a class="dropdown-item" href="?page=azure">Azure</a></li>
       </ul>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link <?php if($page=='git' || $page=='docker') { echo 'active';} ?> dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">DevOps</a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="?page=git">GIT</a></li>
         <li><a class="dropdown-item" href="?page=docker">Docker</a></li>
       </ul>
     </li>        
     <li class="nav-item dropdown">
       <a class="nav-link <?php if($page=='dusk' || $page=='selenium') { echo 'active';} ?> dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Test Automation</a>
       <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="?page=dusk">Laravel Dusk</a></li>
         <li><a class="dropdown-item" href="?page=selenium">Selenium</a></li>
       </ul>
     </li>
     <li class="nav-item">
       <a class="nav-link <?php if($page=='contact') { echo 'active';} ?>" href="?page=contact">Contact</a>
     </li>
   </ul>
   -->
<hr>