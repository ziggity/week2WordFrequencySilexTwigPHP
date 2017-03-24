<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/RepeatCounter.php';

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
));

  $app->get('/', function() use ($app) {
      return $app['twig']->render('index.html.twig');
});

  $app->post('/results', function() use ($app) {
       $searchInput = $_POST['input'];
       $finderInput = $_POST['findInput'];
       $repeatCounters = new RepeatCounter;
       $stringWord = $repeatCounters->countRepeats($searchInput, $finderInput);
       return $app['twig']->render('index.html.twig', array('wordSentence' => $stringWord, 'input' => $searchInput, 'findInput' => $finderInput));
   });
   return $app;
?>
