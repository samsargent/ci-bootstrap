<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @desc Simple function to check if current page is equal to nav list element.
 *       This case return "active" as class name for the list element.
 * @param String $pageID
 * @param String $linkID
 * @return String/Null
 */
function is_active($route){
  $ci =& get_instance();
  return ($ci->router->fetch_class().'#'.$ci->router->fetch_method() == $route) ? 'active' : '';
}