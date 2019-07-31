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
class Twig_Tests_Node_Expression_Unary_PosTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $expr = new Twig_Node_Expression_Constant(1, 1);
        $node = new Twig_Node_Expression_Unary_Pos($expr, 1);
=======
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\Unary\PosUnary;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_Expression_Unary_PosTest extends NodeTestCase
{
    public function testConstructor()
    {
        $expr = new ConstantExpression(1, 1);
        $node = new PosUnary($expr, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($expr, $node->getNode('node'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $node = new Twig_Node_Expression_Constant(1, 1);
        $node = new Twig_Node_Expression_Unary_Pos($node, 1);

        return array(
            array($node, '+1'),
        );
=======
        $node = new ConstantExpression(1, 1);
        $node = new PosUnary($node, 1);

        return [
            [$node, '+1'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
