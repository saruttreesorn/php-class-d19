Twig Internals
==============

Twig is very extensible and you can easily hack it. Keep in mind that you
should probably try to create an extension before hacking the core, as most
features and enhancements can be handled with extensions. This chapter is also
useful for people who want to understand how Twig works under the hood.

How does Twig work?
-------------------

The rendering of a Twig template can be summarized into four key steps:

* **Load** the template: If the template is already compiled, load it and go
  to the *evaluation* step, otherwise:

  * First, the **lexer** tokenizes the template source code into small pieces
    for easier processing;
<<<<<<< HEAD
  * Then, the **parser** converts the token stream into a meaningful tree
    of nodes (the Abstract Syntax Tree);
  * Eventually, the *compiler* transforms the AST into PHP code.

* **Evaluate** the template: It basically means calling the ``display()``
=======

  * Then, the **parser** converts the token stream into a meaningful tree
    of nodes (the Abstract Syntax Tree);

  * Finally, the *compiler* transforms the AST into PHP code.

* **Evaluate** the template: It means calling the ``display()``
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  method of the compiled template and passing it the context.

The Lexer
---------

The lexer tokenizes a template source code into a token stream (each token is
<<<<<<< HEAD
an instance of ``Twig_Token``, and the stream is an instance of
``Twig_TokenStream``). The default lexer recognizes 13 different token types:

* ``Twig_Token::BLOCK_START_TYPE``, ``Twig_Token::BLOCK_END_TYPE``: Delimiters for blocks (``{% %}``)
* ``Twig_Token::VAR_START_TYPE``, ``Twig_Token::VAR_END_TYPE``: Delimiters for variables (``{{ }}``)
* ``Twig_Token::TEXT_TYPE``: A text outside an expression;
* ``Twig_Token::NAME_TYPE``: A name in an expression;
* ``Twig_Token::NUMBER_TYPE``: A number in an expression;
* ``Twig_Token::STRING_TYPE``: A string in an expression;
* ``Twig_Token::OPERATOR_TYPE``: An operator;
* ``Twig_Token::PUNCTUATION_TYPE``: A punctuation sign;
* ``Twig_Token::INTERPOLATION_START_TYPE``, ``Twig_Token::INTERPOLATION_END_TYPE`` (as of Twig 1.5): Delimiters for string interpolation;
* ``Twig_Token::EOF_TYPE``: Ends of template.
=======
an instance of ``\Twig\Token``, and the stream is an instance of
``\Twig\TokenStream``). The default lexer recognizes 13 different token types:

* ``\Twig\Token::BLOCK_START_TYPE``, ``\Twig\Token::BLOCK_END_TYPE``: Delimiters for blocks (``{% %}``)
* ``\Twig\Token::VAR_START_TYPE``, ``\Twig\Token::VAR_END_TYPE``: Delimiters for variables (``{{ }}``)
* ``\Twig\Token::TEXT_TYPE``: A text outside an expression;
* ``\Twig\Token::NAME_TYPE``: A name in an expression;
* ``\Twig\Token::NUMBER_TYPE``: A number in an expression;
* ``\Twig\Token::STRING_TYPE``: A string in an expression;
* ``\Twig\Token::OPERATOR_TYPE``: An operator;
* ``\Twig\Token::PUNCTUATION_TYPE``: A punctuation sign;
* ``\Twig\Token::INTERPOLATION_START_TYPE``, ``\Twig\Token::INTERPOLATION_END_TYPE`` (as of Twig 1.5): Delimiters for string interpolation;
* ``\Twig\Token::EOF_TYPE``: Ends of template.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

You can manually convert a source code into a token stream by calling the
``tokenize()`` method of an environment::

<<<<<<< HEAD
    $stream = $twig->tokenize(new Twig_Source($source, $identifier));

.. versionadded:: 1.27
    ``Twig_Source`` was introduced in version 1.27, pass the source and the
=======
    $stream = $twig->tokenize(new \Twig\Source($source, $identifier));

.. versionadded:: 1.27
    ``\Twig\Source`` was introduced in version 1.27, pass the source and the
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    identifier directly on previous versions.

As the stream has a ``__toString()`` method, you can have a textual
representation of it by echoing the object::

    echo $stream."\n";

Here is the output for the ``Hello {{ name }}`` template:

.. code-block:: text

    TEXT_TYPE(Hello )
    VAR_START_TYPE()
    NAME_TYPE(name)
    VAR_END_TYPE()
    EOF_TYPE()

.. note::

<<<<<<< HEAD
    The default lexer (``Twig_Lexer``) can be changed by calling
=======
    The default lexer (``\Twig\Lexer``) can be changed by calling
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    the ``setLexer()`` method::

        $twig->setLexer($lexer);

The Parser
----------

The parser converts the token stream into an AST (Abstract Syntax Tree), or a
<<<<<<< HEAD
node tree (an instance of ``Twig_Node_Module``). The core extension defines
=======
node tree (an instance of ``\Twig\Node\ModuleNode``). The core extension defines
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
the basic nodes like: ``for``, ``if``, ... and the expression nodes.

You can manually convert a token stream into a node tree by calling the
``parse()`` method of an environment::

    $nodes = $twig->parse($stream);

Echoing the node object gives you a nice representation of the tree::

    echo $nodes."\n";

Here is the output for the ``Hello {{ name }}`` template:

.. code-block:: text

<<<<<<< HEAD
    Twig_Node_Module(
      Twig_Node_Text(Hello )
      Twig_Node_Print(
        Twig_Node_Expression_Name(name)
=======
    \Twig\Node\ModuleNode(
      \Twig\Node\TextNode(Hello )
      \Twig\Node\PrintNode(
        \Twig\Node\Expression\NameExpression(name)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
      )
    )

.. note::

<<<<<<< HEAD
    The default parser (``Twig_TokenParser``) can be changed by calling the
=======
    The default parser (``\Twig\TokenParser\AbstractTokenParser``) can be changed by calling the
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    ``setParser()`` method::

        $twig->setParser($parser);

The Compiler
------------

The last step is done by the compiler. It takes a node tree as an input and
generates PHP code usable for runtime execution of the template.

You can manually compile a node tree to PHP code with the ``compile()`` method
of an environment::

    $php = $twig->compile($nodes);

The generated template for a ``Hello {{ name }}`` template reads as follows
(the actual output can differ depending on the version of Twig you are
using)::

    /* Hello {{ name }} */
<<<<<<< HEAD
    class __TwigTemplate_1121b6f109fe93ebe8c6e22e3712bceb extends Twig_Template
    {
        protected function doDisplay(array $context, array $blocks = array())
        {
            // line 1
            echo "Hello ";
            echo twig_escape_filter($this->env, isset($context["name"]) ? $context["name"] : null), "html", null, true);
=======
    class __TwigTemplate_1121b6f109fe93ebe8c6e22e3712bceb extends \Twig\Template
    {
        protected function doDisplay(array $context, array $blocks = [])
        {
            // line 1
            echo "Hello ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        // some more code
    }

.. note::

<<<<<<< HEAD
    The default compiler (``Twig_Compiler``) can be changed by calling the
=======
    The default compiler (``\Twig\Compiler``) can be changed by calling the
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    ``setCompiler()`` method::

        $twig->setCompiler($compiler);
