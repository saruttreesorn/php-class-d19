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
class Twig_Tests_Node_Expression_ConstantTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $node = new Twig_Node_Expression_Constant('foo', 1);
=======
use Twig\Node\Expression\ConstantExpression;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_Expression_ConstantTest extends NodeTestCase
{
    public function testConstructor()
    {
        $node = new ConstantExpression('foo', 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('foo', $node->getAttribute('value'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();

        $node = new Twig_Node_Expression_Constant('foo', 1);
        $tests[] = array($node, '"foo"');
=======
        $tests = [];

        $node = new ConstantExpression('foo', 1);
        $tests[] = [$node, '"foo"'];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
