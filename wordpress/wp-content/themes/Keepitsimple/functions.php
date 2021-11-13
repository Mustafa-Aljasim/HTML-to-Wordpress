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

    $footer1 = array(
        "name" => "footer 1",
        "id" => "footer1",
        "before_widget" => "<div>",
        "after_widget" => "</div>",
        "before_title" => "<h3>",
        "after_title" => "</h3>"
    );

    register_sidebar($footer1);
}
    add_action('widgets_init','keepitsimple_register_siderbars');

?>