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
class Twig_Tests_Node_Expression_ParentTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $node = new Twig_Node_Expression_Parent('foo', 1);
=======
use Twig\Node\Expression\ParentExpression;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_Expression_ParentTest extends NodeTestCase
{
    public function testConstructor()
    {
        $node = new ParentExpression('foo', 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('foo', $node->getAttribute('name'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();
        $tests[] = array(new Twig_Node_Expression_Parent('foo', 1), '$this->renderParentBlock("foo", $context, $blocks)');
=======
        $tests = [];
        $tests[] = [new ParentExpression('foo', 1), '$this->renderParentBlock("foo", $context, $blocks)'];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
