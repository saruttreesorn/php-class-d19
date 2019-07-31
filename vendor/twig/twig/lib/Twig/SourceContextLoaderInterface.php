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
 * Adds a getSourceContext() method for loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.27 (to be removed in 3.0)
 */
interface Twig_SourceContextLoaderInterface
{
    /**
     * Returns the source context for a given template logical name.
     *
     * @param string $name The template logical name
     *
     * @return Twig_Source
     *
     * @throws Twig_Error_Loader When $name is not found
     */
    public function getSourceContext($name);
=======
use Twig\Loader\SourceContextLoaderInterface;

class_exists('Twig\Loader\SourceContextLoaderInterface');

if (\false) {
    class Twig_SourceContextLoaderInterface extends SourceContextLoaderInterface
    {
    }
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
}
