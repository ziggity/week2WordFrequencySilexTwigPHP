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
        $search = $_POST['searchInput'];
        $find = $_POST['findInput'];
        $repeat = new RepeatCounter;
        $word = $repeat->countRepeats($search, $find);
        return $app['twig']->render('results.html.twig', array('word' => $word, 'search' => $search, 'find' => $find));
    });
   return $app;
?>
