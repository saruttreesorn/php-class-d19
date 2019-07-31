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
use Twig\Environment;

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
/**
 * Interface implemented by all compiled templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 3.0)
 */
interface Twig_TemplateInterface
{
    const ANY_CALL = 'any';
    const ARRAY_CALL = 'array';
    const METHOD_CALL = 'method';

    /**
     * Renders the template with the given context and returns it as string.
     *
     * @param array $context An array of parameters to pass to the template
     *
     * @return string The rendered template
     */
    public function render(array $context);

    /**
     * Displays the template with the given context.
     *
     * @param array $context An array of parameters to pass to the template
     * @param array $blocks  An array of blocks to pass to the template
     */
<<<<<<< HEAD
    public function display(array $context, array $blocks = array());
=======
    public function display(array $context, array $blocks = []);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

    /**
     * Returns the bound environment for this template.
     *
<<<<<<< HEAD
     * @return Twig_Environment
=======
     * @return Environment
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
     */
    public function getEnvironment();
}
