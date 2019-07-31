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
class Twig_Tests_Node_TextTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $node = new Twig_Node_Text('foo', 1);
=======
use Twig\Node\TextNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_TextTest extends NodeTestCase
{
    public function testConstructor()
    {
        $node = new TextNode('foo', 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('foo', $node->getAttribute('data'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();
        $tests[] = array(new Twig_Node_Text('foo', 1), "// line 1\necho \"foo\";");
=======
        $tests = [];
        $tests[] = [new TextNode('foo', 1), "// line 1\necho \"foo\";"];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
