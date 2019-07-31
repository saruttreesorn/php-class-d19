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
class Twig_Tests_Loader_ArrayTest extends PHPUnit_Framework_TestCase
=======
use Twig\Loader\ArrayLoader;

class Twig_Tests_Loader_ArrayTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    /**
     * @group legacy
     */
    public function testGetSource()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Array(array('foo' => 'bar'));
=======
        $loader = new ArrayLoader(['foo' => 'bar']);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('bar', $loader->getSource('foo'));
    }

    /**
     * @group legacy
<<<<<<< HEAD
     * @expectedException Twig_Error_Loader
     */
    public function testGetSourceWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Array(array());
=======
     * @expectedException \Twig\Error\LoaderError
     */
    public function testGetSourceWhenTemplateDoesNotExist()
    {
        $loader = new ArrayLoader([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $loader->getSource('foo');
    }

    /**
<<<<<<< HEAD
     * @expectedException Twig_Error_Loader
     */
    public function testGetSourceContextWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Array(array());
=======
     * @expectedException \Twig\Error\LoaderError
     */
    public function testGetSourceContextWhenTemplateDoesNotExist()
    {
        $loader = new ArrayLoader([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $loader->getSourceContext('foo');
    }

    public function testGetCacheKey()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Array(array('foo' => 'bar'));

        $this->assertEquals('bar', $loader->getCacheKey('foo'));
    }

    /**
     * @expectedException Twig_Error_Loader
     */
    public function testGetCacheKeyWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Array(array());
=======
        $loader = new ArrayLoader(['foo' => 'bar']);

        $this->assertEquals('foo:bar', $loader->getCacheKey('foo'));
    }

    public function testGetCacheKeyWhenTemplateHasDuplicateContent()
    {
        $loader = new ArrayLoader([
            'foo' => 'bar',
            'baz' => 'bar',
        ]);

        $this->assertEquals('foo:bar', $loader->getCacheKey('foo'));
        $this->assertEquals('baz:bar', $loader->getCacheKey('baz'));
    }

    public function testGetCacheKeyIsProtectedFromEdgeCollisions()
    {
        $loader = new ArrayLoader([
            'foo__' => 'bar',
            'foo' => '__bar',
        ]);

        $this->assertEquals('foo__:bar', $loader->getCacheKey('foo__'));
        $this->assertEquals('foo:__bar', $loader->getCacheKey('foo'));
    }

    /**
     * @expectedException \Twig\Error\LoaderError
     */
    public function testGetCacheKeyWhenTemplateDoesNotExist()
    {
        $loader = new ArrayLoader([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $loader->getCacheKey('foo');
    }

    public function testSetTemplate()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Array(array());
=======
        $loader = new ArrayLoader([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $loader->setTemplate('foo', 'bar');

        $this->assertEquals('bar', $loader->getSourceContext('foo')->getCode());
    }

    public function testIsFresh()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Array(array('foo' => 'bar'));
=======
        $loader = new ArrayLoader(['foo' => 'bar']);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertTrue($loader->isFresh('foo', time()));
    }

    /**
<<<<<<< HEAD
     * @expectedException Twig_Error_Loader
     */
    public function testIsFreshWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Array(array());
=======
     * @expectedException \Twig\Error\LoaderError
     */
    public function testIsFreshWhenTemplateDoesNotExist()
    {
        $loader = new ArrayLoader([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $loader->isFresh('foo', time());
    }

    public function testTemplateReference()
    {
        $name = new Twig_Test_Loader_TemplateReference('foo');
<<<<<<< HEAD
        $loader = new Twig_Loader_Array(array('foo' => 'bar'));
=======
        $loader = new ArrayLoader(['foo' => 'bar']);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $loader->getCacheKey($name);
        $loader->getSourceContext($name);
        $loader->isFresh($name, time());
<<<<<<< HEAD
        $loader->setTemplate($name, 'foobar');
=======
        $loader->setTemplate($name, 'foo:bar');

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without crashing PHP
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}

class Twig_Test_Loader_TemplateReference
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}
