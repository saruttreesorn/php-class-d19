``format``
==========

The ``format`` filter formats a given string by replacing the placeholders
(placeholders follows the `sprintf`_ notation):

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ "I like %s and %s."|format(foo, "bar") }}

    {# outputs I like foo and bar
       if the foo parameter equals to the foo string. #}

<<<<<<< HEAD
.. _`sprintf`: http://www.php.net/sprintf
=======
.. _`sprintf`: https://secure.php.net/sprintf
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

.. seealso:: :doc:`replace<replace>`
