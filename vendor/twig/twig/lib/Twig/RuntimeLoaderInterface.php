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
 * Creates runtime implementations for Twig elements (filters/functions/tests).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_RuntimeLoaderInterface
{
    /**
     * Creates the runtime implementation of a Twig element (filter/function/test).
     *
     * @param string $class A runtime class
     *
     * @return object|null The runtime instance or null if the loader does not know how to create the runtime for this class
     */
    public function load($class);
=======
use Twig\RuntimeLoader\RuntimeLoaderInterface;

class_exists('Twig\RuntimeLoader\RuntimeLoaderInterface');

if (\false) {
    class Twig_RuntimeLoaderInterface extends RuntimeLoaderInterface
    {
    }
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
}
