``sort``
========

The ``sort`` filter sorts an array:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% for user in users|sort %}
        ...
    {% endfor %}

.. note::

    Internally, Twig uses the PHP `asort`_ function to maintain index
    association. It supports Traversable objects by transforming
    those to arrays.

<<<<<<< HEAD
.. _`asort`: http://php.net/asort
=======
.. _`asort`: https://secure.php.net/asort
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
