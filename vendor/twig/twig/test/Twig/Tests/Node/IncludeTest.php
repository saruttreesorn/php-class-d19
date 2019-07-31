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
class Twig_Tests_Node_IncludeTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $expr = new Twig_Node_Expression_Constant('foo.twig', 1);
        $node = new Twig_Node_Include($expr, null, false, false, 1);
=======
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\ConditionalExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\IncludeNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_IncludeTest extends NodeTestCase
{
    public function testConstructor()
    {
        $expr = new ConstantExpression('foo.twig', 1);
        $node = new IncludeNode($expr, null, false, false, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertFalse($node->hasNode('variables'));
        $this->assertEquals($expr, $node->getNode('expr'));
        $this->assertFalse($node->getAttribute('only'));

<<<<<<< HEAD
        $vars = new Twig_Node_Expression_Array(array(new Twig_Node_Expression_Constant('foo', 1), new Twig_Node_Expression_Constant(true, 1)), 1);
        $node = new Twig_Node_Include($expr, $vars, true, false, 1);
=======
        $vars = new ArrayExpression([new ConstantExpression('foo', 1), new ConstantExpression(true, 1)], 1);
        $node = new IncludeNode($expr, $vars, true, false, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertEquals($vars, $node->getNode('variables'));
        $this->assertTrue($node->getAttribute('only'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();

        $expr = new Twig_Node_Expression_Constant('foo.twig', 1);
        $node = new Twig_Node_Include($expr, null, false, false, 1);
        $tests[] = array($node, <<<EOF
// line 1
\$this->loadTemplate("foo.twig", null, 1)->display(\$context);
EOF
        );

        $expr = new Twig_Node_Expression_Conditional(
                        new Twig_Node_Expression_Constant(true, 1),
                        new Twig_Node_Expression_Constant('foo', 1),
                        new Twig_Node_Expression_Constant('foo', 1),
                        0
                    );
        $node = new Twig_Node_Include($expr, null, false, false, 1);
        $tests[] = array($node, <<<EOF
// line 1
\$this->loadTemplate(((true) ? ("foo") : ("foo")), null, 1)->display(\$context);
EOF
        );

        $expr = new Twig_Node_Expression_Constant('foo.twig', 1);
        $vars = new Twig_Node_Expression_Array(array(new Twig_Node_Expression_Constant('foo', 1), new Twig_Node_Expression_Constant(true, 1)), 1);
        $node = new Twig_Node_Include($expr, $vars, false, false, 1);
        $tests[] = array($node, <<<EOF
// line 1
\$this->loadTemplate("foo.twig", null, 1)->display(array_merge(\$context, array("foo" => true)));
EOF
        );

        $node = new Twig_Node_Include($expr, $vars, true, false, 1);
        $tests[] = array($node, <<<EOF
// line 1
\$this->loadTemplate("foo.twig", null, 1)->display(array("foo" => true));
EOF
        );

        $node = new Twig_Node_Include($expr, $vars, true, true, 1);
        $tests[] = array($node, <<<EOF
// line 1
try {
    \$this->loadTemplate("foo.twig", null, 1)->display(array("foo" => true));
} catch (Twig_Error_Loader \$e) {
    // ignore missing template
}
EOF
        );
=======
        $tests = [];

        $expr = new ConstantExpression('foo.twig', 1);
        $node = new IncludeNode($expr, null, false, false, 1);
        $tests[] = [$node, <<<EOF
// line 1
\$this->loadTemplate("foo.twig", null, 1)->display(\$context);
EOF
        ];

        $expr = new ConditionalExpression(
                        new ConstantExpression(true, 1),
                        new ConstantExpression('foo', 1),
                        new ConstantExpression('foo', 1),
                        0
                    );
        $node = new IncludeNode($expr, null, false, false, 1);
        $tests[] = [$node, <<<EOF
// line 1
\$this->loadTemplate(((true) ? ("foo") : ("foo")), null, 1)->display(\$context);
EOF
        ];

        $expr = new ConstantExpression('foo.twig', 1);
        $vars = new ArrayExpression([new ConstantExpression('foo', 1), new ConstantExpression(true, 1)], 1);
        $node = new IncludeNode($expr, $vars, false, false, 1);
        $tests[] = [$node, <<<EOF
// line 1
\$this->loadTemplate("foo.twig", null, 1)->display(twig_array_merge(\$context, ["foo" => true]));
EOF
        ];

        $node = new IncludeNode($expr, $vars, true, false, 1);
        $tests[] = [$node, <<<EOF
// line 1
\$this->loadTemplate("foo.twig", null, 1)->display(twig_to_array(["foo" => true]));
EOF
        ];

        $node = new IncludeNode($expr, $vars, true, true, 1);
        $tests[] = [$node, <<<EOF
// line 1
\$__internal_%s = null;
try {
    \$__internal_%s =     \$this->loadTemplate("foo.twig", null, 1);
} catch (LoaderError \$e) {
    // ignore missing template
}
if (\$__internal_%s) {
    \$__internal_%s->display(twig_to_array(["foo" => true]));
}
EOF
        , null, true];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
