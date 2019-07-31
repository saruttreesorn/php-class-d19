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
class Twig_Node_Expression_Binary_StartsWith extends Twig_Node_Expression_Binary
{
    public function compile(Twig_Compiler $compiler)
    {
        $left = $compiler->getVarName();
        $right = $compiler->getVarName();
        $compiler
            ->raw(sprintf('(is_string($%s = ', $left))
            ->subcompile($this->getNode('left'))
            ->raw(sprintf(') && is_string($%s = ', $right))
            ->subcompile($this->getNode('right'))
            ->raw(sprintf(') && (\'\' === $%2$s || 0 === strpos($%1$s, $%2$s)))', $left, $right))
        ;
    }

    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('');
=======
use Twig\Node\Expression\Binary\StartsWithBinary;

class_exists('Twig\Node\Expression\Binary\StartsWithBinary');

if (\false) {
    class Twig_Node_Expression_Binary_StartsWith extends StartsWithBinary
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
