<!DOCTYPE html>
<html<?php print $html_attributes . $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <link href='http://fonts.googleapis.com/css?family=EB+Garamond|Oxygen:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <?php print $scripts; ?>
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon.ico">
  <link rel="icon" sizes="16x16 32x32" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon-152.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="<?php print base_path() . path_to_theme(); ?>/css/images/favicon-144.png">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon-152.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon-144.png">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon-120.pngg">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon-114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon-72.png">
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path() . path_to_theme(); ?>/css/images/favicon-57.png">
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
