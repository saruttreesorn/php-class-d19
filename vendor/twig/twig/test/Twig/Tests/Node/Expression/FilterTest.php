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
class Twig_Tests_Node_Expression_FilterTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $expr = new Twig_Node_Expression_Constant('foo', 1);
        $name = new Twig_Node_Expression_Constant('upper', 1);
        $args = new Twig_Node();
        $node = new Twig_Node_Expression_Filter($expr, $name, $args, 1);
=======
use Twig\Environment;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Node;
use Twig\Test\NodeTestCase;
use Twig\TwigFilter;

class Twig_Tests_Node_Expression_FilterTest extends NodeTestCase
{
    public function testConstructor()
    {
        $expr = new ConstantExpression('foo', 1);
        $name = new ConstantExpression('upper', 1);
        $args = new Node();
        $node = new FilterExpression($expr, $name, $args, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($expr, $node->getNode('node'));
        $this->assertEquals($name, $node->getNode('filter'));
        $this->assertEquals($args, $node->getNode('arguments'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $environment = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
        $environment->addFilter(new Twig_SimpleFilter('bar', 'bar', array('needs_environment' => true)));
        $environment->addFilter(new Twig_SimpleFilter('barbar', 'twig_tests_filter_barbar', array('needs_context' => true, 'is_variadic' => true)));

        $tests = array();

        $expr = new Twig_Node_Expression_Constant('foo', 1);
        $node = $this->createFilter($expr, 'upper');
        $node = $this->createFilter($node, 'number_format', array(new Twig_Node_Expression_Constant(2, 1), new Twig_Node_Expression_Constant('.', 1), new Twig_Node_Expression_Constant(',', 1)));

        if (function_exists('mb_get_info')) {
            $tests[] = array($node, 'twig_number_format_filter($this->env, twig_upper_filter($this->env, "foo"), 2, ".", ",")');
        } else {
            $tests[] = array($node, 'twig_number_format_filter($this->env, strtoupper("foo"), 2, ".", ",")');
        }

        // named arguments
        $date = new Twig_Node_Expression_Constant(0, 1);
        $node = $this->createFilter($date, 'date', array(
            'timezone' => new Twig_Node_Expression_Constant('America/Chicago', 1),
            'format' => new Twig_Node_Expression_Constant('d/m/Y H:i:s P', 1),
        ));
        $tests[] = array($node, 'twig_date_format_filter($this->env, 0, "d/m/Y H:i:s P", "America/Chicago")');

        // skip an optional argument
        $date = new Twig_Node_Expression_Constant(0, 1);
        $node = $this->createFilter($date, 'date', array(
            'timezone' => new Twig_Node_Expression_Constant('America/Chicago', 1),
        ));
        $tests[] = array($node, 'twig_date_format_filter($this->env, 0, null, "America/Chicago")');

        // underscores vs camelCase for named arguments
        $string = new Twig_Node_Expression_Constant('abc', 1);
        $node = $this->createFilter($string, 'reverse', array(
            'preserve_keys' => new Twig_Node_Expression_Constant(true, 1),
        ));
        $tests[] = array($node, 'twig_reverse_filter($this->env, "abc", true)');
        $node = $this->createFilter($string, 'reverse', array(
            'preserveKeys' => new Twig_Node_Expression_Constant(true, 1),
        ));
        $tests[] = array($node, 'twig_reverse_filter($this->env, "abc", true)');

        // filter as an anonymous function
        if (PHP_VERSION_ID >= 50300) {
            $node = $this->createFilter(new Twig_Node_Expression_Constant('foo', 1), 'anonymous');
            $tests[] = array($node, 'call_user_func_array($this->env->getFilter(\'anonymous\')->getCallable(), array("foo"))');
=======
        $environment = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
        $environment->addFilter(new TwigFilter('bar', 'bar', ['needs_environment' => true]));
        $environment->addFilter(new TwigFilter('barbar', 'twig_tests_filter_barbar', ['needs_context' => true, 'is_variadic' => true]));

        $tests = [];

        $expr = new ConstantExpression('foo', 1);
        $node = $this->createFilter($expr, 'upper');
        $node = $this->createFilter($node, 'number_format', [new ConstantExpression(2, 1), new ConstantExpression('.', 1), new ConstantExpression(',', 1)]);

        if (\function_exists('mb_get_info')) {
            $tests[] = [$node, 'twig_number_format_filter($this->env, twig_upper_filter($this->env, "foo"), 2, ".", ",")'];
        } else {
            $tests[] = [$node, 'twig_number_format_filter($this->env, strtoupper("foo"), 2, ".", ",")'];
        }

        // named arguments
        $date = new ConstantExpression(0, 1);
        $node = $this->createFilter($date, 'date', [
            'timezone' => new ConstantExpression('America/Chicago', 1),
            'format' => new ConstantExpression('d/m/Y H:i:s P', 1),
        ]);
        $tests[] = [$node, 'twig_date_format_filter($this->env, 0, "d/m/Y H:i:s P", "America/Chicago")'];

        // skip an optional argument
        $date = new ConstantExpression(0, 1);
        $node = $this->createFilter($date, 'date', [
            'timezone' => new ConstantExpression('America/Chicago', 1),
        ]);
        $tests[] = [$node, 'twig_date_format_filter($this->env, 0, null, "America/Chicago")'];

        // underscores vs camelCase for named arguments
        $string = new ConstantExpression('abc', 1);
        $node = $this->createFilter($string, 'reverse', [
            'preserve_keys' => new ConstantExpression(true, 1),
        ]);
        $tests[] = [$node, 'twig_reverse_filter($this->env, "abc", true)'];
        $node = $this->createFilter($string, 'reverse', [
            'preserveKeys' => new ConstantExpression(true, 1),
        ]);
        $tests[] = [$node, 'twig_reverse_filter($this->env, "abc", true)'];

        // filter as an anonymous function
        if (PHP_VERSION_ID >= 50300) {
            $node = $this->createFilter(new ConstantExpression('foo', 1), 'anonymous');
            $tests[] = [$node, 'call_user_func_array($this->env->getFilter(\'anonymous\')->getCallable(), ["foo"])'];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        // needs environment
        $node = $this->createFilter($string, 'bar');
<<<<<<< HEAD
        $tests[] = array($node, 'bar($this->env, "abc")', $environment);

        $node = $this->createFilter($string, 'bar', array(new Twig_Node_Expression_Constant('bar', 1)));
        $tests[] = array($node, 'bar($this->env, "abc", "bar")', $environment);

        // arbitrary named arguments
        $node = $this->createFilter($string, 'barbar');
        $tests[] = array($node, 'twig_tests_filter_barbar($context, "abc")', $environment);

        $node = $this->createFilter($string, 'barbar', array('foo' => new Twig_Node_Expression_Constant('bar', 1)));
        $tests[] = array($node, 'twig_tests_filter_barbar($context, "abc", null, null, array("foo" => "bar"))', $environment);

        $node = $this->createFilter($string, 'barbar', array('arg2' => new Twig_Node_Expression_Constant('bar', 1)));
        $tests[] = array($node, 'twig_tests_filter_barbar($context, "abc", null, "bar")', $environment);

        $node = $this->createFilter($string, 'barbar', array(
            new Twig_Node_Expression_Constant('1', 1),
            new Twig_Node_Expression_Constant('2', 1),
            new Twig_Node_Expression_Constant('3', 1),
            'foo' => new Twig_Node_Expression_Constant('bar', 1),
        ));
        $tests[] = array($node, 'twig_tests_filter_barbar($context, "abc", "1", "2", array(0 => "3", "foo" => "bar"))', $environment);
=======
        $tests[] = [$node, 'bar($this->env, "abc")', $environment];

        $node = $this->createFilter($string, 'bar', [new ConstantExpression('bar', 1)]);
        $tests[] = [$node, 'bar($this->env, "abc", "bar")', $environment];

        // arbitrary named arguments
        $node = $this->createFilter($string, 'barbar');
        $tests[] = [$node, 'twig_tests_filter_barbar($context, "abc")', $environment];

        $node = $this->createFilter($string, 'barbar', ['foo' => new ConstantExpression('bar', 1)]);
        $tests[] = [$node, 'twig_tests_filter_barbar($context, "abc", null, null, ["foo" => "bar"])', $environment];

        $node = $this->createFilter($string, 'barbar', ['arg2' => new ConstantExpression('bar', 1)]);
        $tests[] = [$node, 'twig_tests_filter_barbar($context, "abc", null, "bar")', $environment];

        $node = $this->createFilter($string, 'barbar', [
            new ConstantExpression('1', 1),
            new ConstantExpression('2', 1),
            new ConstantExpression('3', 1),
            'foo' => new ConstantExpression('bar', 1),
        ]);
        $tests[] = [$node, 'twig_tests_filter_barbar($context, "abc", "1", "2", [0 => "3", "foo" => "bar"])', $environment];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }

    /**
<<<<<<< HEAD
     * @expectedException        Twig_Error_Syntax
=======
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown argument "foobar" for filter "date(format, timezone)" at line 1.
     */
    public function testCompileWithWrongNamedArgumentName()
    {
<<<<<<< HEAD
        $date = new Twig_Node_Expression_Constant(0, 1);
        $node = $this->createFilter($date, 'date', array(
            'foobar' => new Twig_Node_Expression_Constant('America/Chicago', 1),
        ));
=======
        $date = new ConstantExpression(0, 1);
        $node = $this->createFilter($date, 'date', [
            'foobar' => new ConstantExpression('America/Chicago', 1),
        ]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $compiler = $this->getCompiler();
        $compiler->compile($node);
    }

    /**
<<<<<<< HEAD
     * @expectedException        Twig_Error_Syntax
     * @expectedExceptionMessage Value for argument "from" is required for filter "replace".
     */
    public function testCompileWithMissingNamedArgument()
    {
        $value = new Twig_Node_Expression_Constant(0, 1);
        $node = $this->createFilter($value, 'replace', array(
            'to' => new Twig_Node_Expression_Constant('foo', 1),
        ));
=======
     * @expectedException        \Twig\Error\SyntaxError
     * @expectedExceptionMessage Value for argument "from" is required for filter "replace" at line 1.
     */
    public function testCompileWithMissingNamedArgument()
    {
        $value = new ConstantExpression(0, 1);
        $node = $this->createFilter($value, 'replace', [
            'to' => new ConstantExpression('foo', 1),
        ]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $compiler = $this->getCompiler();
        $compiler->compile($node);
    }

<<<<<<< HEAD
    protected function createFilter($node, $name, array $arguments = array())
    {
        $name = new Twig_Node_Expression_Constant($name, 1);
        $arguments = new Twig_Node($arguments);

        return new Twig_Node_Expression_Filter($node, $name, $arguments, 1);
=======
    protected function createFilter($node, $name, array $arguments = [])
    {
        $name = new ConstantExpression($name, 1);
        $arguments = new Node($arguments);

        return new FilterExpression($node, $name, $arguments, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    protected function getEnvironment()
    {
        if (PHP_VERSION_ID >= 50300) {
            return include 'PHP53/FilterInclude.php';
        }

        return parent::getEnvironment();
    }
}

<<<<<<< HEAD
function twig_tests_filter_barbar($context, $string, $arg1 = null, $arg2 = null, array $args = array())
=======
function twig_tests_filter_barbar($context, $string, $arg1 = null, $arg2 = null, array $args = [])
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
}
