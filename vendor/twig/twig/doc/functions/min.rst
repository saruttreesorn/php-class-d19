``min``
=======

.. versionadded:: 1.15
    The ``min`` function was added in Twig 1.15.

``min`` returns the lowest value of a sequence or a set of values:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ min(1, 3, 2) }}
    {{ min([1, 3, 2]) }}

When called with a mapping, min ignores keys and only compares values:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ min({2: "e", 3: "a", 1: "b", 5: "d", 4: "c"}) }}
    {# returns "a" #}

