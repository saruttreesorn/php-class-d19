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
class Twig_Tests_TemplateWrapperTest extends PHPUnit_Framework_TestCase
{
    public function testHasGetBlocks()
    {
        $twig = new Twig_Environment(new Twig_Loader_Array(array(
=======

use Twig\Environment;
use Twig\Loader\ArrayLoader;

class Twig_Tests_TemplateWrapperTest extends \PHPUnit\Framework\TestCase
{
    public function testHasGetBlocks()
    {
        $twig = new Environment(new ArrayLoader([
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            'index' => '{% block foo %}{% endblock %}',
            'index_with_use' => '{% use "imported" %}{% block foo %}{% endblock %}',
            'index_with_extends' => '{% extends "extended" %}{% block foo %}{% endblock %}',
            'imported' => '{% block imported %}{% endblock %}',
            'extended' => '{% block extended %}{% endblock %}',
<<<<<<< HEAD
        )));

        $wrapper = new Twig_TemplateWrapper($twig, $twig->loadTemplate('index'));
        $this->assertTrue($wrapper->hasBlock('foo'));
        $this->assertFalse($wrapper->hasBlock('bar'));
        $this->assertEquals(array('foo'), $wrapper->getBlockNames());

        $wrapper = new Twig_TemplateWrapper($twig, $twig->loadTemplate('index_with_use'));
        $this->assertTrue($wrapper->hasBlock('foo'));
        $this->assertTrue($wrapper->hasBlock('imported'));
        $this->assertEquals(array('imported', 'foo'), $wrapper->getBlockNames());

        $wrapper = new Twig_TemplateWrapper($twig, $twig->loadTemplate('index_with_extends'));
        $this->assertTrue($wrapper->hasBlock('foo'));
        $this->assertTrue($wrapper->hasBlock('extended'));
        $this->assertEquals(array('foo', 'extended'), $wrapper->getBlockNames());
=======
        ]));

        $wrapper = $twig->load('index');
        $this->assertTrue($wrapper->hasBlock('foo'));
        $this->assertFalse($wrapper->hasBlock('bar'));
        $this->assertEquals(['foo'], $wrapper->getBlockNames());

        $wrapper = $twig->load('index_with_use');
        $this->assertTrue($wrapper->hasBlock('foo'));
        $this->assertTrue($wrapper->hasBlock('imported'));
        $this->assertEquals(['imported', 'foo'], $wrapper->getBlockNames());

        $wrapper = $twig->load('index_with_extends');
        $this->assertTrue($wrapper->hasBlock('foo'));
        $this->assertTrue($wrapper->hasBlock('extended'));
        $this->assertEquals(['foo', 'extended'], $wrapper->getBlockNames());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testRenderBlock()
    {
<<<<<<< HEAD
        $twig = new Twig_Environment(new Twig_Loader_Array(array(
            'index' => '{% block foo %}{{ foo }}{{ bar }}{% endblock %}',
        )));
        $twig->addGlobal('bar', 'BAR');

        $wrapper = new Twig_TemplateWrapper($twig, $twig->loadTemplate('index'));
        $this->assertEquals('FOOBAR', $wrapper->renderBlock('foo', array('foo' => 'FOO')));
=======
        $twig = new Environment(new ArrayLoader([
            'index' => '{% block foo %}{{ foo }}{{ bar }}{% endblock %}',
        ]));
        $twig->addGlobal('bar', 'BAR');

        $wrapper = $twig->load('index');
        $this->assertEquals('FOOBAR', $wrapper->renderBlock('foo', ['foo' => 'FOO']));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testDisplayBlock()
    {
<<<<<<< HEAD
        $twig = new Twig_Environment(new Twig_Loader_Array(array(
            'index' => '{% block foo %}{{ foo }}{{ bar }}{% endblock %}',
        )));
        $twig->addGlobal('bar', 'BAR');

        $wrapper = new Twig_TemplateWrapper($twig, $twig->loadTemplate('index'));

        ob_start();
        $wrapper->displayBlock('foo', array('foo' => 'FOO'));
=======
        $twig = new Environment(new ArrayLoader([
            'index' => '{% block foo %}{{ foo }}{{ bar }}{% endblock %}',
        ]));
        $twig->addGlobal('bar', 'BAR');

        $wrapper = $twig->load('index');

        ob_start();
        $wrapper->displayBlock('foo', ['foo' => 'FOO']);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('FOOBAR', ob_get_clean());
    }
}
