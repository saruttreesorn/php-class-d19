``nl2br``
=========

.. versionadded:: 1.5
    The ``nl2br`` filter was added in Twig 1.5.

The ``nl2br`` filter inserts HTML line breaks before all newlines in a string:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ "I like Twig.\nYou will like it too."|nl2br }}
    {# outputs

        I like Twig.<br />
        You will like it too.

    #}

.. note::

    The ``nl2br`` filter pre-escapes the input before applying the
    transformation.
