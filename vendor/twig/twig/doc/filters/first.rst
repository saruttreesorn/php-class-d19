``first``
=========

.. versionadded:: 1.12.2
    The ``first`` filter was added in Twig 1.12.2.

The ``first`` filter returns the first "element" of a sequence, a mapping, or
a string:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ [1, 2, 3, 4]|first }}
    {# outputs 1 #}

    {{ { a: 1, b: 2, c: 3, d: 4 }|first }}
    {# outputs 1 #}

    {{ '1234'|first }}
    {# outputs 1 #}

.. note::

    It also works with objects implementing the `Traversable`_ interface.

<<<<<<< HEAD
.. _`Traversable`: http://php.net/manual/en/class.traversable.php
=======
.. _`Traversable`: https://secure.php.net/manual/en/class.traversable.php
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
