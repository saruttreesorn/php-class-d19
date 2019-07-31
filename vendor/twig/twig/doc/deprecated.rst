Deprecated Features
===================

This document lists all deprecated features in Twig. Deprecated features are
kept for backward compatibility and removed in the next major release (a
feature that was deprecated in Twig 1.x is removed in Twig 2.0).

Deprecation Notices
-------------------

As of Twig 1.21, Twig generates deprecation notices when a template uses
deprecated features. See :ref:`deprecation-notices` for more information.

Macros
------

As of Twig 2.0, macros imported in a file are not available in child templates
anymore (via an ``include`` call for instance). You need to import macros
explicitly in each file where you are using them.

Token Parsers
-------------

* As of Twig 1.x, the token parser broker sub-system is deprecated. The
  following class and interface will be removed in 2.0:

  * ``Twig_TokenParserBrokerInterface``
  * ``Twig_TokenParserBroker``

<<<<<<< HEAD
* As of Twig 1.27, ``Twig_Parser::getFilename()`` is deprecated. From a token
  parser, use ``$this->parser->getStream()->getSourceContext()->getPath()`` instead.

* As of Twig 1.27, ``Twig_Parser::getEnvironment()`` is deprecated.
=======
* As of Twig 1.27, ``\Twig\Parser::getFilename()`` is deprecated. From a token
  parser, use ``$this->parser->getStream()->getSourceContext()->getPath()`` instead.

* As of Twig 1.27, ``\Twig\Parser::getEnvironment()`` is deprecated.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Extensions
----------

* As of Twig 1.x, the ability to remove an extension is deprecated and the
<<<<<<< HEAD
  ``Twig_Environment::removeExtension()`` method will be removed in 2.0.

* As of Twig 1.23, the ``Twig_ExtensionInterface::initRuntime()`` method is
=======
  ``\Twig\Environment::removeExtension()`` method will be removed in 2.0.

* As of Twig 1.23, the ``\Twig\Extension\ExtensionInterface::initRuntime()`` method is
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  deprecated. You have two options to avoid the deprecation notice: if you
  implement this method to store the environment for your custom filters,
  functions, or tests, use the ``needs_environment`` option instead; if you
  have more complex needs, explicitly implement
<<<<<<< HEAD
  ``Twig_Extension_InitRuntimeInterface`` (not recommended).

* As of Twig 1.23, the ``Twig_ExtensionInterface::getGlobals()`` method is
  deprecated. Implement ``Twig_Extension_GlobalsInterface`` to avoid
  deprecation notices.

* As of Twig 1.26, the ``Twig_ExtensionInterface::getName()`` method is
=======
  ``\Twig\Extension\InitRuntimeInterface`` (not recommended).

* As of Twig 1.23, the ``\Twig\Extension\ExtensionInterface::getGlobals()`` method is
  deprecated. Implement ``\Twig\Extension\GlobalsInterface`` to avoid
  deprecation notices.

* As of Twig 1.26, the ``\Twig\Extension\ExtensionInterface::getName()`` method is
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  deprecated and it is not used internally anymore.

PEAR
----

PEAR support has been discontinued in Twig 1.15.1, and no PEAR packages are
provided anymore. Use Composer instead.

Filters
-------

<<<<<<< HEAD
* As of Twig 1.x, use ``Twig_SimpleFilter`` to add a filter. The following
=======
* As of Twig 1.x, use ``\Twig\TwigFilter`` to add a filter. The following
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  classes and interfaces will be removed in 2.0:

  * ``Twig_FilterInterface``
  * ``Twig_FilterCallableInterface``
  * ``Twig_Filter``
  * ``Twig_Filter_Function``
  * ``Twig_Filter_Method``
  * ``Twig_Filter_Node``

* As of Twig 2.x, the ``Twig_SimpleFilter`` class is deprecated and will be
<<<<<<< HEAD
  removed in Twig 3.x (use ``Twig_Filter`` instead). In Twig 2.x,
  ``Twig_SimpleFilter`` is just an alias for ``Twig_Filter``.
=======
  removed in Twig 3.x (use ``\Twig\TwigFilter`` instead). In Twig 2.x,
  ``Twig_SimpleFilter`` is just an alias for ``\Twig\TwigFilter``.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Functions
---------

<<<<<<< HEAD
* As of Twig 1.x, use ``Twig_SimpleFunction`` to add a function. The following
=======
* As of Twig 1.x, use ``\Twig\TwigFunction`` to add a function. The following
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  classes and interfaces will be removed in 2.0:

  * ``Twig_FunctionInterface``
  * ``Twig_FunctionCallableInterface``
  * ``Twig_Function``
  * ``Twig_Function_Function``
  * ``Twig_Function_Method``
  * ``Twig_Function_Node``

* As of Twig 2.x, the ``Twig_SimpleFunction`` class is deprecated and will be
<<<<<<< HEAD
  removed in Twig 3.x (use ``Twig_Function`` instead). In Twig 2.x,
  ``Twig_SimpleFunction`` is just an alias for ``Twig_Function``.
