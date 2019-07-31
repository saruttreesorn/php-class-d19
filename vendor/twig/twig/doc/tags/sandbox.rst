``sandbox``
===========

The ``sandbox`` tag can be used to enable the sandboxing mode for an included
template, when sandboxing is not enabled globally for the Twig environment:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% sandbox %}
        {% include 'user.html' %}
    {% endsandbox %}

.. warning::

    The ``sandbox`` tag is only available when the sandbox extension is
    enabled (see the :doc:`Twig for Developers<../api>` chapter).

.. note::

    The ``sandbox`` tag can only be used to sandbox an include tag and it
    cannot be used to sandbox a section of a template. The following example
    won't work:

<<<<<<< HEAD
    .. code-block:: jinja
=======
    .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        {% sandbox %}
            {% for i in 1..2 %}
                {{ i }}
            {% endfor %}
        {% endsandbox %}
