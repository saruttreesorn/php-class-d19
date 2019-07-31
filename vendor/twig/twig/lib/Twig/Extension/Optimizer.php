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
 * @final
 */
class Twig_Extension_Optimizer extends Twig_Extension
{
    protected $optimizers;

    public function __construct($optimizers = -1)
    {
        $this->optimizers = $optimizers;
    }

    public function getNodeVisitors()
    {
        return array(new Twig_NodeVisitor_Optimizer($this->optimizers));
    }

    public function getName()
    {
        return 'optimizer';
=======
use Twig\Extension\OptimizerExtension;

class_exists('Twig\Extension\OptimizerExtension');

if (\false) {
    class Twig_Extension_Optimizer extends OptimizerExtension
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
