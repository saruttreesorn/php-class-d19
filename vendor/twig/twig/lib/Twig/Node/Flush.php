<?php

<<<<<<< HEAD
/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents a flush node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Flush extends Twig_Node
{
    public function __construct($lineno, $tag)
    {
        parent::__construct(array(), array(), $lineno, $tag);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write("flush();\n")
        ;
=======
use Twig\Node\FlushNode;

class_exists('Twig\Node\FlushNode');

if (\false) {
    class Twig_Node_Flush extends FlushNode
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
