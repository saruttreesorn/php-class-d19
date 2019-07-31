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
 * Checks if a variable is the same as another one (=== in PHP).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Expression_Test_Sameas extends Twig_Node_Expression_Test
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('node'))
            ->raw(' === ')
            ->subcompile($this->getNode('arguments')->getNode(0))
            ->raw(')')
        ;
=======
use Twig\Node\Expression\Test\SameasTest;

class_exists('Twig\Node\Expression\Test\SameasTest');

if (\false) {
    class Twig_Node_Expression_Test_Sameas extends SameasTest
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
