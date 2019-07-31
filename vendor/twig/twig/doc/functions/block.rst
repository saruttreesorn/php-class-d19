``block``
=========

.. versionadded: 1.28
    Using ``block`` with the ``defined`` test was added in Twig 1.28.

.. versionadded: 1.28
    Support for the template argument was added in Twig 1.28.

When a template uses inheritance and if you want to print a block multiple
times, use the ``block`` function:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    <title>{% block title %}{% endblock %}</title>

    <h1>{{ block('title') }}</h1>

    {% block body %}{% endblock %}

<<<<<<< HEAD
The ``block`` function can also be used to display one block of another
template:

.. code-block:: jinja
=======
The ``block`` function can also be used to display one block from another
template:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ block("title", "common_blocks.twig") }}

Use the ``defined`` test to check if a block exists in the context of the
current template:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if block("footer") is defined %}
        ...
    {% endif %}

    {% if block("footer", "common_blocks.twig") is defined %}
        ...
    {% endif %}

.. seealso:: :doc:`extends<../tags/extends>`, :doc:`parent<../functions/parent>`
