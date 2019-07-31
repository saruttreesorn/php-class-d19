``json_encode``
===============

The ``json_encode`` filter returns the JSON representation of a value:

<<<<<<< HEAD
.. code-block:: jinja
=======
.. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ data|json_encode() }}

.. note::

    Internally, Twig uses the PHP `json_encode`_ function.

Arguments
---------

<<<<<<< HEAD
* ``options``: A bitmask of `json_encode options`_ (``{{
  data|json_encode(constant('JSON_PRETTY_PRINT')) }}``)

.. _`json_encode`: http://php.net/json_encode
.. _`json_encode options`: http://www.php.net/manual/en/json.constants.php
=======
* ``options``: A bitmask of `json_encode options`_: ``{{
  data|json_encode(constant('JSON_PRETTY_PRINT')) }}``.
  Combine constants using :ref:`bitwise operators<template_logic>`:
  ``{{ data|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_HEX_QUOT')) }}``

.. _`json_encode`: https://secure.php.net/json_encode
.. _`json_encode options`: https://secure.php.net/manual/en/json.constants.php
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
