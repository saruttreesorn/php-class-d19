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
class Twig_Tests_Extension_SandboxTest extends PHPUnit_Framework_TestCase
=======
use Twig\Environment;
use Twig\Extension\SandboxExtension;
use Twig\Loader\ArrayLoader;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityPolicy;

class Twig_Tests_Extension_SandboxTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    protected static $params;
    protected static $templates;

    protected function setUp()
    {
<<<<<<< HEAD
        self::$params = array(
            'name' => 'Fabien',
            'obj' => new FooObject(),
            'arr' => array('obj' => new FooObject()),
        );

        self::$templates = array(
=======
        self::$params = [
            'name' => 'Fabien',
            'obj' => new FooObject(),
            'arr' => ['obj' => new FooObject()],
        ];

        self::$templates = [
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            '1_basic1' => '{{ obj.foo }}',
            '1_basic2' => '{{ name|upper }}',
            '1_basic3' => '{% if name %}foo{% endif %}',
            '1_basic4' => '{{ obj.bar }}',
            '1_basic5' => '{{ obj }}',
<<<<<<< HEAD
            '1_basic6' => '{{ arr.obj }}',
=======
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            '1_basic7' => '{{ cycle(["foo","bar"], 1) }}',
            '1_basic8' => '{{ obj.getfoobar }}{{ obj.getFooBar }}',
            '1_basic9' => '{{ obj.foobar }}{{ obj.fooBar }}',
            '1_basic' => '{% if obj.foo %}{{ obj.foo|upper }}{% endif %}',
            '1_layout' => '{% block content %}{% endblock %}',
            '1_child' => "{% extends \"1_layout\" %}\n{% block content %}\n{{ \"a\"|json_encode }}\n{% endblock %}",
            '1_include' => '{{ include("1_basic1", sandboxed=true) }}',
<<<<<<< HEAD
        );
    }

    /**
     * @expectedException        Twig_Sandbox_SecurityError
=======
            '1_range_operator' => '{{ (1..2)[0] }}',
        ];
    }

    /**
     * @expectedException        \Twig\Sandbox\SecurityError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Filter "json_encode" is not allowed in "1_child" at line 3.
     */
    public function testSandboxWithInheritance()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates, array('block'));
        $twig->loadTemplate('1_child')->render(array());
=======
        $twig = $this->getEnvironment(true, [], self::$templates, ['block']);
        $twig->load('1_child')->render([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testSandboxGloballySet()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(false, array(), self::$templates);
        $this->assertEquals('FOO', $twig->loadTemplate('1_basic')->render(self::$params), 'Sandbox does nothing if it is disabled globally');
=======
        $twig = $this->getEnvironment(false, [], self::$templates);
        $this->assertEquals('FOO', $twig->load('1_basic')->render(self::$params), 'Sandbox does nothing if it is disabled globally');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testSandboxUnallowedMethodAccessor()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates);
        try {
            $twig->loadTemplate('1_basic1')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed method is called');
        } catch (Twig_Sandbox_SecurityError $e) {
            $this->assertInstanceOf('Twig_Sandbox_SecurityNotAllowedMethodError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedMethodError');
=======
        $twig = $this->getEnvironment(true, [], self::$templates);
        try {
            $twig->load('1_basic1')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed method is called');
        } catch (SecurityError $e) {
            $this->assertInstanceOf('\Twig\Sandbox\SecurityNotAllowedMethodError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedMethodError');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('FooObject', $e->getClassName(), 'Exception should be raised on the "FooObject" class');
            $this->assertEquals('foo', $e->getMethodName(), 'Exception should be raised on the "foo" method');
        }
    }

    public function testSandboxUnallowedFilter()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates);
        try {
            $twig->loadTemplate('1_basic2')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed filter is called');
        } catch (Twig_Sandbox_SecurityError $e) {
            $this->assertInstanceOf('Twig_Sandbox_SecurityNotAllowedFilterError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedFilterError');
=======
        $twig = $this->getEnvironment(true, [], self::$templates);
        try {
            $twig->load('1_basic2')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed filter is called');
        } catch (SecurityError $e) {
            $this->assertInstanceOf('\Twig\Sandbox\SecurityNotAllowedFilterError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedFilterError');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('upper', $e->getFilterName(), 'Exception should be raised on the "upper" filter');
        }
    }

    public function testSandboxUnallowedTag()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates);
        try {
            $twig->loadTemplate('1_basic3')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed tag is used in the template');
        } catch (Twig_Sandbox_SecurityError $e) {
            $this->assertInstanceOf('Twig_Sandbox_SecurityNotAllowedTagError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedTagError');
=======
        $twig = $this->getEnvironment(true, [], self::$templates);
        try {
            $twig->load('1_basic3')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed tag is used in the template');
        } catch (SecurityError $e) {
            $this->assertInstanceOf('\Twig\Sandbox\SecurityNotAllowedTagError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedTagError');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('if', $e->getTagName(), 'Exception should be raised on the "if" tag');
        }
    }

    public function testSandboxUnallowedProperty()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates);
        try {
            $twig->loadTemplate('1_basic4')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed property is called in the template');
        } catch (Twig_Sandbox_SecurityError $e) {
            $this->assertInstanceOf('Twig_Sandbox_SecurityNotAllowedPropertyError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedPropertyError');
=======
        $twig = $this->getEnvironment(true, [], self::$templates);
        try {
            $twig->load('1_basic4')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed property is called in the template');
        } catch (SecurityError $e) {
            $this->assertInstanceOf('\Twig\Sandbox\SecurityNotAllowedPropertyError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedPropertyError');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('FooObject', $e->getClassName(), 'Exception should be raised on the "FooObject" class');
            $this->assertEquals('bar', $e->getPropertyName(), 'Exception should be raised on the "bar" property');
        }
    }

