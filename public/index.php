<?php
//! FRONT CONTROLLER

// include the necessary files


//? - external libraries
// Compose dependencies
require __DIR__ . '/../vendor/autoload.php';

//? - Classes that are in the app folder
//* PDO connection
require __DIR__ . '/../app/Utils/Database.php';

//* The parent Controllers model
require __DIR__ . '/../app/Controllers/CoreController.php';

//* Controllers
require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/CatalogController.php';

//* The parent Models model
require __DIR__ . '/../app/Models/CoreModel.php';

//* the Models
require __DIR__ . '/../app/Models/Pokemon.php';
require __DIR__ . '/../app/Models/Pokemon_type.php';
require __DIR__ . '/../app/Models/Type.php';


//? List of ROUTES (url) available
// Using Altouter
// the value of $_SERVER['BASE_URI'] is given by the .htaccess. It corresponds to the root of the site
// we provide AltoRouter with the part of the URL not to be taken into account to make the comparison between the current URL and the url of the route

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

//? declaration of the route of the HOME
$router->map(
     'GET', 
     '/', 
     [
    'controller' => 'MainController',
    'method' => 'home'
    
    ], 
    'home'
);

//? declaration of the route of the DETAIL
$router->map(
     'GET', 
     '/detail/[i:id]', 
     [
    'controller' => 'CatalogController',
    'method' => 'detail'
    ], 
    'detail'
);


//? declaration of the route of the TYPE
$router->map(
     'GET', 
     '/type', 
     [
    'controller' => 'CatalogController',
    'method' => 'type'
    ], 
    'type'
);

//? declaration of the route of the TYPELISTING
$router->map(
     'GET', 
     '/listedestypes/[i:id]', 
     [
    'controller' => 'CatalogController',
    'method' => 'typelisting'
    ], 
    'typelisting'
);


//? DISPATCH
//! Using the Altorouter dispatcher

$match = $router->match();
if ($match === false) {
    // Error a 404, because we arrive in this block of code only if we have requested an unexpected page
    header("HTTP/1.1 404 Not Found");

}
else {

     //? Instanciation dynamique
    // We store in a variable the name of the controller to instantiate
    $controller = $match['target']['controller'];
    $instanceController = new $controller();


    // We store in a variable the name of the method to execute
    $method = $match['target']['method'];
    // $match['params'] contains an array that lists the "variable" parts of the urls declared Altorouter
    $instanceController->$method($match['params']);
}