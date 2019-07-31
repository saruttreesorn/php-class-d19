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
class Twig_Tests_Node_SandboxTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $body = new Twig_Node_Text('foo', 1);
        $node = new Twig_Node_Sandbox($body, 1);
=======
use Twig\Node\SandboxNode;
use Twig\Node\TextNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_SandboxTest extends NodeTestCase
{
    public function testConstructor()
    {
        $body = new TextNode('foo', 1);
        $node = new SandboxNode($body, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($body, $node->getNode('body'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();

        $body = new Twig_Node_Text('foo', 1);
        $node = new Twig_Node_Sandbox($body, 1);

        $tests[] = array($node, <<<EOF
// line 1
\$sandbox = \$this->env->getExtension('Twig_Extension_Sandbox');
if (!\$alreadySandboxed = \$sandbox->isSandboxed()) {
    \$sandbox->enableSandbox();
}
echo "foo";
if (!\$alreadySandboxed) {
    \$sandbox->disableSandbox();
}
EOF
        );
=======
        $tests = [];

        $body = new TextNode('foo', 1);
        $node = new SandboxNode($body, 1);

        $tests[] = [$node, <<<EOF
// line 1
if (!\$alreadySandboxed = \$this->sandbox->isSandboxed()) {
    \$this->sandbox->enableSandbox();
}
echo "foo";
if (!\$alreadySandboxed) {
    \$this->sandbox->disableSandbox();
}
EOF
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
