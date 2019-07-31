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
class Twig_Tests_Node_PrintTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $expr = new Twig_Node_Expression_Constant('foo', 1);
        $node = new Twig_Node_Print($expr, 1);
=======
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\PrintNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_PrintTest extends NodeTestCase
{
    public function testConstructor()
    {
        $expr = new ConstantExpression('foo', 1);
        $node = new PrintNode($expr, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($expr, $node->getNode('expr'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();
        $tests[] = array(new Twig_Node_Print(new Twig_Node_Expression_Constant('foo', 1), 1), "// line 1\necho \"foo\";");
=======
        $tests = [];
        $tests[] = [new PrintNode(new ConstantExpression('foo', 1), 1), "// line 1\necho \"foo\";"];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
