<!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#" class="menu-toggle">
              <span class="link-a">FARASITE</span>
              <span id="tx-brand" class="fa fa-bars"></span>
            </a>
        </li>
        <?php
        $navStartNode = $this->document->getProperty("navigationRoot");
        if (!$navStartNode instanceof \Pimcore\Model\Document\Page) {
            $navStartNode = \Pimcore\Model\Document\Page::getById(1);
        } ?>
        <?php $mainNavigation = $this->pimcoreNavigation()->getNavigation($this->document, $navStartNode); ?>
        <?php foreach ($mainNavigation as $page) { ?>
         <?php if (!$page->isVisible() || !$this->navigation()->accept($page)) {
           continue;
         } ?>
         <?php $hasChildren = $page->hasPages(); ?>
         <?php if (!$hasChildren) { ?>
           <li>
             <a href="<?php echo $page->getHref(); ?>">
               <?php
               if($page->getId() == 9) { ?>
                 <i class="fa fa-question"></i>
               <?php } ?>
               <?php
               if($page->getId() == 8) { ?>
                 <i class="fa fa-phone"></i>
               <?php } ?>
               <?php
               if($page->getId() == 12) { ?>
                 <i class="fa fa-newspaper-o"></i>
               <?php } ?>
               <span class="link-a"><?php echo ucfirst($page->getLabel()); ?>
               </span>
             </a>
           </li>
         <?php } } ?>
        <!--
        <li>
            <a href="#"><i class="fa fa-dashboard"></i> <span class="link-a">Menu</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-dashboard"></i> <span class="link-a"></span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-dashboard"></i> <span class="link-a"></span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-dashboard"></i> <span class="link-a"></span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-dashboard"></i> <span class="link-a"></span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-dashboard"></i> <span class="link-a"></span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-dashboard"></i> <span class="link-a"></span></a>
        </li> -->
    </ul>
  </div>
  <!-- /#sidebar-wrapper -->
