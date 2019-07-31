<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
class Twig_Tests_Node_Expression_FunctionTest extends Twig_Test_NodeTestCase
=======
use Twig\Environment;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\FunctionExpression;
use Twig\Node\Node;
use Twig\Test\NodeTestCase;
use Twig\TwigFunction;

class Twig_Tests_Node_Expression_FunctionTest extends NodeTestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    public function testConstructor()
    {
        $name = 'function';
<<<<<<< HEAD
        $args = new Twig_Node();
        $node = new Twig_Node_Expression_Function($name, $args, 1);
=======
        $args = new Node();
        $node = new FunctionExpression($name, $args, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($name, $node->getAttribute('name'));
        $this->assertEquals($args, $node->getNode('arguments'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $environment = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
        $environment->addFunction(new Twig_SimpleFunction('foo', 'foo', array()));
        $environment->addFunction(new Twig_SimpleFunction('bar', 'bar', array('needs_environment' => true)));
        $environment->addFunction(new Twig_SimpleFunction('foofoo', 'foofoo', array('needs_context' => true)));
        $environment->addFunction(new Twig_SimpleFunction('foobar', 'foobar', array('needs_environment' => true, 'needs_context' => true)));
        $environment->addFunction(new Twig_SimpleFunction('barbar', 'twig_tests_function_barbar', array('is_variadic' => true)));

        $tests = array();

        $node = $this->createFunction('foo');
        $tests[] = array($node, 'foo()', $environment);

        $node = $this->createFunction('foo', array(new Twig_Node_Expression_Constant('bar', 1), new Twig_Node_Expression_Constant('foobar', 1)));
        $tests[] = array($node, 'foo("bar", "foobar")', $environment);

        $node = $this->createFunction('bar');
        $tests[] = array($node, 'bar($this->env)', $environment);

        $node = $this->createFunction('bar', array(new Twig_Node_Expression_Constant('bar', 1)));
        $tests[] = array($node, 'bar($this->env, "bar")', $environment);

        $node = $this->createFunction('foofoo');
        $tests[] = array($node, 'foofoo($context)', $environment);

        $node = $this->createFunction('foofoo', array(new Twig_Node_Expression_Constant('bar', 1)));
        $tests[] = array($node, 'foofoo($context, "bar")', $environment);

        $node = $this->createFunction('foobar');
        $tests[] = array($node, 'foobar($this->env, $context)', $environment);

        $node = $this->createFunction('foobar', array(new Twig_Node_Expression_Constant('bar', 1)));
        $tests[] = array($node, 'foobar($this->env, $context, "bar")', $environment);

        // named arguments
        $node = $this->createFunction('date', array(
            'timezone' => new Twig_Node_Expression_Constant('America/Chicago', 1),
            'date' => new Twig_Node_Expression_Constant(0, 1),
        ));
        $tests[] = array($node, 'twig_date_converter($this->env, 0, "America/Chicago")');

        // arbitrary named arguments
        $node = $this->createFunction('barbar');
        $tests[] = array($node, 'twig_tests_function_barbar()', $environment);

        $node = $this->createFunction('barbar', array('foo' => new Twig_Node_Expression_Constant('bar', 1)));
        $tests[] = array($node, 'twig_tests_function_barbar(null, null, array("foo" => "bar"))', $environment);

        $node = $this->createFunction('barbar', array('arg2' => new Twig_Node_Expression_Constant('bar', 1)));
        $tests[] = array($node, 'twig_tests_function_barbar(null, "bar")', $environment);

        $node = $this->createFunction('barbar', array(
            new Twig_Node_Expression_Constant('1', 1),
            new Twig_Node_Expression_Constant('2', 1),
            new Twig_Node_Expression_Constant('3', 1),
            'foo' => new Twig_Node_Expression_Constant('bar', 1),
        ));
        $tests[] = array($node, 'twig_tests_function_barbar("1", "2", array(0 => "3", "foo" => "bar"))', $environment);

        // function as an anonymous function
        if (PHP_VERSION_ID >= 50300) {
            $node = $this->createFunction('anonymous', array(new Twig_Node_Expression_Constant('foo', 1)));
            $tests[] = array($node, 'call_user_func_array($this->env->getFunction(\'anonymous\')->getCallable(), array("foo"))');
=======
        $environment = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
        $environment->addFunction(new TwigFunction('foo', 'foo', []));
        $environment->addFunction(new TwigFunction('bar', 'bar', ['needs_environment' => true]));
        $environment->addFunction(new TwigFunction('foofoo', 'foofoo', ['needs_context' => true]));
        $environment->addFunction(new TwigFunction('foobar', 'foobar', ['needs_environment' => true, 'needs_context' => true]));
        $environment->addFunction(new TwigFunction('barbar', 'twig_tests_function_barbar', ['is_variadic' => true]));

        $tests = [];

        $node = $this->createFunction('foo');
        $tests[] = [$node, 'foo()', $environment];

        $node = $this->createFunction('foo', [new ConstantExpression('bar', 1), new ConstantExpression('foobar', 1)]);
        $tests[] = [$node, 'foo("bar", "foobar")', $environment];

        $node = $this->createFunction('bar');
        $tests[] = [$node, 'bar($this->env)', $environment];

        $node = $this->createFunction('bar', [new ConstantExpression('bar', 1)]);
        $tests[] = [$node, 'bar($this->env, "bar")', $environment];

        $node = $this->createFunction('foofoo');
        $tests[] = [$node, 'foofoo($context)', $environment];

        $node = $this->createFunction('foofoo', [new ConstantExpression('bar', 1)]);
        $tests[] = [$node, 'foofoo($context, "bar")', $environment];

        $node = $this->createFunction('foobar');
        $tests[] = [$node, 'foobar($this->env, $context)', $environment];

        $node = $this->createFunction('foobar', [new ConstantExpression('bar', 1)]);
        $tests[] = [$node, 'foobar($this->env, $context, "bar")', $environment];

        // named arguments
        $node = $this->createFunction('date', [
            'timezone' => new ConstantExpression('America/Chicago', 1),
            'date' => new ConstantExpression(0, 1),
        ]);
        $tests[] = [$node, 'twig_date_converter($this->env, 0, "America/Chicago")'];

        // arbitrary named arguments
        $node = $this->createFunction('barbar');
        $tests[] = [$node, 'twig_tests_function_barbar()', $environment];

        $node = $this->createFunction('barbar', ['foo' => new ConstantExpression('bar', 1)]);
        $tests[] = [$node, 'twig_tests_function_barbar(null, null, ["foo" => "bar"])', $environment];

        $node = $this->createFunction('barbar', ['arg2' => new ConstantExpression('bar', 1)]);
        $tests[] = [$node, 'twig_tests_function_barbar(null, "bar")', $environment];

        $node = $this->createFunction('barbar', [
            new ConstantExpression('1', 1),
            new ConstantExpression('2', 1),
            new ConstantExpression('3', 1),
            'foo' => new ConstantExpression('bar', 1),
        ]);
        $tests[] = [$node, 'twig_tests_function_barbar("1", "2", [0 => "3", "foo" => "bar"])', $environment];

        // function as an anonymous function
        if (PHP_VERSION_ID >= 50300) {
            $node = $this->createFunction('anonymous', [new ConstantExpression('foo', 1)]);
            $tests[] = [$node, 'call_user_func_array($this->env->getFunction(\'anonymous\')->getCallable(), ["foo"])'];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        return $tests;
    }

<<<<<<< HEAD
    protected function createFunction($name, array $arguments = array())
    {
        return new Twig_Node_Expression_Function($name, new Twig_Node($arguments), 1);
=======
    protected function createFunction($name, array $arguments = [])
    {
        return new FunctionExpression($name, new Node($arguments), 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    protected function getEnvironment()
    {
        if (PHP_VERSION_ID >= 50300) {
            return include 'PHP53/FunctionInclude.php';
        }

        return parent::getEnvironment();
    }
}

<<<<<<< HEAD
function twig_tests_function_barbar($arg1 = null, $arg2 = null, array $args = array())
=======
function twig_tests_function_barbar($arg1 = null, $arg2 = null, array $args = [])
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
}
