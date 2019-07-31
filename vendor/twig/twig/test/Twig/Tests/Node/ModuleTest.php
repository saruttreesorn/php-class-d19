<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
class Twig_Tests_Node_ModuleTest extends Twig_Test_NodeTestCase
{
    public function testConstructor()
    {
        $body = new Twig_Node_Text('foo', 1);
        $parent = new Twig_Node_Expression_Constant('layout.twig', 1);
        $blocks = new Twig_Node();
        $macros = new Twig_Node();
        $traits = new Twig_Node();
        $source = new Twig_Source('{{ foo }}', 'foo.twig');
        $node = new Twig_Node_Module($body, $parent, $blocks, $macros, $traits, new Twig_Node(array()), $source);
=======
use Twig\Environment;
use Twig\Node\Expression\AssignNameExpression;
use Twig\Node\Expression\ConditionalExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\ImportNode;
use Twig\Node\ModuleNode;
use Twig\Node\Node;
use Twig\Node\SetNode;
use Twig\Node\TextNode;
use Twig\Source;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_ModuleTest extends NodeTestCase
{
    public function testConstructor()
    {
        $body = new TextNode('foo', 1);
        $parent = new ConstantExpression('layout.twig', 1);
        $blocks = new Node();
        $macros = new Node();
        $traits = new Node();
        $source = new Source('{{ foo }}', 'foo.twig');
        $node = new ModuleNode($body, $parent, $blocks, $macros, $traits, new Node([]), $source);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertEquals($body, $node->getNode('body'));
        $this->assertEquals($blocks, $node->getNode('blocks'));
        $this->assertEquals($macros, $node->getNode('macros'));
        $this->assertEquals($parent, $node->getNode('parent'));
        $this->assertEquals($source->getName(), $node->getTemplateName());
    }

    public function getTests()
    {
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());

        $tests = array();

        $body = new Twig_Node_Text('foo', 1);
        $extends = null;
        $blocks = new Twig_Node();
        $macros = new Twig_Node();
        $traits = new Twig_Node();
        $source = new Twig_Source('{{ foo }}', 'foo.twig');

        $node = new Twig_Node_Module($body, $extends, $blocks, $macros, $traits, new Twig_Node(array()), $source);
        $tests[] = array($node, <<<EOF
<?php

/* foo.twig */
class __TwigTemplate_%x extends Twig_Template
{
    public function __construct(Twig_Environment \$env)
=======
        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());

        $tests = [];

        $body = new TextNode('foo', 1);
        $extends = null;
        $blocks = new Node();
        $macros = new Node();
        $traits = new Node();
        $source = new Source('{{ foo }}', 'foo.twig');

        $node = new ModuleNode($body, $extends, $blocks, $macros, $traits, new Node([]), $source);
        $tests[] = [$node, <<<EOF
<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* foo.twig */
class __TwigTemplate_%x extends \Twig\Template
{
    public function __construct(Environment \$env)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        parent::__construct(\$env);

        \$this->parent = false;

<<<<<<< HEAD
        \$this->blocks = array(
        );
    }

    protected function doDisplay(array \$context, array \$blocks = array())
=======
        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        // line 1
        echo "foo";
    }

    public function getTemplateName()
    {
        return "foo.twig";
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  19 => 1,);
=======
        return array (  30 => 1,);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return \$this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
<<<<<<< HEAD
        return new Twig_Source("", "foo.twig", "");
    }
}
EOF
        , $twig, true);

        $import = new Twig_Node_Import(new Twig_Node_Expression_Constant('foo.twig', 1), new Twig_Node_Expression_AssignName('macro', 1), 2);

        $body = new Twig_Node(array($import));
        $extends = new Twig_Node_Expression_Constant('layout.twig', 1);

        $node = new Twig_Node_Module($body, $extends, $blocks, $macros, $traits, new Twig_Node(array()), $source);
        $tests[] = array($node, <<<EOF
<?php

/* foo.twig */
class __TwigTemplate_%x extends Twig_Template
{
    public function __construct(Twig_Environment \$env)
    {
        parent::__construct(\$env);

        // line 1
        \$this->parent = \$this->loadTemplate("layout.twig", "foo.twig", 1);
        \$this->blocks = array(
        );
=======
        return new Source("", "foo.twig", "");
    }
}
EOF
        , $twig, true];

