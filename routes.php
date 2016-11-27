<?php
function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // creates a new instance of the needed controler
    switch($controller) {
        case 'pages':
            $controller = new pagesController();
        break;
        case 'posts';
            // we need the model to query the database later ion the controller
            require_once('models/post.php');
            $controller = new postsController();
        break;
    }

    // call the action
    $controller->{ $action }();
}

    // just a list of the controllers we have and their action
    // we consider these "allowed" values
    $controllers = array('pages' => ['home', 'error'],
                         'posts' => ['index', 'show']);


    // check that the requested controller and action are both allowed
    // if someone tries to access something else he will be redirected to the error action of the pages controller
    if (array_key_exists($controller, $controllers)) {
        if(in_array($action, $controllers[$controller])) {
            call($controller, $action);
        }else{
            call('pages', 'error');
        }
    }else{
        call('pages', 'error');
    }

?>