<?php
/**
 * @file
 * Template for green donate bean at the bottom of each page.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content table"<?php print $content_attributes; ?>>
    <div class="p-70 table-cell padding-tb">
      <span class="font-large-27 font-light normal-case"><?php print render($content['field_cta_text']); ?></span>
      <?php print render($content['field_donate_online']); ?>
    </div>
    <div class="p-30 background-green-darker table-cell align-left padding-all font-small font-white">
      <?php print render($content['field_donate_mail']); ?>
      <?php print render($content['field_donate_corporate']); ?>
    </div>
  </div>
</div>
