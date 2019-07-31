<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Arnaud Le Blanc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
@trigger_error('The Twig_Function_Function class is deprecated since version 1.12 and will be removed in 2.0. Use Twig_SimpleFunction instead.', E_USER_DEPRECATED);
=======
@trigger_error('The Twig_Function_Function class is deprecated since version 1.12 and will be removed in 2.0. Use \Twig\TwigFunction instead.', E_USER_DEPRECATED);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

/**
 * Represents a function template function.
 *
<<<<<<< HEAD
 * Use Twig_SimpleFunction instead.
=======
 * Use \Twig\TwigFunction instead.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
 *
 * @author Arnaud Le Blanc <arnaud.lb@gmail.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
class Twig_Function_Function extends Twig_Function
{
    protected $function;

<<<<<<< HEAD
    public function __construct($function, array $options = array())
=======
    public function __construct($function, array $options = [])
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        $options['callable'] = $function;

        parent::__construct($options);

        $this->function = $function;
    }

    public function compile()
    {
        return $this->function;
    }
}
