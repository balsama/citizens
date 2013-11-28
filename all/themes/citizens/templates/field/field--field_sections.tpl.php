<?php

/**
 * @file field--field_section.tpl.php
 * We don't want to print the wrapper divs for each of the sections because we
 * want the actual section HTML element to be at the same level as the optional
 * header so that the zebra class will work properly.
 *
 * We also need to add a unique ID to each section for the Jump Menu to link
 * to.
 */
?>
<?php if ($element['#field_type'] == 'field_collection') : ?>
  <?php
  /**
   * If this is a section (top-level field collection) only print the field
   * item and its immediate wrapper. Else print the field normally.
   */
  ?>
  <?php foreach ($items as $delta => $item): ?>

    <?php
    // Get the plain headline for each section to be used to create each
    // section's ID.
    foreach ($item['entity']['field_collection_item'] as $fci) {
      $title = $fci['field_section_heading']['#items'][0]['value'];
    }
    ?>

    <div class="field-item <?php print $delta % 2 ? 'odd' : 'even';  print $delta == 0 ? ' field-item-first' : ''; ?> default-padding zebra reverse-zebra"<?php print $item_attributes[$delta]; ?> id="jump-menu-<?php print citizens_id_safe($title); ?>"><?php print render($item); ?></div>
  <?php endforeach; ?>
<?php else : ?>
  <div class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php if (!$label_hidden): ?>
      <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
    <?php endif; ?>
    <div class="field-items"<?php print $content_attributes; ?>>
      <?php foreach ($items as $delta => $item): ?>
        <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>
