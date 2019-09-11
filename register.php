<?php
require('vendor/autoload.php');

// create account
use aitsydney\Account;

if( $_SERVER['REQUEST_METHOD']=='POST' ){
  $email = $_POST['email'];
  $password = $_POST['password'];

  //create an instance of account class
  $acc = new Account();
  $register = $acc -> register( $email, $password );
  print_r( $register );
}
else{
  $register = '';
}

<<<<<<< HEAD

//create twig loader
//$loader = new \Twig\Loader\FilesystemLoader('templates');
$loader = new Twig_Loader_Filesystem('templates');

//create twig environment
$twig = new Twig_Environment($loader);

//load a twig template
=======
// create navigation
use aitsydney\Navigation;

$nav = new Navigation();
$navigation = $nav -> getNavigation();


// create twig loader for templates
$loader = new Twig_Loader_Filesystem('templates');
// create twig environment and pass the loader
$twig = new Twig_Environment($loader);
// call a twig template
>>>>>>> fd2b4cec4ad976e60e00e3f38b9c827b8863d66f
$template = $twig -> load('register.twig');

//pass values to twig
echo $template -> render([
    'navigation' => $nav_items,
    'title' => 'Register for an account',
    'response' => $register
]);

?>