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
class Twig_Tests_ParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Twig_Error_Syntax
=======

use Twig\Environment;
use Twig\Node\Node;
use Twig\Node\SetNode;
use Twig\Node\TextNode;
use Twig\Parser;
use Twig\Source;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;
use Twig\TokenStream;

class Twig_Tests_ParserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     */
    public function testSetMacroThrowsExceptionOnReservedMethods()
    {
        $parser = $this->getParser();
<<<<<<< HEAD
        $parser->setMacro('parent', $this->getMockBuilder('Twig_Node_Macro')->disableOriginalConstructor()->getMock());
    }

    /**
     * @expectedException        Twig_Error_Syntax
=======
        $parser->setMacro('parent', $this->getMockBuilder('\Twig\Node\MacroNode')->disableOriginalConstructor()->getMock());
    }

    /**
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown "foo" tag. Did you mean "for" at line 1?
     */
    public function testUnknownTag()
    {
<<<<<<< HEAD
        $stream = new Twig_TokenStream(array(
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'foo', 1),
            new Twig_Token(Twig_Token::BLOCK_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::EOF_TYPE, '', 1),
        ));
        $parser = new Twig_Parser(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
=======
        $stream = new TokenStream([
            new Token(Token::BLOCK_START_TYPE, '', 1),
            new Token(Token::NAME_TYPE, 'foo', 1),
            new Token(Token::BLOCK_END_TYPE, '', 1),
            new Token(Token::EOF_TYPE, '', 1),
        ]);
        $parser = new Parser(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $parser->parse($stream);
    }

    /**
<<<<<<< HEAD
     * @expectedException        Twig_Error_Syntax
=======
     * @expectedException        \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     * @expectedExceptionMessage Unknown "foobar" tag at line 1.
     */
    public function testUnknownTagWithoutSuggestions()
    {
<<<<<<< HEAD
        $stream = new Twig_TokenStream(array(
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'foobar', 1),
            new Twig_Token(Twig_Token::BLOCK_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::EOF_TYPE, '', 1),
        ));
        $parser = new Twig_Parser(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
=======
        $stream = new TokenStream([
            new Token(Token::BLOCK_START_TYPE, '', 1),
            new Token(Token::NAME_TYPE, 'foobar', 1),
            new Token(Token::BLOCK_END_TYPE, '', 1),
            new Token(Token::EOF_TYPE, '', 1),
        ]);
        $parser = new Parser(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $parser->parse($stream);
    }

    /**
     * @dataProvider getFilterBodyNodesData
     */
    public function testFilterBodyNodes($input, $expected)
    {
        $parser = $this->getParser();

        $this->assertEquals($expected, $parser->filterBodyNodes($input));
    }

    public function getFilterBodyNodesData()
    {
<<<<<<< HEAD
        return array(
            array(
                new Twig_Node(array(new Twig_Node_Text('   ', 1))),
                new Twig_Node(array()),
            ),
            array(
                $input = new Twig_Node(array(new Twig_Node_Set(false, new Twig_Node(), new Twig_Node(), 1))),
                $input,
            ),
            array(
                $input = new Twig_Node(array(new Twig_Node_Set(true, new Twig_Node(), new Twig_Node(array(new Twig_Node(array(new Twig_Node_Text('foo', 1))))), 1))),
                $input,
            ),
        );
=======
        return [
            [
                new Node([new TextNode('   ', 1)]),
                new Node([]),
            ],
            [
                $input = new Node([new SetNode(false, new Node(), new Node(), 1)]),
                $input,
            ],
            [
                $input = new Node([new SetNode(true, new Node(), new Node([new Node([new TextNode('foo', 1)])]), 1)]),
                $input,
            ],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider getFilterBodyNodesDataThrowsException
<<<<<<< HEAD
     * @expectedException Twig_Error_Syntax
=======
     * @expectedException \Twig\Error\SyntaxError
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     */
    public function testFilterBodyNodesThrowsException($input)
    {
        $parser = $this->getParser();

        $parser->filterBodyNodes($input);
    }

    public function getFilterBodyNodesDataThrowsException()
    {
<<<<<<< HEAD
        return array(
            array(new Twig_Node_Text('foo', 1)),
            array(new Twig_Node(array(new Twig_Node(array(new Twig_Node_Text('foo', 1)))))),
        );
    }

    /**
     * @expectedException Twig_Error_Syntax
     * @expectedExceptionMessage A template that extends another one cannot start with a byte order mark (BOM); it must be removed at line 1
     */
    public function testFilterBodyNodesWithBOM()
    {
        $parser = $this->getParser();
        $parser->filterBodyNodes(new Twig_Node_Text(chr(0xEF).chr(0xBB).chr(0xBF), 1));
=======
        return [
            [new TextNode('foo', 1)],
            [new Node([new Node([new TextNode('foo', 1)])])],
        ];
    }

    /**
     * @dataProvider getFilterBodyNodesWithBOMData
     */
    public function testFilterBodyNodesWithBOM($emptyNode)
    {
        $this->assertNull($this->getParser()->filterBodyNodes(new TextNode(\chr(0xEF).\chr(0xBB).\chr(0xBF).$emptyNode, 1)));
    }

    public function getFilterBodyNodesWithBOMData()
    {
        return [
            [' '],
            ["\t"],
            ["\n"],
            ["\n\t\n   "],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testParseIsReentrant()
    {
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array(
            'autoescape' => false,
            'optimizations' => 0,
        ));
        $twig->addTokenParser(new TestTokenParser());

        $parser = new Twig_Parser($twig);

        $parser->parse(new Twig_TokenStream(array(
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'test', 1),
            new Twig_Token(Twig_Token::BLOCK_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::VAR_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'foo', 1),
            new Twig_Token(Twig_Token::VAR_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::EOF_TYPE, '', 1),
        )));
=======
        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), [
            'autoescape' => false,
            'optimizations' => 0,
        ]);
        $twig->addTokenParser(new TestTokenParser());

        $parser = new Parser($twig);

        $parser->parse(new TokenStream([
            new Token(Token::BLOCK_START_TYPE, '', 1),
            new Token(Token::NAME_TYPE, 'test', 1),
            new Token(Token::BLOCK_END_TYPE, '', 1),
            new Token(Token::VAR_START_TYPE, '', 1),
            new Token(Token::NAME_TYPE, 'foo', 1),
            new Token(Token::VAR_END_TYPE, '', 1),
            new Token(Token::EOF_TYPE, '', 1),
        ]));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertNull($parser->getParent());
    }

<<<<<<< HEAD
    // The getVarName() must not depend on the template loaders,
    // If this test does not throw any exception, that's good.
    // see https://github.com/symfony/symfony/issues/4218
    public function testGetVarName()
    {
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array(
            'autoescape' => false,
            'optimizations' => 0,
        ));

        $twig->parse($twig->tokenize(new Twig_Source(<<<EOF
=======
    public function testGetVarName()
    {
        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), [
            'autoescape' => false,
            'optimizations' => 0,
        ]);

        $twig->parse($twig->tokenize(new Source(<<<EOF
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{% from _self import foo %}

{% macro foo() %}
    {{ foo }}
{% endmacro %}
EOF
        , 'index')));
<<<<<<< HEAD
=======

        // The getVarName() must not depend on the template loaders,
        // If this test does not throw any exception, that's good.
        // see https://github.com/symfony/symfony/issues/4218
        $this->addToAssertionCount(1);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    protected function getParser()
    {
<<<<<<< HEAD
        $parser = new TestParser(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $parser->setParent(new Twig_Node());
        $parser->stream = new Twig_TokenStream(array());
=======
        $parser = new TestParser(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
        $parser->setParent(new Node());
        $parser->stream = new TokenStream([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $parser;
    }
}

<<<<<<< HEAD
class TestParser extends Twig_Parser
=======
class TestParser extends Parser
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    public $stream;

    public function filterBodyNodes(Twig_NodeInterface $node)
    {
        return parent::filterBodyNodes($node);
    }
}

<<<<<<< HEAD
class TestTokenParser extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        // simulate the parsing of another template right in the middle of the parsing of the current template
        $this->parser->parse(new Twig_TokenStream(array(
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'extends', 1),
            new Twig_Token(Twig_Token::STRING_TYPE, 'base', 1),
            new Twig_Token(Twig_Token::BLOCK_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::EOF_TYPE, '', 1),
        )));

        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        return new Twig_Node(array());
=======
class TestTokenParser extends AbstractTokenParser
{
    public function parse(Token $token)
    {
        // simulate the parsing of another template right in the middle of the parsing of the current template
        $this->parser->parse(new TokenStream([
            new Token(Token::BLOCK_START_TYPE, '', 1),
            new Token(Token::NAME_TYPE, 'extends', 1),
            new Token(Token::STRING_TYPE, 'base', 1),
            new Token(Token::BLOCK_END_TYPE, '', 1),
            new Token(Token::EOF_TYPE, '', 1),
        ]));

        $this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new Node([]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getTag()
    {
        return 'test';
    }
}
