<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<header id="header" class="header" role="header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php if ($site_name || $logo): ?>
          <a href="<?php print $front_page; ?>" class="navbar-brand" rel="home" title="<?php print t('Home'); ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo" />
            <?php endif; ?>
            <?php if ($site_name): ?>
              <span class="site-name"><?php print $site_name; ?></span>
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div> <!-- /.navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php if ($main_menu): ?>
          <ul id="main-menu" class="menu nav navbar-nav">
            <?php print render($main_menu); ?>
          </ul>
        <?php endif; ?>
        <?php if ($search_form): ?>
          <?php print $search_form; ?>
        <?php endif; ?>
      </div><!-- /.navbar-collapse -->
    </nav><!-- /.navbar -->
  </div> <!-- /.container -->

  <!-- 通栏导航条 -->
  <div class="nav-background"><div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul id="v-menu" class="v-menu nav navbar-nav"><li><a href="#" class="">全村菜单</a></li></ul >

        <?php if ($main_menu): ?>
          <ul id="main-menu" class="menu nav navbar-nav">
            <?php print render($main_menu); ?>
          </ul>
        <?php endif; ?>

        <div class="menu_member"> 会员</div>
      </div><!-- /.navbar-collapse -->
    </nav><!-- /.navbar -->
  </div></div> <!-- /.container  fluid -->
</header>

<div id="main-wrapper">
  <div id="main" class="main">
    <div class="container">
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb" class="visible-desktop">
          <?php print $breadcrumb; ?>
        </div>
      <?php endif; ?>
      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
      <div id="page-header">
        <?php if ($title): ?>
          <div class="page-header">
            <h1 class="title"><?php print $title; ?></h1>
          </div>
        <?php endif; ?>
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
    <!-- 正文一大版 后期修正-->
    <div id="content" class="container-fluid">
      <?php print render($page['content']); ?>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->

<div class="footer_top footer" role="footer">
  <div class="container">
    <div class="row"><div class="col-xs-12">微信微博</div> </div>
  </div>
</div>
<footer id="footer" class="footer" role="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">栏 1 左</div>
      <div class="col-xs-12 col-sm-6">栏 2 右</div>
	    <div class="col-xs-12">栏 3</div>
    </div>
    <small class="copyright pull-left">版权</small>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
  </div>
</footer>