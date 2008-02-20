<?php

function drupify_regions() {
  return array(
       'right' => t('right sidebar'),
       'top_left' => t('top left'),
       'top_right' => t('top right'),       
       'content' => t('content'),
       'header' => t('header'),
       'bottom_left' => t('bottom left'),
       'bottom_right' => t('bottom right'),       
       'footer' => t('footer')
  );
}

function drupify_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    $bcimage = ' <img src="'. base_path() . path_to_theme() .'/images/arrow.png"> ';  
    return '<div class="breadcrumb">'. implode($bcimage, $breadcrumb) .'</div>';
  }
}


?>
