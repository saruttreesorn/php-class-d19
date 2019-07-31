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
class Twig_Node_Expression_Unary_Not extends Twig_Node_Expression_Unary
{
    public function operator(Twig_Compiler $compiler)
    {
        $compiler->raw('!');
=======
use Twig\Node\Expression\Unary\NotUnary;

class_exists('Twig\Node\Expression\Unary\NotUnary');

if (\false) {
    class Twig_Node_Expression_Unary_Not extends NotUnary
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
