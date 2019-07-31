``batch``
=========

.. versionadded:: 1.12.3
    The ``batch`` filter was added in Twig 1.12.3.

The ``batch`` filter "batches" items by returning a list of lists with the
given number of items. A second parameter can be provided and used to fill in
missing items:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% set items = ['a', 'b', 'c', 'd', 'e', 'f', 'g'] %}

    <table>
    {% for row in items|batch(3, 'No item') %}
        <tr>
            {% for column in row %}
                <td>{{ column }}</td>
            {% endfor %}
        </tr>
    {% endfor %}
    </table>

The above example will be rendered as:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    <table>
        <tr>
            <td>a</td>
            <td>b</td>
            <td>c</td>
        </tr>
        <tr>
            <td>d</td>
            <td>e</td>
            <td>f</td>
        </tr>
        <tr>
            <td>g</td>
            <td>No item</td>
            <td>No item</td>
        </tr>
    </table>

Arguments
---------

* ``size``: The size of the batch; fractional numbers will be rounded up
* ``fill``: Used to fill in missing items
