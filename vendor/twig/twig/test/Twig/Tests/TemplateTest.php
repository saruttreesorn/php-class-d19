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
class Twig_Tests_TemplateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException LogicException
     */
    public function testDisplayBlocksAcceptTemplateOnlyAsBlocks()
    {
        $template = $this->getMockForAbstractClass('Twig_Template', array(), '', false);
        $template->displayBlock('foo', array(), array('foo' => array(new stdClass(), 'foo')));
=======

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Loader\ArrayLoader;
use Twig\Loader\LoaderInterface;
use Twig\Loader\SourceContextLoaderInterface;
use Twig\Node\Expression\GetAttrExpression;
use Twig\NodeVisitor\NodeVisitorInterface;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityPolicy;
use Twig\Template;

class Twig_Tests_TemplateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException \LogicException
     */
    public function testDisplayBlocksAcceptTemplateOnlyAsBlocks()
    {
        $template = $this->getMockForAbstractClass('\Twig\Template', [], '', false);
        $template->displayBlock('foo', [], ['foo' => [new \stdClass(), 'foo']]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider getAttributeExceptions
     */
    public function testGetAttributeExceptions($template, $message)
    {
<<<<<<< HEAD
        $templates = array('index' => $template);
        $env = new Twig_Environment(new Twig_Loader_Array($templates), array('strict_variables' => true));
        $template = $env->loadTemplate('index');

        $context = array(
            'string' => 'foo',
            'null' => null,
            'empty_array' => array(),
            'array' => array('foo' => 'foo'),
            'array_access' => new Twig_TemplateArrayAccessObject(),
            'magic_exception' => new Twig_TemplateMagicPropertyObjectWithException(),
            'object' => new stdClass(),
        );
=======
        $templates = ['index' => $template];
        $env = new Environment(new ArrayLoader($templates), ['strict_variables' => true]);
        $template = $env->load('index');

        $context = [
            'string' => 'foo',
            'null' => null,
            'empty_array' => [],
            'array' => ['foo' => 'foo'],
            'array_access' => new Twig_TemplateArrayAccessObject(),
            'magic_exception' => new Twig_TemplateMagicPropertyObjectWithException(),
            'object' => new \stdClass(),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        try {
            $template->render($context);
            $this->fail('Accessing an invalid attribute should throw an exception.');
<<<<<<< HEAD
        } catch (Twig_Error_Runtime $e) {
=======
        } catch (RuntimeError $e) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertSame(sprintf($message, 'index'), $e->getMessage());
        }
    }

    public function getAttributeExceptions()
    {
<<<<<<< HEAD
        return array(
            array('{{ string["a"] }}', 'Impossible to access a key ("a") on a string variable ("foo") in "%s" at line 1.'),
            array('{{ null["a"] }}', 'Impossible to access a key ("a") on a null variable in "%s" at line 1.'),
            array('{{ empty_array["a"] }}', 'Key "a" does not exist as the array is empty in "%s" at line 1.'),
            array('{{ array["a"] }}', 'Key "a" for array with keys "foo" does not exist in "%s" at line 1.'),
            array('{{ array_access["a"] }}', 'Key "a" in object with ArrayAccess of class "Twig_TemplateArrayAccessObject" does not exist in "%s" at line 1.'),
            array('{{ string.a }}', 'Impossible to access an attribute ("a") on a string variable ("foo") in "%s" at line 1.'),
            array('{{ string.a() }}', 'Impossible to invoke a method ("a") on a string variable ("foo") in "%s" at line 1.'),
            array('{{ null.a }}', 'Impossible to access an attribute ("a") on a null variable in "%s" at line 1.'),
            array('{{ null.a() }}', 'Impossible to invoke a method ("a") on a null variable in "%s" at line 1.'),
            array('{{ empty_array.a }}', 'Key "a" does not exist as the array is empty in "%s" at line 1.'),
            array('{{ array.a }}', 'Key "a" for array with keys "foo" does not exist in "%s" at line 1.'),
            array('{{ attribute(array, -10) }}', 'Key "-10" for array with keys "foo" does not exist in "%s" at line 1.'),
            array('{{ array_access.a }}', 'Neither the property "a" nor one of the methods "a()", "geta()"/"isa()" or "__call()" exist and have public access in class "Twig_TemplateArrayAccessObject" in "%s" at line 1.'),
            array('{% from _self import foo %}{% macro foo(obj) %}{{ obj.missing_method() }}{% endmacro %}{{ foo(array_access) }}', 'Neither the property "missing_method" nor one of the methods "missing_method()", "getmissing_method()"/"ismissing_method()" or "__call()" exist and have public access in class "Twig_TemplateArrayAccessObject" in "%s" at line 1.'),
            array('{{ magic_exception.test }}', 'An exception has been thrown during the rendering of a template ("Hey! Don\'t try to isset me!") in "%s" at line 1.'),
            array('{{ object["a"] }}', 'Impossible to access a key "a" on an object of class "stdClass" that does not implement ArrayAccess interface in "%s" at line 1.'),
        );
=======
        return [
            ['{{ string["a"] }}', 'Impossible to access a key ("a") on a string variable ("foo") in "%s" at line 1.'],
            ['{{ null["a"] }}', 'Impossible to access a key ("a") on a null variable in "%s" at line 1.'],
            ['{{ empty_array["a"] }}', 'Key "a" does not exist as the array is empty in "%s" at line 1.'],
            ['{{ array["a"] }}', 'Key "a" for array with keys "foo" does not exist in "%s" at line 1.'],
            ['{{ array_access["a"] }}', 'Key "a" in object with ArrayAccess of class "Twig_TemplateArrayAccessObject" does not exist in "%s" at line 1.'],
            ['{{ string.a }}', 'Impossible to access an attribute ("a") on a string variable ("foo") in "%s" at line 1.'],
            ['{{ string.a() }}', 'Impossible to invoke a method ("a") on a string variable ("foo") in "%s" at line 1.'],
            ['{{ null.a }}', 'Impossible to access an attribute ("a") on a null variable in "%s" at line 1.'],
            ['{{ null.a() }}', 'Impossible to invoke a method ("a") on a null variable in "%s" at line 1.'],
            ['{{ array.a() }}', 'Impossible to invoke a method ("a") on an array in "%s" at line 1.'],
            ['{{ empty_array.a }}', 'Key "a" does not exist as the array is empty in "%s" at line 1.'],
            ['{{ array.a }}', 'Key "a" for array with keys "foo" does not exist in "%s" at line 1.'],
            ['{{ attribute(array, -10) }}', 'Key "-10" for array with keys "foo" does not exist in "%s" at line 1.'],
            ['{{ array_access.a }}', 'Neither the property "a" nor one of the methods "a()", "geta()"/"isa()" or "__call()" exist and have public access in class "Twig_TemplateArrayAccessObject" in "%s" at line 1.'],
            ['{% from _self import foo %}{% macro foo(obj) %}{{ obj.missing_method() }}{% endmacro %}{{ foo(array_access) }}', 'Neither the property "missing_method" nor one of the methods "missing_method()", "getmissing_method()"/"ismissing_method()" or "__call()" exist and have public access in class "Twig_TemplateArrayAccessObject" in "%s" at line 1.'],
            ['{{ magic_exception.test }}', 'An exception has been thrown during the rendering of a template ("Hey! Don\'t try to isset me!") in "%s" at line 1.'],
            ['{{ object["a"] }}', 'Impossible to access a key "a" on an object of class "stdClass" that does not implement ArrayAccess interface in "%s" at line 1.'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider getGetAttributeWithSandbox
     */
    public function testGetAttributeWithSandbox($object, $item, $allowed)
    {
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
        $policy = new Twig_Sandbox_SecurityPolicy(array(), array(), array(/*method*/), array(/*prop*/), array());
        $twig->addExtension(new Twig_Extension_Sandbox($policy, !$allowed));
        $template = new Twig_TemplateTest($twig);

        try {
            $template->getAttribute($object, $item, array(), 'any');

            if (!$allowed) {
                $this->fail();
            }
        } catch (Twig_Sandbox_SecurityError $e) {
            if ($allowed) {
                $this->fail();
=======
        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
        $policy = new SecurityPolicy([], [], [/*method*/], [/*prop*/], []);
        $twig->addExtension(new SandboxExtension($policy, !$allowed));
        $template = new Twig_TemplateTest($twig);

        try {
            $template->getAttribute($object, $item, [], 'any');

            if (!$allowed) {
                $this->fail();
            } else {
                $this->addToAssertionCount(1);
            }
        } catch (SecurityError $e) {
            if ($allowed) {
                $this->fail();
            } else {
                $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            }

            $this->assertContains('is not allowed', $e->getMessage());
        }
    }

    public function getGetAttributeWithSandbox()
    {
<<<<<<< HEAD
        return array(
            array(new Twig_TemplatePropertyObject(), 'defined', false),
            array(new Twig_TemplatePropertyObject(), 'defined', true),
            array(new Twig_TemplateMethodObject(), 'defined', false),
            array(new Twig_TemplateMethodObject(), 'defined', true),
        );
=======
        return [
            [new Twig_TemplatePropertyObject(), 'defined', false],
            [new Twig_TemplatePropertyObject(), 'defined', true],
            [new Twig_TemplateMethodObject(), 'defined', false],
            [new Twig_TemplateMethodObject(), 'defined', true],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @group legacy
     */
    public function testGetAttributeWithTemplateAsObject()
    {
        // to be removed in 2.0
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_TemplateTestLoaderInterface')->getMock());
        //$twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface', 'Twig_SourceContextLoaderInterface')->getMock());
=======
        $twig = new Environment($this->getMockBuilder('Twig_TemplateTestLoaderInterface')->getMock());
        //$twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface', '\Twig\Loader\SourceContextLoaderInterface')->getMock());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $template = new Twig_TemplateTest($twig, 'index.twig');
        $template1 = new Twig_TemplateTest($twig, 'index1.twig');

<<<<<<< HEAD
        $this->assertInstanceof('Twig_Markup', $template->getAttribute($template1, 'string'));
        $this->assertEquals('some_string', $template->getAttribute($template1, 'string'));

        $this->assertInstanceof('Twig_Markup', $template->getAttribute($template1, 'true'));
        $this->assertEquals('1', $template->getAttribute($template1, 'true'));

        $this->assertInstanceof('Twig_Markup', $template->getAttribute($template1, 'zero'));
        $this->assertEquals('0', $template->getAttribute($template1, 'zero'));

        $this->assertNotInstanceof('Twig_Markup', $template->getAttribute($template1, 'empty'));
        $this->assertSame('', $template->getAttribute($template1, 'empty'));

        $this->assertFalse($template->getAttribute($template1, 'env', array(), Twig_Template::ANY_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'environment', array(), Twig_Template::ANY_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'getEnvironment', array(), Twig_Template::METHOD_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'displayWithErrorHandling', array(), Twig_Template::METHOD_CALL, true));
=======
        $this->assertInstanceOf('\Twig\Markup', $template->getAttribute($template1, 'string'));
        $this->assertEquals('some_string', $template->getAttribute($template1, 'string'));

        $this->assertInstanceOf('\Twig\Markup', $template->getAttribute($template1, 'true'));
        $this->assertEquals('1', $template->getAttribute($template1, 'true'));

        $this->assertInstanceOf('\Twig\Markup', $template->getAttribute($template1, 'zero'));
        $this->assertEquals('0', $template->getAttribute($template1, 'zero'));

        $this->assertNotInstanceof('\Twig\Markup', $template->getAttribute($template1, 'empty'));
        $this->assertSame('', $template->getAttribute($template1, 'empty'));

        $this->assertFalse($template->getAttribute($template1, 'env', [], Template::ANY_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'environment', [], Template::ANY_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'getEnvironment', [], Template::METHOD_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'displayWithErrorHandling', [], Template::METHOD_CALL, true));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling "string" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0.
     * @expectedDeprecation Calling "string" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0.
     * @expectedDeprecation Calling "true" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0.
     * @expectedDeprecation Calling "true" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0.
     * @expectedDeprecation Calling "zero" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0.
     * @expectedDeprecation Calling "zero" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0.
     * @expectedDeprecation Calling "empty" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0.
     * @expectedDeprecation Calling "empty" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0.
     * @expectedDeprecation Calling "renderBlock" on template "index.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use block("name") instead).
     * @expectedDeprecation Calling "displayBlock" on template "index.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use block("name") instead).
     * @expectedDeprecation Calling "hasBlock" on template "index.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use "block("name") is defined" instead).
     * @expectedDeprecation Calling "render" on template "index.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use include("index.twig") instead).
     * @expectedDeprecation Calling "display" on template "index.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use include("index.twig") instead).
     * @expectedDeprecation Calling "renderBlock" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use block("name", template) instead).
     * @expectedDeprecation Calling "displayBlock" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use block("name", template) instead).
     * @expectedDeprecation Calling "hasBlock" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use "block("name", template) is defined" instead).
     * @expectedDeprecation Calling "render" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use include("index1.twig") instead).
     * @expectedDeprecation Calling "display" on template "index1.twig" from template "index.twig" is deprecated since version 1.28 and won't be supported anymore in 2.0. Use include("index1.twig") instead).
     */
    public function testGetAttributeWithTemplateAsObjectForDeprecations()
    {
        // to be removed in 2.0
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_TemplateTestLoaderInterface')->getMock());
        //$twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface', 'Twig_SourceContextLoaderInterface')->getMock());
=======
        $twig = new Environment($this->getMockBuilder('Twig_TemplateTestLoaderInterface')->getMock());
        //$twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface', '\Twig\Loader\SourceContextLoaderInterface')->getMock());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $template = new Twig_TemplateTest($twig, 'index.twig');
        $template1 = new Twig_TemplateTest($twig, 'index1.twig');

<<<<<<< HEAD
        $this->assertInstanceof('Twig_Markup', $template->getAttribute($template1, 'string'));
        $this->assertEquals('some_string', $template->getAttribute($template1, 'string'));

        $this->assertInstanceof('Twig_Markup', $template->getAttribute($template1, 'true'));
        $this->assertEquals('1', $template->getAttribute($template1, 'true'));

        $this->assertInstanceof('Twig_Markup', $template->getAttribute($template1, 'zero'));
        $this->assertEquals('0', $template->getAttribute($template1, 'zero'));

        $this->assertNotInstanceof('Twig_Markup', $template->getAttribute($template1, 'empty'));
        $this->assertSame('', $template->getAttribute($template1, 'empty'));

        $blocks = array('name' => array($template1, 'block_name'));

        // trigger some deprecation notice messages to check them with @expectedDeprecation
        $template->getAttribute($template, 'renderBlock', array('name', array(), $blocks));
        $template->getAttribute($template, 'displayBlock', array('name', array(), $blocks));
        $template->getAttribute($template, 'hasBlock', array('name', array()));
        $template->getAttribute($template, 'render', array(array()));
        $template->getAttribute($template, 'display', array(array()));

        $template->getAttribute($template1, 'renderBlock', array('name', array(), $blocks));
        $template->getAttribute($template1, 'displayBlock', array('name', array(), $blocks));
        $template->getAttribute($template1, 'hasBlock', array('name', array()));
        $template->getAttribute($template1, 'render', array(array()));
        $template->getAttribute($template1, 'display', array(array()));

        $this->assertFalse($template->getAttribute($template1, 'env', array(), Twig_Template::ANY_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'environment', array(), Twig_Template::ANY_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'getEnvironment', array(), Twig_Template::METHOD_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'displayWithErrorHandling', array(), Twig_Template::METHOD_CALL, true));
=======
        $this->assertInstanceOf('\Twig\Markup', $template->getAttribute($template1, 'string'));
        $this->assertEquals('some_string', $template->getAttribute($template1, 'string'));

        $this->assertInstanceOf('\Twig\Markup', $template->getAttribute($template1, 'true'));
        $this->assertEquals('1', $template->getAttribute($template1, 'true'));

        $this->assertInstanceOf('\Twig\Markup', $template->getAttribute($template1, 'zero'));
        $this->assertEquals('0', $template->getAttribute($template1, 'zero'));

        $this->assertNotInstanceof('\Twig\Markup', $template->getAttribute($template1, 'empty'));
        $this->assertSame('', $template->getAttribute($template1, 'empty'));

        $blocks = ['name' => [$template1, 'block_name']];

        // trigger some deprecation notice messages to check them with @expectedDeprecation
        $template->getAttribute($template, 'renderBlock', ['name', [], $blocks]);
        $template->getAttribute($template, 'displayBlock', ['name', [], $blocks]);
        $template->getAttribute($template, 'hasBlock', ['name', []]);
        $template->getAttribute($template, 'render', [[]]);
        $template->getAttribute($template, 'display', [[]]);

        $template->getAttribute($template1, 'renderBlock', ['name', [], $blocks]);
        $template->getAttribute($template1, 'displayBlock', ['name', [], $blocks]);
        $template->getAttribute($template1, 'hasBlock', ['name', []]);
        $template->getAttribute($template1, 'render', [[]]);
        $template->getAttribute($template1, 'display', [[]]);

        $this->assertFalse($template->getAttribute($template1, 'env', [], Template::ANY_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'environment', [], Template::ANY_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'getEnvironment', [], Template::METHOD_CALL, true));
        $this->assertFalse($template->getAttribute($template1, 'displayWithErrorHandling', [], Template::METHOD_CALL, true));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @group legacy
     * @expectedDeprecation Silent display of undefined block "unknown" in template "index.twig" is deprecated since version 1.29 and will throw an exception in 2.0. Use the "block('unknown') is defined" expression to test for block existence.
     * @expectedDeprecation Silent display of undefined block "unknown" in template "index.twig" is deprecated since version 1.29 and will throw an exception in 2.0. Use the "block('unknown') is defined" expression to test for block existence.
     */
    public function testRenderBlockWithUndefinedBlock()
    {
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_TemplateTestLoaderInterface')->getMock());

        $template = new Twig_TemplateTest($twig, 'index.twig');
        $template->renderBlock('unknown', array());
        $template->displayBlock('unknown', array());
=======
        $twig = new Environment($this->getMockBuilder('Twig_TemplateTestLoaderInterface')->getMock());

        $template = new Twig_TemplateTest($twig, 'index.twig');
        $template->renderBlock('unknown', []);
        $template->displayBlock('unknown', []);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testGetAttributeOnArrayWithConfusableKey()
    {
<<<<<<< HEAD
        $template = new Twig_TemplateTest(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));

        $array = array('Zero', 'One', -1 => 'MinusOne', '' => 'EmptyString', '1.5' => 'FloatButString', '01' => 'IntegerButStringWithLeadingZeros');
=======
        $template = new Twig_TemplateTest(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));

        $array = ['Zero', 'One', -1 => 'MinusOne', '' => 'EmptyString', '1.5' => 'FloatButString', '01' => 'IntegerButStringWithLeadingZeros'];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertSame('Zero', $array[false]);
        $this->assertSame('One', $array[true]);
        $this->assertSame('One', $array[1.5]);
        $this->assertSame('One', $array['1']);
        $this->assertSame('MinusOne', $array[-1.5]);
        $this->assertSame('FloatButString', $array['1.5']);
        $this->assertSame('IntegerButStringWithLeadingZeros', $array['01']);
        $this->assertSame('EmptyString', $array[null]);

        $this->assertSame('Zero', $template->getAttribute($array, false), 'false is treated as 0 when accessing an array (equals PHP behavior)');
        $this->assertSame('One', $template->getAttribute($array, true), 'true is treated as 1 when accessing an array (equals PHP behavior)');
        $this->assertSame('One', $template->getAttribute($array, 1.5), 'float is casted to int when accessing an array (equals PHP behavior)');
        $this->assertSame('One', $template->getAttribute($array, '1'), '"1" is treated as integer 1 when accessing an array (equals PHP behavior)');
        $this->assertSame('MinusOne', $template->getAttribute($array, -1.5), 'negative float is casted to int when accessing an array (equals PHP behavior)');
        $this->assertSame('FloatButString', $template->getAttribute($array, '1.5'), '"1.5" is treated as-is when accessing an array (equals PHP behavior)');
        $this->assertSame('IntegerButStringWithLeadingZeros', $template->getAttribute($array, '01'), '"01" is treated as-is when accessing an array (equals PHP behavior)');
        $this->assertSame('EmptyString', $template->getAttribute($array, null), 'null is treated as "" when accessing an array (equals PHP behavior)');
    }

    /**
     * @dataProvider getGetAttributeTests
     */
    public function testGetAttribute($defined, $value, $object, $item, $arguments, $type)
    {
<<<<<<< HEAD
        $template = new Twig_TemplateTest(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
=======
        $template = new Twig_TemplateTest(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($value, $template->getAttribute($object, $item, $arguments, $type));
    }

    /**
     * @dataProvider getGetAttributeTests
     */
    public function testGetAttributeStrict($defined, $value, $object, $item, $arguments, $type, $exceptionMessage = null)
    {
<<<<<<< HEAD
        $template = new Twig_TemplateTest(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('strict_variables' => true)));
=======
        $template = new Twig_TemplateTest(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['strict_variables' => true]));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        if ($defined) {
            $this->assertEquals($value, $template->getAttribute($object, $item, $arguments, $type));
        } else {
<<<<<<< HEAD
            try {
                $this->assertEquals($value, $template->getAttribute($object, $item, $arguments, $type));

                throw new Exception('Expected Twig_Error_Runtime exception.');
            } catch (Twig_Error_Runtime $e) {
                if (null !== $exceptionMessage) {
                    $this->assertSame($exceptionMessage, $e->getMessage());
                }
            }
=======
            if (method_exists($this, 'expectException')) {
                $this->expectException('\Twig\Error\RuntimeError');
                if (null !== $exceptionMessage) {
                    $this->expectExceptionMessage($exceptionMessage);
                }
            } else {
                $this->setExpectedException('\Twig\Error\RuntimeError', $exceptionMessage);
            }
            $this->assertEquals($value, $template->getAttribute($object, $item, $arguments, $type));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    /**
     * @dataProvider getGetAttributeTests
     */
    public function testGetAttributeDefined($defined, $value, $object, $item, $arguments, $type)
    {
<<<<<<< HEAD
        $template = new Twig_TemplateTest(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
=======
        $template = new Twig_TemplateTest(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($defined, $template->getAttribute($object, $item, $arguments, $type, true));
    }

    /**
     * @dataProvider getGetAttributeTests
     */
    public function testGetAttributeDefinedStrict($defined, $value, $object, $item, $arguments, $type)
    {
<<<<<<< HEAD
        $template = new Twig_TemplateTest(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('strict_variables' => true)));
=======
        $template = new Twig_TemplateTest(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['strict_variables' => true]));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($defined, $template->getAttribute($object, $item, $arguments, $type, true));
    }

    public function testGetAttributeCallExceptions()
    {
<<<<<<< HEAD
        $template = new Twig_TemplateTest(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
=======
        $template = new Twig_TemplateTest(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $object = new Twig_TemplateMagicMethodExceptionObject();

        $this->assertNull($template->getAttribute($object, 'foo'));
    }

    public function getGetAttributeTests()
    {
<<<<<<< HEAD
        $array = array(
=======
        $array = [
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            'defined' => 'defined',
            'zero' => 0,
            'null' => null,
            '1' => 1,
            'bar' => true,
            'baz' => 'baz',
            '09' => '09',
            '+4' => '+4',
<<<<<<< HEAD
        );

        $objectArray = new Twig_TemplateArrayAccessObject();
=======
        ];

        $objectArray = new Twig_TemplateArrayAccessObject();
        $arrayObject = new \ArrayObject($array);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $stdObject = (object) $array;
        $magicPropertyObject = new Twig_TemplateMagicPropertyObject();
        $propertyObject = new Twig_TemplatePropertyObject();
        $propertyObject1 = new Twig_TemplatePropertyObjectAndIterator();
        $propertyObject2 = new Twig_TemplatePropertyObjectAndArrayAccess();
        $propertyObject3 = new Twig_TemplatePropertyObjectDefinedWithUndefinedValue();
        $methodObject = new Twig_TemplateMethodObject();
        $magicMethodObject = new Twig_TemplateMagicMethodObject();

<<<<<<< HEAD
        $anyType = Twig_Template::ANY_CALL;
        $methodType = Twig_Template::METHOD_CALL;
        $arrayType = Twig_Template::ARRAY_CALL;

        $basicTests = array(
            // array(defined, value, property to fetch)
            array(true,  'defined', 'defined'),
            array(false, null,      'undefined'),
            array(false, null,      'protected'),
            array(true,  0,         'zero'),
            array(true,  1,         1),
            array(true,  1,         1.0),
            array(true,  null,      'null'),
            array(true,  true,      'bar'),
            array(true,  'baz',     'baz'),
            array(true,  '09',      '09'),
            array(true,  '+4',      '+4'),
        );
        $testObjects = array(
            // array(object, type of fetch)
            array($array,               $arrayType),
            array($objectArray,         $arrayType),
            array($stdObject,           $anyType),
            array($magicPropertyObject, $anyType),
            array($methodObject,        $methodType),
            array($methodObject,        $anyType),
            array($propertyObject,      $anyType),
            array($propertyObject1,     $anyType),
            array($propertyObject2,     $anyType),
        );

        $tests = array();
        foreach ($testObjects as $testObject) {
            foreach ($basicTests as $test) {
                // properties cannot be numbers
                if (($testObject[0] instanceof stdClass || $testObject[0] instanceof Twig_TemplatePropertyObject) && is_numeric($test[2])) {
=======
        $anyType = Template::ANY_CALL;
        $methodType = Template::METHOD_CALL;
        $arrayType = Template::ARRAY_CALL;

        $basicTests = [
            // array(defined, value, property to fetch)
            [true,  'defined', 'defined'],
            [false, null,      'undefined'],
            [false, null,      'protected'],
            [true,  0,         'zero'],
            [true,  1,         1],
            [true,  1,         1.0],
            [true,  null,      'null'],
            [true,  true,      'bar'],
            [true,  'baz',     'baz'],
            [true,  '09',      '09'],
            [true,  '+4',      '+4'],
        ];
        $testObjects = [
            // array(object, type of fetch)
            [$array,               $arrayType],
            [$objectArray,         $arrayType],
            [$arrayObject,         $anyType],
            [$stdObject,           $anyType],
            [$magicPropertyObject, $anyType],
            [$methodObject,        $methodType],
            [$methodObject,        $anyType],
            [$propertyObject,      $anyType],
            [$propertyObject1,     $anyType],
            [$propertyObject2,     $anyType],
        ];

        $tests = [];
        foreach ($testObjects as $testObject) {
            foreach ($basicTests as $test) {
                // properties cannot be numbers
                if (($testObject[0] instanceof \stdClass || $testObject[0] instanceof Twig_TemplatePropertyObject) && is_numeric($test[2])) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
                    continue;
                }

                if ('+4' === $test[2] && $methodObject === $testObject[0]) {
                    continue;
                }

<<<<<<< HEAD
                $tests[] = array($test[0], $test[1], $testObject[0], $test[2], array(), $testObject[1]);
=======
                $tests[] = [$test[0], $test[1], $testObject[0], $test[2], [], $testObject[1]];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            }
        }

        // additional properties tests
<<<<<<< HEAD
        $tests = array_merge($tests, array(
            array(true, null, $propertyObject3, 'foo', array(), $anyType),
        ));

        // additional method tests
        $tests = array_merge($tests, array(
            array(true, 'defined', $methodObject, 'defined',    array(), $methodType),
            array(true, 'defined', $methodObject, 'DEFINED',    array(), $methodType),
            array(true, 'defined', $methodObject, 'getDefined', array(), $methodType),
            array(true, 'defined', $methodObject, 'GETDEFINED', array(), $methodType),
            array(true, 'static',  $methodObject, 'static',     array(), $methodType),
            array(true, 'static',  $methodObject, 'getStatic',  array(), $methodType),

            array(true, '__call_undefined', $magicMethodObject, 'undefined', array(), $methodType),
            array(true, '__call_UNDEFINED', $magicMethodObject, 'UNDEFINED', array(), $methodType),
        ));
=======
        $tests = array_merge($tests, [
            [true, null, $propertyObject3, 'foo', [], $anyType],
        ]);

        // additional method tests
        $tests = array_merge($tests, [
            [true, 'defined', $methodObject, 'defined',    [], $methodType],
            [true, 'defined', $methodObject, 'DEFINED',    [], $methodType],
            [true, 'defined', $methodObject, 'getDefined', [], $methodType],
            [true, 'defined', $methodObject, 'GETDEFINED', [], $methodType],
            [true, 'static',  $methodObject, 'static',     [], $methodType],
            [true, 'static',  $methodObject, 'getStatic',  [], $methodType],

            [true, '__call_undefined', $magicMethodObject, 'undefined', [], $methodType],
            [true, '__call_UNDEFINED', $magicMethodObject, 'UNDEFINED', [], $methodType],
        ]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        // add the same tests for the any type
        foreach ($tests as $test) {
            if ($anyType !== $test[5]) {
                $test[5] = $anyType;
                $tests[] = $test;
            }
        }

        $methodAndPropObject = new Twig_TemplateMethodAndPropObject();

        // additional method tests
<<<<<<< HEAD
        $tests = array_merge($tests, array(
            array(true, 'a', $methodAndPropObject, 'a', array(), $anyType),
            array(true, 'a', $methodAndPropObject, 'a', array(), $methodType),
            array(false, null, $methodAndPropObject, 'a', array(), $arrayType),

            array(true, 'b_prop', $methodAndPropObject, 'b', array(), $anyType),
            array(true, 'b', $methodAndPropObject, 'B', array(), $anyType),
            array(true, 'b', $methodAndPropObject, 'b', array(), $methodType),
            array(true, 'b', $methodAndPropObject, 'B', array(), $methodType),
            array(false, null, $methodAndPropObject, 'b', array(), $arrayType),

            array(false, null, $methodAndPropObject, 'c', array(), $anyType),
            array(false, null, $methodAndPropObject, 'c', array(), $methodType),
            array(false, null, $methodAndPropObject, 'c', array(), $arrayType),
        ));

        // tests when input is not an array or object
        $tests = array_merge($tests, array(
            array(false, null, 42, 'a', array(), $anyType, 'Impossible to access an attribute ("a") on a integer variable ("42") in "index.twig".'),
            array(false, null, 'string', 'a', array(), $anyType, 'Impossible to access an attribute ("a") on a string variable ("string") in "index.twig".'),
            array(false, null, array(), 'a', array(), $anyType, 'Key "a" does not exist as the array is empty in "index.twig".'),
        ));

        return $tests;
    }
}

class Twig_TemplateTest extends Twig_Template
{
    private $name;

    public function __construct(Twig_Environment $env, $name = 'index.twig')
    {
        parent::__construct($env);
        self::$cache = array();
=======
        $tests = array_merge($tests, [
            [true, 'a', $methodAndPropObject, 'a', [], $anyType],
            [true, 'a', $methodAndPropObject, 'a', [], $methodType],
            [false, null, $methodAndPropObject, 'a', [], $arrayType],

            [true, 'b_prop', $methodAndPropObject, 'b', [], $anyType],
            [true, 'b', $methodAndPropObject, 'B', [], $anyType],
            [true, 'b', $methodAndPropObject, 'b', [], $methodType],
            [true, 'b', $methodAndPropObject, 'B', [], $methodType],
            [false, null, $methodAndPropObject, 'b', [], $arrayType],

            [false, null, $methodAndPropObject, 'c', [], $anyType],
            [false, null, $methodAndPropObject, 'c', [], $methodType],
            [false, null, $methodAndPropObject, 'c', [], $arrayType],
        ]);

        $arrayAccess = new Twig_TemplateArrayAccess();
        $tests = array_merge($tests, [
            [true, ['foo' => 'bar'], $arrayAccess, 'vars', [], $anyType],
        ]);

        // tests when input is not an array or object
        $tests = array_merge($tests, [
            [false, null, 42, 'a', [], $anyType, 'Impossible to access an attribute ("a") on a integer variable ("42") in "index.twig".'],
            [false, null, 'string', 'a', [], $anyType, 'Impossible to access an attribute ("a") on a string variable ("string") in "index.twig".'],
            [false, null, [], 'a', [], $anyType, 'Key "a" does not exist as the array is empty in "index.twig".'],
        ]);

        return $tests;
    }

    /**
     * @expectedException \Twig\Error\RuntimeError
     */
    public function testGetIsMethods()
    {
        $getIsObject = new Twig_TemplateGetIsMethods();
        $template = new Twig_TemplateTest(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['strict_variables' => true]));
        // first time should not create a cache for "get"
        $this->assertNull($template->getAttribute($getIsObject, 'get'));
        // 0 should be in the method cache now, so this should fail
        $this->assertNull($template->getAttribute($getIsObject, 0));
    }
}

class Twig_TemplateTest extends Template
{
    private $name;

    public function __construct(Environment $env, $name = 'index.twig')
    {
        parent::__construct($env);
        self::$cache = [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->name = $name;
    }

    public function getZero()
    {
        return 0;
    }

    public function getEmpty()
    {
        return '';
    }

    public function getString()
    {
        return 'some_string';
    }

    public function getTrue()
    {
        return true;
    }

    public function getTemplateName()
    {
        return $this->name;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array();
=======
        return [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

<<<<<<< HEAD
    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    public function getAttribute($object, $item, array $arguments = array(), $type = Twig_Template::ANY_CALL, $isDefinedTest = false, $ignoreStrictCheck = false)
    {
        if (function_exists('twig_template_get_attributes')) {
=======
    protected function doDisplay(array $context, array $blocks = [])
    {
    }

    public function getAttribute($object, $item, array $arguments = [], $type = Template::ANY_CALL, $isDefinedTest = false, $ignoreStrictCheck = false)
    {
        if (\function_exists('twig_template_get_attributes')) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            return twig_template_get_attributes($this, $object, $item, $arguments, $type, $isDefinedTest, $ignoreStrictCheck);
        } else {
            return parent::getAttribute($object, $item, $arguments, $type, $isDefinedTest, $ignoreStrictCheck);
        }
    }

<<<<<<< HEAD
    public function block_name($context, array $blocks = array())
=======
    public function block_name($context, array $blocks = [])
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
    }
}

<<<<<<< HEAD
class Twig_TemplateArrayAccessObject implements ArrayAccess
{
    protected $protected = 'protected';

    public $attributes = array(
=======
class Twig_TemplateArrayAccessObject implements \ArrayAccess
{
    protected $protected = 'protected';

    public $attributes = [
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        'defined' => 'defined',
        'zero' => 0,
        'null' => null,
        '1' => 1,
        'bar' => true,
        'baz' => 'baz',
        '09' => '09',
        '+4' => '+4',
<<<<<<< HEAD
    );

    public function offsetExists($name)
    {
        return array_key_exists($name, $this->attributes);
=======
    ];

    public function offsetExists($name)
    {
        return \array_key_exists($name, $this->attributes);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function offsetGet($name)
    {
<<<<<<< HEAD
        return array_key_exists($name, $this->attributes) ? $this->attributes[$name] : null;
=======
        return \array_key_exists($name, $this->attributes) ? $this->attributes[$name] : null;
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function offsetSet($name, $value)
    {
    }

    public function offsetUnset($name)
    {
    }
}

class Twig_TemplateMagicPropertyObject
{
    public $defined = 'defined';

<<<<<<< HEAD
    public $attributes = array(
=======
    public $attributes = [
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        'zero' => 0,
        'null' => null,
        '1' => 1,
        'bar' => true,
        'baz' => 'baz',
        '09' => '09',
        '+4' => '+4',
<<<<<<< HEAD
    );
=======
    ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    protected $protected = 'protected';

    public function __isset($name)
    {
<<<<<<< HEAD
        return array_key_exists($name, $this->attributes);
=======
        return \array_key_exists($name, $this->attributes);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function __get($name)
    {
<<<<<<< HEAD
        return array_key_exists($name, $this->attributes) ? $this->attributes[$name] : null;
=======
        return \array_key_exists($name, $this->attributes) ? $this->attributes[$name] : null;
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}

class Twig_TemplateMagicPropertyObjectWithException
{
    public function __isset($key)
    {
<<<<<<< HEAD
        throw new Exception('Hey! Don\'t try to isset me!');
=======
        throw new \Exception('Hey! Don\'t try to isset me!');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}

class Twig_TemplatePropertyObject
{
    public $defined = 'defined';
    public $zero = 0;
    public $null = null;
    public $bar = true;
    public $baz = 'baz';

    protected $protected = 'protected';
}

<<<<<<< HEAD
class Twig_TemplatePropertyObjectAndIterator extends Twig_TemplatePropertyObject implements IteratorAggregate
{
    public function getIterator()
    {
        return new ArrayIterator(array('foo', 'bar'));
    }
}

class Twig_TemplatePropertyObjectAndArrayAccess extends Twig_TemplatePropertyObject implements ArrayAccess
{
    private $data = array();

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->data);
=======
class Twig_TemplatePropertyObjectAndIterator extends Twig_TemplatePropertyObject implements \IteratorAggregate
{
    public function getIterator()
    {
        return new \ArrayIterator(['foo', 'bar']);
    }
}

class Twig_TemplatePropertyObjectAndArrayAccess extends Twig_TemplatePropertyObject implements \ArrayAccess
{
    private $data = [
        'defined' => 'defined',
        'zero' => 0,
        'null' => null,
        'bar' => true,
        'foo' => true,
        'baz' => 'baz',
        'baf' => 'baf',
    ];

    public function offsetExists($offset)
    {
        return \array_key_exists($offset, $this->data);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->data[$offset] : 'n/a';
    }

    public function offsetSet($offset, $value)
    {
    }

    public function offsetUnset($offset)
    {
    }
}

class Twig_TemplatePropertyObjectDefinedWithUndefinedValue
{
    public $foo;

    public function __construct()
    {
        $this->foo = @$notExist;
    }
}

class Twig_TemplateMethodObject
{
    public function getDefined()
    {
        return 'defined';
    }

    public function get1()
    {
        return 1;
    }

    public function get09()
    {
        return '09';
    }

    public function getZero()
    {
        return 0;
    }

    public function getNull()
    {
    }

    public function isBar()
    {
        return true;
    }

    public function isBaz()
    {
        return 'should never be returned';
    }

    public function getBaz()
    {
        return 'baz';
    }

    protected function getProtected()
    {
        return 'protected';
    }

    public static function getStatic()
    {
        return 'static';
    }
}

<<<<<<< HEAD
=======
class Twig_TemplateGetIsMethods
{
    public function get()
    {
    }

    public function is()
    {
    }
}

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
class Twig_TemplateMethodAndPropObject
{
    private $a = 'a_prop';

    public function getA()
    {
        return 'a';
    }

    public $b = 'b_prop';

    public function getB()
    {
        return 'b';
    }

    private $c = 'c_prop';

    private function getC()
    {
        return 'c';
    }
}

<<<<<<< HEAD
=======
class Twig_TemplateArrayAccess implements \ArrayAccess
{
    public $vars = [
        'foo' => 'bar',
    ];
    private $children = [];

    public function offsetExists($offset)
    {
        return \array_key_exists($offset, $this->children);
    }

    public function offsetGet($offset)
    {
        return $this->children[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->children[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->children[$offset]);
    }
}

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
class Twig_TemplateMagicMethodObject
{
    public function __call($method, $arguments)
    {
        return '__call_'.$method;
    }
}

class Twig_TemplateMagicMethodExceptionObject
{
    public function __call($method, $arguments)
    {
<<<<<<< HEAD
        throw new BadMethodCallException(sprintf('Unknown method "%s".', $method));
    }
}

class CExtDisablingNodeVisitor implements Twig_NodeVisitorInterface
{
    public function enterNode(Twig_NodeInterface $node, Twig_Environment $env)
    {
        if ($node instanceof Twig_Node_Expression_GetAttr) {
=======
        throw new \BadMethodCallException(sprintf('Unknown method "%s".', $method));
    }
}

class CExtDisablingNodeVisitor implements NodeVisitorInterface
{
    public function enterNode(Twig_NodeInterface $node, Environment $env)
    {
        if ($node instanceof GetAttrExpression) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $node->setAttribute('disable_c_ext', true);
        }

        return $node;
    }

<<<<<<< HEAD
    public function leaveNode(Twig_NodeInterface $node, Twig_Environment $env)
=======
    public function leaveNode(Twig_NodeInterface $node, Environment $env)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        return $node;
    }

    public function getPriority()
    {
        return 0;
    }
}

// to be removed in 2.0
<<<<<<< HEAD
interface Twig_TemplateTestLoaderInterface extends Twig_LoaderInterface, Twig_SourceContextLoaderInterface
=======
interface Twig_TemplateTestLoaderInterface extends LoaderInterface, SourceContextLoaderInterface
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
}
