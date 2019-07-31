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
=======
use Twig\Extension\AbstractExtension;
use Twig\Extension\DebugExtension;
use Twig\Extension\SandboxExtension;
use Twig\Extension\StringLoaderExtension;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\PrintNode;
use Twig\Sandbox\SecurityPolicy;
use Twig\Test\IntegrationTestCase;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTest;

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
// This function is defined to check that escaping strategies
// like html works even if a function with the same name is defined.
function html()
{
    return 'foo';
}

<<<<<<< HEAD
class Twig_Tests_IntegrationTest extends Twig_Test_IntegrationTestCase
{
    public function getExtensions()
    {
        $policy = new Twig_Sandbox_SecurityPolicy(array(), array(), array(), array(), array());

        return array(
            new Twig_Extension_Debug(),
            new Twig_Extension_Sandbox($policy, false),
            new Twig_Extension_StringLoader(),
            new TwigTestExtension(),
        );
=======
class Twig_Tests_IntegrationTest extends IntegrationTestCase
{
    public function getExtensions()
    {
        $policy = new SecurityPolicy([], [], [], [], ['dump']);

        return [
            new DebugExtension(),
            new SandboxExtension($policy, false),
            new StringLoaderExtension(),
            new TwigTestExtension(),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getFixturesDir()
    {
<<<<<<< HEAD
        return dirname(__FILE__).'/Fixtures/';
=======
        return __DIR__.'/Fixtures/';
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}

function test_foo($value = 'foo')
{
    return $value;
}

class TwigTestFoo implements Iterator
{
    const BAR_NAME = 'bar';

    public $position = 0;
<<<<<<< HEAD
    public $array = array(1, 2);
=======
    public $array = [1, 2];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    public function bar($param1 = null, $param2 = null)
    {
        return 'bar'.($param1 ? '_'.$param1 : '').($param2 ? '-'.$param2 : '');
    }

    public function getFoo()
    {
        return 'foo';
    }

    public function getSelf()
    {
        return $this;
    }

    public function is()
    {
        return 'is';
    }

    public function in()
    {
        return 'in';
    }

    public function not()
    {
        return 'not';
    }

    public function strToLower($value)
    {
        return strtolower($value);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return 'a';
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }
}

<<<<<<< HEAD
class TwigTestTokenParser_§ extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        return new Twig_Node_Print(new Twig_Node_Expression_Constant('§', -1), -1);
=======
class TwigTestTokenParser_§ extends AbstractTokenParser
{
    public function parse(Token $token)
    {
        $this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new PrintNode(new ConstantExpression('§', -1), -1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getTag()
    {
        return '§';
    }
}

<<<<<<< HEAD
class TwigTestExtension extends Twig_Extension
{
    public function getTokenParsers()
    {
        return array(
            new TwigTestTokenParser_§(),
        );
=======
class TwigTestExtension extends AbstractExtension
{
    public function getTokenParsers()
    {
        return [
            new TwigTestTokenParser_§(),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getFilters()
    {
<<<<<<< HEAD
        return array(
            new Twig_SimpleFilter('§', array($this, '§Filter')),
            new Twig_SimpleFilter('escape_and_nl2br', array($this, 'escape_and_nl2br'), array('needs_environment' => true, 'is_safe' => array('html'))),
            new Twig_SimpleFilter('nl2br', array($this, 'nl2br'), array('pre_escape' => 'html', 'is_safe' => array('html'))),
            new Twig_SimpleFilter('escape_something', array($this, 'escape_something'), array('is_safe' => array('something'))),
            new Twig_SimpleFilter('preserves_safety', array($this, 'preserves_safety'), array('preserves_safety' => array('html'))),
            new Twig_SimpleFilter('static_call_string', 'TwigTestExtension::staticCall'),
            new Twig_SimpleFilter('static_call_array', array('TwigTestExtension', 'staticCall')),
            new Twig_SimpleFilter('magic_call', array($this, 'magicCall')),
            new Twig_SimpleFilter('magic_call_string', 'TwigTestExtension::magicStaticCall'),
            new Twig_SimpleFilter('magic_call_array', array('TwigTestExtension', 'magicStaticCall')),
            new Twig_SimpleFilter('*_path', array($this, 'dynamic_path')),
            new Twig_SimpleFilter('*_foo_*_bar', array($this, 'dynamic_foo')),
        );
=======
        return [
            new TwigFilter('§', [$this, '§Filter']),
            new TwigFilter('escape_and_nl2br', [$this, 'escape_and_nl2br'], ['needs_environment' => true, 'is_safe' => ['html']]),
            new TwigFilter('nl2br', [$this, 'nl2br'], ['pre_escape' => 'html', 'is_safe' => ['html']]),
            new TwigFilter('escape_something', [$this, 'escape_something'], ['is_safe' => ['something']]),
            new TwigFilter('preserves_safety', [$this, 'preserves_safety'], ['preserves_safety' => ['html']]),
            new TwigFilter('static_call_string', 'TwigTestExtension::staticCall'),
            new TwigFilter('static_call_array', ['TwigTestExtension', 'staticCall']),
            new TwigFilter('magic_call', [$this, 'magicCall']),
            new TwigFilter('magic_call_string', 'TwigTestExtension::magicStaticCall'),
            new TwigFilter('magic_call_array', ['TwigTestExtension', 'magicStaticCall']),
            new TwigFilter('*_path', [$this, 'dynamic_path']),
            new TwigFilter('*_foo_*_bar', [$this, 'dynamic_foo']),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getFunctions()
    {
<<<<<<< HEAD
        return array(
            new Twig_SimpleFunction('§', array($this, '§Function')),
            new Twig_SimpleFunction('safe_br', array($this, 'br'), array('is_safe' => array('html'))),
            new Twig_SimpleFunction('unsafe_br', array($this, 'br')),
            new Twig_SimpleFunction('static_call_string', 'TwigTestExtension::staticCall'),
            new Twig_SimpleFunction('static_call_array', array('TwigTestExtension', 'staticCall')),
            new Twig_SimpleFunction('*_path', array($this, 'dynamic_path')),
            new Twig_SimpleFunction('*_foo_*_bar', array($this, 'dynamic_foo')),
        );
=======
        return [
            new TwigFunction('§', [$this, '§Function']),
            new TwigFunction('safe_br', [$this, 'br'], ['is_safe' => ['html']]),
            new TwigFunction('unsafe_br', [$this, 'br']),
            new TwigFunction('static_call_string', 'TwigTestExtension::staticCall'),
            new TwigFunction('static_call_array', ['TwigTestExtension', 'staticCall']),
            new TwigFunction('*_path', [$this, 'dynamic_path']),
            new TwigFunction('*_foo_*_bar', [$this, 'dynamic_foo']),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getTests()
    {
<<<<<<< HEAD
        return array(
            new Twig_SimpleTest('multi word', array($this, 'is_multi_word')),
        );
=======
        return [
            new TwigTest('multi word', [$this, 'is_multi_word']),
            new TwigTest('test_*', [$this, 'dynamic_test']),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function §Filter($value)
    {
        return "§{$value}§";
    }

    public function §Function($value)
    {
        return "§{$value}§";
    }

    /**
     * nl2br which also escapes, for testing escaper filters.
     */
    public function escape_and_nl2br($env, $value, $sep = '<br />')
    {
        return $this->nl2br(twig_escape_filter($env, $value, 'html'), $sep);
    }

    /**
     * nl2br only, for testing filters with pre_escape.
     */
    public function nl2br($value, $sep = '<br />')
    {
        // not secure if $value contains html tags (not only entities)
        // don't use
        return str_replace("\n", "$sep\n", $value);
    }

    public function dynamic_path($element, $item)
    {
        return $element.'/'.$item;
    }

    public function dynamic_foo($foo, $bar, $item)
    {
        return $foo.'/'.$bar.'/'.$item;
    }

<<<<<<< HEAD
=======
    public function dynamic_test($element, $item)
    {
        return $element === $item;
    }

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    public function escape_something($value)
    {
        return strtoupper($value);
    }

    public function preserves_safety($value)
    {
        return strtoupper($value);
    }

    public static function staticCall($value)
    {
        return "*$value*";
    }

    public function br()
    {
        return '<br />';
    }

    public function is_multi_word($value)
    {
        return false !== strpos($value, ' ');
    }

    public function __call($method, $arguments)
    {
        if ('magicCall' !== $method) {
<<<<<<< HEAD
            throw new BadMethodCallException('Unexpected call to __call');
=======
            throw new \BadMethodCallException('Unexpected call to __call');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        return 'magic_'.$arguments[0];
    }

    public static function __callStatic($method, $arguments)
    {
        if ('magicStaticCall' !== $method) {
<<<<<<< HEAD
            throw new BadMethodCallException('Unexpected call to __callStatic');
=======
            throw new \BadMethodCallException('Unexpected call to __callStatic');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        return 'static_magic_'.$arguments[0];
    }
}
<<<<<<< HEAD
=======

/**
 * This class is used in tests for the "length" filter and "empty" test. It asserts that __call is not
 * used to convert such objects to strings.
 */
class MagicCallStub
{
    public function __call($name, $args)
    {
        throw new \Exception('__call shall not be called');
    }
}

class ToStringStub
{
    /**
     * @var string
     */
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function __toString()
    {
        return $this->string;
    }
}

/**
 * This class is used in tests for the length filter and empty test to show
 * that when \Countable is implemented, it is preferred over the __toString()
 * method.
 */
class CountableStub implements \Countable
{
    private $count;

    public function __construct($count)
    {
        $this->count = $count;
    }

    public function count()
    {
        return $this->count;
    }

    public function __toString()
    {
        throw new \Exception('__toString shall not be called on \Countables');
    }
}

/**
 * This class is used in tests for the length filter.
 */
class IteratorAggregateStub implements \IteratorAggregate
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }
}

class SimpleIteratorForTesting implements Iterator
{
    private $data = [1, 2, 3, 4, 5, 6, 7];
    private $key = 0;

    public function current()
    {
        return $this->key;
    }

    public function next()
    {
        ++$this->key;
    }

    public function key()
    {
        return $this->key;
    }

    public function valid()
    {
        return isset($this->data[$this->key]);
    }

    public function rewind()
    {
        $this->key = 0;
    }

    public function __toString()
    {
        // for testing, make sure string length returned is not the same as the `iterator_count`
        return str_repeat('X', iterator_count($this) + 10);
    }
}
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
