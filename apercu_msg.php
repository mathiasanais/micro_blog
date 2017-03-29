<?php
$message = $_GET ['message'];

 $pattern = array('/https?:\/\/[\w]+\.[a-z\.]+\/?[\w]+?/',
    '/[a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-\.]+\.[a-z]+/',
    '/\S*#([\w]+\S*)/');
   $replacement = array('<a href="$0" target="_blank">$0</a>',
    '<a href="mailto:$0">$0</a>',
    '<a href="http://localhost:8080/micro_blogv2/index.php?search=$1">$0</a>');

   $list_contenu = preg_replace($pattern, $replacement, $message);
echo $list_contenu;

?>