        $import = new ImportNode(new ConstantExpression('foo.twig', 1), new AssignNameExpression('macro', 1), 2);

        $body = new Node([$import]);
        $extends = new ConstantExpression('layout.twig', 1);

        $node = new ModuleNode($body, $extends, $blocks, $macros, $traits, new Node([]), $source);
        $tests[] = [$node, <<<EOF
<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* foo.twig */
class __TwigTemplate_%x extends \Twig\Template
{
    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->blocks = [
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    protected function doGetParent(array \$context)
    {
<<<<<<< HEAD
        return "layout.twig";
    }

    protected function doDisplay(array \$context, array \$blocks = array())
    {
        // line 2
        \$context["macro"] = \$this->loadTemplate("foo.twig", "foo.twig", 2);
        // line 1
=======
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        // line 2
        \$context["macro"] = \$this->loadTemplate("foo.twig", "foo.twig", 2)->unwrap();
        // line 1
        \$this->parent = \$this->loadTemplate("layout.twig", "foo.twig", 1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        \$this->parent->display(\$context, array_merge(\$this->blocks, \$blocks));
    }

    public function getTemplateName()
    {
        return "foo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  26 => 1,  24 => 2,  11 => 1,);
=======
        return array (  36 => 1,  34 => 2,  28 => 1,);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return \$this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
<<<<<<< HEAD
        return new Twig_Source("", "foo.twig", "");
    }
}
EOF
        , $twig, true);

        $set = new Twig_Node_Set(false, new Twig_Node(array(new Twig_Node_Expression_AssignName('foo', 4))), new Twig_Node(array(new Twig_Node_Expression_Constant('foo', 4))), 4);
        $body = new Twig_Node(array($set));
        $extends = new Twig_Node_Expression_Conditional(
                        new Twig_Node_Expression_Constant(true, 2),
                        new Twig_Node_Expression_Constant('foo', 2),
                        new Twig_Node_Expression_Constant('foo', 2),
                        2
                    );

        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('debug' => true));
        $node = new Twig_Node_Module($body, $extends, $blocks, $macros, $traits, new Twig_Node(array()), $source);
        $tests[] = array($node, <<<EOF
<?php

/* foo.twig */
class __TwigTemplate_%x extends Twig_Template
=======
        return new Source("", "foo.twig", "");
    }
}
EOF
        , $twig, true];

        $set = new SetNode(false, new Node([new AssignNameExpression('foo', 4)]), new Node([new ConstantExpression('foo', 4)]), 4);
        $body = new Node([$set]);
        $extends = new ConditionalExpression(
                        new ConstantExpression(true, 2),
                        new ConstantExpression('foo', 2),
                        new ConstantExpression('foo', 2),
                        2
                    );

        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['debug' => true]);
        $node = new ModuleNode($body, $extends, $blocks, $macros, $traits, new Node([]), $source);
        $tests[] = [$node, <<<EOF
<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* foo.twig */
class __TwigTemplate_%x extends \Twig\Template
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    protected function doGetParent(array \$context)
    {
        // line 2
        return \$this->loadTemplate(((true) ? ("foo") : ("foo")), "foo.twig", 2);
    }

<<<<<<< HEAD
    protected function doDisplay(array \$context, array \$blocks = array())
=======
    protected function doDisplay(array \$context, array \$blocks = [])
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    {
        // line 4
        \$context["foo"] = "foo";
        // line 2
        \$this->getParent(\$context)->display(\$context, array_merge(\$this->blocks, \$blocks));
    }

    public function getTemplateName()
    {
        return "foo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  17 => 2,  15 => 4,  9 => 2,);
=======
        return array (  28 => 2,  26 => 4,  20 => 2,);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return \$this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
<<<<<<< HEAD
        return new Twig_Source("{{ foo }}", "foo.twig", "");
    }
}
EOF
        , $twig, true);
=======
        return new Source("{{ foo }}", "foo.twig", "");
    }
}
EOF
        , $twig, true];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $tests;
    }
}
