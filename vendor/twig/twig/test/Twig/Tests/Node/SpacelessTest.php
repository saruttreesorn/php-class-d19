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
class Twig_Tests_Node_SpacelessTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $body = new Twig_Node(array(new Twig_Node_Text('<div>   <div>   foo   </div>   </div>', 1)));
        $node = new Twig_Node_Spaceless($body, 1);
=======
use Twig\Node\Node;
use Twig\Node\SpacelessNode;
use Twig\Node\TextNode;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_SpacelessTest extends NodeTestCase
{
    public function testConstructor()
    {
        $body = new Node([new TextNode('<div>   <div>   foo   </div>   </div>', 1)]);
        $node = new SpacelessNode($body, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($body, $node->getNode('body'));
    }

    public function getTests()
    {
<<<<<<< HEAD
        $body = new Twig_Node(array(new Twig_Node_Text('<div>   <div>   foo   </div>   </div>', 1)));
        $node = new Twig_Node_Spaceless($body, 1);

        return array(
            array($node, <<<EOF
// line 1
ob_start();
echo "<div>   <div>   foo   </div>   </div>";
echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
EOF
            ),
        );
=======
        $body = new Node([new TextNode('<div>   <div>   foo   </div>   </div>', 1)]);
        $node = new SpacelessNode($body, 1);

        return [
            [$node, <<<EOF
// line 1
ob_start(function () { return ''; });
echo "<div>   <div>   foo   </div>   </div>";
echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
EOF
            ],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
