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
@trigger_error('The Twig_Function_Node class is deprecated since version 1.12 and will be removed in 2.0. Use Twig_SimpleFunction instead.', E_USER_DEPRECATED);
=======
@trigger_error('The Twig_Function_Node class is deprecated since version 1.12 and will be removed in 2.0. Use \Twig\TwigFunction instead.', E_USER_DEPRECATED);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

/**
 * Represents a template function as a node.
 *
<<<<<<< HEAD
 * Use Twig_SimpleFunction instead.
=======
 * Use \Twig\TwigFunction instead.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
class Twig_Function_Node extends Twig_Function
{
    protected $class;

<<<<<<< HEAD
    public function __construct($class, array $options = array())
=======
    public function __construct($class, array $options = [])
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        parent::__construct($options);

        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function compile()
    {
    }
}
