``verbatim``
============

.. versionadded:: 1.12
    The ``verbatim`` tag was added in Twig 1.12 (it was named ``raw`` before).

The ``verbatim`` tag marks sections as being raw text that should not be
parsed. For example to put Twig syntax as example into a template you can use
this snippet:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% verbatim %}
        <ul>
        {% for item in seq %}
            <li>{{ item }}</li>
        {% endfor %}
        </ul>
    {% endverbatim %}

.. note::

    The ``verbatim`` tag works in the exact same way as the old ``raw`` tag,
    but was renamed to avoid confusion with the ``raw`` filter.