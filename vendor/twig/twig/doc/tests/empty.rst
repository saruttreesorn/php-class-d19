``empty``
=========

<<<<<<< HEAD
``empty`` checks if a variable is an empty string, an empty array, an empty
hash, exactly ``false``, or exactly ``null``:

.. code-block:: jinja
=======
.. versionadded:: 1.33

    Support for the ``__toString()`` magic method has been added in Twig 1.33.

``empty`` checks if a variable is an empty string, an empty array, an empty
hash, exactly ``false``, or exactly ``null``.

For objects that implement the ``Countable`` interface, ``empty`` will check the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will check if an empty string is returned.

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if foo is empty %}
        ...
    {% endif %}
<<<<<<< HEAD
=======

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
