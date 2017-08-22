<!DOCTYPE html>
<html lang="<?php h(uri('language')); ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?php l('meta_author'); ?>">
    <meta name="description" content="<?php l('meta_description'); ?>">
    <meta name="keyword" content="<?php l('meta_keyword'); ?>">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php l('head_title'); ?></title>
    <link rel="icon shortcut" href="<?php direct('logo.png'); ?>">
    <link rel="icon" sizes="any" href="<?php direct('logo.svg'); ?>" type="image/svg+xml">
    <link rel="mask-icon" href="<?php direct('logo.svg'); ?>" color="black">

    <!-- jQuery -->
    <script src="<?php direct('jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap -->
    <link href="<?php direct('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php direct('bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Flatpickr -->
    <link href="<?php direct('flatpickr/flatpickr.min.css'); ?>" rel="stylesheet">
    <script src="<?php direct('flatpickr/flatpickr.min.js'); ?>"></script>
    <script src="<?php direct('flatpickr.l10ns.js'); ?>"></script>

    <!-- pieni -->
    <link href="<?php direct('pieni.css'); ?>" rel="stylesheet">
    <link href="<?php direct('application.css'); ?>" rel="stylesheet">
    <script src="<?php direct('pieni.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  </head>
  <body class="language_<?php h(uri('language')); ?> actor_<?php h(uri('actor')); ?> class_<?php h(uri('class')); ?> method_<?php h(uri('method')); ?>">
<?php load_view('header', $vars, $class); ?>
<?php if (uri('class') === 'spec'): ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
<?php load_view('contents', $vars, $class); ?>
        </div>
        <div class="col-sm-8">
<?php load_view($view, $vars, $class); ?>
        </div>
      </div>
<?php elseif (uri('class') === 'docs'): ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
<?php load_view('contents', $vars, $class); ?>
        </div>
        <div class="col-sm-9">
<?php load_view($view, $vars, $class); ?>
        </div>
      </div>
      </div>
<?php else: ?>
<?php load_view('flash', $vars, $class); ?>
<?php load_view($view, $vars, $class); ?>
<?php endif; ?>
<?php load_view('footer', $vars, $class); ?>
  </body>
</html>
