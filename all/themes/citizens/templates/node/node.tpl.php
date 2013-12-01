<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">

  <?php if (!$page && $title && ($node->type != 'in_the_news_item')): ?>
    <?php print l('<h2' . $title_attributes . '>' .  $title . '</h2>', 'node/' . $node->nid, array('html' => TRUE, 'attributes' => array('class' => 'black'))); ?>
  <?php endif; ?>

  <div class="content">
    <?php print render($content); ?>
    <?php if (!$page) : ?>
      <?php if ($node->type != 'in_the_news_item') : ?>
        <?php print l(t('Learn More'), 'node/' . $node->nid, array('attributes' => array('class' => 'button heading center-blue-button margin-tb'))); ?>
      <?php else : ?>
        <?php print l('<h3' . $title_attributes . '>' .  $title . '</h3>', 'node/' . $node->nid, array('html' => TRUE, 'attributes' => array('class' => 'black padding-bottom display-block'))); ?>
      <?php endif; ?>
    <?php endif; ?>
  </div> <!-- /content -->

</div> <!-- #node -->
