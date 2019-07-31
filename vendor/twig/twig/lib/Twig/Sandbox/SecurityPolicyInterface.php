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
 * Interfaces that all security policy classes must implements.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_Sandbox_SecurityPolicyInterface
{
    public function checkSecurity($tags, $filters, $functions);

    public function checkMethodAllowed($obj, $method);

    public function checkPropertyAllowed($obj, $method);
=======
use Twig\Sandbox\SecurityPolicyInterface;

class_exists('Twig\Sandbox\SecurityPolicyInterface');

if (\false) {
    class Twig_Sandbox_SecurityPolicyInterface extends SecurityPolicyInterface
    {
    }
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
}
