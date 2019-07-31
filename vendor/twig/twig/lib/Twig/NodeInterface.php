<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
=======
use Twig\Compiler;

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
/**
 * Represents a node in the AST.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 3.0)
 */
<<<<<<< HEAD
interface Twig_NodeInterface extends Countable, IteratorAggregate
=======
interface Twig_NodeInterface extends \Countable, \IteratorAggregate
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    /**
     * Compiles the node to PHP.
     */
<<<<<<< HEAD
    public function compile(Twig_Compiler $compiler);
=======
    public function compile(Compiler $compiler);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    /**
     * @deprecated since 1.27 (to be removed in 2.0)
     */
    public function getLine();

    public function getNodeTag();
}
