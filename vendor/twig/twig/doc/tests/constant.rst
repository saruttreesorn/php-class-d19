``constant``
============

.. versionadded: 1.13.1
    constant now accepts object instances as the second argument.

``constant`` checks if a variable has the exact same value as a constant. You
can use either global constants or class constants:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if post.status is constant('Post::PUBLISHED') %}
        the status attribute is exactly the same as Post::PUBLISHED
    {% endif %}

You can test constants from object instances as well:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {% if post.status is constant('PUBLISHED', post) %}
        the status attribute is exactly the same as Post::PUBLISHED
    {% endif %}
