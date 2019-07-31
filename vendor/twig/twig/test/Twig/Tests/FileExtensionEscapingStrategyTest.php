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
class Twig_Tests_FileExtensionEscapingStrategyTest extends PHPUnit_Framework_TestCase
=======
use Twig\FileExtensionEscapingStrategy;

class Twig_Tests_FileExtensionEscapingStrategyTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    /**
     * @dataProvider getGuessData
     */
    public function testGuess($strategy, $filename)
    {
<<<<<<< HEAD
        $this->assertSame($strategy, Twig_FileExtensionEscapingStrategy::guess($filename));
=======
        $this->assertSame($strategy, FileExtensionEscapingStrategy::guess($filename));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getGuessData()
    {
<<<<<<< HEAD
        return array(
            // default
            array('html', 'foo.html'),
            array('html', 'foo.html.twig'),
            array('html', 'foo'),
            array('html', 'foo.bar.twig'),
            array('html', 'foo.txt/foo'),
            array('html', 'foo.txt/foo.js/'),

            // css
            array('css', 'foo.css'),
            array('css', 'foo.css.twig'),
            array('css', 'foo.twig.css'),
            array('css', 'foo.js.css'),
            array('css', 'foo.js.css.twig'),

            // js
            array('js', 'foo.js'),
            array('js', 'foo.js.twig'),
            array('js', 'foo.txt/foo.js'),
            array('js', 'foo.txt.twig/foo.js'),

            // txt
            array(false, 'foo.txt'),
            array(false, 'foo.txt.twig'),
        );
=======
        return [
            // default
            ['html', 'foo.html'],
            ['html', 'foo.html.twig'],
            ['html', 'foo'],
            ['html', 'foo.bar.twig'],
            ['html', 'foo.txt/foo'],
            ['html', 'foo.txt/foo.js/'],

            // css
            ['css', 'foo.css'],
            ['css', 'foo.css.twig'],
            ['css', 'foo.twig.css'],
            ['css', 'foo.js.css'],
            ['css', 'foo.js.css.twig'],

            // js
            ['js', 'foo.js'],
            ['js', 'foo.js.twig'],
            ['js', 'foo.txt/foo.js'],
            ['js', 'foo.txt.twig/foo.js'],

            // txt
            [false, 'foo.txt'],
            [false, 'foo.txt.twig'],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }
}
