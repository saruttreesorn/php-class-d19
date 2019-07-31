Coding Standards
================

When writing Twig templates, we recommend you to follow these official coding
standards:

* Put one (and only one) space after the start of a delimiter (``{{``, ``{%``,
  and ``{#``) and before the end of a delimiter (``}}``, ``%}``, and ``#}``):

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ foo }}
    {# comment #}
    {% if foo %}{% endif %}

  When using the whitespace control character, do not put any spaces between
  it and the delimiter:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{- foo -}}
    {#- comment -#}
    {%- if foo -%}{%- endif -%}

* Put one (and only one) space before and after the following operators:
  comparison operators (``==``, ``!=``, ``<``, ``>``, ``>=``, ``<=``), math
  operators (``+``, ``-``, ``/``, ``*``, ``%``, ``//``, ``**``), logic
  operators (``not``, ``and``, ``or``), ``~``, ``is``, ``in``, and the ternary
  operator (``?:``):

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

     {{ 1 + 2 }}
     {{ foo ~ bar }}
     {{ true ? true : false }}

* Put one (and only one) space after the ``:`` sign in hashes and ``,`` in
  arrays and hashes:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

     {{ [1, 2, 3] }}
     {{ {'foo': 'bar'} }}

* Do not put any spaces after an opening parenthesis and before a closing
  parenthesis in expressions:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ 1 + (2 * 3) }}

* Do not put any spaces before and after string delimiters:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ 'foo' }}
    {{ "foo" }}

* Do not put any spaces before and after the following operators: ``|``,
  ``.``, ``..``, ``[]``:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    {{ foo|upper|lower }}
    {{ user.name }}
    {{ user[name] }}
    {% for i in 1..12 %}{% endfor %}

* Do not put any spaces before and after the parenthesis used for filter and
  function calls:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

     {{ foo|default('foo') }}
     {{ range(1..10) }}

* Do not put any spaces before and after the opening and the closing of arrays
  and hashes:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

     {{ [1, 2, 3] }}
     {{ {'foo': 'bar'} }}

* Use lower cased and underscored variable names:

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

     {% set foo = 'foo' %}
     {% set foo_bar = 'foo' %}

* Indent your code inside tags (use the same indentation as the one used for
  the target language of the rendered template):

<<<<<<< HEAD
  .. code-block:: jinja
=======
  .. code-block:: twig
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

     {% block foo %}
         {% if true %}
             true
         {% endif %}
     {% endblock %}