<<<<<<< HEAD
    public function testSandboxUnallowedToString()
    {
        $twig = $this->getEnvironment(true, array(), self::$templates);
        try {
            $twig->loadTemplate('1_basic5')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed method (__toString()) is called in the template');
        } catch (Twig_Sandbox_SecurityError $e) {
            $this->assertInstanceOf('Twig_Sandbox_SecurityNotAllowedMethodError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedMethodError');
=======
    /**
     * @dataProvider getSandboxUnallowedToStringTests
     */
    public function testSandboxUnallowedToString($template)
    {
        $twig = $this->getEnvironment(true, [], ['index' => $template], [], ['upper'], ['FooObject' => 'getAnotherFooObject'], [], ['random']);
        try {
            $twig->load('index')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed method (__toString()) is called in the template');
        } catch (SecurityError $e) {
            $this->assertInstanceOf('\Twig\Sandbox\SecurityNotAllowedMethodError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedMethodError');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('FooObject', $e->getClassName(), 'Exception should be raised on the "FooObject" class');
            $this->assertEquals('__tostring', $e->getMethodName(), 'Exception should be raised on the "__toString" method');
        }
    }

<<<<<<< HEAD
    public function testSandboxUnallowedToStringArray()
    {
        $twig = $this->getEnvironment(true, array(), self::$templates);
        try {
            $twig->loadTemplate('1_basic6')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed method (__toString()) is called in the template');
        } catch (Twig_Sandbox_SecurityError $e) {
            $this->assertInstanceOf('Twig_Sandbox_SecurityNotAllowedMethodError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedMethodError');
            $this->assertEquals('FooObject', $e->getClassName(), 'Exception should be raised on the "FooObject" class');
            $this->assertEquals('__tostring', $e->getMethodName(), 'Exception should be raised on the "__toString" method');
        }
    }

    public function testSandboxUnallowedFunction()
    {
        $twig = $this->getEnvironment(true, array(), self::$templates);
        try {
            $twig->loadTemplate('1_basic7')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed function is called in the template');
        } catch (Twig_Sandbox_SecurityError $e) {
            $this->assertInstanceOf('Twig_Sandbox_SecurityNotAllowedFunctionError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedFunctionError');
            $this->assertEquals('cycle', $e->getFunctionName(), 'Exception should be raised on the "cycle" function');
        }
    }

    public function testSandboxAllowMethodFoo()
    {
        $twig = $this->getEnvironment(true, array(), self::$templates, array(), array(), array('FooObject' => 'foo'));
        FooObject::reset();
        $this->assertEquals('foo', $twig->loadTemplate('1_basic1')->render(self::$params), 'Sandbox allow some methods');
        $this->assertEquals(1, FooObject::$called['foo'], 'Sandbox only calls method once');
=======
    public function getSandboxUnallowedToStringTests()
    {
        return [
            'simple' => ['{{ obj }}'],
            'object_from_array' => ['{{ arr.obj }}'],
            'object_chain' => ['{{ obj.anotherFooObject }}'],
            'filter' => ['{{ obj|upper }}'],
            'filter_from_array' => ['{{ arr.obj|upper }}'],
            'function' => ['{{ random(obj) }}'],
            'function_from_array' => ['{{ random(arr.obj) }}'],
            'function_and_filter' => ['{{ random(obj|upper) }}'],
            'function_and_filter_from_array' => ['{{ random(arr.obj|upper) }}'],
            'object_chain_and_filter' => ['{{ obj.anotherFooObject|upper }}'],
            'object_chain_and_function' => ['{{ random(obj.anotherFooObject) }}'],
            'concat' => ['{{ obj ~ "" }}'],
            'concat_again' => ['{{ "" ~ obj }}'],
        ];
    }

    /**
     * @dataProvider getSandboxAllowedToStringTests
     */
    public function testSandboxAllowedToString($template, $output)
    {
        $twig = $this->getEnvironment(true, [], ['index' => $template], ['set'], [], ['FooObject' => ['foo', 'getAnotherFooObject']]);
        $this->assertEquals($output, $twig->load('index')->render(self::$params));
    }

    public function getSandboxAllowedToStringTests()
    {
        return [
            'constant_test' => ['{{ obj is constant("PHP_INT_MAX") }}', ''],
            'set_object' => ['{% set a = obj.anotherFooObject %}{{ a.foo }}', 'foo'],
            'is_defined' => ['{{ obj.anotherFooObject is defined }}', '1'],
            'is_null' => ['{{ obj is null }}', ''],
            'is_sameas' => ['{{ obj is same as(obj) }}', '1'],
            'is_sameas_from_array' => ['{{ arr.obj is same as(arr.obj) }}', '1'],
            'is_sameas_from_another_method' => ['{{ obj.anotherFooObject is same as(obj.anotherFooObject) }}', ''],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testSandboxAllowMethodToString()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates, array(), array(), array('FooObject' => '__toString'));
        FooObject::reset();
        $this->assertEquals('foo', $twig->loadTemplate('1_basic5')->render(self::$params), 'Sandbox allow some methods');
=======
        $twig = $this->getEnvironment(true, [], self::$templates, [], [], ['FooObject' => '__toString']);
        FooObject::reset();
        $this->assertEquals('foo', $twig->load('1_basic5')->render(self::$params), 'Sandbox allow some methods');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertEquals(1, FooObject::$called['__toString'], 'Sandbox only calls method once');
    }

    public function testSandboxAllowMethodToStringDisabled()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(false, array(), self::$templates);
        FooObject::reset();
        $this->assertEquals('foo', $twig->loadTemplate('1_basic5')->render(self::$params), 'Sandbox allows __toString when sandbox disabled');
        $this->assertEquals(1, FooObject::$called['__toString'], 'Sandbox only calls method once');
    }

    public function testSandboxAllowFilter()
    {
        $twig = $this->getEnvironment(true, array(), self::$templates, array(), array('upper'));
        $this->assertEquals('FABIEN', $twig->loadTemplate('1_basic2')->render(self::$params), 'Sandbox allow some filters');
=======
        $twig = $this->getEnvironment(false, [], self::$templates);
        FooObject::reset();
        $this->assertEquals('foo', $twig->load('1_basic5')->render(self::$params), 'Sandbox allows __toString when sandbox disabled');
        $this->assertEquals(1, FooObject::$called['__toString'], 'Sandbox only calls method once');
    }

    public function testSandboxUnallowedFunction()
    {
        $twig = $this->getEnvironment(true, [], self::$templates);
        try {
            $twig->load('1_basic7')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if an unallowed function is called in the template');
        } catch (SecurityError $e) {
            $this->assertInstanceOf('\Twig\Sandbox\SecurityNotAllowedFunctionError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedFunctionError');
            $this->assertEquals('cycle', $e->getFunctionName(), 'Exception should be raised on the "cycle" function');
        }
    }

    public function testSandboxUnallowedRangeOperator()
    {
        $twig = $this->getEnvironment(true, [], self::$templates);
        try {
            $twig->load('1_range_operator')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception if the unallowed range operator is called');
        } catch (SecurityError $e) {
            $this->assertInstanceOf('\Twig\Sandbox\SecurityNotAllowedFunctionError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedFunctionError');
            $this->assertEquals('range', $e->getFunctionName(), 'Exception should be raised on the "range" function');
        }
    }

    public function testSandboxAllowMethodFoo()
    {
        $twig = $this->getEnvironment(true, [], self::$templates, [], [], ['FooObject' => 'foo']);
        FooObject::reset();
        $this->assertEquals('foo', $twig->load('1_basic1')->render(self::$params), 'Sandbox allow some methods');
        $this->assertEquals(1, FooObject::$called['foo'], 'Sandbox only calls method once');
    }

    public function testSandboxAllowFilter()
    {
        $twig = $this->getEnvironment(true, [], self::$templates, [], ['upper']);
        $this->assertEquals('FABIEN', $twig->load('1_basic2')->render(self::$params), 'Sandbox allow some filters');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testSandboxAllowTag()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates, array('if'));
        $this->assertEquals('foo', $twig->loadTemplate('1_basic3')->render(self::$params), 'Sandbox allow some tags');
=======
        $twig = $this->getEnvironment(true, [], self::$templates, ['if']);
        $this->assertEquals('foo', $twig->load('1_basic3')->render(self::$params), 'Sandbox allow some tags');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testSandboxAllowProperty()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates, array(), array(), array(), array('FooObject' => 'bar'));
        $this->assertEquals('bar', $twig->loadTemplate('1_basic4')->render(self::$params), 'Sandbox allow some properties');
=======
        $twig = $this->getEnvironment(true, [], self::$templates, [], [], [], ['FooObject' => 'bar']);
        $this->assertEquals('bar', $twig->load('1_basic4')->render(self::$params), 'Sandbox allow some properties');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testSandboxAllowFunction()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array(), self::$templates, array(), array(), array(), array(), array('cycle'));
        $this->assertEquals('bar', $twig->loadTemplate('1_basic7')->render(self::$params), 'Sandbox allow some functions');
