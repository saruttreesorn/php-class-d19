``include``
===========

The ``include`` statement includes a template and returns the rendered content
<<<<<<< HEAD
of that file into the current namespace:

.. code-block:: jinja
=======
of that file:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% include 'header.html' %}
        Body
    {% include 'footer.html' %}

<<<<<<< HEAD
=======
.. note::

    As of Twig 1.12, it is recommended to use the
    :doc:`include<../functions/include>` function instead as it provides the
    same features with a bit more flexibility:

    * The ``include`` function is semantically more "correct" (including a
      template outputs its rendered contents in the current scope; a tag should
      not display anything);

    * The rendered template can be more easily stored in a variable when using
      the ``include`` function:

      .. code-block:: twig

          {% set content %}{% include 'template.html' %}{% endset %}

          {# vs #}

          {% set content = include('template.html') %}

    * The ``include`` function does not impose any specific order for
      arguments thanks to :ref:`named arguments <named-arguments>`.

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
Included templates have access to the variables of the active context.

If you are using the filesystem loader, the templates are looked for in the
paths defined by it.

You can add additional variables by passing them after the ``with`` keyword:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {# template.html will have access to the variables from the current context and the additional ones provided #}
    {% include 'template.html' with {'foo': 'bar'} %}

    {% set vars = {'foo': 'bar'} %}
    {% include 'template.html' with vars %}

You can disable access to the context by appending the ``only`` keyword:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {# only the foo variable will be accessible #}
    {% include 'template.html' with {'foo': 'bar'} only %}

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {# no variables will be accessible #}
    {% include 'template.html' only %}

.. tip::

    When including a template created by an end user, you should consider
    sandboxing it. More information in the :doc:`Twig for Developers<../api>`
    chapter and in the :doc:`sandbox<../tags/sandbox>` tag documentation.

The template name can be any valid Twig expression:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% include some_var %}
    {% include ajax ? 'ajax.html' : 'not_ajax.html' %}

<<<<<<< HEAD
And if the expression evaluates to a ``Twig_Template`` or a
``Twig_TemplateWrapper`` instance, Twig will use it directly::
=======
And if the expression evaluates to a ``\Twig\Template`` or a
``\Twig\TemplateWrapper`` instance, Twig will use it directly::
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    // {% include template %}

    // deprecated as of Twig 1.28
    $template = $twig->loadTemplate('some_template.twig');

    // as of Twig 1.28
    $template = $twig->load('some_template.twig');

<<<<<<< HEAD
    $twig->display('template.twig', array('template' => $template));
=======
    $twig->display('template.twig', ['template' => $template]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

.. versionadded:: 1.2
    The ``ignore missing`` feature has been added in Twig 1.2.

You can mark an include with ``ignore missing`` in which case Twig will ignore
the statement if the template to be included does not exist. It has to be
placed just after the template name. Here some valid examples:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% include 'sidebar.html' ignore missing %}
    {% include 'sidebar.html' ignore missing with {'foo': 'bar'} %}
    {% include 'sidebar.html' ignore missing only %}

.. versionadded:: 1.2
    The possibility to pass an array of templates has been added in Twig 1.2.

You can also provide a list of templates that are checked for existence before
inclusion. The first template that exists will be included:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% include ['page_detailed.html', 'page.html'] %}

If ``ignore missing`` is given, it will fall back to rendering nothing if none
of the templates exist, otherwise it will throw an exception.
