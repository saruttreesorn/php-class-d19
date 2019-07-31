``date_modify``
===============

.. versionadded:: 1.9.0
    The date_modify filter has been added in Twig 1.9.0.

The ``date_modify`` filter modifies a date with a given modifier string:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ post.published_at|date_modify("+1 day")|date("m/d/Y") }}

The ``date_modify`` filter accepts strings (it must be in a format supported
by the `strtotime`_ function) or `DateTime`_ instances. You can easily combine
it with the :doc:`date<date>` filter for formatting.

Arguments
---------

* ``modifier``: The modifier

<<<<<<< HEAD
.. _`strtotime`: http://www.php.net/strtotime
.. _`DateTime`:  http://www.php.net/DateTime
=======
.. _`strtotime`: https://secure.php.net/strtotime
.. _`DateTime`:  https://secure.php.net/DateTime
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
