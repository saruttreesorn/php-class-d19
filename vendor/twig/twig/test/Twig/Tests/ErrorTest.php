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
class Twig_Tests_ErrorTest extends PHPUnit_Framework_TestCase
{
    public function testErrorWithObjectFilename()
    {
        $error = new Twig_Error('foo');
        $error->setSourceContext(new Twig_Source('', new SplFileInfo(__FILE__)));
=======
use Twig\Environment;
use Twig\Error\Error;
use Twig\Error\RuntimeError;
use Twig\Loader\ArrayLoader;
use Twig\Loader\FilesystemLoader;
use Twig\Source;

class Twig_Tests_ErrorTest extends \PHPUnit\Framework\TestCase
{
    public function testErrorWithObjectFilename()
    {
        $error = new Error('foo');
        $error->setSourceContext(new Source('', new \SplFileInfo(__FILE__)));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertContains('test'.DIRECTORY_SEPARATOR.'Twig'.DIRECTORY_SEPARATOR.'Tests'.DIRECTORY_SEPARATOR.'ErrorTest.php', $error->getMessage());
    }

    public function testErrorWithArrayFilename()
    {
<<<<<<< HEAD
        $error = new Twig_Error('foo');
        $error->setSourceContext(new Twig_Source('', array('foo' => 'bar')));
=======
        $error = new Error('foo');
        $error->setSourceContext(new Source('', ['foo' => 'bar']));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals('foo in {"foo":"bar"}', $error->getMessage());
    }

    public function testTwigExceptionGuessWithMissingVarAndArrayLoader()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Array(array(
=======
        $loader = new ArrayLoader([
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            'base.html' => '{% block content %}{% endblock %}',
            'index.html' => <<<EOHTML
{% extends 'base.html' %}
{% block content %}
    {{ foo.bar }}
{% endblock %}
{% block foo %}
    {{ foo.bar }}
{% endblock %}
EOHTML
<<<<<<< HEAD
        ));
        $twig = new Twig_Environment($loader, array('strict_variables' => true, 'debug' => true, 'cache' => false));

        $template = $twig->loadTemplate('index.html');
        try {
            $template->render(array());

            $this->fail();
        } catch (Twig_Error_Runtime $e) {
=======
        ]);
        $twig = new Environment($loader, ['strict_variables' => true, 'debug' => true, 'cache' => false]);

        $template = $twig->load('index.html');
        try {
            $template->render([]);

            $this->fail();
        } catch (RuntimeError $e) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('Variable "foo" does not exist in "index.html" at line 3.', $e->getMessage());
            $this->assertEquals(3, $e->getTemplateLine());
            $this->assertEquals('index.html', $e->getSourceContext()->getName());
        }
    }

    public function testTwigExceptionGuessWithExceptionAndArrayLoader()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Array(array(
=======
        $loader = new ArrayLoader([
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            'base.html' => '{% block content %}{% endblock %}',
            'index.html' => <<<EOHTML
{% extends 'base.html' %}
{% block content %}
    {{ foo.bar }}
{% endblock %}
{% block foo %}
    {{ foo.bar }}
{% endblock %}
EOHTML
<<<<<<< HEAD
        ));
        $twig = new Twig_Environment($loader, array('strict_variables' => true, 'debug' => true, 'cache' => false));

        $template = $twig->loadTemplate('index.html');
        try {
            $template->render(array('foo' => new Twig_Tests_ErrorTest_Foo()));

            $this->fail();
        } catch (Twig_Error_Runtime $e) {
=======
        ]);
        $twig = new Environment($loader, ['strict_variables' => true, 'debug' => true, 'cache' => false]);

        $template = $twig->load('index.html');
        try {
            $template->render(['foo' => new Twig_Tests_ErrorTest_Foo()]);

            $this->fail();
        } catch (RuntimeError $e) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('An exception has been thrown during the rendering of a template ("Runtime error...") in "index.html" at line 3.', $e->getMessage());
            $this->assertEquals(3, $e->getTemplateLine());
            $this->assertEquals('index.html', $e->getSourceContext()->getName());
        }
    }

    public function testTwigExceptionGuessWithMissingVarAndFilesystemLoader()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Filesystem(dirname(__FILE__).'/Fixtures/errors');
        $twig = new Twig_Environment($loader, array('strict_variables' => true, 'debug' => true, 'cache' => false));

