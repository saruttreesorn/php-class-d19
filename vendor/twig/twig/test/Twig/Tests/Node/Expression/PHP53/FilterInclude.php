<?php

<<<<<<< HEAD
$env = new Twig_Environment(new Twig_Loader_Array(array()));
$env->addFilter(new Twig_SimpleFilter('anonymous', function () {}));
=======
$env = new \Twig\Environment(new \Twig\Loader\ArrayLoader([]));
$env->addFilter(new \Twig\TwigFilter('anonymous', function () {}));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

return $env;
