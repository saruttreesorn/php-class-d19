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
class Twig_Tests_Node_Expression_NullCoalesceTest extends Twig_Test_NodeTestCase
{
    public function getTests()
    {
        $tests = array();

        $left = new Twig_Node_Expression_Name('foo', 1);
        $right = new Twig_Node_Expression_Constant(2, 1);
        $node = new Twig_Node_Expression_NullCoalesce($left, $right, 1);
        if (PHP_VERSION_ID >= 70000) {
            $tests[] = array($node, "((// line 1\n\$context[\"foo\"]) ?? (2))");
        } elseif (PHP_VERSION_ID >= 50400) {
            $tests[] = array($node, "(((// line 1\narray_key_exists(\"foo\", \$context) &&  !(null === (isset(\$context[\"foo\"]) ? \$context[\"foo\"] : null)))) ? ((isset(\$context[\"foo\"]) ? \$context[\"foo\"] : null)) : (2))");
        } else {
            $tests[] = array($node, "(((// line 1\narray_key_exists(\"foo\", \$context) &&  !(null === \$this->getContext(\$context, \"foo\")))) ? (\$this->getContext(\$context, \"foo\")) : (2))");
=======
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Node\Expression\NullCoalesceExpression;
use Twig\Test\NodeTestCase;

class Twig_Tests_Node_Expression_NullCoalesceTest extends NodeTestCase
{
    public function getTests()
    {
        $tests = [];

        $left = new NameExpression('foo', 1);
        $right = new ConstantExpression(2, 1);
        $node = new NullCoalesceExpression($left, $right, 1);
        if (PHP_VERSION_ID >= 70000) {
            $tests[] = [$node, "((// line 1\n\$context[\"foo\"]) ?? (2))"];
        } elseif (PHP_VERSION_ID >= 50400) {
            $tests[] = [$node, "(((// line 1\n(isset(\$context[\"foo\"]) || array_key_exists(\"foo\", \$context)) &&  !(null === (isset(\$context[\"foo\"]) ? \$context[\"foo\"] : null)))) ? ((isset(\$context[\"foo\"]) ? \$context[\"foo\"] : null)) : (2))"];
        } else {
            $tests[] = [$node, "(((// line 1\n(isset(\$context[\"foo\"]) || array_key_exists(\"foo\", \$context)) &&  !(null === \$this->getContext(\$context, \"foo\")))) ? (\$this->getContext(\$context, \"foo\")) : (2))"];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        return $tests;
    }
}
