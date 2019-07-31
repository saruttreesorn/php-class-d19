Extending Twig
==============

.. caution::

    This section describes how to extend Twig as of **Twig 1.12**. If you are
    using an older version, read the :doc:`legacy<advanced_legacy>` chapter
    instead.

Twig can be extended in many ways; you can add extra tags, filters, tests,
operators, global variables, and functions. You can even extend the parser
itself with node visitors.

.. note::

<<<<<<< HEAD
    The first section of this chapter describes how to extend Twig easily. If
    you want to reuse your changes in different projects or if you want to
    share them with others, you should then create an extension as described
    in the following section.
=======
    The first section of this chapter describes how to extend Twig. If you want
    to reuse your changes in different projects or if you want to share them
    with others, you should then create an extension as described in the
    following section.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

.. caution::

    When extending Twig without creating an extension, Twig won't be able to
    recompile your templates when the PHP code is updated. To see your changes
    in real-time, either disable template caching or package your code into an
    extension (see the next section of this chapter).

Before extending Twig, you must understand the differences between all the
different possible extension points and when to use them.

First, remember that Twig has two main language constructs:

* ``{{ }}``: used to print the result of an expression evaluation;

* ``{% %}``: used to execute statements.

To understand why Twig exposes so many extension points, let's see how to
implement a *Lorem ipsum* generator (it needs to know the number of words to
generate).

You can use a ``lipsum`` *tag*:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% lipsum 40 %}

That works, but using a tag for ``lipsum`` is not a good idea for at least
three main reasons:

* ``lipsum`` is not a language construct;
* The tag outputs something;
* The tag is not flexible as you cannot use it in an expression:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

      {{ 'some text' ~ {% lipsum 40 %} ~ 'some more text' }}

In fact, you rarely need to create tags; and that's good news because tags are
<<<<<<< HEAD
the most complex extension point of Twig.

Now, let's use a ``lipsum`` *filter*:

.. code-block:: jinja

    {{ 40|lipsum }}

Again, it works, but it looks weird. A filter transforms the passed value to
something else but here we use the value to indicate the number of words to
generate (so, ``40`` is an argument of the filter, not the value we want to
transform).

Next, let's use a ``lipsum`` *function*:

.. code-block:: jinja
=======
the most complex extension point.

Now, let's use a ``lipsum`` *filter*:

.. code-block:: twig

    {{ 40|lipsum }}

Again, it works. But a filter should transform the passed value to something
else. Here, we use the value to indicate the number of words to generate (so,
``40`` is an argument of the filter, not the value we want to transform).

Next, let's use a ``lipsum`` *function*:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ lipsum(40) }}

Here we go. For this specific example, the creation of a function is the
extension point to use. And you can use it anywhere an expression is accepted:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ 'some text' ~ lipsum(40) ~ 'some more text' }}

    {% set lipsum = lipsum(40) %}

<<<<<<< HEAD
Last but not the least, you can also use a *global* object with a method able
to generate lorem ipsum text:

.. code-block:: jinja
=======
Lastly, you can also use a *global* object with a method able to generate lorem
ipsum text:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ text.lipsum(40) }}

As a rule of thumb, use functions for frequently used features and global
objects for everything else.

Keep in mind the following when you want to extend Twig:

========== ========================== ========== =========================
What?      Implementation difficulty? How often? When?
========== ========================== ========== =========================
<<<<<<< HEAD
*macro*    trivial                    frequent   Content generation
*global*   trivial                    frequent   Helper object
*function* trivial                    frequent   Content generation
*filter*   trivial                    frequent   Value transformation
*tag*      complex                    rare       DSL language construct
*test*     trivial                    rare       Boolean decision
*operator* trivial                    rare       Values transformation
=======
*macro*    simple                     frequent   Content generation
*global*   simple                     frequent   Helper object
*function* simple                     frequent   Content generation
*filter*   simple                     frequent   Value transformation
*tag*      complex                    rare       DSL language construct
*test*     simple                     rare       Boolean decision
*operator* simple                     rare       Values transformation
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
========== ========================== ========== =========================

Globals
-------

A global variable is like any other template variable, except that it's
available in all templates and macros::

<<<<<<< HEAD
    $twig = new Twig_Environment($loader);
=======
    $twig = new \Twig\Environment($loader);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    $twig->addGlobal('text', new Text());

You can then use the ``text`` variable anywhere in a template:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ text.lipsum(40) }}

Filters
-------

