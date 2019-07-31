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
use Twig\Node\Expression\AbstractExpression;

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
@trigger_error('The Twig_Node_Expression_ExtensionReference class is deprecated since version 1.23 and will be removed in 2.0.', E_USER_DEPRECATED);

/**
 * Represents an extension call node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.23 and will be removed in 2.0.
 */
<<<<<<< HEAD
class Twig_Node_Expression_ExtensionReference extends Twig_Node_Expression
{
    public function __construct($name, $lineno, $tag = null)
    {
        parent::__construct(array(), array('name' => $name), $lineno, $tag);
    }

    public function compile(Twig_Compiler $compiler)
=======
class Twig_Node_Expression_ExtensionReference extends AbstractExpression
{
    public function __construct($name, $lineno, $tag = null)
    {
        parent::__construct([], ['name' => $name], $lineno, $tag);
    }

    public function compile(Compiler $compiler)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        $compiler->raw(sprintf("\$this->env->getExtension('%s')", $this->getAttribute('name')));
    }
}
