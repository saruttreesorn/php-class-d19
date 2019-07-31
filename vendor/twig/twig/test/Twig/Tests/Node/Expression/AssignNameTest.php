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
class Twig_Tests_Node_Expression_AssignNameTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $node = new Twig_Node_Expression_AssignName('foo', 1);
=======
use Twig\Node\Expression\AssignNameExpression;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_Expression_AssignNameTest extends NodeTestCase
{
    public function testConstructor()
    {
        $node = new AssignNameExpression('foo', 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('foo', $node->getAttribute('name'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $node = new Twig_Node_Expression_AssignName('foo', 1);

        return array(
            array($node, '$context["foo"]'),
        );
=======
        $node = new AssignNameExpression('foo', 1);

        return [
            [$node, '$context["foo"]'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
