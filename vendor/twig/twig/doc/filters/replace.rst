``replace``
===========

The ``replace`` filter formats a given string by replacing the placeholders
(placeholders are free-form):

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ "I like %this% and %that%."|replace({'%this%': foo, '%that%': "bar"}) }}

    {# outputs I like foo and bar
       if the foo parameter equals to the foo string. #}

<<<<<<< HEAD
=======
    {# using % as a delimiter is purely conventional and optional #}

    {{ "I like this and --that--."|replace({'this': foo, '--that--': "bar"}) }}

    {# outputs I like foo and bar #}

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
Arguments
---------

* ``from``: The placeholder values

.. seealso:: :doc:`format<format>`
