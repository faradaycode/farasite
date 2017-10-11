<?php
/**
 * This file is called directly after the pimcore startup (/pimcore/config/startup.php)
 * Here you can do some modifications before the dispatch process begins, this includes some Zend Framework plugins
 * or some other things which should be done before the initialization of pimcore is completed, below are some examples.
 * IMPORTANT: Please rename this file to startup.php to use it!
 */

/*
// register a custom ZF controller plugin
$front = \Zend_Controller_Front::getInstance();
$front->registerPlugin(new Website\Controller\Plugin\Custom(), 700);
*/

/*
// register a custom ZF route
$router = $front->getRouter();
$routeCustom = new \Zend_Controller_Router_Route(
    'custom/:controller/:action/*',
    array(
        'module' => 'custom',
        "controller" => "index",
        "action" => "index"
    )
);
$router->addRoute('custom', $routeCustom);
$front->setRouter($router);
*/

/*
// add a custom module directory
$front = \Zend_Controller_Front::getInstance();
$front->addModuleDirectory(PIMCORE_DOCUMENT_ROOT . "/customModuleDirectory");

// add some custom events
\Pimcore::getEventManager()->attach("object.postUpdate", function (\Zend_EventManager_Event $event) {
    $object = $event->getTarget();
    // do something ...
    // get a parameter from the event
    $saveVersionOnly = $event->getParam("saveVersionOnly");
    // ...
});

// do some dependency injection magic
\Pimcore::getDiContainer()->set("foo", "bar");

*/
\Pimcore::getEventManager()->attach("object.postUpdate", function (\Zend_EventManager_Event $event) {
    $object = $event->getTarget();
    // do something ...
    $arrerror = array();
    //title
    if (strlen($object->getNewstitle()) <= 10 ) {
      //throw new \Pimcore\Model\Element\ValidationException("Title harus lebih dari 10 karakter", 2412);
      array_push($arrerror,"Title harus lebih dari 10 karakter");
    }

    //author
    if (strlen($object->getNewsauthor()) <= 5) {
        //throw new \Pimcore\Model\Element\ValidationException("Author harus lebih dari 5 karakter", 2412);
        array_push($arrerror,"Author harus lebih dari 5 karakter");
    } else if (!preg_match('/^[A-Ea-e].+/',$object->getNewsauthor())) {
      array_push($arrerror,"Author harus berawalan huruf A-E");
    }
    if(count($arrerror)>0) {
      throw new \Pimcore\Model\Element\ValidationException(implode(", ",$arrerror), 2412);
    }

    //conten

    // get a parameter from the event

    // ...
});
