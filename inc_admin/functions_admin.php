<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
function pagename($page) {
    switch ($page) {
        case 'dashboard':
          $thispage = "pages_admin/dashboard.php";
          break;
        case 'menu':
            $thispage = "pages_admin/menu/menu.php";
            break;
        case 'read_menu':
            $thispage = "pages_admin/menu/read_menu.php";
            break;
        case 'create_menu':
            $thispage = "pages_admin/menu/create_menu.php";
            break;
        case 'update_menu':
            $thispage = "pages_admin/menu/update_menu.php";
            break;
        case 'delete_menu':
            $thispage = "pages_admin/menu/delete_menu.php";
            break;                                                
        case 'qa':
            $thispage = "pages_admin/qa/qa.php";
            break;
        case 'read_qa':
            $thispage = "pages_admin/qa/read_qa.php";
            break;
        case 'create_qa':
            $thispage = "pages_admin/qa/create_qa.php";
            break;
        case 'update_qa':
            $thispage = "pages_admin/qa/update_qa.php";
            break;
        case 'delete_qa':
            $thispage = "pages_admin/qa/delete_qa.php";
            break;             
        case 'error':
            $thispage = "pages_admin/error.php";
            break;            
        default:
        $thispage = "pages_admin/dashboard.php";
      }
    return $thispage;
}
?>