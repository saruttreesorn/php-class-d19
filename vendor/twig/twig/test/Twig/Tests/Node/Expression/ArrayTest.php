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
class Twig_Tests_Node_Expression_ArrayTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $elements = array(new Twig_Node_Expression_Constant('foo', 1), $foo = new Twig_Node_Expression_Constant('bar', 1));
        $node = new Twig_Node_Expression_Array($elements, 1);
=======
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_Expression_ArrayTest extends NodeTestCase
{
    public function testConstructor()
    {
        $elements = [new ConstantExpression('foo', 1), $foo = new ConstantExpression('bar', 1)];
        $node = new ArrayExpression($elements, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($foo, $node->getNode(1));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $elements = array(
            new Twig_Node_Expression_Constant('foo', 1),
            new Twig_Node_Expression_Constant('bar', 1),

            new Twig_Node_Expression_Constant('bar', 1),
            new Twig_Node_Expression_Constant('foo', 1),
        );
        $node = new Twig_Node_Expression_Array($elements, 1);

        return array(
            array($node, 'array("foo" => "bar", "bar" => "foo")'),
        );
=======
        $elements = [
            new ConstantExpression('foo', 1),
            new ConstantExpression('bar', 1),

            new ConstantExpression('bar', 1),
            new ConstantExpression('foo', 1),
        ];
        $node = new ArrayExpression($elements, 1);

        return [
            [$node, '["foo" => "bar", "bar" => "foo"]'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