=======
  removed in Twig 3.x (use ``\Twig\TwigFunction`` instead). In Twig 2.x,
  ``Twig_SimpleFunction`` is just an alias for ``\Twig\TwigFunction``.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Tests
-----

<<<<<<< HEAD
* As of Twig 1.x, use ``Twig_SimpleTest`` to add a test. The following classes
=======
* As of Twig 1.x, use ``\Twig\TwigTest`` to add a test. The following classes
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  and interfaces will be removed in 2.0:

  * ``Twig_TestInterface``
  * ``Twig_TestCallableInterface``
  * ``Twig_Test``
  * ``Twig_Test_Function``
  * ``Twig_Test_Method``
  * ``Twig_Test_Node``

* As of Twig 2.x, the ``Twig_SimpleTest`` class is deprecated and will be
<<<<<<< HEAD
  removed in Twig 3.x (use ``Twig_Test`` instead). In Twig 2.x,
  ``Twig_SimpleTest`` is just an alias for ``Twig_Test``.
=======
  removed in Twig 3.x (use ``\Twig\TwigTest`` instead). In Twig 2.x,
  ``Twig_SimpleTest`` is just an alias for ``\Twig\TwigTest``.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

* The ``sameas`` and ``divisibleby`` tests are deprecated in favor of ``same
  as`` and ``divisible by`` respectively.

Tags
----

* As of Twig 1.x, the ``raw`` tag is deprecated. You should use ``verbatim``
  instead.

Nodes
-----

* As of Twig 1.x, ``Node::toXml()`` is deprecated and will be removed in Twig
  2.0.

<<<<<<< HEAD
* As of Twig 1.26, ``Node::$nodes`` should only contains ``Twig_Node``
  instances, storing a ``null`` value is deprecated and won't be possible in
  Twig 2.x.

* As of Twig 1.27, the ``filename`` attribute on ``Twig_Node_Module`` is
  deprecated. Use ``getName()`` instead.

* As of Twig 1.27, the ``Twig_Node::getFilename()/Twig_Node::getLine()``
  methods are deprecated, use
  ``Twig_Node::getTemplateName()/Twig_Node::getTemplateLine()`` instead.
=======
* As of Twig 1.26, ``Node::$nodes`` should only contains ``\Twig\Node\Node``
  instances, storing a ``null`` value is deprecated and won't be possible in
  Twig 2.x.

* As of Twig 1.27, the ``filename`` attribute on ``\Twig\Node\ModuleNode`` is
  deprecated. Use ``getName()`` instead.

* As of Twig 1.27, the ``\Twig\Node\Node::getFilename()/\Twig\Node\Node::getLine()``
  methods are deprecated, use
  ``\Twig\Node\Node::getTemplateName()/\Twig\Node\Node::getTemplateLine()`` instead.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Interfaces
----------

* As of Twig 2.x, the following interfaces are deprecated and empty (they will
  be removed in Twig 3.0):

<<<<<<< HEAD
* ``Twig_CompilerInterface``     (use ``Twig_Compiler`` instead)
* ``Twig_LexerInterface``        (use ``Twig_Lexer`` instead)
* ``Twig_NodeInterface``         (use ``Twig_Node`` instead)
* ``Twig_ParserInterface``       (use ``Twig_Parser`` instead)
* ``Twig_ExistsLoaderInterface`` (merged with ``Twig_LoaderInterface``)
* ``Twig_SourceContextLoaderInterface`` (merged with ``Twig_LoaderInterface``)
* ``Twig_TemplateInterface``     (use ``Twig_Template`` instead, and use
  those constants Twig_Template::ANY_CALL, Twig_Template::ARRAY_CALL,
  Twig_Template::METHOD_CALL)
=======
* ``Twig_CompilerInterface``     (use ``\Twig\Compiler`` instead)
* ``Twig_LexerInterface``        (use ``\Twig\Lexer`` instead)
* ``Twig_NodeInterface``         (use ``\Twig\Node\Node`` instead)
* ``Twig_ParserInterface``       (use ``\Twig\Parser`` instead)
* ``\Twig\Loader\ExistsLoaderInterface`` (merged with ``\Twig\Loader\LoaderInterface``)
* ``\Twig\Loader\SourceContextLoaderInterface`` (merged with ``\Twig\Loader\LoaderInterface``)
* ``Twig_TemplateInterface``     (use ``\Twig\Template`` instead, and use
  those constants \Twig\Template::ANY_CALL, \Twig\Template::ARRAY_CALL,
  \Twig\Template::METHOD_CALL)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Compiler
--------

<<<<<<< HEAD
* As of Twig 1.26, the ``Twig_Compiler::getFilename()`` has been deprecated.
  You should not use it anyway as its values is not reliable.

* As of Twig 1.27, the ``Twig_Compiler::addIndentation()`` has been deprecated.
  Use ``Twig_Compiler::write('')`` instead.
=======
* As of Twig 1.26, the ``\Twig\Compiler::getFilename()`` has been deprecated.
  You should not use it anyway as its values is not reliable.

* As of Twig 1.27, the ``\Twig\Compiler::addIndentation()`` has been deprecated.
  Use ``\Twig\Compiler::write('')`` instead.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Loaders
