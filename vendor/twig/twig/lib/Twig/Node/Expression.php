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

/**
 * Abstract class for all nodes that represents an expression.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Twig_Node_Expression extends Twig_Node
{
=======
use Twig\Node\Expression\AbstractExpression;

class_exists('Twig\Node\Expression\AbstractExpression');

if (\false) {
    class Twig_Node_Expression extends AbstractExpression
    {
    }
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
}
