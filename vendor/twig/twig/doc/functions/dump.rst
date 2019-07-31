``dump``
========

.. versionadded:: 1.5
    The ``dump`` function was added in Twig 1.5.

The ``dump`` function dumps information about a template variable. This is
mostly useful to debug a template that does not behave as expected by
introspecting its variables:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ dump(user) }}

.. note::

    The ``dump`` function is not available by default. You must add the
<<<<<<< HEAD
    ``Twig_Extension_Debug`` extension explicitly when creating your Twig
    environment::

        $twig = new Twig_Environment($loader, array(
            'debug' => true,
            // ...
        ));
        $twig->addExtension(new Twig_Extension_Debug());
=======
    ``\Twig\Extension\DebugExtension`` extension explicitly when creating your Twig
    environment::

        $twig = new \Twig\Environment($loader, [
            'debug' => true,
            // ...
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    Even when enabled, the ``dump`` function won't display anything if the
    ``debug`` option on the environment is not enabled (to avoid leaking debug
    information on a production server).

In an HTML context, wrap the output with a ``pre`` tag to make it easier to
read:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    <pre>
        {{ dump(user) }}
    </pre>

.. tip::

    Using a ``pre`` tag is not needed when `XDebug`_ is enabled and
    ``html_errors`` is ``on``; as a bonus, the output is also nicer with
    XDebug enabled.

You can debug several variables by passing them as additional arguments:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ dump(user, categories) }}

If you don't pass any value, all variables from the current context are
dumped:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ dump() }}

.. note::

    Internally, Twig uses the PHP `var_dump`_ function.

Arguments
---------

* ``context``: The context to dump

<<<<<<< HEAD
.. _`XDebug`:   http://xdebug.org/docs/display
.. _`var_dump`: http://php.net/var_dump
=======
.. _`XDebug`:   https://xdebug.org/docs/display
.. _`var_dump`: https://secure.php.net/var_dump
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
