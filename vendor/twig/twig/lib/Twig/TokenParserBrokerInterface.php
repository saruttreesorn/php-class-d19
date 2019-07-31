<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Arnaud Le Blanc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
=======
use Twig\TokenParser\TokenParserInterface;

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
/**
 * Interface implemented by token parser brokers.
 *
 * Token parser brokers allows to implement custom logic in the process of resolving a token parser for a given tag name.
 *
 * @author Arnaud Le Blanc <arnaud.lb@gmail.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
interface Twig_TokenParserBrokerInterface
{
    /**
     * Gets a TokenParser suitable for a tag.
     *
     * @param string $tag A tag name
     *
<<<<<<< HEAD
     * @return Twig_TokenParserInterface|null A Twig_TokenParserInterface or null if no suitable TokenParser was found
=======
     * @return TokenParserInterface|null A Twig_TokenParserInterface or null if no suitable TokenParser was found
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     */
    public function getTokenParser($tag);

    /**
<<<<<<< HEAD
     * Calls Twig_TokenParserInterface::setParser on all parsers the implementation knows of.
=======
     * Calls Twig\TokenParser\TokenParserInterface::setParser on all parsers the implementation knows of.
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     */
    public function setParser(Twig_ParserInterface $parser);

    /**
     * Gets the Twig_ParserInterface.
     *
<<<<<<< HEAD
     * @return null|Twig_ParserInterface A Twig_ParserInterface instance or null
=======
     * @return Twig_ParserInterface|null A Twig_ParserInterface instance or null
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     */
    public function getParser();
}
