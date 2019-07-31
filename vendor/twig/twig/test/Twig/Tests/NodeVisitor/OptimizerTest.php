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
class Twig_Tests_NodeVisitor_OptimizerTest extends PHPUnit_Framework_TestCase
{
    public function testRenderBlockOptimizer()
    {
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));

        $stream = $env->parse($env->tokenize(new Twig_Source('{{ block("foo") }}', 'index')));

        $node = $stream->getNode('body')->getNode(0);

        $this->assertEquals('Twig_Node_Expression_BlockReference', get_class($node));
=======

use Twig\Environment;
use Twig\Node\ForNode;
use Twig\Source;

class Twig_Tests_NodeVisitor_OptimizerTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderBlockOptimizer()
    {
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);

        $stream = $env->parse($env->tokenize(new Source('{{ block("foo") }}', 'index')));

        $node = $stream->getNode('body')->getNode(0);

        $this->assertInstanceOf('\Twig\Node\Expression\BlockReferenceExpression', $node);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertTrue($node->getAttribute('output'));
    }

    public function testRenderParentBlockOptimizer()
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));

        $stream = $env->parse($env->tokenize(new Twig_Source('{% extends "foo" %}{% block content %}{{ parent() }}{% endblock %}', 'index')));

        $node = $stream->getNode('blocks')->getNode('content')->getNode(0)->getNode('body');

        $this->assertEquals('Twig_Node_Expression_Parent', get_class($node));
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);

        $stream = $env->parse($env->tokenize(new Source('{% extends "foo" %}{% block content %}{{ parent() }}{% endblock %}', 'index')));

        $node = $stream->getNode('blocks')->getNode('content')->getNode(0)->getNode('body');

        $this->assertInstanceOf('\Twig\Node\Expression\ParentExpression', $node);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertTrue($node->getAttribute('output'));
    }

    public function testRenderVariableBlockOptimizer()
    {
        if (PHP_VERSION_ID >= 50400) {
<<<<<<< HEAD
            return;
        }

        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false, 'autoescape' => false));
        $stream = $env->parse($env->tokenize(new Twig_Source('{{ block(name|lower) }}', 'index')));

        $node = $stream->getNode('body')->getNode(0)->getNode(1);

        $this->assertEquals('Twig_Node_Expression_BlockReference', get_class($node));
=======
            $this->markTestSkipped('not needed on PHP >= 5.4');
        }

        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false, 'autoescape' => false]);
        $stream = $env->parse($env->tokenize(new Source('{{ block(name|lower) }}', 'index')));

        $node = $stream->getNode('body')->getNode(0)->getNode(1);

        $this->assertInstanceOf('\Twig\Node\Expression\BlockReferenceExpression', $node);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertTrue($node->getAttribute('output'));
    }

    /**
     * @dataProvider getTestsForForOptimizer
     */
    public function testForOptimizer($template, $expected)
    {
<<<<<<< HEAD
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('cache' => false));

        $stream = $env->parse($env->tokenize(new Twig_Source($template, 'index')));
