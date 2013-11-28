<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <div id="header" class="reverse-contrast heading font-small">
    <div class="inner header-inner default-padding">
    <?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
    </div>
  </div>


  <div id="navigation-primary" class="navigation menu reverse-contrast reverse-contrast-lighter heading all-caps">
    <div class="inner navigation-primary-inner default-padding clearfix font-light">
      <?php print l('<div class="clearfix">' . theme('image', array('path' => base_path() . path_to_theme() . '/css/images/citizens-energy.png', 'alt' => 'Citizens Energy Logo', 'title' => 'Home', 'attributes' => array('id' => 'logo', 'class' => 'f-left'))) . '</div>', '<front>', array('html' => TRUE, 'attributes' => array('id' => 'logo-container'))); ?>
      <div id="main-drop-down-toggle"><i class="icon-menu"></i></div>
      <?php print render($page['navigation_primary']); ?>
    </div>
  </div><!-- /#navigation-primary -->

  <?php print $messages; ?>

  <?php if ($tabs): ?>
    <div class="tabs heading all-caps font-small">
      <?php print render($tabs); ?>
    </div>
  <?php endif; ?>

  <div id="navigation-secondary" class="navigation menu">
    <div class="inner naviagation-secondary-inner center-contents">
      <h1 class=""><?php print $title; ?></h1>
      <div class="secondary-links">
        <?php print render($page['navigation_secondary']); ?>
      </div>
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

    <?php if ($page['content_top']) : ?>
    <div id="content-top">
      <div class="inner content-top-inner">
        <?php print render($page['content-top']); ?>
      </div>
    </div> <!-- /#content-top -->
    <?php endif; ?>

    <div id="menu-callback">
      <?php print render($page['content']) ?>
      <?php if ($page['jump_menu']) : ?>
        <?php print render($page['jump_menu']); ?>
      <?php endif; ?>
    </div> <!-- /#menu-callback -->

    <?php if ($page['content_bottom']) : ?>
    <div id="content-bottom">
      <div class="inner content-bottom-inner">
        <?php print render($page['content_bottom']); ?>
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

