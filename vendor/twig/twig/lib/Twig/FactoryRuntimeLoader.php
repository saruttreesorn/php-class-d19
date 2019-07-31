<?php

<<<<<<< HEAD
/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Lazy loads the runtime implementations for a Twig element.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class Twig_FactoryRuntimeLoader implements Twig_RuntimeLoaderInterface
{
    private $map;

    /**
     * @param array $map An array where keys are class names and values factory callables
     */
    public function __construct($map = array())
    {
        $this->map = $map;
    }

    public function load($class)
    {
        if (isset($this->map[$class])) {
            $runtimeFactory = $this->map[$class];

            return $runtimeFactory();
        }
=======
use Twig\RuntimeLoader\FactoryRuntimeLoader;

class_exists('Twig\RuntimeLoader\FactoryRuntimeLoader');

if (\false) {
    class Twig_FactoryRuntimeLoader extends FactoryRuntimeLoader
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
