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
class Twig_Tests_Node_AutoEscapeTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $body = new Twig_Node(array(new Twig_Node_Text('foo', 1)));
        $node = new Twig_Node_AutoEscape(true, $body, 1);
=======
use Twig\Node\AutoEscapeNode;
use Twig\Node\Node;
use Twig\Node\TextNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_AutoEscapeTest extends NodeTestCase
{
    public function testConstructor()
    {
        $body = new Node([new TextNode('foo', 1)]);
        $node = new AutoEscapeNode(true, $body, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($body, $node->getNode('body'));
        $this->assertTrue($node->getAttribute('value'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $body = new Twig_Node(array(new Twig_Node_Text('foo', 1)));
        $node = new Twig_Node_AutoEscape(true, $body, 1);

        return array(
            array($node, "// line 1\necho \"foo\";"),
        );
=======
        $body = new Node([new TextNode('foo', 1)]);
        $node = new AutoEscapeNode(true, $body, 1);

        return [
            [$node, "// line 1\necho \"foo\";"],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
