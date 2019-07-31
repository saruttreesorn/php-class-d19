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
@trigger_error('The Twig_Test_Method class is deprecated since version 1.12 and will be removed in 2.0. Use Twig_SimpleTest instead.', E_USER_DEPRECATED);
=======
use Twig\Extension\ExtensionInterface;

@trigger_error('The Twig_Test_Method class is deprecated since version 1.12 and will be removed in 2.0. Use \Twig\TwigTest instead.', E_USER_DEPRECATED);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

/**
 * Represents a method template test.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
class Twig_Test_Method extends Twig_Test
{
    protected $extension;
    protected $method;

<<<<<<< HEAD
    public function __construct(Twig_ExtensionInterface $extension, $method, array $options = array())
    {
        $options['callable'] = array($extension, $method);
=======
    public function __construct(ExtensionInterface $extension, $method, array $options = [])
    {
        $options['callable'] = [$extension, $method];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        parent::__construct($options);

        $this->extension = $extension;
        $this->method = $method;
    }

    public function compile()
    {
<<<<<<< HEAD
        return sprintf('$this->env->getExtension(\'%s\')->%s', get_class($this->extension), $this->method);
=======
        return sprintf('$this->env->getExtension(\'%s\')->%s', \get_class($this->extension), $this->method);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