<<<<<<< HEAD
Creating a filter is as simple as associating a name with a PHP callable::

    // an anonymous function
    $filter = new Twig_SimpleFilter('rot13', function ($string) {
=======
Creating a filter consists of associating a name with a PHP callable::

    // an anonymous function
    $filter = new \Twig\TwigFilter('rot13', function ($string) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        return str_rot13($string);
    });

    // or a simple PHP function
<<<<<<< HEAD
    $filter = new Twig_SimpleFilter('rot13', 'str_rot13');

    // or a class static method
    $filter = new Twig_SimpleFilter('rot13', array('SomeClass', 'rot13Filter'));
    $filter = new Twig_SimpleFilter('rot13', 'SomeClass::rot13Filter');

    // or a class method
    $filter = new Twig_SimpleFilter('rot13', array($this, 'rot13Filter'));
    // the one below needs a runtime implementation (see below for more information)
    $filter = new Twig_SimpleFilter('rot13', array('SomeClass', 'rot13Filter'));

The first argument passed to the ``Twig_SimpleFilter`` constructor is the name
of the filter you will use in templates and the second one is the PHP callable
to associate with it.

Then, add the filter to your Twig environment::

    $twig = new Twig_Environment($loader);
=======
    $filter = new \Twig\TwigFilter('rot13', 'str_rot13');

    // or a class static method
    $filter = new \Twig\TwigFilter('rot13', ['SomeClass', 'rot13Filter']);
    $filter = new \Twig\TwigFilter('rot13', 'SomeClass::rot13Filter');

    // or a class method
    $filter = new \Twig\TwigFilter('rot13', [$this, 'rot13Filter']);
    // the one below needs a runtime implementation (see below for more information)
    $filter = new \Twig\TwigFilter('rot13', ['SomeClass', 'rot13Filter']);

The first argument passed to the ``\Twig\TwigFilter`` constructor is the name
of the filter you will use in templates and the second one is the PHP callable
to associate with it.

Then, add the filter to the Twig environment::

    $twig = new \Twig\Environment($loader);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    $twig->addFilter($filter);

And here is how to use it in a template:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ 'Twig'|rot13 }}

    {# will output Gjvt #}

When called by Twig, the PHP callable receives the left side of the filter
(before the pipe ``|``) as the first argument and the extra arguments passed
to the filter (within parentheses ``()``) as extra arguments.

For instance, the following code:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ 'TWIG'|lower }}
    {{ now|date('d/m/Y') }}

is compiled to something like the following::

    <?php echo strtolower('TWIG') ?>
    <?php echo twig_date_format_filter($now, 'd/m/Y') ?>

<<<<<<< HEAD
The ``Twig_SimpleFilter`` class takes an array of options as its last
argument::

    $filter = new Twig_SimpleFilter('rot13', 'str_rot13', $options);
=======
The ``\Twig\TwigFilter`` class takes an array of options as its last
argument::

    $filter = new \Twig\TwigFilter('rot13', 'str_rot13', $options);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Environment-aware Filters
~~~~~~~~~~~~~~~~~~~~~~~~~

If you want to access the current environment instance in your filter, set the
``needs_environment`` option to ``true``; Twig will pass the current
environment as the first argument to the filter call::

<<<<<<< HEAD
    $filter = new Twig_SimpleFilter('rot13', function (Twig_Environment $env, $string) {
=======
    $filter = new \Twig\TwigFilter('rot13', function (Twig_Environment $env, $string) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        // get the current charset for instance
        $charset = $env->getCharset();

        return str_rot13($string);
<<<<<<< HEAD
    }, array('needs_environment' => true));
=======
    }, ['needs_environment' => true]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Context-aware Filters
~~~~~~~~~~~~~~~~~~~~~

If you want to access the current context in your filter, set the
``needs_context`` option to ``true``; Twig will pass the current context as
the first argument to the filter call (or the second one if
``needs_environment`` is also set to ``true``)::

<<<<<<< HEAD
    $filter = new Twig_SimpleFilter('rot13', function ($context, $string) {
        // ...
    }, array('needs_context' => true));

    $filter = new Twig_SimpleFilter('rot13', function (Twig_Environment $env, $context, $string) {
        // ...
    }, array('needs_context' => true, 'needs_environment' => true));
