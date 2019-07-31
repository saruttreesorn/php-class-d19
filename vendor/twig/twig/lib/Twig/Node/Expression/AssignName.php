<?php

<<<<<<< HEAD
/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Twig_Node_Expression_AssignName extends Twig_Node_Expression_Name
{
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('$context[')
            ->string($this->getAttribute('name'))
            ->raw(']')
        ;
=======
use Twig\Node\Expression\AssignNameExpression;

class_exists('Twig\Node\Expression\AssignNameExpression');

if (\false) {
    class Twig_Node_Expression_AssignName extends AssignNameExpression
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
