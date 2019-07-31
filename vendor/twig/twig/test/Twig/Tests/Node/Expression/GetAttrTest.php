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
class Twig_Tests_Node_Expression_GetAttrTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $expr = new Twig_Node_Expression_Name('foo', 1);
        $attr = new Twig_Node_Expression_Constant('bar', 1);
        $args = new Twig_Node_Expression_Array(array(), 1);
        $args->addElement(new Twig_Node_Expression_Name('foo', 1));
        $args->addElement(new Twig_Node_Expression_Constant('bar', 1));
        $node = new Twig_Node_Expression_GetAttr($expr, $attr, $args, Twig_Template::ARRAY_CALL, 1);
=======
use Twig\Node\Expression\ArrayExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\GetAttrExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Template;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_Expression_GetAttrTest extends NodeTestCase
{
    public function testConstructor()
    {
        $expr = new NameExpression('foo', 1);
        $attr = new ConstantExpression('bar', 1);
        $args = new ArrayExpression([], 1);
        $args->addElement(new NameExpression('foo', 1));
        $args->addElement(new ConstantExpression('bar', 1));
        $node = new GetAttrExpression($expr, $attr, $args, Template::ARRAY_CALL, 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($expr, $node->getNode('node'));
        $this->assertEquals($attr, $node->getNode('attribute'));
        $this->assertEquals($args, $node->getNode('arguments'));
<<<<<<< HEAD
        $this->assertEquals(Twig_Template::ARRAY_CALL, $node->getAttribute('type'));
=======
        $this->assertEquals(Template::ARRAY_CALL, $node->getAttribute('type'));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getTests()
    {
<<<<<<< HEAD
        $tests = array();

        $expr = new Twig_Node_Expression_Name('foo', 1);
        $attr = new Twig_Node_Expression_Constant('bar', 1);
        $args = new Twig_Node_Expression_Array(array(), 1);
        $node = new Twig_Node_Expression_GetAttr($expr, $attr, $args, Twig_Template::ANY_CALL, 1);
        $tests[] = array($node, sprintf('%s%s, "bar", array())', $this->getAttributeGetter(), $this->getVariableGetter('foo', 1)));

        $node = new Twig_Node_Expression_GetAttr($expr, $attr, $args, Twig_Template::ARRAY_CALL, 1);
        $tests[] = array($node, sprintf('%s%s, "bar", array(), "array")', $this->getAttributeGetter(), $this->getVariableGetter('foo', 1)));

        $args = new Twig_Node_Expression_Array(array(), 1);
        $args->addElement(new Twig_Node_Expression_Name('foo', 1));
        $args->addElement(new Twig_Node_Expression_Constant('bar', 1));
        $node = new Twig_Node_Expression_GetAttr($expr, $attr, $args, Twig_Template::METHOD_CALL, 1);
        $tests[] = array($node, sprintf('%s%s, "bar", array(0 => %s, 1 => "bar"), "method")', $this->getAttributeGetter(), $this->getVariableGetter('foo', 1), $this->getVariableGetter('foo')));
=======
        $tests = [];

        $expr = new NameExpression('foo', 1);
        $attr = new ConstantExpression('bar', 1);
        $args = new ArrayExpression([], 1);
        $node = new GetAttrExpression($expr, $attr, $args, Template::ANY_CALL, 1);
        $tests[] = [$node, sprintf('%s%s, "bar", [])', $this->getAttributeGetter(), $this->getVariableGetter('foo', 1))];

        $node = new GetAttrExpression($expr, $attr, $args, Template::ARRAY_CALL, 1);
        $tests[] = [$node, sprintf('%s%s, "bar", [], "array")', $this->getAttributeGetter(), $this->getVariableGetter('foo', 1))];

        $args = new ArrayExpression([], 1);
        $args->addElement(new NameExpression('foo', 1));
        $args->addElement(new ConstantExpression('bar', 1));
        $node = new GetAttrExpression($expr, $attr, $args, Template::METHOD_CALL, 1);
        $tests[] = [$node, sprintf('%s%s, "bar", [0 => %s, 1 => "bar"], "method")', $this->getAttributeGetter(), $this->getVariableGetter('foo', 1), $this->getVariableGetter('foo'))];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
