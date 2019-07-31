``same as``
===========

.. versionadded:: 1.14.2
    The ``same as`` test was added in Twig 1.14.2 as an alias for ``sameas``.

``same as`` checks if a variable is the same as another variable.
This is the equivalent to ``===`` in PHP:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if foo.attribute is same as(false) %}
        the foo attribute really is the 'false' PHP value
    {% endif %}
