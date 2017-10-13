<?php
use Website\Controller\Action;
use Pimcore\Model\Object;

class ArticleController extends Action
{
    public function defaultAction()
    {
      $limit = 4;
      $articles = new Object\Article\Listing();
      $articles->setOrder('desc');
      $articles->load();

      $this->view->articles = $articles;
      $this->enableLayout();
    }
    public function readmoreAction() {
      $id = $this->getParam("slug");
      $articles = new Object\Article\Listing();
      $articles->setCondition("title LIKE ?", ["%$id%"]);
      $articles->load();
      $this->view->readmore = $articles;
      $this->enableLayout();
    }
}
?>
