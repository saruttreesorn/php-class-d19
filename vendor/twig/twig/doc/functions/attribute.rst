``attribute``
=============

.. versionadded:: 1.2
    The ``attribute`` function was added in Twig 1.2.

The ``attribute`` function can be used to access a "dynamic" attribute of a
variable:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ attribute(object, method) }}
    {{ attribute(object, method, arguments) }}
    {{ attribute(array, item) }}

In addition, the ``defined`` test can check for the existence of a dynamic
attribute:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ attribute(object, method) is defined ? 'Method exists' : 'Method does not exist' }}

.. note::

    The resolution algorithm is the same as the one used for the ``.``
    notation, except that the item can be any valid expression.
