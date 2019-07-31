``constant``
============

.. versionadded: 1.12.1
    constant now accepts object instances as the second argument.

.. versionadded: 1.28
    Using ``constant`` with the ``defined`` test was added in Twig 1.28.

``constant`` returns the constant value for a given string:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ some_date|date(constant('DATE_W3C')) }}
    {{ constant('Namespace\\Classname::CONSTANT_NAME') }}

As of 1.12.1 you can read constants from object instances as well:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ constant('RSS', date) }}

Use the ``defined`` test to check if a constant is defined:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if constant('SOME_CONST') is defined %}
        ...
    {% endif %}
