<?php 


/***
 * Name: Remove-Admin-Menues
 * Description:remove items from the wp admin for certain user types
 * */

function remove_admin_menus(){

     global $current_user;
     $users = array(3,4,5);

     $role = $current_user->roles[0];

     if($role == 'administrator') {
          remove_menu_page('themes.php');
          remove_menu_page('plugins.php');
     }
     elseif($role == 'editor'){
          remove_menu_page('themes.php');
          remove_menu_page('plugins.php');
          remove_menu_page('pages.php');
          remove_menu_page('users.php');

     }

   

}



?>