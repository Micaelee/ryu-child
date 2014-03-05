<?php
    
//function to call in google fonts
    function child_fonts(){
 
    wp_enqueue_style('child_Courgette' , 'http://fonts.googleapis.com/css?family=Courgette');
    wp_enqueue_style('child_Maven Pro' , 'http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700');
    wp_enqueue_style('child_Raleway', 'http://fonts.googleapis.com/css?family=Raleway:400,200,300');
}

add_action('wp_enqueue_scripts', 'child_fonts');
    
?>