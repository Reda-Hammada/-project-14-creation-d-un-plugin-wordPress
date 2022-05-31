<?php

/*
plugin name: hello word 
plugin URI: github.com
author: Reda Hammada
author URI:  https://github.com/reda-hammada
version: 0.1
*/
add_action('the_content', 'sey_Hello');

function sey_Hello($content){
   return $content ="<h1>hello word</h1>";
}