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
class Twig_Tests_Node_IfTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $t = new Twig_Node(array(
            new Twig_Node_Expression_Constant(true, 1),
            new Twig_Node_Print(new Twig_Node_Expression_Name('foo', 1), 1),
        ), array(), 1);
        $else = null;
        $node = new Twig_Node_If($t, $else, 1);
=======
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Node\IfNode;
use Twig\Node\Node;
use Twig\Node\PrintNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_IfTest extends NodeTestCase
{
    public function testConstructor()
    {
        $t = new Node([
            new ConstantExpression(true, 1),
            new PrintNode(new NameExpression('foo', 1), 1),
        ], [], 1);
        $else = null;
        $node = new IfNode($t, $else, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($t, $node->getNode('tests'));
        $this->assertFalse($node->hasNode('else'));

<<<<<<< HEAD
        $else = new Twig_Node_Print(new Twig_Node_Expression_Name('bar', 1), 1);
        $node = new Twig_Node_If($t, $else, 1);
=======
        $else = new PrintNode(new NameExpression('bar', 1), 1);
        $node = new IfNode($t, $else, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertEquals($else, $node->getNode('else'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();

        $t = new Twig_Node(array(
            new Twig_Node_Expression_Constant(true, 1),
            new Twig_Node_Print(new Twig_Node_Expression_Name('foo', 1), 1),
        ), array(), 1);
        $else = null;
        $node = new Twig_Node_If($t, $else, 1);

        $tests[] = array($node, <<<EOF
=======
        $tests = [];

        $t = new Node([
            new ConstantExpression(true, 1),
            new PrintNode(new NameExpression('foo', 1), 1),
        ], [], 1);
        $else = null;
        $node = new IfNode($t, $else, 1);

        $tests[] = [$node, <<<EOF
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
// line 1
if (true) {
    echo {$this->getVariableGetter('foo')};
}
EOF
<<<<<<< HEAD
        );

        $t = new Twig_Node(array(
            new Twig_Node_Expression_Constant(true, 1),
            new Twig_Node_Print(new Twig_Node_Expression_Name('foo', 1), 1),
            new Twig_Node_Expression_Constant(false, 1),
            new Twig_Node_Print(new Twig_Node_Expression_Name('bar', 1), 1),
        ), array(), 1);
        $else = null;
        $node = new Twig_Node_If($t, $else, 1);

        $tests[] = array($node, <<<EOF
=======
        ];

        $t = new Node([
            new ConstantExpression(true, 1),
            new PrintNode(new NameExpression('foo', 1), 1),
            new ConstantExpression(false, 1),
            new PrintNode(new NameExpression('bar', 1), 1),
        ], [], 1);
        $else = null;
        $node = new IfNode($t, $else, 1);

        $tests[] = [$node, <<<EOF
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
// line 1
if (true) {
    echo {$this->getVariableGetter('foo')};
} elseif (false) {
    echo {$this->getVariableGetter('bar')};
}
EOF
<<<<<<< HEAD
        );

        $t = new Twig_Node(array(
            new Twig_Node_Expression_Constant(true, 1),
            new Twig_Node_Print(new Twig_Node_Expression_Name('foo', 1), 1),
        ), array(), 1);
        $else = new Twig_Node_Print(new Twig_Node_Expression_Name('bar', 1), 1);
        $node = new Twig_Node_If($t, $else, 1);

        $tests[] = array($node, <<<EOF
=======
        ];

        $t = new Node([
            new ConstantExpression(true, 1),
            new PrintNode(new NameExpression('foo', 1), 1),
        ], [], 1);
        $else = new PrintNode(new NameExpression('bar', 1), 1);
        $node = new IfNode($t, $else, 1);

        $tests[] = [$node, <<<EOF
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
// line 1
if (true) {
    echo {$this->getVariableGetter('foo')};
} else {
    echo {$this->getVariableGetter('bar')};
}
EOF
<<<<<<< HEAD
        );
=======
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
