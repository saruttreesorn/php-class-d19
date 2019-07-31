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
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Twig_Util_TemplateDirIterator extends IteratorIterator
{
    public function current()
    {
        return file_get_contents(parent::current());
    }

    public function key()
    {
        return (string) parent::key();
=======
use Twig\Util\TemplateDirIterator;

class_exists('Twig\Util\TemplateDirIterator');

if (\false) {
    class Twig_Util_TemplateDirIterator extends TemplateDirIterator
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
