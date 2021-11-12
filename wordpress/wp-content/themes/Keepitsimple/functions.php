<?php

//Register Keep it simple
function keepitsimple_register_siderbars(){
    
    $sidebar1 = array(
        "name" => "Main Sidebar1",
        "id" => "sidebar1",
        "before_widget" => "<div class='widget'>",
        "after_widget" => "</div>",
        "before_title" => "<h3>",
        "after_title" => "</h3>"
    );


    register_sidebar($sidebar1);
 
}
    add_action('widgets_init','keepitsimple_register_siderbars');

?>