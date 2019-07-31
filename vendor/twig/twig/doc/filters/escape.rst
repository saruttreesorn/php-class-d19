``escape``
==========

.. versionadded:: 1.9.0
    The ``css``, ``url``, and ``html_attr`` strategies were added in Twig
    1.9.0.

.. versionadded:: 1.14.0
    The ability to define custom escapers was added in Twig 1.14.0.

<<<<<<< HEAD
The ``escape`` filter escapes a string for safe insertion into the final
output. It supports different escaping strategies depending on the template
=======
The ``escape`` filter escapes a string using strategies that depend on the
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
context.

By default, it uses the HTML escaping strategy:

<<<<<<< HEAD
.. code-block:: jinja

    {{ user.username|escape }}

For convenience, the ``e`` filter is defined as an alias:

.. code-block:: jinja

    {{ user.username|e }}
=======
.. code-block:: html+twig

    <p>
        {{ user.username|escape }}
    </p>

For convenience, the ``e`` filter is defined as an alias:

.. code-block:: html+twig

    <p>
        {{ user.username|e }}
    </p>
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

The ``escape`` filter can also be used in other contexts than HTML thanks to
an optional argument which defines the escaping strategy to use:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ user.username|e }}
    {# is equivalent to #}
    {{ user.username|e('html') }}

And here is how to escape variables included in JavaScript code:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ user.username|escape('js') }}
    {{ user.username|e('js') }}

<<<<<<< HEAD
The ``escape`` filter supports the following escaping strategies:

* ``html``: escapes a string for the **HTML body** context.

* ``js``: escapes a string for the **JavaScript context**.

* ``css``: escapes a string for the **CSS context**. CSS escaping can be
  applied to any string being inserted into CSS and escapes everything except
  alphanumerics.

* ``url``: escapes a string for the **URI or parameter contexts**. This should
=======
The ``escape`` filter supports the following escaping strategies for HTML
documents:

* ``html``: escapes a string for the **HTML body** context.

* ``js``: escapes a string for the **JavaScript** context.

* ``css``: escapes a string for the **CSS** context. CSS escaping can be
  applied to any string being inserted into CSS and escapes everything except
  alphanumerics.

* ``url``: escapes a string for the **URI or parameter** contexts. This should
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
  not be used to escape an entire URI; only a subcomponent being inserted.

* ``html_attr``: escapes a string for the **HTML attribute** context.

<<<<<<< HEAD
=======
Note that doing contextual escaping in HTML documents is hard and choosing the
right escaping strategy depends on a lot of factors. Please, read related
documentation like `the OWASP prevention cheat sheet
<https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.md>`_
to learn more about this topic.

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
.. note::

    Internally, ``escape`` uses the PHP native `htmlspecialchars`_ function
    for the HTML escaping strategy.

.. caution::

    When using automatic escaping, Twig tries to not double-escape a variable
    when the automatic escaping strategy is the same as the one applied by the
    escape filter; but that does not work when using a variable as the
    escaping strategy:

<<<<<<< HEAD
    .. code-block:: jinja
=======
    .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        {% set strategy = 'html' %}

        {% autoescape 'html' %}
            {{ var|escape('html') }}   {# won't be double-escaped #}
            {{ var|escape(strategy) }} {# will be double-escaped #}
        {% endautoescape %}

    When using a variable as the escaping strategy, you should disable
    automatic escaping:

<<<<<<< HEAD
    .. code-block:: jinja
=======
    .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        {% set strategy = 'html' %}

        {% autoescape 'html' %}
            {{ var|escape(strategy)|raw }} {# won't be double-escaped #}
        {% endautoescape %}

Custom Escapers
---------------

You can define custom escapers by calling the ``setEscaper()`` method on the
``core`` extension instance. The first argument is the escaper name (to be
used in the ``escape`` call) and the second one must be a valid PHP callable:

.. code-block:: php

<<<<<<< HEAD
    $twig = new Twig_Environment($loader);
    $twig->getExtension('Twig_Extension_Core')->setEscaper('csv', 'csv_escaper');
=======
    $twig = new \Twig\Environment($loader);
    $twig->getExtension('\Twig\Extension\CoreExtension')->setEscaper('csv', 'csv_escaper');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    // before Twig 1.26
    $twig->getExtension('core')->setEscaper('csv', 'csv_escaper');

When called by Twig, the callable receives the Twig environment instance, the
string to escape, and the charset.

.. note::

<<<<<<< HEAD
    Built-in escapers cannot be overridden mainly they should be considered as
    the final implementation and also for better performance.
=======
    Built-in escapers cannot be overridden mainly because they should be
    considered as the final implementation and also for better performance.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Arguments
---------

* ``strategy``: The escaping strategy
* ``charset``:  The string charset

<<<<<<< HEAD
.. _`htmlspecialchars`: http://php.net/htmlspecialchars
=======
.. _`htmlspecialchars`: https://secure.php.net/htmlspecialchars
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
