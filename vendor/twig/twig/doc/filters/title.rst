``title``
=========

The ``title`` filter returns a titlecased version of the value. Words will
start with uppercase letters, all remaining characters are lowercase:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ 'my first car'|title }}

    {# outputs 'My First Car' #}
