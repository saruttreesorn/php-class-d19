``split``
=========

.. versionadded:: 1.10.3
    The ``split`` filter was added in Twig 1.10.3.

The ``split`` filter splits a string by the given delimiter and returns a list
of strings:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% set foo = "one,two,three"|split(',') %}
    {# foo contains ['one', 'two', 'three'] #}

You can also pass a ``limit`` argument:

<<<<<<< HEAD
 * If ``limit`` is positive, the returned array will contain a maximum of
   limit elements with the last element containing the rest of string;

 * If ``limit`` is negative, all components except the last -limit are
   returned;

 * If ``limit`` is zero, then this is treated as 1.

.. code-block:: jinja
=======
* If ``limit`` is positive, the returned array will contain a maximum of
  limit elements with the last element containing the rest of string;

* If ``limit`` is negative, all components except the last -limit are
  returned;

* If ``limit`` is zero, then this is treated as 1.

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% set foo = "one,two,three,four,five"|split(',', 3) %}
    {# foo contains ['one', 'two', 'three,four,five'] #}

If the ``delimiter`` is an empty string, then value will be split by equal
chunks. Length is set by the ``limit`` argument (one character by default).

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% set foo = "123"|split('') %}
    {# foo contains ['1', '2', '3'] #}

    {% set bar = "aabbcc"|split('', 2) %}
    {# bar contains ['aa', 'bb', 'cc'] #}

.. note::

    Internally, Twig uses the PHP `explode`_ or `str_split`_ (if delimiter is
    empty) functions for string splitting.

Arguments
---------

* ``delimiter``: The delimiter
* ``limit``:     The limit argument

<<<<<<< HEAD
.. _`explode`:   http://php.net/explode
.. _`str_split`: http://php.net/str_split
=======
.. _`explode`:   https://secure.php.net/explode
.. _`str_split`: https://secure.php.net/str_split
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
