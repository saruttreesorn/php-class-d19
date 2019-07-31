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
class Twig_Node_Expression_Binary_NotIn extends Twig_Node_Expression_Binary
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('!twig_in_filter(')
            ->subcompile($this->getNode('left'))
            ->raw(', ')
            ->subcompile($this->getNode('right'))
            ->raw(')')
        ;
    }

    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('not in');
=======
use Twig\Node\Expression\Binary\NotInBinary;

class_exists('Twig\Node\Expression\Binary\NotInBinary');

if (\false) {
    class Twig_Node_Expression_Binary_NotIn extends NotInBinary
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
