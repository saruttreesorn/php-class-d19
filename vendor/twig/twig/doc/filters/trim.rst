``trim``
========

<<<<<<< HEAD
=======
.. versionadded:: 1.32
    The ``side`` argument was added in Twig 1.32.

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
.. versionadded:: 1.6.2
    The ``trim`` filter was added in Twig 1.6.2.

The ``trim`` filter strips whitespace (or other characters) from the beginning
and end of a string:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ '  I like Twig.  '|trim }}

    {# outputs 'I like Twig.' #}

    {{ '  I like Twig.'|trim('.') }}

    {# outputs '  I like Twig' #}

<<<<<<< HEAD
.. note::

    Internally, Twig uses the PHP `trim`_ function.
=======
    {{ '  I like Twig.  '|trim(side='left') }}

    {# outputs 'I like Twig.  ' #}

    {{ '  I like Twig.  '|trim(' ', 'right') }}

    {# outputs '  I like Twig.' #}

.. note::

    Internally, Twig uses the PHP `trim`_, `ltrim`_, and `rtrim`_ functions.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

Arguments
---------

* ``character_mask``: The characters to strip

<<<<<<< HEAD
.. _`trim`: http://php.net/trim
=======
* ``side``: The default is to strip from the left and the right (`both`) sides, but `left`
  and `right` will strip from either the left side or right side only

.. _`trim`: https://secure.php.net/trim
.. _`ltrim`: https://secure.php.net/ltrim
.. _`rtrim`: https://secure.php.net/rtrim
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
