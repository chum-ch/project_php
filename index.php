<?php
    include_once('partial/header.php');
    include_once('partial/navbar.php');
    if(isset($_GET['page'])) {
        $pages = ['home', 'news', 'book'];
        if (in_array($_GET['page'], $pages)) {
          include_once('pages/' . $_GET['page'] . '.php');
        } else {include_once('pages/404.php');}
        } else {
          if (isset($_GET['actions'])){
            $actions = ['search','edit_news_html','edit_book_html','add_book_html','add_news_html','delete_news_model','delete_book_model','add_new_model'];
            if (in_array($_GET['actions'], $actions)) {
              include_once('actions/'. $_GET['actions'].'.php');
            }else {include_once('pages/404.php');}

          }else{include_once('pages/home.php');}
        }
    include_once('partial/footer.php');