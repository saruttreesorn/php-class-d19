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
@trigger_error('The Twig_Loader_String class is deprecated since version 1.18.1 and will be removed in 2.0. Use Twig_Loader_Array instead or Twig_Environment::createTemplate().', E_USER_DEPRECATED);
=======
use Twig\Loader\ExistsLoaderInterface;
use Twig\Loader\LoaderInterface;
use Twig\Loader\SourceContextLoaderInterface;
use Twig\Source;

@trigger_error('The Twig_Loader_String class is deprecated since version 1.18.1 and will be removed in 2.0. Use "Twig\Loader\ArrayLoader" instead or "Twig\Environment::createTemplate()".', E_USER_DEPRECATED);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

/**
 * Loads a template from a string.
 *
 * This loader should NEVER be used. It only exists for Twig internal purposes.
 *
 * When using this loader with a cache mechanism, you should know that a new cache
 * key is generated each time a template content "changes" (the cache key being the
 * source code of the template). If you don't want to see your cache grows out of
 * control, you need to take care of clearing the old cache file by yourself.
 *
 * @deprecated since 1.18.1 (to be removed in 2.0)
 *
 * @internal
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
<<<<<<< HEAD
class Twig_Loader_String implements Twig_LoaderInterface, Twig_ExistsLoaderInterface, Twig_SourceContextLoaderInterface
{
    public function getSource($name)
    {
        @trigger_error(sprintf('Calling "getSource" on "%s" is deprecated since 1.27. Use getSourceContext() instead.', get_class($this)), E_USER_DEPRECATED);
=======
class Twig_Loader_String implements LoaderInterface, ExistsLoaderInterface, SourceContextLoaderInterface
{
    public function getSource($name)
    {
        @trigger_error(sprintf('Calling "getSource" on "%s" is deprecated since 1.27. Use getSourceContext() instead.', \get_class($this)), E_USER_DEPRECATED);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $name;
    }

    public function getSourceContext($name)
    {
<<<<<<< HEAD
        return new Twig_Source($name, $name);
=======
        return new Source($name, $name);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function exists($name)
    {
        return true;
    }

    public function getCacheKey($name)
    {
        return $name;
    }

    public function isFresh($name, $time)
    {
        return true;
    }
}
