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
 * Enables usage of the deprecated Twig_Extension::getGlobals() method.
 *
 * Explicitly implement this interface if you really need to implement the
 * deprecated getGlobals() method in your extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_Extension_GlobalsInterface
{
=======
use Twig\Extension\GlobalsInterface;

class_exists('Twig\Extension\GlobalsInterface');

if (\false) {
    class Twig_Extension_GlobalsInterface extends GlobalsInterface
    {
    }
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
}
