<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo !empty($post_desc) ? $post_desc : 'مدونة واثق الشويطر. مدونة شخصية تتحدث عن التقنية والبرمجة والثقافة والأدب وأشياء أخرى'; ?>">
  <meta name="author" content="Watheq Alshowaiter واثق الشويطر">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index,follow" />
  <meta property="og:title" content="مدونة واثق <? echo isset($post_title) ? ' - ' . $post_title : ''; ?>">
  <meta property="og:description" content="<?php echo !empty($post_desc) ? $post_desc : 'مدونة واثق الشويطر. مدونة شخصية تتحدث عن التقنية والبرمجة والثقافة والأدب وأشياء أخرى'; ?>">
  <meta property="og:image" content=""> <!-- until I found way to add images directly to the hosting server -->
  <meta property="og:url" content="<?= isset($post_id) ? "http://watheq.xyz/post.php?p_id=$post_id" : 'http://watheq.xyz'; ?>"> <!-- needs fixing-->
  <meta name="twitter:title" content="مدونة واثق <? echo isset($post_title) ? ' - ' . $post_title : ''; ?>">
  <meta name="twitter:description" content="<?php echo !empty($post_desc) ? $post_desc : 'مدونة واثق الشويطر. مدونة شخصية تتحدث عن التقنية والبرمجة والثقافة والأدب وأشياء أخرى'; ?>">
  <meta name="twitter:image" content=""> <!-- until I found way to add images directly to the hosting server -->
  <meta name="twitter:card" content="summary"> <!-- this is the default. you can choose among  one of “summary”, “summary_large_image”, “app”, or “player”.-->
  <meta property="article:published_time" content="<?= $post_date ?? ''; ?>" />
  <meta property="article:modified_time" content="<?= $post_date ?? ''; ?>" />
  <meta property="og:site_name" content="مدونة واثق الشويطر" />
  <meta name="twitter:image:alt" content="مدونة واثق">
  <meta property="og:locale" content="ar_AR" />
  <meta name="twitter:creator" content="@watheq_show" />
  <meta name="twitter:site" content="@watheq_show" />
  <link rel="shortcut icon" href="images/icon/icon.png?v=3">
  <title>مدونة واثق <? echo isset($post_title) ? ' - ' . trim($post_title) : ''; ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
  <link rel="canonical" href="<?= isset($post_id) ? "http://watheq.xyz/post.php?p_id=$post_id" : 'http://watheq.xyz'; ?>">
  <script data-ad-client="ca-pub-3013099213148529" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<body class="no-margin">
  <div class="page-container">