=======
        $twig = $this->getEnvironment(true, [], self::$templates, [], [], [], [], ['cycle']);
        $this->assertEquals('bar', $twig->load('1_basic7')->render(self::$params), 'Sandbox allow some functions');
    }

    public function testSandboxAllowRangeOperator()
    {
        $twig = $this->getEnvironment(true, [], self::$templates, [], [], [], [], ['range']);
        $this->assertEquals('1', $twig->load('1_range_operator')->render(self::$params), 'Sandbox allow the range operator');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testSandboxAllowFunctionsCaseInsensitive()
    {
<<<<<<< HEAD
        foreach (array('getfoobar', 'getFoobar', 'getFooBar') as $name) {
            $twig = $this->getEnvironment(true, array(), self::$templates, array(), array(), array('FooObject' => $name));
            FooObject::reset();
            $this->assertEquals('foobarfoobar', $twig->loadTemplate('1_basic8')->render(self::$params), 'Sandbox allow methods in a case-insensitive way');
            $this->assertEquals(2, FooObject::$called['getFooBar'], 'Sandbox only calls method once');

            $this->assertEquals('foobarfoobar', $twig->loadTemplate('1_basic9')->render(self::$params), 'Sandbox allow methods via shortcut names (ie. without get/set)');
=======
        foreach (['getfoobar', 'getFoobar', 'getFooBar'] as $name) {
            $twig = $this->getEnvironment(true, [], self::$templates, [], [], ['FooObject' => $name]);
            FooObject::reset();
            $this->assertEquals('foobarfoobar', $twig->load('1_basic8')->render(self::$params), 'Sandbox allow methods in a case-insensitive way');
            $this->assertEquals(2, FooObject::$called['getFooBar'], 'Sandbox only calls method once');

            $this->assertEquals('foobarfoobar', $twig->load('1_basic9')->render(self::$params), 'Sandbox allow methods via shortcut names (ie. without get/set)');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    public function testSandboxLocallySetForAnInclude()
    {
<<<<<<< HEAD
        self::$templates = array(
            '2_basic' => '{{ obj.foo }}{% include "2_included" %}{{ obj.foo }}',
            '2_included' => '{% if obj.foo %}{{ obj.foo|upper }}{% endif %}',
        );

        $twig = $this->getEnvironment(false, array(), self::$templates);
        $this->assertEquals('fooFOOfoo', $twig->loadTemplate('2_basic')->render(self::$params), 'Sandbox does nothing if disabled globally and sandboxed not used for the include');

        self::$templates = array(
            '3_basic' => '{{ obj.foo }}{% sandbox %}{% include "3_included" %}{% endsandbox %}{{ obj.foo }}',
            '3_included' => '{% if obj.foo %}{{ obj.foo|upper }}{% endif %}',
        );

        $twig = $this->getEnvironment(true, array(), self::$templates);
        try {
            $twig->loadTemplate('3_basic')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception when the included file is sandboxed');
        } catch (Twig_Sandbox_SecurityError $e) {
            $this->assertInstanceOf('Twig_Sandbox_SecurityNotAllowedTagError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedTagError');
=======
        self::$templates = [
            '2_basic' => '{{ obj.foo }}{% include "2_included" %}{{ obj.foo }}',
            '2_included' => '{% if obj.foo %}{{ obj.foo|upper }}{% endif %}',
        ];

        $twig = $this->getEnvironment(false, [], self::$templates);
        $this->assertEquals('fooFOOfoo', $twig->load('2_basic')->render(self::$params), 'Sandbox does nothing if disabled globally and sandboxed not used for the include');

        self::$templates = [
            '3_basic' => '{{ obj.foo }}{% sandbox %}{% include "3_included" %}{% endsandbox %}{{ obj.foo }}',
            '3_included' => '{% if obj.foo %}{{ obj.foo|upper }}{% endif %}',
        ];

        $twig = $this->getEnvironment(true, [], self::$templates);
        try {
            $twig->load('3_basic')->render(self::$params);
            $this->fail('Sandbox throws a SecurityError exception when the included file is sandboxed');
        } catch (SecurityError $e) {
            $this->assertInstanceOf('\Twig\Sandbox\SecurityNotAllowedTagError', $e, 'Exception should be an instance of Twig_Sandbox_SecurityNotAllowedTagError');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('sandbox', $e->getTagName());
        }
    }

    public function testMacrosInASandbox()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(true, array('autoescape' => 'html'), array('index' => <<<EOF
=======
        $twig = $this->getEnvironment(true, ['autoescape' => 'html'], ['index' => <<<EOF
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{%- import _self as macros %}

{%- macro test(text) %}<p>{{ text }}</p>{% endmacro %}

{{- macros.test('username') }}
EOF
<<<<<<< HEAD
        ), array('macro', 'import'), array('escape'));

        $this->assertEquals('<p>username</p>', $twig->loadTemplate('index')->render(array()));
=======
        ], ['macro', 'import'], ['escape']);

        $this->assertEquals('<p>username</p>', $twig->load('index')->render([]));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testSandboxDisabledAfterIncludeFunctionError()
    {
<<<<<<< HEAD
        $twig = $this->getEnvironment(false, array(), self::$templates);

        $e = null;
        try {
            $twig->loadTemplate('1_include')->render(self::$params);
        } catch (Throwable $e) {
        } catch (Exception $e) {
        }
        if ($e === null) {
            $this->fail('An exception should be thrown for this test to be valid.');
        }

        $this->assertFalse($twig->getExtension('Twig_Extension_Sandbox')->isSandboxed(), 'Sandboxed include() function call should not leave Sandbox enabled when an error occurs.');
    }

    protected function getEnvironment($sandboxed, $options, $templates, $tags = array(), $filters = array(), $methods = array(), $properties = array(), $functions = array())
    {
        $loader = new Twig_Loader_Array($templates);
        $twig = new Twig_Environment($loader, array_merge(array('debug' => true, 'cache' => false, 'autoescape' => false), $options));
        $policy = new Twig_Sandbox_SecurityPolicy($tags, $filters, $methods, $properties, $functions);
        $twig->addExtension(new Twig_Extension_Sandbox($policy, $sandboxed));
=======
        $twig = $this->getEnvironment(false, [], self::$templates);

        $e = null;
        try {
            $twig->load('1_include')->render(self::$params);
        } catch (\Throwable $e) {
        } catch (\Exception $e) {
        }
        if (null === $e) {
            $this->fail('An exception should be thrown for this test to be valid.');
        }

        $this->assertFalse($twig->getExtension('\Twig\Extension\SandboxExtension')->isSandboxed(), 'Sandboxed include() function call should not leave Sandbox enabled when an error occurs.');
    }

    protected function getEnvironment($sandboxed, $options, $templates, $tags = [], $filters = [], $methods = [], $properties = [], $functions = [])
    {
        $loader = new ArrayLoader($templates);
        $twig = new Environment($loader, array_merge(['debug' => true, 'cache' => false, 'autoescape' => false], $options));
        $policy = new SecurityPolicy($tags, $filters, $methods, $properties, $functions);
        $twig->addExtension(new SandboxExtension($policy, $sandboxed));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $twig;
    }
}

class FooObject
{
<<<<<<< HEAD
    public static $called = array('__toString' => 0, 'foo' => 0, 'getFooBar' => 0);
=======
    public static $called = ['__toString' => 0, 'foo' => 0, 'getFooBar' => 0];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    public $bar = 'bar';

    public static function reset()
    {
<<<<<<< HEAD
        self::$called = array('__toString' => 0, 'foo' => 0, 'getFooBar' => 0);
=======
        self::$called = ['__toString' => 0, 'foo' => 0, 'getFooBar' => 0];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function __toString()
    {
        ++self::$called['__toString'];

        return 'foo';
    }

    public function foo()
    {
        ++self::$called['foo'];

        return 'foo';
    }

    public function getFooBar()
    {
        ++self::$called['getFooBar'];

        return 'foobar';
    }
<<<<<<< HEAD
=======

    public function getAnotherFooObject()
    {
        return new self();
    }
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
}
