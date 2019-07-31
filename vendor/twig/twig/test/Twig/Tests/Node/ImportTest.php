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
class Twig_Tests_Node_ImportTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $macro = new Twig_Node_Expression_Constant('foo.twig', 1);
        $var = new Twig_Node_Expression_AssignName('macro', 1);
        $node = new Twig_Node_Import($macro, $var, 1);
=======
use Twig\Node\Expression\AssignNameExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\ImportNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_ImportTest extends NodeTestCase
{
    public function testConstructor()
    {
        $macro = new ConstantExpression('foo.twig', 1);
        $var = new AssignNameExpression('macro', 1);
        $node = new ImportNode($macro, $var, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($macro, $node->getNode('expr'));
        $this->assertEquals($var, $node->getNode('var'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();

        $macro = new Twig_Node_Expression_Constant('foo.twig', 1);
        $var = new Twig_Node_Expression_AssignName('macro', 1);
        $node = new Twig_Node_Import($macro, $var, 1);

        $tests[] = array($node, <<<EOF
// line 1
\$context["macro"] = \$this->loadTemplate("foo.twig", null, 1);
EOF
        );
=======
        $tests = [];

        $macro = new ConstantExpression('foo.twig', 1);
        $var = new AssignNameExpression('macro', 1);
        $node = new ImportNode($macro, $var, 1);

        $tests[] = [$node, <<<EOF
// line 1
\$context["macro"] = \$this->loadTemplate("foo.twig", null, 1)->unwrap();
EOF
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
