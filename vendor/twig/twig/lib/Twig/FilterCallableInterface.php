<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents a callable template filter.
 *
<<<<<<< HEAD
 * Use Twig_SimpleFilter instead.
=======
 * Use \Twig\TwigFilter instead.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
interface Twig_FilterCallableInterface
{
    public function getCallable();
}