-------

* As of Twig 1.x, ``Twig_Loader_String`` is deprecated and will be removed in
<<<<<<< HEAD
  2.0. You can render a string via ``Twig_Environment::createTemplate()``.

* As of Twig 1.27, ``Twig_LoaderInterface::getSource()`` is deprecated.
  Implement ``Twig_SourceContextLoaderInterface`` instead and use
=======
  2.0. You can render a string via ``\Twig\Environment::createTemplate()``.

* As of Twig 1.27, ``\Twig\Loader\LoaderInterface::getSource()`` is deprecated.
  Implement ``\Twig\Loader\SourceContextLoaderInterface`` instead and use
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  ``getSourceContext()``.

Node Visitors
-------------

* Because of the removal of ``Twig_NodeInterface`` in 2.0, you need to extend
<<<<<<< HEAD
  ``Twig_BaseNodeVisitor`` instead of implementing ``Twig_NodeVisitorInterface``
=======
  ``\Twig\NodeVisitor\AbstractNodeVisitor`` instead of implementing ``\Twig\NodeVisitor\NodeVisitorInterface``
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  directly to make your node visitors compatible with both Twig 1.x and 2.x.

Globals
-------

* As of Twig 2.x, the ability to register a global variable after the runtime
  or the extensions have been initialized is not possible anymore (but
  changing the value of an already registered global is possible).

* As of Twig 1.x, using the ``_self`` global variable to get access to the
<<<<<<< HEAD
  current ``Twig_Template`` instance is deprecated; most usages only need the
  current template name, which will continue to work in Twig 2.0. In Twig 2.0,
  ``_self`` returns the current template name instead of the current
  ``Twig_Template`` instance. If you are using ``{{ _self.templateName }}``,
=======
  current ``\Twig\Template`` instance is deprecated; most usages only need the
  current template name, which will continue to work in Twig 2.0. In Twig 2.0,
  ``_self`` returns the current template name instead of the current
  ``\Twig\Template`` instance. If you are using ``{{ _self.templateName }}``,
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  just replace it with ``{{ _self }}``.

Miscellaneous
-------------

<<<<<<< HEAD
* As of Twig 1.x, ``Twig_Environment::clearTemplateCache()``,
  ``Twig_Environment::writeCacheFile()``,
  ``Twig_Environment::clearCacheFiles()``,
  ``Twig_Environment::getCacheFilename()``,
  ``Twig_Environment::getTemplateClassPrefix()``,
  ``Twig_Environment::getLexer()``, ``Twig_Environment::getParser()``, and
  ``Twig_Environment::getCompiler()`` are deprecated and will be removed in 2.0.

* As of Twig 1.x, ``Twig_Template::getEnvironment()`` and
  ``Twig_TemplateInterface::getEnvironment()`` are deprecated and will be
  removed in 2.0.

* As of Twig 1.27, ``Twig_Error::getTemplateFile()`` and
  ``Twig_Error::setTemplateFile()`` are deprecated. Use
  ``Twig_Error::getTemplateName()`` and ``Twig_Error::setTemplateName()``
  instead.

* As of Twig 1.27, ``Twig_Template::getSource()`` is deprecated. Use
  ``Twig_Template::getSourceContext()`` instead.

* As of Twig 1.27, ``Twig_Parser::addHandler()`` and
  ``Twig_Parser::addNodeVisitor()`` are deprecated and will be removed in 2.0.
=======
* As of Twig 1.x, ``\Twig\Environment::clearTemplateCache()``,
  ``\Twig\Environment::writeCacheFile()``,
  ``\Twig\Environment::clearCacheFiles()``,
  ``\Twig\Environment::getCacheFilename()``,
  ``\Twig\Environment::getTemplateClassPrefix()``,
  ``\Twig\Environment::getLexer()``, ``\Twig\Environment::getParser()``, and
  ``\Twig\Environment::getCompiler()`` are deprecated and will be removed in 2.0.

* As of Twig 1.x, ``\Twig\Template::getEnvironment()`` and
  ``Twig_TemplateInterface::getEnvironment()`` are deprecated and will be
  removed in 2.0.

* As of Twig 1.21, setting the environment option ``autoescape`` to ``true`` is
  deprecated and will be removed in 2.0. Use ``"html"`` instead.

* As of Twig 1.27, ``\Twig\Error\Error::getTemplateFile()`` and
  ``\Twig\Error\Error::setTemplateFile()`` are deprecated. Use
  ``\Twig\Error\Error::getTemplateName()`` and ``\Twig\Error\Error::setTemplateName()``
  instead.

* As of Twig 1.27, ``\Twig\Template::getSource()`` is deprecated. Use
  ``\Twig\Template::getSourceContext()`` instead.

* As of Twig 1.27, ``\Twig\Parser::addHandler()`` and
  ``\Twig\Parser::addNodeVisitor()`` are deprecated and will be removed in 2.0.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

* As of Twig 1.29, some classes are marked as being final via the `@final`
  annotation. Those classes will be marked as final in 2.0.
