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
 * Checks if a number is odd.
 *
 * <pre>
 *  {{ var is odd }}
 * </pre>
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Expression_Test_Odd extends Twig_Node_Expression_Test
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('node'))
            ->raw(' % 2 == 1')
            ->raw(')')
        ;
=======
use Twig\Node\Expression\Test\OddTest;

class_exists('Twig\Node\Expression\Test\OddTest');

if (\false) {
    class Twig_Node_Expression_Test_Odd extends OddTest
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
