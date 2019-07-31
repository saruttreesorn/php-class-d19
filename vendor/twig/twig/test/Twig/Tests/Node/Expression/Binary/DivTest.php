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
class Twig_Tests_Node_Expression_Binary_DivTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $left = new Twig_Node_Expression_Constant(1, 1);
        $right = new Twig_Node_Expression_Constant(2, 1);
        $node = new Twig_Node_Expression_Binary_Div($left, $right, 1);
=======
use Twig\Node\Expression\Binary\DivBinary;
use Twig\Node\Expression\ConstantExpression;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_Expression_Binary_DivTest extends NodeTestCase
{
    public function testConstructor()
    {
        $left = new ConstantExpression(1, 1);
        $right = new ConstantExpression(2, 1);
        $node = new DivBinary($left, $right, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($left, $node->getNode('left'));
        $this->assertEquals($right, $node->getNode('right'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $left = new Twig_Node_Expression_Constant(1, 1);
        $right = new Twig_Node_Expression_Constant(2, 1);
        $node = new Twig_Node_Expression_Binary_Div($left, $right, 1);

        return array(
            array($node, '(1 / 2)'),
        );
=======
        $left = new ConstantExpression(1, 1);
        $right = new ConstantExpression(2, 1);
        $node = new DivBinary($left, $right, 1);

        return [
            [$node, '(1 / 2)'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
