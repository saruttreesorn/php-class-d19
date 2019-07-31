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
class CustomExtensionTest extends PHPUnit_Framework_TestCase
=======
use Twig\Environment;
use Twig\Extension\ExtensionInterface;

class CustomExtensionTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    /**
     * @requires PHP 5.3
     * @dataProvider provideInvalidExtensions
     */
<<<<<<< HEAD
    public function testGetInvalidOperators(Twig_ExtensionInterface $extension, $expectedExceptionMessage)
    {
        $this->setExpectedException('InvalidArgumentException', $expectedExceptionMessage);

        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
=======
    public function testGetInvalidOperators(ExtensionInterface $extension, $expectedExceptionMessage)
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException('InvalidArgumentException');
            $this->expectExceptionMessage($expectedExceptionMessage);
        } else {
            $this->setExpectedException('InvalidArgumentException', $expectedExceptionMessage);
        }

        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $env->addExtension($extension);
        $env->getUnaryOperators();
    }

    public function provideInvalidExtensions()
    {
<<<<<<< HEAD
        return array(
            array(new InvalidOperatorExtension(new stdClass()), '"InvalidOperatorExtension::getOperators()" must return an array with operators, got "stdClass".'),
            array(new InvalidOperatorExtension(array(1, 2, 3)), '"InvalidOperatorExtension::getOperators()" must return an array of 2 elements, got 3.'),
        );
    }
}

class InvalidOperatorExtension implements Twig_ExtensionInterface
=======
        return [
            [new InvalidOperatorExtension(new \stdClass()), '"InvalidOperatorExtension::getOperators()" must return an array with operators, got "stdClass".'],
            [new InvalidOperatorExtension([1, 2, 3]), '"InvalidOperatorExtension::getOperators()" must return an array of 2 elements, got 3.'],
        ];
    }
}

class InvalidOperatorExtension implements ExtensionInterface
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    private $operators;

    public function __construct($operators)
    {
        $this->operators = $operators;
    }

<<<<<<< HEAD
    public function initRuntime(Twig_Environment $environment)
=======
    public function initRuntime(Environment $environment)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
    }

    public function getTokenParsers()
    {
<<<<<<< HEAD
        return array();
=======
        return [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getNodeVisitors()
    {
<<<<<<< HEAD
        return array();
=======
        return [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getFilters()
    {
<<<<<<< HEAD
        return array();
=======
        return [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getTests()
    {
<<<<<<< HEAD
        return array();
=======
        return [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getFunctions()
    {
<<<<<<< HEAD
        return array();
=======
        return [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getGlobals()
    {
<<<<<<< HEAD
        return array();
=======
        return [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getOperators()
    {
        return $this->operators;
    }

    public function getName()
    {
        return __CLASS__;
    }
}
