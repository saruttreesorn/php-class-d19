``random``
==========

.. versionadded:: 1.5
    The ``random`` function was added in Twig 1.5.

.. versionadded:: 1.6
    String and integer handling was added in Twig 1.6.

<<<<<<< HEAD
=======
.. versionadded:: 1.38
    The "max" argument was added in Twig 1.38.

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
The ``random`` function returns a random value depending on the supplied
parameter type:

* a random item from a sequence;
* a random character from a string;
* a random integer between 0 and the integer parameter (inclusive).
<<<<<<< HEAD

.. code-block:: jinja
=======
* a random integer between the integer parameter (when negative) and 0 (inclusive).
* a random integer between the first integer and the second integer parameter (inclusive).

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ random(['apple', 'orange', 'citrus']) }} {# example output: orange #}
    {{ random('ABC') }}                         {# example output: C #}
    {{ random() }}                              {# example output: 15386094 (works as the native PHP mt_rand function) #}
    {{ random(5) }}                             {# example output: 3 #}
<<<<<<< HEAD
=======
    {{ random(50, 100) }}                       {# example output: 63 #}
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Arguments
---------

* ``values``: The values
<<<<<<< HEAD

.. _`mt_rand`: http://php.net/mt_rand
=======
* ``max``: The max value when values is an integer

.. _`mt_rand`: https://secure.php.net/mt_rand
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
