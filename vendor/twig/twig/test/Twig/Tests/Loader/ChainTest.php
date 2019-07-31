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
class Twig_Tests_Loader_ChainTest extends PHPUnit_Framework_TestCase
=======
use Twig\Loader\ArrayLoader;
use Twig\Loader\ChainLoader;
use Twig\Loader\ExistsLoaderInterface;
use Twig\Loader\FilesystemLoader;
use Twig\Loader\LoaderInterface;
use Twig\Loader\SourceContextLoaderInterface;
use Twig\Source;

class Twig_Tests_Loader_ChainTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    /**
     * @group legacy
     */
    public function testGetSource()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Chain(array(
            new Twig_Loader_Array(array('foo' => 'bar')),
            new Twig_Loader_Array(array('foo' => 'foobar', 'bar' => 'foo')),
        ));
=======
        $loader = new ChainLoader([
            new ArrayLoader(['foo' => 'bar']),
            new ArrayLoader(['foo' => 'foobar', 'bar' => 'foo']),
        ]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('bar', $loader->getSource('foo'));
        $this->assertEquals('foo', $loader->getSource('bar'));
    }

    public function testGetSourceContext()
    {
<<<<<<< HEAD
        $path = dirname(__FILE__).'/../Fixtures';
        $loader = new Twig_Loader_Chain(array(
            new Twig_Loader_Array(array('foo' => 'bar')),
            new Twig_Loader_Array(array('errors/index.html' => 'baz')),
            new Twig_Loader_Filesystem(array($path)),
        ));
=======
        $path = __DIR__.'/../Fixtures';
        $loader = new ChainLoader([
            new ArrayLoader(['foo' => 'bar']),
            new ArrayLoader(['errors/index.html' => 'baz']),
            new FilesystemLoader([$path]),
        ]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('foo', $loader->getSourceContext('foo')->getName());
        $this->assertSame('', $loader->getSourceContext('foo')->getPath());

        $this->assertEquals('errors/index.html', $loader->getSourceContext('errors/index.html')->getName());
        $this->assertSame('', $loader->getSourceContext('errors/index.html')->getPath());
        $this->assertEquals('baz', $loader->getSourceContext('errors/index.html')->getCode());

        $this->assertEquals('errors/base.html', $loader->getSourceContext('errors/base.html')->getName());
        $this->assertEquals(realpath($path.'/errors/base.html'), realpath($loader->getSourceContext('errors/base.html')->getPath()));
        $this->assertNotEquals('baz', $loader->getSourceContext('errors/base.html')->getCode());
    }

    /**
<<<<<<< HEAD
     * @expectedException Twig_Error_Loader
     */
    public function testGetSourceContextWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Chain(array());
=======
     * @expectedException \Twig\Error\LoaderError
     */
    public function testGetSourceContextWhenTemplateDoesNotExist()
    {
        $loader = new ChainLoader([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $loader->getSourceContext('foo');
    }

    /**
     * @group legacy
<<<<<<< HEAD
     * @expectedException Twig_Error_Loader
     */
    public function testGetSourceWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Chain(array());
=======
     * @expectedException \Twig\Error\LoaderError
     */
    public function testGetSourceWhenTemplateDoesNotExist()
    {
        $loader = new ChainLoader([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $loader->getSource('foo');
    }

    public function testGetCacheKey()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Chain(array(
            new Twig_Loader_Array(array('foo' => 'bar')),
            new Twig_Loader_Array(array('foo' => 'foobar', 'bar' => 'foo')),
        ));

        $this->assertEquals('bar', $loader->getCacheKey('foo'));
        $this->assertEquals('foo', $loader->getCacheKey('bar'));
    }

    /**
     * @expectedException Twig_Error_Loader
     */
    public function testGetCacheKeyWhenTemplateDoesNotExist()
    {
        $loader = new Twig_Loader_Chain(array());
=======
        $loader = new ChainLoader([
            new ArrayLoader(['foo' => 'bar']),
            new ArrayLoader(['foo' => 'foobar', 'bar' => 'foo']),
        ]);

        $this->assertEquals('foo:bar', $loader->getCacheKey('foo'));
        $this->assertEquals('bar:foo', $loader->getCacheKey('bar'));
    }

    /**
     * @expectedException \Twig\Error\LoaderError
     */
    public function testGetCacheKeyWhenTemplateDoesNotExist()
    {
        $loader = new ChainLoader([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $loader->getCacheKey('foo');
    }

    public function testAddLoader()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Chain();
        $loader->addLoader(new Twig_Loader_Array(array('foo' => 'bar')));
=======
        $loader = new ChainLoader();
        $loader->addLoader(new ArrayLoader(['foo' => 'bar']));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('bar', $loader->getSourceContext('foo')->getCode());
    }

    public function testExists()
    {
        $loader1 = $this->getMockBuilder('Twig_ChainTestLoaderWithExistsInterface')->getMock();
<<<<<<< HEAD
        $loader1->expects($this->once())->method('exists')->will($this->returnValue(false));
=======
        $loader1->expects($this->once())->method('exists')->willReturn(false);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $loader1->expects($this->never())->method('getSourceContext');

        // can be removed in 2.0
        $loader2 = $this->getMockBuilder('Twig_ChainTestLoaderInterface')->getMock();
<<<<<<< HEAD
        //$loader2 = $this->getMockBuilder(array('Twig_LoaderInterface', 'Twig_SourceContextLoaderInterface'))->getMock();
        $loader2->expects($this->once())->method('getSourceContext')->will($this->returnValue(new Twig_Source('content', 'index')));

        $loader = new Twig_Loader_Chain();
=======
        //$loader2 = $this->getMockBuilder(['\Twig\Loader\LoaderInterface', '\Twig\Loader\SourceContextLoaderInterface'])->getMock();
        $loader2->expects($this->once())->method('getSourceContext')->willReturn(new Source('content', 'index'));

        $loader = new ChainLoader();
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $loader->addLoader($loader1);
        $loader->addLoader($loader2);

        $this->assertTrue($loader->exists('foo'));
    }
}

<<<<<<< HEAD
interface Twig_ChainTestLoaderInterface extends Twig_LoaderInterface, Twig_SourceContextLoaderInterface
{
}

interface Twig_ChainTestLoaderWithExistsInterface extends Twig_LoaderInterface, Twig_ExistsLoaderInterface, Twig_SourceContextLoaderInterface
=======
interface Twig_ChainTestLoaderInterface extends LoaderInterface, SourceContextLoaderInterface
{
}

interface Twig_ChainTestLoaderWithExistsInterface extends LoaderInterface, ExistsLoaderInterface, SourceContextLoaderInterface
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
}
