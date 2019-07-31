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
class Twig_Tests_Node_BlockReferenceTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $node = new Twig_Node_BlockReference('foo', 1);
=======
use Twig\Node\BlockReferenceNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_BlockReferenceTest extends NodeTestCase
{
    public function testConstructor()
    {
        $node = new BlockReferenceNode('foo', 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('foo', $node->getAttribute('name'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        return array(
            array(new Twig_Node_BlockReference('foo', 1), <<<EOF
// line 1
\$this->displayBlock('foo', \$context, \$blocks);
EOF
            ),
        );
=======
        return [
            [new BlockReferenceNode('foo', 1), <<<EOF
// line 1
\$this->displayBlock('foo', \$context, \$blocks);
EOF
            ],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
