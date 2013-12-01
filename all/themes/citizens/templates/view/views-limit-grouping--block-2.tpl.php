<?php
/**
 * @file
 *   Utilizes the Views Grouping Limit formatter but this template make the
 *   view look like a responsive grid.
 */
?>
<div class="views-grouping-limit-responsive zebra">
  <h2><?php print $title; ?></h2>
  <div class="divide-4">
  <?php $count = 1; ?>
    <div class="views-row clearfix">
    <?php foreach ($rows as $row_id => $row) : ?>
      <div class="views-column divide views-column-<?php print $count; ?>">
        <?php print $row; ?>
      </div> <!-- /.views-column -->
      <?php if ($count == 4) : ?>
      <?php $count = 0; ?>
      </div> <!-- /.views-row --><div class="views-row clearfix">
      <?php endif; ?>
      <?php $count++; ?>
    <?php endforeach; ?>
    </div> <!-- /.views-row -->
  </div> <!-- /.divide-4 -->
</div> <!-- ./views-grouping-limit-responsive -->
