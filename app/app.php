<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/RepeatCounter.php';

  session_start();
  if (empty($_SESSION[''])) {
    $_SESSION[''] = array();
  }

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use($app){

  });

  return $app;
?>
