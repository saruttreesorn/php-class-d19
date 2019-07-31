``cycle``
=========

The ``cycle`` function cycles on an array of values:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% set start_year = date() | date('Y') %}
    {% set end_year = start_year + 5 %}

    {% for year in start_year..end_year %}
        {{ cycle(['odd', 'even'], loop.index0) }}
    {% endfor %}

The array can contain any number of values:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% set fruits = ['apple', 'orange', 'citrus'] %}

    {% for i in 0..10 %}
        {{ cycle(fruits, i) }}
    {% endfor %}

Arguments
---------

* ``position``: The cycle position
