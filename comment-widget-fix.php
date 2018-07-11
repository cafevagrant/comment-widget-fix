<?php
/*
  Plugin Name: Comment Widget Fix
  Plugin URI: https://www.cafevagrant.com
  Description: Fixes login redirect issue with the comment import export plugin
  Author: Cafe Vagrant
  Version: 1.0
  Author URI: https://www.cafevagrant.com
 */

add_filter('hf_user_permission_roles', 'add_additional_user_role',10,1);

function add_additional_user_role($wf_roles) { 
    array_push($wf_roles, 'admin'); array_push($wf_roles, 'webmaster'); return $wf_roles; 

}
