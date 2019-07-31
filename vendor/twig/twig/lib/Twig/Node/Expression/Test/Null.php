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
 * Checks that a variable is null.
 *
 * <pre>
 *  {{ var is none }}
 * </pre>
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Node_Expression_Test_Null extends Twig_Node_Expression_Test
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(null === ')
            ->subcompile($this->getNode('node'))
            ->raw(')')
        ;
=======
use Twig\Node\Expression\Test\NullTest;

class_exists('Twig\Node\Expression\Test\NullTest');

if (\false) {
    class Twig_Node_Expression_Test_Null extends NullTest
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