=======
        $env = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['cache' => false]);

        $stream = $env->parse($env->tokenize(new Source($template, 'index')));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        foreach ($expected as $target => $withLoop) {
            $this->assertTrue($this->checkForConfiguration($stream, $target, $withLoop), sprintf('variable %s is %soptimized', $target, $withLoop ? 'not ' : ''));
        }
    }

    public function getTestsForForOptimizer()
    {
<<<<<<< HEAD
        return array(
            array('{% for i in foo %}{% endfor %}', array('i' => false)),

            array('{% for i in foo %}{{ loop.index }}{% endfor %}', array('i' => true)),

            array('{% for i in foo %}{% for j in foo %}{% endfor %}{% endfor %}', array('i' => false, 'j' => false)),

            array('{% for i in foo %}{% include "foo" %}{% endfor %}', array('i' => true)),

            array('{% for i in foo %}{% include "foo" only %}{% endfor %}', array('i' => false)),

            array('{% for i in foo %}{% include "foo" with { "foo": "bar" } only %}{% endfor %}', array('i' => false)),

            array('{% for i in foo %}{% include "foo" with { "foo": loop.index } only %}{% endfor %}', array('i' => true)),

            array('{% for i in foo %}{% for j in foo %}{{ loop.index }}{% endfor %}{% endfor %}', array('i' => false, 'j' => true)),

            array('{% for i in foo %}{% for j in foo %}{{ loop.parent.loop.index }}{% endfor %}{% endfor %}', array('i' => true, 'j' => true)),

            array('{% for i in foo %}{% set l = loop %}{% for j in foo %}{{ l.index }}{% endfor %}{% endfor %}', array('i' => true, 'j' => false)),

            array('{% for i in foo %}{% for j in foo %}{{ foo.parent.loop.index }}{% endfor %}{% endfor %}', array('i' => false, 'j' => false)),

            array('{% for i in foo %}{% for j in foo %}{{ loop["parent"].loop.index }}{% endfor %}{% endfor %}', array('i' => true, 'j' => true)),

            array('{% for i in foo %}{{ include("foo") }}{% endfor %}', array('i' => true)),

            array('{% for i in foo %}{{ include("foo", with_context = false) }}{% endfor %}', array('i' => false)),

            array('{% for i in foo %}{{ include("foo", with_context = true) }}{% endfor %}', array('i' => true)),

            array('{% for i in foo %}{{ include("foo", { "foo": "bar" }, with_context = false) }}{% endfor %}', array('i' => false)),

            array('{% for i in foo %}{{ include("foo", { "foo": loop.index }, with_context = false) }}{% endfor %}', array('i' => true)),
        );
=======
        return [
            ['{% for i in foo %}{% endfor %}', ['i' => false]],

            ['{% for i in foo %}{{ loop.index }}{% endfor %}', ['i' => true]],

            ['{% for i in foo %}{% for j in foo %}{% endfor %}{% endfor %}', ['i' => false, 'j' => false]],

            ['{% for i in foo %}{% include "foo" %}{% endfor %}', ['i' => true]],

            ['{% for i in foo %}{% include "foo" only %}{% endfor %}', ['i' => false]],

            ['{% for i in foo %}{% include "foo" with { "foo": "bar" } only %}{% endfor %}', ['i' => false]],

            ['{% for i in foo %}{% include "foo" with { "foo": loop.index } only %}{% endfor %}', ['i' => true]],

            ['{% for i in foo %}{% for j in foo %}{{ loop.index }}{% endfor %}{% endfor %}', ['i' => false, 'j' => true]],

            ['{% for i in foo %}{% for j in foo %}{{ loop.parent.loop.index }}{% endfor %}{% endfor %}', ['i' => true, 'j' => true]],

            ['{% for i in foo %}{% set l = loop %}{% for j in foo %}{{ l.index }}{% endfor %}{% endfor %}', ['i' => true, 'j' => false]],

            ['{% for i in foo %}{% for j in foo %}{{ foo.parent.loop.index }}{% endfor %}{% endfor %}', ['i' => false, 'j' => false]],

            ['{% for i in foo %}{% for j in foo %}{{ loop["parent"].loop.index }}{% endfor %}{% endfor %}', ['i' => true, 'j' => true]],

            ['{% for i in foo %}{{ include("foo") }}{% endfor %}', ['i' => true]],

            ['{% for i in foo %}{{ include("foo", with_context = false) }}{% endfor %}', ['i' => false]],

            ['{% for i in foo %}{{ include("foo", with_context = true) }}{% endfor %}', ['i' => true]],

            ['{% for i in foo %}{{ include("foo", { "foo": "bar" }, with_context = false) }}{% endfor %}', ['i' => false]],

            ['{% for i in foo %}{{ include("foo", { "foo": loop.index }, with_context = false) }}{% endfor %}', ['i' => true]],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function checkForConfiguration(Twig_NodeInterface $node = null, $target, $withLoop)
    {
        if (null === $node) {
            return;
        }

        foreach ($node as $n) {
<<<<<<< HEAD
            if ($n instanceof Twig_Node_For) {
=======
            if ($n instanceof ForNode) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
                if ($target === $n->getNode('value_target')->getAttribute('name')) {
                    return $withLoop == $n->getAttribute('with_loop');
                }
            }

            $ret = $this->checkForConfiguration($n, $target, $withLoop);
            if (null !== $ret) {
                return $ret;
            }
        }
    }
}
