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
class Twig_Tests_TokenStreamTest extends PHPUnit_Framework_TestCase
=======
use Twig\Token;
use Twig\TokenStream;

class Twig_Tests_TokenStreamTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    protected static $tokens;

    protected function setUp()
    {
<<<<<<< HEAD
        self::$tokens = array(
            new Twig_Token(Twig_Token::TEXT_TYPE, 1, 1),
            new Twig_Token(Twig_Token::TEXT_TYPE, 2, 1),
            new Twig_Token(Twig_Token::TEXT_TYPE, 3, 1),
            new Twig_Token(Twig_Token::TEXT_TYPE, 4, 1),
            new Twig_Token(Twig_Token::TEXT_TYPE, 5, 1),
            new Twig_Token(Twig_Token::TEXT_TYPE, 6, 1),
            new Twig_Token(Twig_Token::TEXT_TYPE, 7, 1),
            new Twig_Token(Twig_Token::EOF_TYPE, 0, 1),
        );
=======
        self::$tokens = [
            new Token(Token::TEXT_TYPE, 1, 1),
            new Token(Token::TEXT_TYPE, 2, 1),
            new Token(Token::TEXT_TYPE, 3, 1),
            new Token(Token::TEXT_TYPE, 4, 1),
            new Token(Token::TEXT_TYPE, 5, 1),
            new Token(Token::TEXT_TYPE, 6, 1),
            new Token(Token::TEXT_TYPE, 7, 1),
            new Token(Token::EOF_TYPE, 0, 1),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @group legacy
     */
    public function testLegacyConstructorSignature()
    {
<<<<<<< HEAD
        $stream = new Twig_TokenStream(array(), 'foo', '{{ foo }}');
=======
        $stream = new TokenStream([], 'foo', '{{ foo }}');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertEquals('foo', $stream->getFilename());
        $this->assertEquals('{{ foo }}', $stream->getSource());
        $this->assertEquals('foo', $stream->getSourceContext()->getName());
        $this->assertEquals('{{ foo }}', $stream->getSourceContext()->getCode());
    }

    public function testNext()
    {
<<<<<<< HEAD
        $stream = new Twig_TokenStream(self::$tokens);
        $repr = array();
=======
        $stream = new TokenStream(self::$tokens);
        $repr = [];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        while (!$stream->isEOF()) {
            $token = $stream->next();

            $repr[] = $token->getValue();
        }
        $this->assertEquals('1, 2, 3, 4, 5, 6, 7', implode(', ', $repr), '->next() advances the pointer and returns the current token');
    }

    /**
<<<<<<< HEAD
     * @expectedException Twig_Error_Syntax
     * @expectedMessage   Unexpected end of template
     */
    public function testEndOfTemplateNext()
    {
        $stream = new Twig_TokenStream(array(
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, 1, 1),
        ));
=======
     * @expectedException        \Twig\Error\SyntaxError
     * @expectedExceptionMessage Unexpected end of template
     */
    public function testEndOfTemplateNext()
    {
        $stream = new TokenStream([
            new Token(Token::BLOCK_START_TYPE, 1, 1),
        ]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        while (!$stream->isEOF()) {
            $stream->next();
        }
    }

    /**
<<<<<<< HEAD
     * @expectedException Twig_Error_Syntax
     * @expectedMessage   Unexpected end of template
     */
    public function testEndOfTemplateLook()
    {
        $stream = new Twig_TokenStream(array(
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, 1, 1),
        ));
=======
     * @expectedException        \Twig\Error\SyntaxError
     * @expectedExceptionMessage Unexpected end of template
     */
    public function testEndOfTemplateLook()
    {
        $stream = new TokenStream([
            new Token(Token::BLOCK_START_TYPE, 1, 1),
        ]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        while (!$stream->isEOF()) {
            $stream->look();
            $stream->next();
        }
    }
}
