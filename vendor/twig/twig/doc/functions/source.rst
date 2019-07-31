``source``
==========

.. versionadded:: 1.15
    The ``source`` function was added in Twig 1.15.

.. versionadded:: 1.18.3
    The ``ignore_missing`` flag was added in Twig 1.18.3.

The ``source`` function returns the content of a template without rendering it:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ source('template.html') }}
    {{ source(some_var) }}

When you set the ``ignore_missing`` flag, Twig will return an empty string if
the template does not exist:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ source('template.html', ignore_missing = true) }}

The function uses the same template loaders as the ones used to include
templates. So, if you are using the filesystem loader, the templates are looked
for in the paths defined by it.

Arguments
---------

* ``name``: The name of the template to read
* ``ignore_missing``: Whether to ignore missing templates or not