        $template = $twig->loadTemplate('index.html');
        try {
            $template->render(array());

            $this->fail();
        } catch (Twig_Error_Runtime $e) {
=======
        $loader = new FilesystemLoader(__DIR__.'/Fixtures/errors');
        $twig = new Environment($loader, ['strict_variables' => true, 'debug' => true, 'cache' => false]);

        $template = $twig->load('index.html');
        try {
            $template->render([]);

            $this->fail();
        } catch (RuntimeError $e) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('Variable "foo" does not exist.', $e->getMessage());
            $this->assertEquals(3, $e->getTemplateLine());
            $this->assertEquals('index.html', $e->getSourceContext()->getName());
            $this->assertEquals(3, $e->getLine());
<<<<<<< HEAD
            $this->assertEquals(strtr(dirname(__FILE__).'/Fixtures/errors/index.html', '/', DIRECTORY_SEPARATOR), $e->getFile());
=======
            $this->assertEquals(strtr(__DIR__.'/Fixtures/errors/index.html', '/', DIRECTORY_SEPARATOR), $e->getFile());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    public function testTwigExceptionGuessWithExceptionAndFilesystemLoader()
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Filesystem(dirname(__FILE__).'/Fixtures/errors');
        $twig = new Twig_Environment($loader, array('strict_variables' => true, 'debug' => true, 'cache' => false));

        $template = $twig->loadTemplate('index.html');
        try {
            $template->render(array('foo' => new Twig_Tests_ErrorTest_Foo()));

            $this->fail();
        } catch (Twig_Error_Runtime $e) {
=======
        $loader = new FilesystemLoader(__DIR__.'/Fixtures/errors');
        $twig = new Environment($loader, ['strict_variables' => true, 'debug' => true, 'cache' => false]);

        $template = $twig->load('index.html');
        try {
            $template->render(['foo' => new Twig_Tests_ErrorTest_Foo()]);

            $this->fail();
        } catch (RuntimeError $e) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals('An exception has been thrown during the rendering of a template ("Runtime error...").', $e->getMessage());
            $this->assertEquals(3, $e->getTemplateLine());
            $this->assertEquals('index.html', $e->getSourceContext()->getName());
            $this->assertEquals(3, $e->getLine());
<<<<<<< HEAD
            $this->assertEquals(strtr(dirname(__FILE__).'/Fixtures/errors/index.html', '/', DIRECTORY_SEPARATOR), $e->getFile());
=======
            $this->assertEquals(strtr(__DIR__.'/Fixtures/errors/index.html', '/', DIRECTORY_SEPARATOR), $e->getFile());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    /**
     * @dataProvider getErroredTemplates
     */
    public function testTwigExceptionAddsFileAndLine($templates, $name, $line)
    {
<<<<<<< HEAD
        $loader = new Twig_Loader_Array($templates);
        $twig = new Twig_Environment($loader, array('strict_variables' => true, 'debug' => true, 'cache' => false));

        $template = $twig->loadTemplate('index');

        try {
            $template->render(array());

            $this->fail();
        } catch (Twig_Error_Runtime $e) {
=======
        $loader = new ArrayLoader($templates);
        $twig = new Environment($loader, ['strict_variables' => true, 'debug' => true, 'cache' => false]);

        $template = $twig->load('index');

        try {
            $template->render([]);

            $this->fail();
        } catch (RuntimeError $e) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals(sprintf('Variable "foo" does not exist in "%s" at line %d.', $name, $line), $e->getMessage());
            $this->assertEquals($line, $e->getTemplateLine());
            $this->assertEquals($name, $e->getSourceContext()->getName());
        }

        try {
<<<<<<< HEAD
            $template->render(array('foo' => new Twig_Tests_ErrorTest_Foo()));

            $this->fail();
        } catch (Twig_Error_Runtime $e) {
=======
            $template->render(['foo' => new Twig_Tests_ErrorTest_Foo()]);

            $this->fail();
        } catch (RuntimeError $e) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
            $this->assertEquals(sprintf('An exception has been thrown during the rendering of a template ("Runtime error...") in "%s" at line %d.', $name, $line), $e->getMessage());
            $this->assertEquals($line, $e->getTemplateLine());
            $this->assertEquals($name, $e->getSourceContext()->getName());
        }
    }

    public function getErroredTemplates()
    {
<<<<<<< HEAD
        return array(
            // error occurs in a template
            array(
                array(
                    'index' => "\n\n{{ foo.bar }}\n\n\n{{ 'foo' }}",
                ),
                'index', 3,
            ),

            // error occurs in an included template
            array(
                array(
                    'index' => "{% include 'partial' %}",
                    'partial' => '{{ foo.bar }}',
                ),
                'partial', 1,
            ),

            // error occurs in a parent block when called via parent()
            array(
                array(
=======
        return [
            // error occurs in a template
            [
                [
                    'index' => "\n\n{{ foo.bar }}\n\n\n{{ 'foo' }}",
                ],
                'index', 3,
            ],

            // error occurs in an included template
            [
                [
                    'index' => "{% include 'partial' %}",
                    'partial' => '{{ foo.bar }}',
                ],
                'partial', 1,
            ],

            // error occurs in a parent block when called via parent()
            [
                [
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
                    'index' => "{% extends 'base' %}
                    {% block content %}
                        {{ parent() }}
                    {% endblock %}",
                    'base' => '{% block content %}{{ foo.bar }}{% endblock %}',
<<<<<<< HEAD
                ),
                'base', 1,
            ),

            // error occurs in a block from the child
            array(
                array(
=======
                ],
                'base', 1,
            ],

            // error occurs in a block from the child
            [
                [
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
                    'index' => "{% extends 'base' %}
                    {% block content %}
                        {{ foo.bar }}
                    {% endblock %}
                    {% block foo %}
                        {{ foo.bar }}
                    {% endblock %}",
                    'base' => '{% block content %}{% endblock %}',
<<<<<<< HEAD
                ),
                'index', 3,
            ),
        );
=======
                ],
                'index', 3,
            ],
        ];
    }

    public function testTwigLeakOutputInDebugMode()
    {
        $output = exec(sprintf('%s %s debug', \PHP_BINARY, escapeshellarg(__DIR__.'/Fixtures/errors/leak-output.php')));

        $this->assertSame('Hello OOPS', $output);
    }

    public function testDoesNotTwigLeakOutput()
    {
        $output = exec(sprintf('%s %s', \PHP_BINARY, escapeshellarg(__DIR__.'/Fixtures/errors/leak-output.php')));

        $this->assertSame('', $output);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}

class Twig_Tests_ErrorTest_Foo
{
    public function bar()
    {
<<<<<<< HEAD
        throw new Exception('Runtime error...');
=======
        throw new \Exception('Runtime error...');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
