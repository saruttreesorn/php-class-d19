``max``
=======

.. versionadded:: 1.15
    The ``max`` function was added in Twig 1.15.

``max`` returns the biggest value of a sequence or a set of values:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ max(1, 3, 2) }}
    {{ max([1, 3, 2]) }}

When called with a mapping, max ignores keys and only compares values:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ max({2: "e", 1: "a", 3: "b", 5: "d", 4: "c"}) }}
    {# returns "e" #}

