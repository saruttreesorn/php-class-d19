``do``
======

.. versionadded:: 1.5
    The ``do`` tag was added in Twig 1.5.

The ``do`` tag works exactly like the regular variable expression (``{{ ...
}}``) just that it doesn't print anything:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% do 1 + 2 %}
