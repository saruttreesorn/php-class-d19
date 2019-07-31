``template_from_string``
========================

.. versionadded:: 1.11
    The ``template_from_string`` function was added in Twig 1.11.

<<<<<<< HEAD
The ``template_from_string`` function loads a template from a string:

.. code-block:: jinja
=======
.. versionadded:: 1.39
    The name argument was added in Twig 1.39.

The ``template_from_string`` function loads a template from a string:

.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ include(template_from_string("Hello {{ name }}")) }}
    {{ include(template_from_string(page.template)) }}

<<<<<<< HEAD
.. note::

    The ``template_from_string`` function is not available by default. You
    must add the ``Twig_Extension_StringLoader`` extension explicitly when
    creating your Twig environment::

        $twig = new Twig_Environment(...);
        $twig->addExtension(new Twig_Extension_StringLoader());
=======
To ease debugging, you can also give the template a name that will be part of
any related error message:

.. code-block:: twig

    {{ include(template_from_string(page.template, "template for page " ~ page.name)) }}

.. note::

    The ``template_from_string`` function is not available by default. You
    must add the ``\Twig\Extension\StringLoaderExtension`` extension explicitly when
    creating your Twig environment::

        $twig = new \Twig\Environment(...);
        $twig->addExtension(new \Twig\Extension\StringLoaderExtension());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

.. note::

    Even if you will probably always use the ``template_from_string`` function
    with the ``include`` function, you can use it with any tag or function that
    takes a template as an argument (like the ``embed`` or ``extends`` tags).

Arguments
---------

* ``template``: The template
<<<<<<< HEAD
=======
* ``name``: A name for the template
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
