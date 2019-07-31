``join``
========

<<<<<<< HEAD
The ``join`` filter returns a string which is the concatenation of the items
of a sequence:

.. code-block:: jinja
=======
.. versionadded:: 1.37 and 2.6.1
    The ``and`` argument was added in Twig 1.37 and 2.6.1.

The ``join`` filter returns a string which is the concatenation of the items
of a sequence:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ [1, 2, 3]|join }}
    {# returns 123 #}

The separator between elements is an empty string per default, but you can
define it with the optional first parameter:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ [1, 2, 3]|join('|') }}
    {# outputs 1|2|3 #}

<<<<<<< HEAD
=======
A second parameter can also be provided that will be the separator used between
the last two items of the sequence:

.. code-block:: twig

    {{ [1, 2, 3]|join(', ', ' and ') }}
    {# outputs 1, 2 and 3 #}

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
Arguments
---------

* ``glue``: The separator
<<<<<<< HEAD
=======
* ``and``: The separator for the last pair of input items
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
