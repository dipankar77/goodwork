<ul class="nav nav-pills mt-4 mb-4">
  <li class="nav-item">
    <a class="nav-link <?php if($page=='dashboard' || $page=='') { echo 'active';} ?>" aria-current="page" href="?page=dashboard">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($page=='menu' || $page=='read_menu' || $page=='create_menu' || $page=='update_menu' || $page=='delete_menu') { echo 'active';} ?>" href="?page=menu">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($page=='sc' || $page=='read_sc' || $page=='create_sc' || $page=='update_sc' || $page=='delete_sc') { echo 'active';} ?>" href="?page=sc">SC</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($page=='qa' || $page=='read_qa' || $page=='create_qa' || $page=='update_qa' || $page=='delete_qa') { echo 'active';} ?>" href="?page=qa">QA</a>
  </li>   
  <li class="nav-item">
    <a class="nav-link <?php if($page=='quiz') { echo 'active';} ?>" href="?page=quiz">Quiz</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if($page=='app') { echo 'active';} ?>" href="?page=app">App</a>
  </li>     
</ul>
<hr>