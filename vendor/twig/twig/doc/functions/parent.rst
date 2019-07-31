``parent``
==========

When a template uses inheritance, it's possible to render the contents of the
parent block when overriding a block by using the ``parent`` function:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% extends "base.html" %}

    {% block sidebar %}
        <h3>Table Of Contents</h3>
        ...
        {{ parent() }}
    {% endblock %}

The ``parent()`` call will return the content of the ``sidebar`` block as
defined in the ``base.html`` template.

.. seealso:: :doc:`extends<../tags/extends>`, :doc:`block<../functions/block>`, :doc:`block<../tags/block>`
