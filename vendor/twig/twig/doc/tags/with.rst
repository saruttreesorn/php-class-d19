``with``
========

.. versionadded:: 1.28
    The ``with`` tag was added in Twig 1.28.

Use the ``with`` tag to create a new inner scope. Variables set within this
scope are not visible outside of the scope:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% with %}
        {% set foo = 42 %}
        {{ foo }}           foo is 42 here
    {% endwith %}
    foo is not visible here any longer

Instead of defining variables at the beginning of the scope, you can pass a
hash of variables you want to define in the ``with`` tag; the previous example
is equivalent to the following one:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% with { foo: 42 } %}
        {{ foo }}           foo is 42 here
    {% endwith %}
    foo is not visible here any longer

    {# it works with any expression that resolves to a hash #}
    {% set vars = { foo: 42 } %}
    {% with vars %}
        ...
    {% endwith %}

By default, the inner scope has access to the outer scope context; you can
disable this behavior by appending the ``only`` keyword:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% set bar = 'bar' %}
    {% with { foo: 42 } only %}
        {# only foo is defined #}
        {# bar is not defined #}
    {% endwith %}
