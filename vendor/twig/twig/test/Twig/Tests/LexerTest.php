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
class Twig_Tests_LexerTest extends PHPUnit_Framework_TestCase
=======

use Twig\Environment;
use Twig\Lexer;
use Twig\Source;
use Twig\Token;

class Twig_Tests_LexerTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    /**
     * @group legacy
     */
    public function testLegacyConstructorSignature()
    {
<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $stream = $lexer->tokenize('{{ foo }}', 'foo');
        $this->assertEquals('foo', $stream->getFilename());
        $this->assertEquals('{{ foo }}', $stream->getSource());
    }

    public function testNameLabelForTag()
    {
        $template = '{% § %}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));

        $stream->expect(Twig_Token::BLOCK_START_TYPE);
        $this->assertSame('§', $stream->expect(Twig_Token::NAME_TYPE)->getValue());
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));

        $stream->expect(Token::BLOCK_START_TYPE);
        $this->assertSame('§', $stream->expect(Token::NAME_TYPE)->getValue());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testNameLabelForFunction()
    {
        $template = '{{ §() }}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));

        $stream->expect(Twig_Token::VAR_START_TYPE);
        $this->assertSame('§', $stream->expect(Twig_Token::NAME_TYPE)->getValue());
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));

        $stream->expect(Token::VAR_START_TYPE);
        $this->assertSame('§', $stream->expect(Token::NAME_TYPE)->getValue());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testBracketsNesting()
    {
        $template = '{{ {"a":{"b":"c"}} }}';

<<<<<<< HEAD
        $this->assertEquals(2, $this->countToken($template, Twig_Token::PUNCTUATION_TYPE, '{'));
        $this->assertEquals(2, $this->countToken($template, Twig_Token::PUNCTUATION_TYPE, '}'));
=======
        $this->assertEquals(2, $this->countToken($template, Token::PUNCTUATION_TYPE, '{'));
        $this->assertEquals(2, $this->countToken($template, Token::PUNCTUATION_TYPE, '}'));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    protected function countToken($template, $type, $value = null)
    {
<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $count = 0;
        while (!$stream->isEOF()) {
            $token = $stream->next();
            if ($type === $token->getType()) {
                if (null === $value || $value === $token->getValue()) {
                    ++$count;
                }
            }
        }

        return $count;
    }

    public function testLineDirective()
    {
        $template = "foo\n"
            ."bar\n"
            ."{% line 10 %}\n"
            ."{{\n"
            ."baz\n"
            ."}}\n";

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));

        // foo\nbar\n
        $this->assertSame(1, $stream->expect(Twig_Token::TEXT_TYPE)->getLine());
        // \n (after {% line %})
        $this->assertSame(10, $stream->expect(Twig_Token::TEXT_TYPE)->getLine());
        // {{
        $this->assertSame(11, $stream->expect(Twig_Token::VAR_START_TYPE)->getLine());
        // baz
        $this->assertSame(12, $stream->expect(Twig_Token::NAME_TYPE)->getLine());
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));

        // foo\nbar\n
        $this->assertSame(1, $stream->expect(Token::TEXT_TYPE)->getLine());
        // \n (after {% line %})
        $this->assertSame(10, $stream->expect(Token::TEXT_TYPE)->getLine());
        // {{
        $this->assertSame(11, $stream->expect(Token::VAR_START_TYPE)->getLine());
        // baz
        $this->assertSame(12, $stream->expect(Token::NAME_TYPE)->getLine());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testLineDirectiveInline()
    {
        $template = "foo\n"
            ."bar{% line 10 %}{{\n"
            ."baz\n"
            ."}}\n";

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));

        // foo\nbar
        $this->assertSame(1, $stream->expect(Twig_Token::TEXT_TYPE)->getLine());
        // {{
        $this->assertSame(10, $stream->expect(Twig_Token::VAR_START_TYPE)->getLine());
        // baz
        $this->assertSame(11, $stream->expect(Twig_Token::NAME_TYPE)->getLine());
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));

        // foo\nbar
        $this->assertSame(1, $stream->expect(Token::TEXT_TYPE)->getLine());
        // {{
        $this->assertSame(10, $stream->expect(Token::VAR_START_TYPE)->getLine());
        // baz
        $this->assertSame(11, $stream->expect(Token::NAME_TYPE)->getLine());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testLongComments()
    {
        $template = '{# '.str_repeat('*', 100000).' #}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $lexer->tokenize(new Twig_Source($template, 'index'));

        // should not throw an exception
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $lexer->tokenize(new Source($template, 'index'));

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testLongVerbatim()
    {
        $template = '{% verbatim %}'.str_repeat('*', 100000).'{% endverbatim %}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $lexer->tokenize(new Twig_Source($template, 'index'));

        // should not throw an exception
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $lexer->tokenize(new Source($template, 'index'));

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testLongVar()
    {
        $template = '{{ '.str_repeat('x', 100000).' }}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $lexer->tokenize(new Twig_Source($template, 'index'));

        // should not throw an exception
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $lexer->tokenize(new Source($template, 'index'));

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testLongBlock()
    {
        $template = '{% '.str_repeat('x', 100000).' %}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $lexer->tokenize(new Twig_Source($template, 'index'));

        // should not throw an exception
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $lexer->tokenize(new Source($template, 'index'));

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testBigNumbers()
    {
        $template = '{{ 922337203685477580700 }}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $stream->next();
        $node = $stream->next();
        $this->assertEquals('922337203685477580700', $node->getValue());
    }

    public function testStringWithEscapedDelimiter()
    {
<<<<<<< HEAD
        $tests = array(
            "{{ 'foo \' bar' }}" => 'foo \' bar',
            '{{ "foo \" bar" }}' => 'foo " bar',
        );
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        foreach ($tests as $template => $expected) {
            $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
            $stream->expect(Twig_Token::VAR_START_TYPE);
            $stream->expect(Twig_Token::STRING_TYPE, $expected);
=======
        $tests = [
            "{{ 'foo \' bar' }}" => 'foo \' bar',
            '{{ "foo \" bar" }}' => 'foo " bar',
        ];
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        foreach ($tests as $template => $expected) {
            $stream = $lexer->tokenize(new Source($template, 'index'));
            $stream->expect(Token::VAR_START_TYPE);
            $stream->expect(Token::STRING_TYPE, $expected);

            // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
            // can be executed without throwing any exceptions
            $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    public function testStringWithInterpolation()
    {
        $template = 'foo {{ "bar #{ baz + 1 }" }}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
        $stream->expect(Twig_Token::TEXT_TYPE, 'foo ');
        $stream->expect(Twig_Token::VAR_START_TYPE);
        $stream->expect(Twig_Token::STRING_TYPE, 'bar ');
        $stream->expect(Twig_Token::INTERPOLATION_START_TYPE);
        $stream->expect(Twig_Token::NAME_TYPE, 'baz');
        $stream->expect(Twig_Token::OPERATOR_TYPE, '+');
        $stream->expect(Twig_Token::NUMBER_TYPE, '1');
        $stream->expect(Twig_Token::INTERPOLATION_END_TYPE);
        $stream->expect(Twig_Token::VAR_END_TYPE);
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));
        $stream->expect(Token::TEXT_TYPE, 'foo ');
        $stream->expect(Token::VAR_START_TYPE);
        $stream->expect(Token::STRING_TYPE, 'bar ');
        $stream->expect(Token::INTERPOLATION_START_TYPE);
        $stream->expect(Token::NAME_TYPE, 'baz');
        $stream->expect(Token::OPERATOR_TYPE, '+');
        $stream->expect(Token::NUMBER_TYPE, '1');
        $stream->expect(Token::INTERPOLATION_END_TYPE);
        $stream->expect(Token::VAR_END_TYPE);

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testStringWithEscapedInterpolation()
    {
        $template = '{{ "bar \#{baz+1}" }}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
        $stream->expect(Twig_Token::VAR_START_TYPE);
        $stream->expect(Twig_Token::STRING_TYPE, 'bar #{baz+1}');
        $stream->expect(Twig_Token::VAR_END_TYPE);
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));
        $stream->expect(Token::VAR_START_TYPE);
        $stream->expect(Token::STRING_TYPE, 'bar #{baz+1}');
        $stream->expect(Token::VAR_END_TYPE);

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testStringWithHash()
    {
        $template = '{{ "bar # baz" }}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
        $stream->expect(Twig_Token::VAR_START_TYPE);
        $stream->expect(Twig_Token::STRING_TYPE, 'bar # baz');
        $stream->expect(Twig_Token::VAR_END_TYPE);
    }

    /**
     * @expectedException Twig_Error_Syntax
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));
        $stream->expect(Token::VAR_START_TYPE);
        $stream->expect(Token::STRING_TYPE, 'bar # baz');
        $stream->expect(Token::VAR_END_TYPE);

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
    }

    /**
     * @expectedException \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unclosed """
     */
    public function testStringWithUnterminatedInterpolation()
    {
        $template = '{{ "bar #{x" }}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $lexer->tokenize(new Twig_Source($template, 'index'));
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $lexer->tokenize(new Source($template, 'index'));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testStringWithNestedInterpolations()
    {
        $template = '{{ "bar #{ "foo#{bar}" }" }}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
        $stream->expect(Twig_Token::VAR_START_TYPE);
        $stream->expect(Twig_Token::STRING_TYPE, 'bar ');
        $stream->expect(Twig_Token::INTERPOLATION_START_TYPE);
        $stream->expect(Twig_Token::STRING_TYPE, 'foo');
        $stream->expect(Twig_Token::INTERPOLATION_START_TYPE);
        $stream->expect(Twig_Token::NAME_TYPE, 'bar');
        $stream->expect(Twig_Token::INTERPOLATION_END_TYPE);
        $stream->expect(Twig_Token::INTERPOLATION_END_TYPE);
        $stream->expect(Twig_Token::VAR_END_TYPE);
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));
        $stream->expect(Token::VAR_START_TYPE);
        $stream->expect(Token::STRING_TYPE, 'bar ');
        $stream->expect(Token::INTERPOLATION_START_TYPE);
        $stream->expect(Token::STRING_TYPE, 'foo');
        $stream->expect(Token::INTERPOLATION_START_TYPE);
        $stream->expect(Token::NAME_TYPE, 'bar');
        $stream->expect(Token::INTERPOLATION_END_TYPE);
        $stream->expect(Token::INTERPOLATION_END_TYPE);
        $stream->expect(Token::VAR_END_TYPE);

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testStringWithNestedInterpolationsInBlock()
    {
        $template = '{% foo "bar #{ "foo#{bar}" }" %}';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
        $stream->expect(Twig_Token::BLOCK_START_TYPE);
        $stream->expect(Twig_Token::NAME_TYPE, 'foo');
        $stream->expect(Twig_Token::STRING_TYPE, 'bar ');
        $stream->expect(Twig_Token::INTERPOLATION_START_TYPE);
        $stream->expect(Twig_Token::STRING_TYPE, 'foo');
        $stream->expect(Twig_Token::INTERPOLATION_START_TYPE);
        $stream->expect(Twig_Token::NAME_TYPE, 'bar');
        $stream->expect(Twig_Token::INTERPOLATION_END_TYPE);
        $stream->expect(Twig_Token::INTERPOLATION_END_TYPE);
        $stream->expect(Twig_Token::BLOCK_END_TYPE);
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));
        $stream->expect(Token::BLOCK_START_TYPE);
        $stream->expect(Token::NAME_TYPE, 'foo');
        $stream->expect(Token::STRING_TYPE, 'bar ');
        $stream->expect(Token::INTERPOLATION_START_TYPE);
        $stream->expect(Token::STRING_TYPE, 'foo');
        $stream->expect(Token::INTERPOLATION_START_TYPE);
        $stream->expect(Token::NAME_TYPE, 'bar');
        $stream->expect(Token::INTERPOLATION_END_TYPE);
        $stream->expect(Token::INTERPOLATION_END_TYPE);
        $stream->expect(Token::BLOCK_END_TYPE);

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testOperatorEndingWithALetterAtTheEndOfALine()
    {
        $template = "{{ 1 and\n0}}";

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Twig_Source($template, 'index'));
        $stream->expect(Twig_Token::VAR_START_TYPE);
        $stream->expect(Twig_Token::NUMBER_TYPE, 1);
        $stream->expect(Twig_Token::OPERATOR_TYPE, 'and');
    }

    /**
     * @expectedException Twig_Error_Syntax
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $stream = $lexer->tokenize(new Source($template, 'index'));
        $stream->expect(Token::VAR_START_TYPE);
        $stream->expect(Token::NUMBER_TYPE, 1);
        $stream->expect(Token::OPERATOR_TYPE, 'and');

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
    }

    /**
     * @expectedException \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unclosed "variable" in "index" at line 3
     */
    public function testUnterminatedVariable()
    {
        $template = '

{{

bar


';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $lexer->tokenize(new Twig_Source($template, 'index'));
    }

    /**
     * @expectedException Twig_Error_Syntax
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $lexer->tokenize(new Source($template, 'index'));
    }

    /**
     * @expectedException \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unclosed "block" in "index" at line 3
     */
    public function testUnterminatedBlock()
    {
        $template = '

{%

bar


';

<<<<<<< HEAD
        $lexer = new Twig_Lexer(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $lexer->tokenize(new Twig_Source($template, 'index'));
=======
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $lexer->tokenize(new Source($template, 'index'));
    }

    public function testOverridingSyntax()
    {
        $template = '[# comment #]{# variable #}/# if true #/true/# endif #/';
        $lexer = new Lexer(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()), [
            'tag_comment' => ['[#', '#]'],
            'tag_block' => ['/#', '#/'],
            'tag_variable' => ['{#', '#}'],
        ]);
        $stream = $lexer->tokenize(new Source($template, 'index'));
        $stream->expect(Token::VAR_START_TYPE);
        $stream->expect(Token::NAME_TYPE, 'variable');
        $stream->expect(Token::VAR_END_TYPE);
        $stream->expect(Token::BLOCK_START_TYPE);
        $stream->expect(Token::NAME_TYPE, 'if');
        $stream->expect(Token::NAME_TYPE, 'true');
        $stream->expect(Token::BLOCK_END_TYPE);
        $stream->expect(Token::TEXT_TYPE, 'true');
        $stream->expect(Token::BLOCK_START_TYPE);
        $stream->expect(Token::NAME_TYPE, 'endif');
        $stream->expect(Token::BLOCK_END_TYPE);

        // add a dummy assertion here to satisfy PHPUnit, the only thing we want to test is that the code above
        // can be executed without throwing any exceptions
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
