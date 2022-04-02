<?php
$controllers = array(
    'developer' => ['index', 'blog','register', 'save', 'show','loginshow','login','updateshow', 'update', 'delete', 'error', 'contacto']

);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('developer', 'error');
    }
} else {
    call('developer', 'error');
}

function call($controller, $action)
{
    require_once('Controllers/'.$controller.'Controller.php');

    switch ($controller) {
        case 'developer':
            require_once('Models/Developer.php');
            $controller = new DeveloperController();
            break;
        default:
            # code...
            break;
    }
    $controller->{$action}();
}


