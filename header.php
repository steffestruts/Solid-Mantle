<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#da4452">
  <meta property="og:title" content="<?php the_title(); ?>">
  <meta property="og:type" content="<?php $post_type=get_post_type(); echo $post_type; ?>">
  <meta property="og:url" content="<?php the_permalink(); ?>">
  <meta property="og:image" content="../img/baseline.png">
  <?php wp_head();?>
</head>
<body>
<header></header>