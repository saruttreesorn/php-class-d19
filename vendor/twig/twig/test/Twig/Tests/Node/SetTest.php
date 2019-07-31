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
class Twig_Tests_Node_SetTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $names = new Twig_Node(array(new Twig_Node_Expression_AssignName('foo', 1)), array(), 1);
        $values = new Twig_Node(array(new Twig_Node_Expression_Constant('foo', 1)), array(), 1);
        $node = new Twig_Node_Set(false, $names, $values, 1);
=======
use Twig\Node\Expression\AssignNameExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Node\Node;
use Twig\Node\PrintNode;
use Twig\Node\SetNode;
use Twig\Node\TextNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_SetTest extends NodeTestCase
{
    public function testConstructor()
    {
        $names = new Node([new AssignNameExpression('foo', 1)], [], 1);
        $values = new Node([new ConstantExpression('foo', 1)], [], 1);
        $node = new SetNode(false, $names, $values, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($names, $node->getNode('names'));
        $this->assertEquals($values, $node->getNode('values'));
        $this->assertFalse($node->getAttribute('capture'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();

        $names = new Twig_Node(array(new Twig_Node_Expression_AssignName('foo', 1)), array(), 1);
        $values = new Twig_Node(array(new Twig_Node_Expression_Constant('foo', 1)), array(), 1);
        $node = new Twig_Node_Set(false, $names, $values, 1);
        $tests[] = array($node, <<<EOF
// line 1
\$context["foo"] = "foo";
EOF
        );

        $names = new Twig_Node(array(new Twig_Node_Expression_AssignName('foo', 1)), array(), 1);
        $values = new Twig_Node(array(new Twig_Node_Print(new Twig_Node_Expression_Constant('foo', 1), 1)), array(), 1);
        $node = new Twig_Node_Set(true, $names, $values, 1);
        $tests[] = array($node, <<<EOF
// line 1
ob_start();
echo "foo";
\$context["foo"] = ('' === \$tmp = ob_get_clean()) ? '' : new Twig_Markup(\$tmp, \$this->env->getCharset());
EOF
        );

        $names = new Twig_Node(array(new Twig_Node_Expression_AssignName('foo', 1)), array(), 1);
        $values = new Twig_Node_Text('foo', 1);
        $node = new Twig_Node_Set(true, $names, $values, 1);
        $tests[] = array($node, <<<EOF
// line 1
\$context["foo"] = ('' === \$tmp = "foo") ? '' : new Twig_Markup(\$tmp, \$this->env->getCharset());
EOF
        );

        $names = new Twig_Node(array(new Twig_Node_Expression_AssignName('foo', 1), new Twig_Node_Expression_AssignName('bar', 1)), array(), 1);
        $values = new Twig_Node(array(new Twig_Node_Expression_Constant('foo', 1), new Twig_Node_Expression_Name('bar', 1)), array(), 1);
        $node = new Twig_Node_Set(false, $names, $values, 1);
        $tests[] = array($node, <<<EOF
// line 1
list(\$context["foo"], \$context["bar"]) = array("foo", {$this->getVariableGetter('bar')});
EOF
        );
=======
        $tests = [];

        $names = new Node([new AssignNameExpression('foo', 1)], [], 1);
        $values = new Node([new ConstantExpression('foo', 1)], [], 1);
        $node = new SetNode(false, $names, $values, 1);
        $tests[] = [$node, <<<EOF
// line 1
\$context["foo"] = "foo";
EOF
        ];

        $names = new Node([new AssignNameExpression('foo', 1)], [], 1);
        $values = new Node([new PrintNode(new ConstantExpression('foo', 1), 1)], [], 1);
        $node = new SetNode(true, $names, $values, 1);
        $tests[] = [$node, <<<EOF
// line 1
ob_start(function () { return ''; });
echo "foo";
\$context["foo"] = ('' === \$tmp = ob_get_clean()) ? '' : new Markup(\$tmp, \$this->env->getCharset());
EOF
        ];

        $names = new Node([new AssignNameExpression('foo', 1)], [], 1);
        $values = new TextNode('foo', 1);
        $node = new SetNode(true, $names, $values, 1);
        $tests[] = [$node, <<<EOF
// line 1
\$context["foo"] = ('' === \$tmp = "foo") ? '' : new Markup(\$tmp, \$this->env->getCharset());
EOF
        ];

        $names = new Node([new AssignNameExpression('foo', 1), new AssignNameExpression('bar', 1)], [], 1);
        $values = new Node([new ConstantExpression('foo', 1), new NameExpression('bar', 1)], [], 1);
        $node = new SetNode(false, $names, $values, 1);
        $tests[] = [$node, <<<EOF
// line 1
list(\$context["foo"], \$context["bar"]) = ["foo", {$this->getVariableGetter('bar')}];
EOF
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
