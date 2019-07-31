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
@trigger_error('The Twig_Test_Function class is deprecated since version 1.12 and will be removed in 2.0. Use Twig_SimpleTest instead.', E_USER_DEPRECATED);
=======
@trigger_error('The Twig_Test_Function class is deprecated since version 1.12 and will be removed in 2.0. Use \Twig\TwigTest instead.', E_USER_DEPRECATED);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

/**
 * Represents a function template test.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
class Twig_Test_Function extends Twig_Test
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
