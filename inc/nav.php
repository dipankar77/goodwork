<?php //echo $page; ?>
<?php $sql_menu = "SELECT * FROM categories WHERE pid = 0"; ?>
<ul class="nav nav-pills mt-4 mb-4">
   <?php
   if($result_menu = mysqli_query($link, $sql_menu)) {
      if(mysqli_num_rows($result_menu) > 0) {
         while($row_menu = mysqli_fetch_array($result_menu)) {
            $sql_submenu = "SELECT * FROM categories WHERE pid=".$row_menu['id'];
            $result_submenu = mysqli_query($link, $sql_submenu);
            $sql_submenu_slugs = "SELECT slug FROM categories WHERE pid=".$row_menu['id'];
            $result_submenu_slugs = mysqli_query($link, $sql_submenu_slugs);
            $menu_slugs = array();
            while($row_submenu_slugs = mysqli_fetch_array($result_submenu_slugs)) {
               $menu_slugs[] = $row_submenu_slugs['slug'];
            }
            //echo "<pre>"; print_r($menu_slugs);            
   ?>       
   <li class="nav-item <?php if(mysqli_num_rows($result_submenu) > 0) { echo "dropdown"; } ?>">
      <a class="nav-link <?php if($page==$row_menu['slug'] || in_array($page, $menu_slugs)) echo "active "; ?><?php if(mysqli_num_rows($result_submenu) > 0) { echo "dropdown "; } ?><?php if(mysqli_num_rows($result_submenu) > 0) { echo "dropdown-toggle"; } ?>" <?php if(mysqli_num_rows($result_submenu) > 0) { echo 'data-bs-toggle="dropdown" role="button" aria-expanded="false"'; } ?> href="?page=<?=$row_menu['slug']; ?>"><?=$row_menu['category_name']; ?></a>
      <?php if(mysqli_num_rows($result_submenu) > 0) { ?>
      <ul class="dropdown-menu">
         <?php while($row_submenu = mysqli_fetch_array($result_submenu)) { ?>
         <li><a class="dropdown-item" href="?page=<?=$row_submenu['slug']; ?>"><?=$row_submenu['category_name']; ?></a></li>
         <?php } ?>
      </ul>
      <?php } ?>
   </li>
   <?php 
         }
      }
   }
   ?>
<?php //mysqli_free_result($result_menu); ?>   
<?php //mysqli_free_result($result_submenu); ?>
<?php //mysqli_close($link);?>   
</ul>
<hr>