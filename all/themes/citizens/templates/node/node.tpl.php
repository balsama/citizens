<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">

  <?php if (!$page && $title): ?>
    <?php print l('<h2' . $title_attributes . '>' .  $title . '</h2>', 'node/' . $node->nid, array('html' => TRUE, 'attributes' => array('class' => 'black'))); ?>
  <?php endif; ?>

  <div class="content">
    <?php print render($content); ?>
    <?php if (!$page) : ?>
      <?php print l(t('Learn More'), 'node/' . $node->nid, array('attributes' => array('class' => 'button heading center-blue-button margin-tb'))); ?>
    <?php endif; ?>
  </div> <!-- /content -->

</div> <!-- #node -->
