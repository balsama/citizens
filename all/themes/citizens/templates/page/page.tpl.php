<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <div id="header">
    <?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
  </div>


  <div id="navigation-primary" class="navigation menu">
    <div class="inner naviagation-primary-inner">
      <?php print render($page['navigation_primary']); ?>
    </div>
  </div><!-- /#navigation-primary -->

  <div id="navigation-secondary" class="navigation menu">
    <div class="inner naviagation-secondary-inner">
      <h1><?php print $title; ?></h1>
      <?php print render($page['navigation_secondary']); ?>
    </div>
  </div><!-- /#navigation-secondary -->

  <?php if ($page['feature_top']) : ?>
  <div id="feature-top">
    <div class="feature-top-inner inner">
      <?php print render($page['feature_top']); ?>
    </div>
  </div> <!-- /#feature-top -->
  <?php endif; ?>

  <div id="main" class="clearfix">

    <?php if ($tabs): ?>
    <div class="tabs">
      <?php print render($tabs); ?>
    </div>
    <?php endif; ?>

    <?php print $messages; ?>

    <?php if ($page['content_top']) : ?>
    <div id="content-top">
      <div class="inner content-top-inner">
        <?php print render($page['content-top']); ?>
      </div>
    </div> <!-- /#content-top -->
    <?php endif; ?>

    <div id="menu-callback">
      <?php print render($page['content']) ?>
    </div> <!-- /#menu-callback -->

    <?php if ($page['content_bottom']) : ?>
    <div id="content-bottom">
      <div class="inner content-bottom-inner">
        <?php print render($page['content-bottom']); ?>
      </div>
    </div> <!-- /#content-bottom -->
    <?php endif; ?>

  </div> <!-- /#main -->

  <?php if ($page['feature_bottom']) : ?>
  <div id="feature-bottom">
    <div class="feature-bottom-inner inner">
      <?php print render($page['feature_bottom']); ?>
    </div>
  </div> <!-- /#feature-bottom -->
  <?php endif; ?>

  <div id="footer">
    <div class="inner footer-inner">
      <?php print render($page['footer']); ?>
    </div>
  </div> <!-- /#footer -->

</div> <!-- /#page -->

