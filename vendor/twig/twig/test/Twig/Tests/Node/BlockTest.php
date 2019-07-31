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
class Twig_Tests_Node_BlockTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $body = new Twig_Node_Text('foo', 1);
        $node = new Twig_Node_Block('foo', $body, 1);
=======
use Twig\Node\BlockNode;
use Twig\Node\TextNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_BlockTest extends NodeTestCase
{
    public function testConstructor()
    {
        $body = new TextNode('foo', 1);
        $node = new BlockNode('foo', $body, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($body, $node->getNode('body'));
        $this->assertEquals('foo', $node->getAttribute('name'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $body = new Twig_Node_Text('foo', 1);
        $node = new Twig_Node_Block('foo', $body, 1);

        return array(
            array($node, <<<EOF
// line 1
public function block_foo(\$context, array \$blocks = array())
=======
        $body = new TextNode('foo', 1);
        $node = new BlockNode('foo', $body, 1);

        return [
            [$node, <<<EOF
// line 1
public function block_foo(\$context, array \$blocks = [])
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    echo "foo";
}
EOF
<<<<<<< HEAD
            ),
        );
=======
            ],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
