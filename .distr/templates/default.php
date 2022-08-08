<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';

include_once $ROOT . 'version.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title></title>


  <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
  <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body class="<?= $version ? 'version-' . $version : '' ?>">

  <div class="wrapper">
    {% block blocks %}
    {% include 'header/block.php' %}
    <?php if ( $version == '' ) { ?>
      {% include 'main/block.php' %}
      {% include 'event/block.php' %}
      {% include 'stuff/block.php' %}
    <?php } ?>
    <?php if ( $version == 'test' ) { ?>
      {% include 'test-main/block.php' %}
      {% include 'test-video/block.php' %}
      {% include 'quiz/block.php' %}
      {% include 'thanks/block.php' %}
      {% include 'related/block.php' %}
    <?php } ?>
    {% include 'footer/block.php' %}
    {% endblock %}
  </div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
  <script src="js/script.js"></script>
</body>

</html>