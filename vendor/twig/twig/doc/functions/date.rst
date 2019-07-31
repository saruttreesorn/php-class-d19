``date``
========

.. versionadded:: 1.6
    The date function has been added in Twig 1.6.

.. versionadded:: 1.6.1
    The default timezone support has been added in Twig 1.6.1.

Converts an argument to a date to allow date comparison:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if date(user.created_at) < date('-2days') %}
        {# do something #}
    {% endif %}

The argument must be in one of PHP’s supported `date and time formats`_.

You can pass a timezone as the second argument:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if date(user.created_at) < date('-2days', 'Europe/Paris') %}
        {# do something #}
    {% endif %}

If no argument is passed, the function returns the current date:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if date(user.created_at) < date() %}
        {# always! #}
    {% endif %}

.. note::

    You can set the default timezone globally by calling ``setTimezone()`` on
    the ``core`` extension instance:

    .. code-block:: php

<<<<<<< HEAD
        $twig = new Twig_Environment($loader);
        $twig->getExtension('Twig_Extension_Core')->setTimezone('Europe/Paris');
=======
        $twig = new \Twig\Environment($loader);
        $twig->getExtension('\Twig\Extension\CoreExtension')->setTimezone('Europe/Paris');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        // before Twig 1.26
        $twig->getExtension('core')->setTimezone('Europe/Paris');

Arguments
---------

* ``date``:     The date
* ``timezone``: The timezone

<<<<<<< HEAD
.. _`date and time formats`: http://php.net/manual/en/datetime.formats.php
=======
.. _`date and time formats`: https://secure.php.net/manual/en/datetime.formats.php
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
