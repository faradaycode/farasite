<?php

use Website\Controller\Action;
use Pimcore\Model\Object;

class HomeController extends Action
{
    public function defaultAction()
    {
      $this->enableLayout();
    }
}
