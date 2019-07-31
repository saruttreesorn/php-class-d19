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
class Twig_Tests_Node_MacroTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $body = new Twig_Node_Text('foo', 1);
        $arguments = new Twig_Node(array(new Twig_Node_Expression_Name('foo', 1)), array(), 1);
        $node = new Twig_Node_Macro('foo', $body, $arguments, 1);
=======
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Node\MacroNode;
use Twig\Node\Node;
use Twig\Node\TextNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_MacroTest extends NodeTestCase
{
    public function testConstructor()
    {
        $body = new TextNode('foo', 1);
        $arguments = new Node([new NameExpression('foo', 1)], [], 1);
        $node = new MacroNode('foo', $body, $arguments, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($body, $node->getNode('body'));
        $this->assertEquals($arguments, $node->getNode('arguments'));
        $this->assertEquals('foo', $node->getAttribute('name'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $body = new Twig_Node_Text('foo', 1);
        $arguments = new Twig_Node(array(
            'foo' => new Twig_Node_Expression_Constant(null, 1),
            'bar' => new Twig_Node_Expression_Constant('Foo', 1),
        ), array(), 1);
        $node = new Twig_Node_Macro('foo', $body, $arguments, 1);
=======
        $body = new TextNode('foo', 1);
        $arguments = new Node([
            'foo' => new ConstantExpression(null, 1),
            'bar' => new ConstantExpression('Foo', 1),
        ], [], 1);
        $node = new MacroNode('foo', $body, $arguments, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        if (PHP_VERSION_ID >= 50600) {
            $declaration = ', ...$__varargs__';
            $varargs = '$__varargs__';
        } else {
            $declaration = '';
<<<<<<< HEAD
            $varargs = 'func_num_args() > 2 ? array_slice(func_get_args(), 2) : array()';
        }

        return array(
            array($node, <<<EOF
// line 1
public function getfoo(\$__foo__ = null, \$__bar__ = "Foo"$declaration)
{
    \$context = \$this->env->mergeGlobals(array(
        "foo" => \$__foo__,
        "bar" => \$__bar__,
        "varargs" => $varargs,
    ));

    \$blocks = array();

    ob_start();
    try {
        echo "foo";
    } catch (Exception \$e) {
        ob_end_clean();

        throw \$e;
    } catch (Throwable \$e) {
=======
            $varargs = 'func_num_args() > 2 ? array_slice(func_get_args(), 2) : []';
        }

        return [
            [$node, <<<EOF
// line 1
public function getfoo(\$__foo__ = null, \$__bar__ = "Foo"$declaration)
{
    \$context = \$this->env->mergeGlobals([
        "foo" => \$__foo__,
        "bar" => \$__bar__,
        "varargs" => $varargs,
    ]);

    \$blocks = [];

    ob_start(function () { return ''; });
    try {
        echo "foo";
    } catch (\Exception \$e) {
        ob_end_clean();

        throw \$e;
    } catch (\Throwable \$e) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        ob_end_clean();

        throw \$e;
    }

<<<<<<< HEAD
    return ('' === \$tmp = ob_get_clean()) ? '' : new Twig_Markup(\$tmp, \$this->env->getCharset());
}
EOF
            ),
        );
=======
    return ('' === \$tmp = ob_get_clean()) ? '' : new Markup(\$tmp, \$this->env->getCharset());
}
EOF
            ],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
