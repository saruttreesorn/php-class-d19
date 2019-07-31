``filter``
==========

<<<<<<< HEAD
Filter sections allow you to apply regular Twig filters on a block of template
data. Just wrap the code in the special ``filter`` section:

.. code-block:: jinja
=======
.. note::

    As of Twig 1.40, you should use the ``apply`` tag instead which does the
    same thing except that the wrapped template data is not scoped.

Filter sections allow you to apply regular Twig filters on a block of template
data. Just wrap the code in the special ``filter`` section:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% filter upper %}
        This text becomes uppercase
    {% endfilter %}

<<<<<<< HEAD
You can also chain filters:

.. code-block:: jinja

    {% filter lower|escape %}
=======
You can also chain filters and pass arguments to them:

.. code-block:: twig

    {% filter lower|escape('html') %}
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        <strong>SOME TEXT</strong>
    {% endfilter %}

    {# outputs "&lt;strong&gt;some text&lt;/strong&gt;" #}
