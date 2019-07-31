``striptags``
=============

The ``striptags`` filter strips SGML/XML tags and replace adjacent whitespace
by one space:

<<<<<<< HEAD
.. code-block:: jinja

    {{ some_html|striptags }}

=======
.. code-block:: twig

    {{ some_html|striptags }}

You can also provide tags which should not be stripped:

.. code-block:: twig

    {{ some_html|striptags('<br><p>') }}

In this example, the ``<br/>``, ``<br>``, ``<p>``, and ``</p>`` tags won't be
removed from the string.

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
.. note::

    Internally, Twig uses the PHP `strip_tags`_ function.

<<<<<<< HEAD
.. _`strip_tags`: http://php.net/strip_tags
=======
Arguments
---------

* ``allowable_tags``: Tags which should not be stripped

.. _`strip_tags`: https://secure.php.net/strip_tags
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
