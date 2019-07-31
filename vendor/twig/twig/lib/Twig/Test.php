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
@trigger_error('The Twig_Test class is deprecated since version 1.12 and will be removed in 2.0. Use Twig_SimpleTest instead.', E_USER_DEPRECATED);
=======
@trigger_error('The Twig_Test class is deprecated since version 1.12 and will be removed in 2.0. Use \Twig\TwigTest instead.', E_USER_DEPRECATED);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

/**
 * Represents a template test.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
abstract class Twig_Test implements Twig_TestInterface, Twig_TestCallableInterface
{
    protected $options;
<<<<<<< HEAD
    protected $arguments = array();

    public function __construct(array $options = array())
    {
        $this->options = array_merge(array(
            'callable' => null,
        ), $options);
=======
    protected $arguments = [];

    public function __construct(array $options = [])
    {
        $this->options = array_merge([
            'callable' => null,
        ], $options);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getCallable()
    {
        return $this->options['callable'];
    }
}
