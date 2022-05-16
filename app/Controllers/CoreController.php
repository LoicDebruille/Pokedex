<?php

// Class CoreController the parent controlleur 

class CoreController {

    // show method which will make the pages
    protected function show($viewName, $viewData = [])
    {
        //the $router variable declared in index.php to a global gate now
        global $router;

        $absoluteURL = $_SERVER['BASE_URI'] . '/';
        extract($viewData);

        // we add our tpl to create the display of the page
        require __DIR__ . '/../views/header.part.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.part.tpl.php';
    }
}