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
abstract class Twig_Node_Expression_Binary extends Twig_Node_Expression
{
    public function __construct(Twig_NodeInterface $left, Twig_NodeInterface $right, $lineno)
    {
        parent::__construct(array('left' => $left, 'right' => $right), array(), $lineno);
    }

    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('left'))
            ->raw(' ')
        ;
        $this->operator($compiler);
        $compiler
            ->raw(' ')
            ->subcompile($this->getNode('right'))
            ->raw(')')
        ;
    }

    abstract public function operator(Twig_Compiler $compiler);
=======
use Twig\Node\Expression\Binary\AbstractBinary;

class_exists('Twig\Node\Expression\Binary\AbstractBinary');

if (\false) {
    class Twig_Node_Expression_Binary extends AbstractBinary
    {
    }
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
}
