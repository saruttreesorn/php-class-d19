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
=======
use Twig\Error\SyntaxError;
use Twig\Node\ModuleNode;
use Twig\TokenStream;

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
/**
 * Interface implemented by parser classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 3.0)
 */
interface Twig_ParserInterface
{
    /**
     * Converts a token stream to a node tree.
     *
<<<<<<< HEAD
     * @return Twig_Node_Module
     *
     * @throws Twig_Error_Syntax When the token stream is syntactically or semantically wrong
     */
    public function parse(Twig_TokenStream $stream);
=======
     * @return ModuleNode
     *
     * @throws SyntaxError When the token stream is syntactically or semantically wrong
     */
    public function parse(TokenStream $stream);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
}
