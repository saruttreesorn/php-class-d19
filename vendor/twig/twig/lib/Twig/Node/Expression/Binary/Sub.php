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
class Twig_Node_Expression_Binary_Sub extends Twig_Node_Expression_Binary
{
    public function operator(Twig_Compiler $compiler)
    {
        return $compiler->raw('-');
=======
use Twig\Node\Expression\Binary\SubBinary;

class_exists('Twig\Node\Expression\Binary\SubBinary');

if (\false) {
    class Twig_Node_Expression_Binary_Sub extends SubBinary
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
