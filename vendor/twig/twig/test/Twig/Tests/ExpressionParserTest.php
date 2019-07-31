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
class Twig_Tests_ExpressionParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Twig_Error_Syntax
=======
use Twig\Environment;
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\Binary\ConcatBinary;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Parser;
use Twig\Source;

class Twig_Tests_ExpressionParserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @dataProvider getFailingTestsForAssignment
     */
    public function testCanOnlyAssignToNames($template)
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source($template, 'index')));
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source($template, 'index')));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getFailingTestsForAssignment()
    {
<<<<<<< HEAD
        return array(
            array('{% set false = "foo" %}'),
            array('{% set FALSE = "foo" %}'),
            array('{% set true = "foo" %}'),
            array('{% set TRUE = "foo" %}'),
            array('{% set none = "foo" %}'),
            array('{% set NONE = "foo" %}'),
            array('{% set null = "foo" %}'),
            array('{% set NULL = "foo" %}'),
            array('{% set 3 = "foo" %}'),
            array('{% set 1 + 2 = "foo" %}'),
            array('{% set "bar" = "foo" %}'),
            array('{% set %}{% endset %}'),
        );
=======
        return [
            ['{% set false = "foo" %}'],
            ['{% set FALSE = "foo" %}'],
            ['{% set true = "foo" %}'],
            ['{% set TRUE = "foo" %}'],
            ['{% set none = "foo" %}'],
            ['{% set NONE = "foo" %}'],
            ['{% set null = "foo" %}'],
            ['{% set NULL = "foo" %}'],
            ['{% set 3 = "foo" %}'],
            ['{% set 1 + 2 = "foo" %}'],
            ['{% set "bar" = "foo" %}'],
            ['{% set %}{% endset %}'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider getTestsForArray
     */
    public function testArrayExpression($template, $expected)
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $stream = $env->tokenize(new Twig_Source($template, ''));
        $parser = new Twig_Parser($env);
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $stream = $env->tokenize($source = new Source($template, ''));
        $parser = new Parser($env);
        $expected->setSourceContext($source);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($expected, $parser->parse($stream)->getNode('body')->getNode(0)->getNode('expr'));
    }

    /**
<<<<<<< HEAD
     * @expectedException Twig_Error_Syntax
=======
     * @expectedException \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @dataProvider getFailingTestsForArray
     */
    public function testArraySyntaxError($template)
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source($template, 'index')));
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source($template, 'index')));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getFailingTestsForArray()
    {
<<<<<<< HEAD
        return array(
            array('{{ [1, "a": "b"] }}'),
            array('{{ {"a": "b", 2} }}'),
        );
=======
        return [
            ['{{ [1, "a": "b"] }}'],
            ['{{ {"a": "b", 2} }}'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getTestsForArray()
    {
<<<<<<< HEAD
        return array(
            // simple array
            array('{{ [1, 2] }}', new Twig_Node_Expression_Array(array(
                  new Twig_Node_Expression_Constant(0, 1),
                  new Twig_Node_Expression_Constant(1, 1),

                  new Twig_Node_Expression_Constant(1, 1),
                  new Twig_Node_Expression_Constant(2, 1),
                ), 1),
            ),

            // array with trailing ,
            array('{{ [1, 2, ] }}', new Twig_Node_Expression_Array(array(
                  new Twig_Node_Expression_Constant(0, 1),
                  new Twig_Node_Expression_Constant(1, 1),

                  new Twig_Node_Expression_Constant(1, 1),
                  new Twig_Node_Expression_Constant(2, 1),
                ), 1),
            ),

            // simple hash
            array('{{ {"a": "b", "b": "c"} }}', new Twig_Node_Expression_Array(array(
                  new Twig_Node_Expression_Constant('a', 1),
                  new Twig_Node_Expression_Constant('b', 1),

                  new Twig_Node_Expression_Constant('b', 1),
                  new Twig_Node_Expression_Constant('c', 1),
                ), 1),
            ),

            // hash with trailing ,
            array('{{ {"a": "b", "b": "c", } }}', new Twig_Node_Expression_Array(array(
                  new Twig_Node_Expression_Constant('a', 1),
                  new Twig_Node_Expression_Constant('b', 1),

                  new Twig_Node_Expression_Constant('b', 1),
                  new Twig_Node_Expression_Constant('c', 1),
                ), 1),
            ),

            // hash in an array
            array('{{ [1, {"a": "b", "b": "c"}] }}', new Twig_Node_Expression_Array(array(
                  new Twig_Node_Expression_Constant(0, 1),
                  new Twig_Node_Expression_Constant(1, 1),

                  new Twig_Node_Expression_Constant(1, 1),
                  new Twig_Node_Expression_Array(array(
                        new Twig_Node_Expression_Constant('a', 1),
                        new Twig_Node_Expression_Constant('b', 1),

                        new Twig_Node_Expression_Constant('b', 1),
                        new Twig_Node_Expression_Constant('c', 1),
                      ), 1),
                ), 1),
            ),

            // array in a hash
            array('{{ {"a": [1, 2], "b": "c"} }}', new Twig_Node_Expression_Array(array(
                  new Twig_Node_Expression_Constant('a', 1),
                  new Twig_Node_Expression_Array(array(
                        new Twig_Node_Expression_Constant(0, 1),
                        new Twig_Node_Expression_Constant(1, 1),

                        new Twig_Node_Expression_Constant(1, 1),
                        new Twig_Node_Expression_Constant(2, 1),
                      ), 1),
                  new Twig_Node_Expression_Constant('b', 1),
                  new Twig_Node_Expression_Constant('c', 1),
                ), 1),
            ),
        );
    }

    /**
     * @expectedException Twig_Error_Syntax
     */
    public function testStringExpressionDoesNotConcatenateTwoConsecutiveStrings()
    {
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false, 'optimizations' => 0));
        $stream = $env->tokenize(new Twig_Source('{{ "a" "b" }}', 'index'));
        $parser = new Twig_Parser($env);
=======
        return [
            // simple array
            ['{{ [1, 2] }}', new ArrayExpression([
                  new ConstantExpression(0, 1),
                  new ConstantExpression(1, 1),

                  new ConstantExpression(1, 1),
                  new ConstantExpression(2, 1),
                ], 1),
            ],

            // array with trailing ,
            ['{{ [1, 2, ] }}', new ArrayExpression([
                  new ConstantExpression(0, 1),
                  new ConstantExpression(1, 1),

                  new ConstantExpression(1, 1),
                  new ConstantExpression(2, 1),
                ], 1),
            ],

            // simple hash
            ['{{ {"a": "b", "b": "c"} }}', new ArrayExpression([
                  new ConstantExpression('a', 1),
                  new ConstantExpression('b', 1),

                  new ConstantExpression('b', 1),
                  new ConstantExpression('c', 1),
                ], 1),
            ],

            // hash with trailing ,
            ['{{ {"a": "b", "b": "c", } }}', new ArrayExpression([
                  new ConstantExpression('a', 1),
                  new ConstantExpression('b', 1),

                  new ConstantExpression('b', 1),
                  new ConstantExpression('c', 1),
                ], 1),
            ],

            // hash in an array
            ['{{ [1, {"a": "b", "b": "c"}] }}', new ArrayExpression([
                  new ConstantExpression(0, 1),
                  new ConstantExpression(1, 1),

                  new ConstantExpression(1, 1),
                  new ArrayExpression([
                        new ConstantExpression('a', 1),
                        new ConstantExpression('b', 1),

                        new ConstantExpression('b', 1),
                        new ConstantExpression('c', 1),
                      ], 1),
                ], 1),
            ],

            // array in a hash
            ['{{ {"a": [1, 2], "b": "c"} }}', new ArrayExpression([
                  new ConstantExpression('a', 1),
                  new ArrayExpression([
                        new ConstantExpression(0, 1),
                        new ConstantExpression(1, 1),

                        new ConstantExpression(1, 1),
                        new ConstantExpression(2, 1),
                      ], 1),
                  new ConstantExpression('b', 1),
                  new ConstantExpression('c', 1),
                ], 1),
            ],
        ];
    }

    /**
     * @expectedException \Twig\Error\SyntaxError
     */
    public function testStringExpressionDoesNotConcatenateTwoConsecutiveStrings()
    {
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        $stream = $env->tokenize(new Source('{{ "a" "b" }}', 'index'));
        $parser = new Parser($env);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $parser->parse($stream);
    }

    /**
     * @dataProvider getTestsForString
     */
    public function testStringExpression($template, $expected)
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false, 'optimizations' => 0));
        $stream = $env->tokenize(new Twig_Source($template, ''));
        $parser = new Twig_Parser($env);
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false, 'optimizations' => 0]);
        $stream = $env->tokenize($source = new Source($template, ''));
        $parser = new Parser($env);
        $expected->setSourceContext($source);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($expected, $parser->parse($stream)->getNode('body')->getNode(0)->getNode('expr'));
    }

    public function getTestsForString()
    {
<<<<<<< HEAD
        return array(
            array(
                '{{ "foo" }}', new Twig_Node_Expression_Constant('foo', 1),
            ),
            array(
                '{{ "foo #{bar}" }}', new Twig_Node_Expression_Binary_Concat(
                    new Twig_Node_Expression_Constant('foo ', 1),
                    new Twig_Node_Expression_Name('bar', 1),
                    1
                ),
            ),
            array(
                '{{ "foo #{bar} baz" }}', new Twig_Node_Expression_Binary_Concat(
                    new Twig_Node_Expression_Binary_Concat(
                        new Twig_Node_Expression_Constant('foo ', 1),
                        new Twig_Node_Expression_Name('bar', 1),
                        1
                    ),
                    new Twig_Node_Expression_Constant(' baz', 1),
                    1
                ),
            ),

            array(
                '{{ "foo #{"foo #{bar} baz"} baz" }}', new Twig_Node_Expression_Binary_Concat(
                    new Twig_Node_Expression_Binary_Concat(
                        new Twig_Node_Expression_Constant('foo ', 1),
                        new Twig_Node_Expression_Binary_Concat(
                            new Twig_Node_Expression_Binary_Concat(
                                new Twig_Node_Expression_Constant('foo ', 1),
                                new Twig_Node_Expression_Name('bar', 1),
                                1
                            ),
                            new Twig_Node_Expression_Constant(' baz', 1),
=======
        return [
            [
                '{{ "foo" }}', new ConstantExpression('foo', 1),
            ],
            [
                '{{ "foo #{bar}" }}', new ConcatBinary(
                    new ConstantExpression('foo ', 1),
                    new NameExpression('bar', 1),
                    1
                ),
            ],
            [
                '{{ "foo #{bar} baz" }}', new ConcatBinary(
                    new ConcatBinary(
                        new ConstantExpression('foo ', 1),
                        new NameExpression('bar', 1),
                        1
                    ),
                    new ConstantExpression(' baz', 1),
                    1
                ),
            ],

            [
                '{{ "foo #{"foo #{bar} baz"} baz" }}', new ConcatBinary(
                    new ConcatBinary(
                        new ConstantExpression('foo ', 1),
                        new ConcatBinary(
                            new ConcatBinary(
                                new ConstantExpression('foo ', 1),
                                new NameExpression('bar', 1),
                                1
                            ),
                            new ConstantExpression(' baz', 1),
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
                            1
                        ),
                        1
                    ),
<<<<<<< HEAD
                    new Twig_Node_Expression_Constant(' baz', 1),
                    1
                ),
            ),
        );
    }

    /**
     * @expectedException Twig_Error_Syntax
     */
    public function testAttributeCallDoesNotSupportNamedArguments()
    {
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source('{{ foo.bar(name="Foo") }}', 'index')));
    }

    /**
     * @expectedException Twig_Error_Syntax
     */
    public function testMacroCallDoesNotSupportNamedArguments()
    {
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source('{% from _self import foo %}{% macro foo() %}{% endmacro %}{{ foo(name="Foo") }}', 'index')));
    }

    /**
     * @expectedException        Twig_Error_Syntax
=======
                    new ConstantExpression(' baz', 1),
                    1
                ),
            ],
        ];
    }

    /**
     * @expectedException \Twig\Error\SyntaxError
     */
    public function testAttributeCallDoesNotSupportNamedArguments()
    {
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source('{{ foo.bar(name="Foo") }}', 'index')));
    }

    /**
     * @expectedException \Twig\Error\SyntaxError
     */
    public function testMacroCallDoesNotSupportNamedArguments()
    {
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source('{% from _self import foo %}{% macro foo() %}{% endmacro %}{{ foo(name="Foo") }}', 'index')));
    }

    /**
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage An argument must be a name. Unexpected token "string" of value "a" ("name" expected) in "index" at line 1.
     */
    public function testMacroDefinitionDoesNotSupportNonNameVariableName()
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source('{% macro foo("a") %}{% endmacro %}', 'index')));
    }

    /**
     * @expectedException        Twig_Error_Syntax
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source('{% macro foo("a") %}{% endmacro %}', 'index')));
    }

    /**
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage A default value for an argument must be a constant (a boolean, a string, a number, or an array) in "index" at line 1
     * @dataProvider             getMacroDefinitionDoesNotSupportNonConstantDefaultValues
     */
    public function testMacroDefinitionDoesNotSupportNonConstantDefaultValues($template)
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source($template, 'index')));
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source($template, 'index')));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getMacroDefinitionDoesNotSupportNonConstantDefaultValues()
    {
<<<<<<< HEAD
        return array(
            array('{% macro foo(name = "a #{foo} a") %}{% endmacro %}'),
            array('{% macro foo(name = [["b", "a #{foo} a"]]) %}{% endmacro %}'),
        );
=======
        return [
            ['{% macro foo(name = "a #{foo} a") %}{% endmacro %}'],
            ['{% macro foo(name = [["b", "a #{foo} a"]]) %}{% endmacro %}'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider getMacroDefinitionSupportsConstantDefaultValues
     */
    public function testMacroDefinitionSupportsConstantDefaultValues($template)
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source($template, 'index')));
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source($template, 'index')));

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getMacroDefinitionSupportsConstantDefaultValues()
    {
<<<<<<< HEAD
        return array(
            array('{% macro foo(name = "aa") %}{% endmacro %}'),
            array('{% macro foo(name = 12) %}{% endmacro %}'),
            array('{% macro foo(name = true) %}{% endmacro %}'),
            array('{% macro foo(name = ["a"]) %}{% endmacro %}'),
            array('{% macro foo(name = [["a"]]) %}{% endmacro %}'),
            array('{% macro foo(name = {a: "a"}) %}{% endmacro %}'),
            array('{% macro foo(name = {a: {b: "a"}}) %}{% endmacro %}'),
        );
    }

    /**
     * @expectedException        Twig_Error_Syntax
=======
        return [
            ['{% macro foo(name = "aa") %}{% endmacro %}'],
            ['{% macro foo(name = 12) %}{% endmacro %}'],
            ['{% macro foo(name = true) %}{% endmacro %}'],
            ['{% macro foo(name = ["a"]) %}{% endmacro %}'],
            ['{% macro foo(name = [["a"]]) %}{% endmacro %}'],
            ['{% macro foo(name = {a: "a"}) %}{% endmacro %}'],
            ['{% macro foo(name = {a: {b: "a"}}) %}{% endmacro %}'],
        ];
    }

    /**
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown "cycl" function. Did you mean "cycle" in "index" at line 1?
     */
    public function testUnknownFunction()
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source('{{ cycl() }}', 'index')));
    }

    /**
     * @expectedException        Twig_Error_Syntax
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source('{{ cycl() }}', 'index')));
    }

    /**
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown "foobar" function in "index" at line 1.
     */
    public function testUnknownFunctionWithoutSuggestions()
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source('{{ foobar() }}', 'index')));
    }

    /**
     * @expectedException        Twig_Error_Syntax
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source('{{ foobar() }}', 'index')));
    }

    /**
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown "lowe" filter. Did you mean "lower" in "index" at line 1?
     */
    public function testUnknownFilter()
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source('{{ 1|lowe }}', 'index')));
    }

    /**
     * @expectedException        Twig_Error_Syntax
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source('{{ 1|lowe }}', 'index')));
    }

    /**
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown "foobar" filter in "index" at line 1.
     */
    public function testUnknownFilterWithoutSuggestions()
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source('{{ 1|foobar }}', 'index')));
    }

    /**
     * @expectedException        Twig_Error_Syntax
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source('{{ 1|foobar }}', 'index')));
    }

    /**
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown "nul" test. Did you mean "null" in "index" at line 1
     */
    public function testUnknownTest()
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);
        $stream = $env->tokenize(new Twig_Source('{{ 1 is nul }}', 'index'));
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);
        $stream = $env->tokenize(new Source('{{ 1 is nul }}', 'index'));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $parser->parse($stream);
    }

    /**
<<<<<<< HEAD
     * @expectedException        Twig_Error_Syntax
=======
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown "foobar" test in "index" at line 1.
     */
    public function testUnknownTestWithoutSuggestions()
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $parser = new Twig_Parser($env);

        $parser->parse($env->tokenize(new Twig_Source('{{ 1 is foobar }}', 'index')));
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $parser = new Parser($env);

        $parser->parse($env->tokenize(new Source('{{ 1 is foobar }}', 'index')));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