=======
    $filter = new \Twig\TwigFilter('rot13', function ($context, $string) {
        // ...
    }, ['needs_context' => true]);

    $filter = new \Twig\TwigFilter('rot13', function (Twig_Environment $env, $context, $string) {
        // ...
    }, ['needs_context' => true, 'needs_environment' => true]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Automatic Escaping
~~~~~~~~~~~~~~~~~~

If automatic escaping is enabled, the output of the filter may be escaped
before printing. If your filter acts as an escaper (or explicitly outputs HTML
or JavaScript code), you will want the raw output to be printed. In such a
case, set the ``is_safe`` option::

<<<<<<< HEAD
    $filter = new Twig_SimpleFilter('nl2br', 'nl2br', array('is_safe' => array('html')));
=======
    $filter = new \Twig\TwigFilter('nl2br', 'nl2br', ['is_safe' => ['html']]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Some filters may need to work on input that is already escaped or safe, for
example when adding (safe) HTML tags to originally unsafe output. In such a
case, set the ``pre_escape`` option to escape the input data before it is run
through your filter::

<<<<<<< HEAD
    $filter = new Twig_SimpleFilter('somefilter', 'somefilter', array('pre_escape' => 'html', 'is_safe' => array('html')));
=======
    $filter = new \Twig\TwigFilter('somefilter', 'somefilter', ['pre_escape' => 'html', 'is_safe' => ['html']]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Variadic Filters
~~~~~~~~~~~~~~~~

.. versionadded:: 1.19
    Support for variadic filters was added in Twig 1.19.

When a filter should accept an arbitrary number of arguments, set the
``is_variadic`` option to ``true``; Twig will pass the extra arguments as the
last argument to the filter call as an array::

<<<<<<< HEAD
    $filter = new Twig_SimpleFilter('thumbnail', function ($file, array $options = array()) {
        // ...
    }, array('is_variadic' => true));

Be warned that named arguments passed to a variadic filter cannot be checked
for validity as they will automatically end up in the option array.
=======
    $filter = new \Twig\TwigFilter('thumbnail', function ($file, array $options = []) {
        // ...
    }, ['is_variadic' => true]);

Be warned that :ref:`named arguments <named-arguments>` passed to a variadic
filter cannot be checked for validity as they will automatically end up in the
option array.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Dynamic Filters
~~~~~~~~~~~~~~~

<<<<<<< HEAD
A filter name containing the special ``*`` character is a dynamic filter as
the ``*`` can be any string::

    $filter = new Twig_SimpleFilter('*_path', function ($name, $arguments) {
        // ...
    });

The following filters will be matched by the above defined dynamic filter:
=======
A filter name containing the special ``*`` character is a dynamic filter and
the ``*`` part will match any string::

    $filter = new \Twig\TwigFilter('*_path', function ($name, $arguments) {
        // ...
    });

The following filters are matched by the above defined dynamic filter:
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

* ``product_path``
* ``category_path``

A dynamic filter can define more than one dynamic parts::

<<<<<<< HEAD
    $filter = new Twig_SimpleFilter('*_path_*', function ($name, $suffix, $arguments) {
        // ...
    });

The filter will receive all dynamic part values before the normal filter
arguments, but after the environment and the context. For instance, a call to
``'foo'|a_path_b()`` will result in the following arguments to be passed to
the filter: ``('a', 'b', 'foo')``.
=======
    $filter = new \Twig\TwigFilter('*_path_*', function ($name, $suffix, $arguments) {
        // ...
    });

The filter receives all dynamic part values before the normal filter arguments,
but after the environment and the context. For instance, a call to
``'foo'|a_path_b()`` will result in the following arguments to be passed to the
filter: ``('a', 'b', 'foo')``.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Deprecated Filters
~~~~~~~~~~~~~~~~~~

.. versionadded:: 1.21
    Support for deprecated filters was added in Twig 1.21.

You can mark a filter as being deprecated by setting the ``deprecated`` option
to ``true``. You can also give an alternative filter that replaces the
deprecated one when that makes sense::

<<<<<<< HEAD
    $filter = new Twig_SimpleFilter('obsolete', function () {
        // ...
    }, array('deprecated' => true, 'alternative' => 'new_one'));
=======
    $filter = new \Twig\TwigFilter('obsolete', function () {
        // ...
    }, ['deprecated' => true, 'alternative' => 'new_one']);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

When a filter is deprecated, Twig emits a deprecation notice when compiling a
template using it. See :ref:`deprecation-notices` for more information.

Functions
---------

Functions are defined in the exact same way as filters, but you need to create
<<<<<<< HEAD
an instance of ``Twig_SimpleFunction``::

    $twig = new Twig_Environment($loader);
    $function = new Twig_SimpleFunction('function_name', function () {
=======
an instance of ``\Twig\TwigFunction``::

    $twig = new \Twig\Environment($loader);
    $function = new \Twig\TwigFunction('function_name', function () {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        // ...
    });
    $twig->addFunction($function);

Functions support the same features as filters, except for the ``pre_escape``
and ``preserves_safety`` options.

Tests
-----

Tests are defined in the exact same way as filters and functions, but you need
<<<<<<< HEAD
to create an instance of ``Twig_SimpleTest``::

    $twig = new Twig_Environment($loader);
    $test = new Twig_SimpleTest('test_name', function () {
=======
to create an instance of ``\Twig\TwigTest``::

    $twig = new \Twig\Environment($loader);
    $test = new \Twig\TwigTest('test_name', function () {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        // ...
    });
    $twig->addTest($test);

Tests allow you to create custom application specific logic for evaluating
boolean conditions. As a simple example, let's create a Twig test that checks if
objects are 'red'::

<<<<<<< HEAD
    $twig = new Twig_Environment($loader);
    $test = new Twig_SimpleTest('red', function ($value) {
=======
    $twig = new \Twig\Environment($loader);
    $test = new \Twig\TwigTest('red', function ($value) {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        if (isset($value->color) && $value->color == 'red') {
            return true;
        }
        if (isset($value->paint) && $value->paint == 'red') {
            return true;
        }
        return false;
    });
    $twig->addTest($test);

<<<<<<< HEAD
Test functions should always return true/false.
=======
Test functions must always return ``true``/``false``.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

When creating tests you can use the ``node_class`` option to provide custom test
compilation. This is useful if your test can be compiled into PHP primitives.
This is used by many of the tests built into Twig::

<<<<<<< HEAD
    $twig = new Twig_Environment($loader);
    $test = new Twig_SimpleTest(
        'odd',
        null,
        array('node_class' => 'Twig_Node_Expression_Test_Odd'));
    $twig->addTest($test);

    class Twig_Node_Expression_Test_Odd extends Twig_Node_Expression_Test
    {
        public function compile(Twig_Compiler $compiler)
=======
    $twig = new \Twig\Environment($loader);
    $test = new \Twig\TwigTest(
        'odd',
        null,
        ['node_class' => '\Twig\Node\Expression\Test\OddTest']);
    $twig->addTest($test);

    class Twig_Node_Expression_Test_Odd extends \Twig\Node\Expression\TestExpression
    {
        public function compile(\Twig\Compiler $compiler)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        {
            $compiler
                ->raw('(')
                ->subcompile($this->getNode('node'))
                ->raw(' % 2 == 1')
                ->raw(')')
            ;
        }
    }

<<<<<<< HEAD
The above example shows how you can create tests that use a node class. The
node class has access to one sub-node called 'node'. This sub-node contains the
value that is being tested. When the ``odd`` filter is used in code such as:

.. code-block:: jinja
=======
The above example shows how you can create tests that use a node class. The node
class has access to one sub-node called ``node``. This sub-node contains the
value that is being tested. When the ``odd`` filter is used in code such as:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if my_value is odd %}

The ``node`` sub-node will contain an expression of ``my_value``. Node-based
tests also have access to the ``arguments`` node. This node will contain the
various other arguments that have been provided to your test.

<<<<<<< HEAD
If you want to pass a variable number of positional or named arguments to the
test, set the ``is_variadic`` option to ``true``. Tests also support dynamic
name feature as filters and functions.
=======
.. versionadded:: 1.36
    Dynamic tests support was added in Twig 1.36.

If you want to pass a variable number of positional or named arguments to the
test, set the ``is_variadic`` option to ``true``. Tests support dynamic
names (see dynamic filters for the syntax).
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Tags
----

One of the most exciting features of a template engine like Twig is the
<<<<<<< HEAD
possibility to define new language constructs. This is also the most complex
feature as you need to understand how Twig's internals work.

Let's create a simple ``set`` tag that allows the definition of simple
variables from within a template. The tag can be used like follows:

.. code-block:: jinja
=======
possibility to define new **language constructs**. This is also the most complex
feature as you need to understand how Twig's internals work.

Most of the time though, a tag is not needed:

* If your tag generates some output, use a **function** instead.

* If your tag modifies some content and returns it, use a **filter** instead.

  For instance, if you want to create a tag that converts a Markdown formatted
  text to HTML, create a ``markdown`` filter instead:

  .. code-block:: twig

      {{ '**markdown** text'|markdown }}

  If you want use this filter on large amounts of text, wrap it with the
  :doc:`apply <tags/apply>` tag:

  .. code-block:: twig

      {% apply markdown %}
      Title
      =====

      Much better than creating a tag as you can **compose** filters.
      {% endapply %}

 .. note::

      The ``apply`` tag was introduced in Twig 1.40; use the ``filter`` tag with
      previous versions.

* If your tag does not output anything, but only exists because of a side
  effect, create a **function** that returns nothing and call it via the
  :doc:`filter <tags/do>` tag.

  For instance, if you want to create a tag that logs text, create a ``log``
  function instead and call it via the :doc:`do <tags/do>` tag:

  .. code-block:: twig

      {% do log('Log some things') %}

If you still want to create a tag for a new language construct, great!

Let's create a ``set`` tag that allows the definition of simple variables from
within a template. The tag can be used like follows:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% set name = "value" %}

    {{ name }}

    {# should output value #}

.. note::

    The ``set`` tag is part of the Core extension and as such is always
    available. The built-in version is slightly more powerful and supports
<<<<<<< HEAD
    multiple assignments by default (cf. the template designers chapter for
    more information).
=======
    multiple assignments by default.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Three steps are needed to define a new tag:

* Defining a Token Parser class (responsible for parsing the template code);

* Defining a Node class (responsible for converting the parsed code to PHP);

* Registering the tag.

Registering a new tag
~~~~~~~~~~~~~~~~~~~~~

<<<<<<< HEAD
Adding a tag is as simple as calling the ``addTokenParser`` method on the
``Twig_Environment`` instance::

    $twig = new Twig_Environment($loader);
=======
Add a tag by calling the ``addTokenParser`` method on the ``\Twig\Environment``
instance::

    $twig = new \Twig\Environment($loader);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    $twig->addTokenParser(new Project_Set_TokenParser());

Defining a Token Parser
~~~~~~~~~~~~~~~~~~~~~~~

Now, let's see the actual code of this class::

<<<<<<< HEAD
    class Project_Set_TokenParser extends Twig_TokenParser
    {
        public function parse(Twig_Token $token)
=======
    class Project_Set_TokenParser extends \Twig\TokenParser\AbstractTokenParser
    {
        public function parse(\Twig\Token $token)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        {
            $parser = $this->parser;
            $stream = $parser->getStream();

<<<<<<< HEAD
            $name = $stream->expect(Twig_Token::NAME_TYPE)->getValue();
            $stream->expect(Twig_Token::OPERATOR_TYPE, '=');
            $value = $parser->getExpressionParser()->parseExpression();
            $stream->expect(Twig_Token::BLOCK_END_TYPE);
=======
            $name = $stream->expect(\Twig\Token::NAME_TYPE)->getValue();
            $stream->expect(\Twig\Token::OPERATOR_TYPE, '=');
            $value = $parser->getExpressionParser()->parseExpression();
            $stream->expect(\Twig\Token::BLOCK_END_TYPE);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

            return new Project_Set_Node($name, $value, $token->getLine(), $this->getTag());
        }

        public function getTag()
        {
            return 'set';
        }
    }

The ``getTag()`` method must return the tag we want to parse, here ``set``.

The ``parse()`` method is invoked whenever the parser encounters a ``set``
<<<<<<< HEAD
tag. It should return a ``Twig_Node`` instance that represents the node (the
=======
tag. It should return a ``\Twig\Node\Node`` instance that represents the node (the
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
``Project_Set_Node`` calls creating is explained in the next section).

The parsing process is simplified thanks to a bunch of methods you can call
from the token stream (``$this->parser->getStream()``):

* ``getCurrent()``: Gets the current token in the stream.

* ``next()``: Moves to the next token in the stream, *but returns the old one*.

* ``test($type)``, ``test($value)`` or ``test($type, $value)``: Determines whether
  the current token is of a particular type or value (or both). The value may be an
  array of several possible values.

* ``expect($type[, $value[, $message]])``: If the current token isn't of the given
  type/value a syntax error is thrown. Otherwise, if the type and value are correct,
  the token is returned and the stream moves to the next token.

<<<<<<< HEAD
* ``look()``: Looks a the next token without consuming it.
=======
* ``look()``: Looks at the next token without consuming it.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Parsing expressions is done by calling the ``parseExpression()`` like we did for
the ``set`` tag.

.. tip::

    Reading the existing ``TokenParser`` classes is the best way to learn all
    the nitty-gritty details of the parsing process.

Defining a Node
~~~~~~~~~~~~~~~

<<<<<<< HEAD
The ``Project_Set_Node`` class itself is rather simple::

    class Project_Set_Node extends Twig_Node
    {
        public function __construct($name, Twig_Node_Expression $value, $line, $tag = null)
        {
            parent::__construct(array('value' => $value), array('name' => $name), $line, $tag);
        }

        public function compile(Twig_Compiler $compiler)
=======
The ``Project_Set_Node`` class itself is quite short::

    class Project_Set_Node extends \Twig\Node\Node
    {
        public function __construct($name, \Twig\Node\Expression\AbstractExpression $value, $line, $tag = null)
        {
            parent::__construct(['value' => $value], ['name' => $name], $line, $tag);
        }

        public function compile(\Twig\Compiler $compiler)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        {
            $compiler
                ->addDebugInfo($this)
                ->write('$context[\''.$this->getAttribute('name').'\'] = ')
                ->subcompile($this->getNode('value'))
                ->raw(";\n")
            ;
        }
    }

The compiler implements a fluid interface and provides methods that helps the
developer generate beautiful and readable PHP code:

* ``subcompile()``: Compiles a node.

* ``raw()``: Writes the given string as is.

* ``write()``: Writes the given string by adding indentation at the beginning
  of each line.

* ``string()``: Writes a quoted string.

* ``repr()``: Writes a PHP representation of a given value (see
<<<<<<< HEAD
  ``Twig_Node_For`` for a usage example).
=======
  ``\Twig\Node\ForNode`` for a usage example).
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

* ``addDebugInfo()``: Adds the line of the original template file related to
  the current node as a comment.

<<<<<<< HEAD
* ``indent()``: Indents the generated code (see ``Twig_Node_Block`` for a
  usage example).

* ``outdent()``: Outdents the generated code (see ``Twig_Node_Block`` for a
=======
* ``indent()``: Indents the generated code (see ``\Twig\Node\BlockNode`` for a
  usage example).

* ``outdent()``: Outdents the generated code (see ``\Twig\Node\BlockNode`` for a
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  usage example).

.. _creating_extensions:

Creating an Extension
---------------------

The main motivation for writing an extension is to move often used code into a
reusable class like adding support for internationalization. An extension can
<<<<<<< HEAD
define tags, filters, tests, operators, global variables, functions, and node
visitors.
=======
define tags, filters, tests, operators, functions, and node visitors.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Most of the time, it is useful to create a single extension for your project,
to host all the specific tags and filters you want to add to Twig.

.. tip::

    When packaging your code into an extension, Twig is smart enough to
    recompile your templates whenever you make a change to it (when
    ``auto_reload`` is enabled).

.. note::

    Before writing your own extensions, have a look at the Twig official
<<<<<<< HEAD
    extension repository: http://github.com/twigphp/Twig-extensions.
=======
    extension repository: https://github.com/twigphp/Twig-extensions.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

An extension is a class that implements the following interface::

    interface Twig_ExtensionInterface
    {
        /**
         * Initializes the runtime environment.
         *
         * This is where you can load some file that contains filter functions for instance.
         *
<<<<<<< HEAD
         * @deprecated since 1.23 (to be removed in 2.0), implement Twig_Extension_InitRuntimeInterface instead
         */
        function initRuntime(Twig_Environment $environment);
=======
         * @deprecated since 1.23 (to be removed in 2.0), implement \Twig\Extension\InitRuntimeInterface instead
         */
        function initRuntime(\Twig\Environment $environment);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        /**
         * Returns the token parser instances to add to the existing list.
         *
         * @return (Twig_TokenParserInterface|Twig_TokenParserBrokerInterface)[]
         */
        function getTokenParsers();

        /**
         * Returns the node visitor instances to add to the existing list.
         *
<<<<<<< HEAD
         * @return Twig_NodeVisitorInterface[]
=======
         * @return \Twig\NodeVisitor\NodeVisitorInterface[]
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
         */
        function getNodeVisitors();

        /**
         * Returns a list of filters to add to the existing list.
         *
<<<<<<< HEAD
         * @return Twig_SimpleFilter[]
=======
         * @return \Twig\TwigFilter[]
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
         */
        function getFilters();

        /**
         * Returns a list of tests to add to the existing list.
         *
<<<<<<< HEAD
         * @return Twig_SimpleTest[]
=======
         * @return \Twig\TwigTest[]
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
         */
        function getTests();

        /**
         * Returns a list of functions to add to the existing list.
         *
<<<<<<< HEAD
         * @return Twig_SimpleFunction[]
=======
         * @return \Twig\TwigFunction[]
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
         */
        function getFunctions();

        /**
         * Returns a list of operators to add to the existing list.
         *
         * @return array<array> First array of unary operators, second array of binary operators
         */
        function getOperators();

        /**
         * Returns a list of global variables to add to the existing list.
         *
         * @return array An array of global variables
         *
<<<<<<< HEAD
         * @deprecated since 1.23 (to be removed in 2.0), implement Twig_Extension_GlobalsInterface instead
=======
         * @deprecated since 1.23 (to be removed in 2.0), implement \Twig\Extension\GlobalsInterface instead
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
         */
        function getGlobals();

        /**
         * Returns the name of the extension.
         *
         * @return string The extension name
         *
         * @deprecated since 1.26 (to be removed in 2.0), not used anymore internally
         */
        function getName();
    }

To keep your extension class clean and lean, inherit from the built-in
<<<<<<< HEAD
``Twig_Extension`` class instead of implementing the interface as it provides
empty implementations for all methods:

    class Project_Twig_Extension extends Twig_Extension
    {
    }

Of course, this extension does nothing for now. We will customize it in the
next sections.
=======
``\Twig\Extension\AbstractExtension`` class instead of implementing the interface as it provides
empty implementations for all methods:

    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
    {
    }

This extension does nothing for now. We will customize it in the next sections.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

.. note::

    Prior to Twig 1.26, you must implement the ``getName()`` method which must
    return a unique identifier for the extension.

<<<<<<< HEAD
Twig does not care where you save your extension on the filesystem, as all
extensions must be registered explicitly to be available in your templates.
=======
You can save your extension anywhere on the filesystem, as all extensions must
be registered explicitly to be available in your templates.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

You can register an extension by using the ``addExtension()`` method on your
main ``Environment`` object::

<<<<<<< HEAD
    $twig = new Twig_Environment($loader);
=======
    $twig = new \Twig\Environment($loader);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    $twig->addExtension(new Project_Twig_Extension());

.. tip::

    The Twig core extensions are great examples of how extensions work.

Globals
~~~~~~~

Global variables can be registered in an extension via the ``getGlobals()``
method::

<<<<<<< HEAD
    class Project_Twig_Extension extends Twig_Extension implements Twig_Extension_GlobalsInterface
    {
        public function getGlobals()
        {
            return array(
                'text' => new Text(),
            );
=======
    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension implements \Twig\Extension\GlobalsInterface
    {
        public function getGlobals()
        {
            return [
                'text' => new Text(),
            ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        // ...
    }

Functions
~~~~~~~~~

Functions can be registered in an extension via the ``getFunctions()``
method::

<<<<<<< HEAD
    class Project_Twig_Extension extends Twig_Extension
    {
        public function getFunctions()
        {
            return array(
                new Twig_SimpleFunction('lipsum', 'generate_lipsum'),
            );
=======
    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
    {
        public function getFunctions()
        {
            return [
                new \Twig\TwigFunction('lipsum', 'generate_lipsum'),
            ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        // ...
    }

Filters
~~~~~~~

To add a filter to an extension, you need to override the ``getFilters()``
method. This method must return an array of filters to add to the Twig
environment::

<<<<<<< HEAD
    class Project_Twig_Extension extends Twig_Extension
    {
        public function getFilters()
        {
            return array(
                new Twig_SimpleFilter('rot13', 'str_rot13'),
            );
=======
    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
    {
        public function getFilters()
        {
            return [
                new \Twig\TwigFilter('rot13', 'str_rot13'),
            ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        // ...
    }

Tags
~~~~

Adding a tag in an extension can be done by overriding the
``getTokenParsers()`` method. This method must return an array of tags to add
to the Twig environment::

<<<<<<< HEAD
    class Project_Twig_Extension extends Twig_Extension
    {
        public function getTokenParsers()
        {
            return array(new Project_Set_TokenParser());
=======
    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
    {
        public function getTokenParsers()
        {
            return [new Project_Set_TokenParser()];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        // ...
    }

In the above code, we have added a single new tag, defined by the
``Project_Set_TokenParser`` class. The ``Project_Set_TokenParser`` class is
responsible for parsing the tag and compiling it to PHP.

Operators
~~~~~~~~~

The ``getOperators()`` methods lets you add new operators. Here is how to add
<<<<<<< HEAD
``!``, ``||``, and ``&&`` operators::

    class Project_Twig_Extension extends Twig_Extension
    {
        public function getOperators()
        {
            return array(
                array(
                    '!' => array('precedence' => 50, 'class' => 'Twig_Node_Expression_Unary_Not'),
                ),
                array(
                    '||' => array('precedence' => 10, 'class' => 'Twig_Node_Expression_Binary_Or', 'associativity' => Twig_ExpressionParser::OPERATOR_LEFT),
                    '&&' => array('precedence' => 15, 'class' => 'Twig_Node_Expression_Binary_And', 'associativity' => Twig_ExpressionParser::OPERATOR_LEFT),
                ),
            );
=======
the ``!``, ``||``, and ``&&`` operators::

    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
    {
        public function getOperators()
        {
            return [
                [
                    '!' => ['precedence' => 50, 'class' => '\Twig\Node\Expression\Unary\NotUnary'],
                ],
                [
                    '||' => ['precedence' => 10, 'class' => '\Twig\Node\Expression\Binary\OrBinary', 'associativity' => \Twig\ExpressionParser::OPERATOR_LEFT],
                    '&&' => ['precedence' => 15, 'class' => '\Twig\Node\Expression\Binary\AndBinary', 'associativity' => \Twig\ExpressionParser::OPERATOR_LEFT],
                ],
            ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        // ...
    }

Tests
~~~~~

The ``getTests()`` method lets you add new test functions::

<<<<<<< HEAD
    class Project_Twig_Extension extends Twig_Extension
    {
        public function getTests()
        {
            return array(
                new Twig_SimpleTest('even', 'twig_test_even'),
            );
=======
    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
    {
        public function getTests()
        {
            return [
                new \Twig\TwigTest('even', 'twig_test_even'),
            ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        // ...
    }

Definition vs Runtime
~~~~~~~~~~~~~~~~~~~~~

Twig filters, functions, and tests runtime implementations can be defined as
any valid PHP callable:

* **functions/static methods**: Simple to implement and fast (used by all Twig
  core extensions); but it is hard for the runtime to depend on external
  objects;

* **closures**: Simple to implement;

* **object methods**: More flexible and required if your runtime code depends
  on external objects.

The simplest way to use methods is to define them on the extension itself::

<<<<<<< HEAD
    class Project_Twig_Extension extends Twig_Extension
=======
    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        private $rot13Provider;

        public function __construct($rot13Provider)
        {
            $this->rot13Provider = $rot13Provider;
        }

        public function getFunctions()
        {
<<<<<<< HEAD
            return array(
                new Twig_SimpleFunction('rot13', array($this, 'rot13')),
            );
=======
            return [
                new \Twig\TwigFunction('rot13', [$this, 'rot13']),
            ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        public function rot13($value)
        {
<<<<<<< HEAD
            return $rot13Provider->rot13($value);
=======
            return $this->rot13Provider->rot13($value);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

This is very convenient but not recommended as it makes template compilation
depend on runtime dependencies even if they are not needed (think for instance
as a dependency that connects to a database engine).

As of Twig 1.26, you can easily decouple the extension definitions from their
<<<<<<< HEAD
runtime implementations by registering a ``Twig_RuntimeLoaderInterface``
instance on the environment that knows how to instantiate such runtime classes
(runtime classes must be autoload-able)::

    class RuntimeLoader implements Twig_RuntimeLoaderInterface
=======
runtime implementations by registering a ``\Twig\RuntimeLoader\RuntimeLoaderInterface``
instance on the environment that knows how to instantiate such runtime classes
(runtime classes must be autoload-able)::

    class RuntimeLoader implements \Twig\RuntimeLoader\RuntimeLoaderInterface
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        public function load($class)
        {
            // implement the logic to create an instance of $class
            // and inject its dependencies
            // most of the time, it means using your dependency injection container
            if ('Project_Twig_RuntimeExtension' === $class) {
                return new $class(new Rot13Provider());
            } else {
                // ...
            }
        }
    }

    $twig->addRuntimeLoader(new RuntimeLoader());

<<<<<<< HEAD
It is now possible to move the runtime logic to a new
``Project_Twig_RuntimeExtension`` class and use it directly in the extension::

    class Project_Twig_RuntimeExtension extends Twig_Extension
=======
.. note::

    As of Twig 1.32, Twig comes with a PSR-11 compatible runtime loader
    (``\Twig\RuntimeLoader\ContainerRuntimeLoader``).

It is now possible to move the runtime logic to a new
``Project_Twig_RuntimeExtension`` class and use it directly in the extension::

    class Project_Twig_RuntimeExtension
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        private $rot13Provider;

        public function __construct($rot13Provider)
        {
            $this->rot13Provider = $rot13Provider;
        }

        public function rot13($value)
        {
<<<<<<< HEAD
            return $rot13Provider->rot13($value);
        }
    }

    class Project_Twig_Extension extends Twig_Extension
    {
        public function getFunctions()
        {
            return array(
                new Twig_SimpleFunction('rot13', array('Project_Twig_RuntimeExtension', 'rot13')),
                // or
                new Twig_SimpleFunction('rot13', 'Project_Twig_RuntimeExtension::rot13'),
            );
        }
    }

Overloading
-----------

To overload an already defined filter, test, operator, global variable, or
function, re-define it in an extension and register it **as late as
possible** (order matters)::

    class MyCoreExtension extends Twig_Extension
    {
        public function getFilters()
        {
            return array(
                new Twig_SimpleFilter('date', array($this, 'dateFilter')),
            );
        }

        public function dateFilter($timestamp, $format = 'F j, Y H:i')
        {
            // do something different from the built-in date filter
        }
    }

    $twig = new Twig_Environment($loader);
    $twig->addExtension(new MyCoreExtension());

Here, we have overloaded the built-in ``date`` filter with a custom one.

If you do the same on the ``Twig_Environment`` itself, beware that it takes
precedence over any other registered extensions::

    $twig = new Twig_Environment($loader);
    $twig->addFilter(new Twig_SimpleFilter('date', function ($timestamp, $format = 'F j, Y H:i') {
        // do something different from the built-in date filter
    }));
    // the date filter will come from the above registration, not
    // from the registered extension below
    $twig->addExtension(new MyCoreExtension());

.. caution::

    Note that overloading the built-in Twig elements is not recommended as it
    might be confusing.

=======
            return $this->rot13Provider->rot13($value);
        }
    }

    class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
    {
        public function getFunctions()
        {
            return [
                new \Twig\TwigFunction('rot13', ['Project_Twig_RuntimeExtension', 'rot13']),
                // or
                new \Twig\TwigFunction('rot13', 'Project_Twig_RuntimeExtension::rot13'),
            ];
        }
    }

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
Testing an Extension
--------------------

Functional Tests
~~~~~~~~~~~~~~~~

<<<<<<< HEAD
You can create functional tests for extensions simply by creating the
following file structure in your test directory::
=======
You can create functional tests for extensions by creating the following file
structure in your test directory::
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    Fixtures/
        filters/
            foo.test
            bar.test
        functions/
            foo.test
            bar.test
        tags/
            foo.test
            bar.test
    IntegrationTest.php

The ``IntegrationTest.php`` file should look like this::

<<<<<<< HEAD
    class Project_Tests_IntegrationTest extends Twig_Test_IntegrationTestCase
    {
        public function getExtensions()
        {
            return array(
                new Project_Twig_Extension1(),
                new Project_Twig_Extension2(),
            );
=======
    class Project_Tests_IntegrationTest extends \Twig\Test\IntegrationTestCase
    {
        public function getExtensions()
        {
            return [
                new Project_Twig_Extension1(),
                new Project_Twig_Extension2(),
            ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        public function getFixturesDir()
        {
            return dirname(__FILE__).'/Fixtures/';
        }
    }

Fixtures examples can be found within the Twig repository
`tests/Twig/Fixtures`_ directory.

Node Tests
~~~~~~~~~~

Testing the node visitors can be complex, so extend your test cases from
<<<<<<< HEAD
``Twig_Test_NodeTestCase``. Examples can be found in the Twig repository
`tests/Twig/Node`_ directory.

.. _`rot13`:                   http://www.php.net/manual/en/function.str-rot13.php
=======
``\Twig\Test\NodeTestCase``. Examples can be found in the Twig repository
`tests/Twig/Node`_ directory.

.. _`rot13`:                   https://secure.php.net/manual/en/function.str-rot13.php
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
.. _`tests/Twig/Fixtures`:     https://github.com/twigphp/Twig/tree/master/test/Twig/Tests/Fixtures
.. _`tests/Twig/Node`:         https://github.com/twigphp/Twig/tree/master/test/Twig/Tests/Node
