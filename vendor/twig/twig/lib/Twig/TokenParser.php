<?php

<<<<<<< HEAD
/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Base class for all token parsers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Twig_TokenParser implements Twig_TokenParserInterface
{
    /**
     * @var Twig_Parser
     */
    protected $parser;

    /**
     * Sets the parser associated with this token parser.
     */
    public function setParser(Twig_Parser $parser)
    {
        $this->parser = $parser;
=======
use Twig\TokenParser\AbstractTokenParser;

class_exists('Twig\TokenParser\AbstractTokenParser');

if (\false) {
    class Twig_TokenParser extends AbstractTokenParser
    {
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
