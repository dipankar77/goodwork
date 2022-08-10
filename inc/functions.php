<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
function pagename($page) {
    switch ($page) {
        case 'home':
          $thispage =  "pages/home.php ";
          break;
        case 'html':
            $thispage =  "pages/frontend/html.php";
            break;
        case 'css':
            $thispage =  "pages/frontend/css.php";
            break;
        case 'javascript':
            $thispage =  "pages/frontend/javascript.php";
            break;
        case 'jquery':
            $thispage =  "pages/frontend/jquery.php";
            break;
        case 'ajax':
            $thispage =  "pages/frontend/ajax.php";
            break;
        case 'bootstrap':
            $thispage =  "pages/frontend/bootstrap.php";
            break;
        case 'talwindcss':
            $thispage =  "pages/frontend/talwindcss.php";
            break;
        case 'react':
            $thispage =  "pages/frontend/react.php";
            break;
        case 'vue':
            $thispage =  "pages/frontend/vue.php";
            break;
        case 'html_quiz':
            $thispage =  "pages/frontend/html_quiz.php";
            break;            
        case 'php':
            $thispage =  "pages/backend/php.php";
            break; 
        case 'wordpress':
            $thispage =  "pages/backend/wordpress.php";
            break;
        case 'codeigniter':
            $thispage =  "pages/backend/codeigniter.php";
            break; 
        case 'laravel':
            $thispage =  "pages/backend/laravel.php";
            break;
        case 'mysql':
            $thispage =  "pages/database/mysql.php";
            break;
        case 'mongodb':
            $thispage =  "pages/database/mongodb.php";
            break;
        case 'aws':
            $thispage =  "pages/cloud/aws.php";
            break;
        case 'azure':
            $thispage =  "pages/cloud/azure.php";
            break;
        case 'git':
            $thispage =  "pages/devops/git.php";;
            break;
        case 'docker':
            $thispage =  "pages/devops/docker.php";
            break;
        case 'dusk':
            $thispage =  "pages/testautomation/dusk.php";
            break;
        case 'selenium':
            $thispage =  "pages/testautomation/selenium.php";
            break;
        case 'contact':
          $thispage =  "pages/contact.php";
          break;                                                                           
        default:
        $thispage =  "pages/home.php";
      }
    return $thispage;
}
function getContent($page) {
    $sql = "SELECT id, cattype FROM categories WHERE slug = $page";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)) {
                if($row['cattype']==1) {
                    $fetched_content = array();
                    $sql_content = 'SELECT * FROM qa WHERE pageid = '.$row["id"].'';
                    if($result_content = mysqli_query($link, $sql_content)) {
                        if(mysqli_num_rows($result_content) > 0) {
                            while($row_content = mysqli_fetch_array($result_content)) {
                                $fetched_content[] = $row_content;
                            }
                        }
                    }                    
                }

            }
        }
    }    
    return $fetched_content;
}
?>