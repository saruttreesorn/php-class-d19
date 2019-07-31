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
class Twig_Tests_Extension_CoreTest extends PHPUnit_Framework_TestCase
=======
use Twig\Environment;

class Twig_Tests_Extension_CoreTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    /**
     * @dataProvider getRandomFunctionTestData
     */
<<<<<<< HEAD
    public function testRandomFunction($value, $expectedInArray)
    {
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());

        for ($i = 0; $i < 100; ++$i) {
            $this->assertTrue(in_array(twig_random($env, $value), $expectedInArray, true)); // assertContains() would not consider the type
=======
    public function testRandomFunction(array $expectedInArray, $value1, $value2 = null)
    {
        $env = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
        for ($i = 0; $i < 100; ++$i) {
            $this->assertTrue(\in_array(twig_random($env, $value1, $value2), $expectedInArray, true)); // assertContains() would not consider the type
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    public function getRandomFunctionTestData()
    {
<<<<<<< HEAD
        return array(
            array(// array
                array('apple', 'orange', 'citrus'),
                array('apple', 'orange', 'citrus'),
            ),
            array(// Traversable
                new ArrayObject(array('apple', 'orange', 'citrus')),
                array('apple', 'orange', 'citrus'),
            ),
            array(// unicode string
                'Ä€é',
                array('Ä', '€', 'é'),
            ),
            array(// numeric but string
                '123',
                array('1', '2', '3'),
            ),
            array(// integer
                5,
                range(0, 5, 1),
            ),
            array(// float
                5.9,
                range(0, 5, 1),
            ),
            array(// negative
                -2,
                array(0, -1, -2),
            ),
        );
=======
        return [
            'array' => [
                ['apple', 'orange', 'citrus'],
                ['apple', 'orange', 'citrus'],
            ],
            'Traversable' => [
                ['apple', 'orange', 'citrus'],
                new ArrayObject(['apple', 'orange', 'citrus']),
            ],
            'unicode string' => [
                ['Ä', '€', 'é'],
                'Ä€é',
            ],
            'numeric but string' => [
                ['1', '2', '3'],
                '123',
            ],
            'integer' => [
                range(0, 5, 1),
                5,
            ],
            'float' => [
                range(0, 5, 1),
                5.9,
            ],
            'negative' => [
                [0, -1, -2],
                -2,
            ],
            'min max int' => [
                range(50, 100),
                50,
                100,
            ],
            'min max float' => [
                range(-10, 10),
                -9.5,
                9.5,
            ],
            'min null' => [
                range(0, 100),
                null,
                100,
            ],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testRandomFunctionWithoutParameter()
    {
        $max = mt_getrandmax();

        for ($i = 0; $i < 100; ++$i) {
<<<<<<< HEAD
            $val = twig_random(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
            $this->assertTrue(is_int($val) && $val >= 0 && $val <= $max);
=======
            $val = twig_random(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()));
            $this->assertTrue(\is_int($val) && $val >= 0 && $val <= $max);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    public function testRandomFunctionReturnsAsIs()
    {
<<<<<<< HEAD
        $this->assertSame('', twig_random(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()), ''));
        $this->assertSame('', twig_random(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), array('charset' => null)), ''));

        $instance = new stdClass();
        $this->assertSame($instance, twig_random(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()), $instance));
    }

    /**
     * @expectedException Twig_Error_Runtime
     */
    public function testRandomFunctionOfEmptyArrayThrowsException()
    {
        twig_random(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()), array());
=======
        $this->assertSame('', twig_random(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()), ''));
        $this->assertSame('', twig_random(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock(), ['charset' => null]), ''));

        $instance = new \stdClass();
        $this->assertSame($instance, twig_random(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()), $instance));
    }

    /**
     * @expectedException \Twig\Error\RuntimeError
     */
    public function testRandomFunctionOfEmptyArrayThrowsException()
    {
        twig_random(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()), []);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function testRandomFunctionOnNonUTF8String()
    {
<<<<<<< HEAD
        if (!function_exists('iconv') && !function_exists('mb_convert_encoding')) {
            $this->markTestSkipped('needs iconv or mbstring');
        }

        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
=======
        if (!\function_exists('iconv') && !\function_exists('mb_convert_encoding')) {
            $this->markTestSkipped('needs iconv or mbstring');
        }

        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $twig->setCharset('ISO-8859-1');

        $text = twig_convert_encoding('Äé', 'ISO-8859-1', 'UTF-8');
        for ($i = 0; $i < 30; ++$i) {
            $rand = twig_random($twig, $text);
<<<<<<< HEAD
            $this->assertTrue(in_array(twig_convert_encoding($rand, 'UTF-8', 'ISO-8859-1'), array('Ä', 'é'), true));
=======
            $this->assertTrue(\in_array(twig_convert_encoding($rand, 'UTF-8', 'ISO-8859-1'), ['Ä', 'é'], true));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    public function testReverseFilterOnNonUTF8String()
    {
<<<<<<< HEAD
        if (!function_exists('iconv') && !function_exists('mb_convert_encoding')) {
            $this->markTestSkipped('needs iconv or mbstring');
        }

        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
=======
        if (!\function_exists('iconv') && !\function_exists('mb_convert_encoding')) {
            $this->markTestSkipped('needs iconv or mbstring');
        }

        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $twig->setCharset('ISO-8859-1');

        $input = twig_convert_encoding('Äé', 'ISO-8859-1', 'UTF-8');
        $output = twig_convert_encoding(twig_reverse_filter($twig, $input), 'UTF-8', 'ISO-8859-1');

        $this->assertEquals($output, 'éÄ');
    }

    /**
     * @dataProvider provideCustomEscaperCases
     */
    public function testCustomEscaper($expected, $string, $strategy)
    {
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
        $twig->getExtension('Twig_Extension_Core')->setEscaper('foo', 'foo_escaper_for_test');
=======
        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
        $twig->getExtension('\Twig\Extension\CoreExtension')->setEscaper('foo', 'foo_escaper_for_test');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        $this->assertSame($expected, twig_escape_filter($twig, $string, $strategy));
    }

    public function provideCustomEscaperCases()
    {
<<<<<<< HEAD
        return array(
            array('fooUTF-8', 'foo', 'foo'),
            array('UTF-8', null, 'foo'),
            array('42UTF-8', 42, 'foo'),
        );
    }

    /**
     * @expectedException Twig_Error_Runtime
     */
    public function testUnknownCustomEscaper()
    {
        twig_escape_filter(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()), 'foo', 'bar');
=======
        return [
            ['fooUTF-8', 'foo', 'foo'],
            ['UTF-8', null, 'foo'],
            ['42UTF-8', 42, 'foo'],
        ];
    }

    /**
     * @expectedException \Twig\Error\RuntimeError
     */
    public function testUnknownCustomEscaper()
    {
        twig_escape_filter(new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock()), 'foo', 'bar');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider provideTwigFirstCases
     */
    public function testTwigFirst($expected, $input)
    {
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
=======
        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertSame($expected, twig_first($twig, $input));
    }

    public function provideTwigFirstCases()
    {
<<<<<<< HEAD
        $i = array(1 => 'a', 2 => 'b', 3 => 'c');

        return array(
            array('a', 'abc'),
            array(1, array(1, 2, 3)),
            array('', null),
            array('', ''),
            array('a', new CoreTestIterator($i, array_keys($i), true, 3)),
        );
=======
        $i = [1 => 'a', 2 => 'b', 3 => 'c'];

        return [
            ['a', 'abc'],
            [1, [1, 2, 3]],
            ['', null],
            ['', ''],
            ['a', new CoreTestIterator($i, array_keys($i), true, 3)],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider provideTwigLastCases
     */
    public function testTwigLast($expected, $input)
    {
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
=======
        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertSame($expected, twig_last($twig, $input));
    }

    public function provideTwigLastCases()
    {
<<<<<<< HEAD
        $i = array(1 => 'a', 2 => 'b', 3 => 'c');

        return array(
            array('c', 'abc'),
            array(3, array(1, 2, 3)),
            array('', null),
            array('', ''),
            array('c', new CoreTestIterator($i, array_keys($i), true)),
        );
=======
        $i = [1 => 'a', 2 => 'b', 3 => 'c'];

        return [
            ['c', 'abc'],
            [3, [1, 2, 3]],
            ['', null],
            ['', ''],
            ['c', new CoreTestIterator($i, array_keys($i), true)],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider provideArrayKeyCases
     */
    public function testArrayKeysFilter(array $expected, $input)
    {
        $this->assertSame($expected, twig_get_array_keys_filter($input));
    }

    public function provideArrayKeyCases()
    {
<<<<<<< HEAD
        $array = array('a' => 'a1', 'b' => 'b1', 'c' => 'c1');
        $keys = array_keys($array);

        return array(
            array($keys, $array),
            array($keys, new CoreTestIterator($array, $keys)),
            array($keys, new CoreTestIteratorAggregate($array, $keys)),
            array($keys, new CoreTestIteratorAggregateAggregate($array, $keys)),
            array(array(), null),
            array(array('a'), new SimpleXMLElement('<xml><a></a></xml>')),
        );
=======
        $array = ['a' => 'a1', 'b' => 'b1', 'c' => 'c1'];
        $keys = array_keys($array);

        return [
            [$keys, $array],
            [$keys, new CoreTestIterator($array, $keys)],
            [$keys, new CoreTestIteratorAggregate($array, $keys)],
            [$keys, new CoreTestIteratorAggregateAggregate($array, $keys)],
            [[], null],
            [['a'], new \SimpleXMLElement('<xml><a></a></xml>')],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider provideInFilterCases
     */
    public function testInFilter($expected, $value, $compare)
    {
        $this->assertSame($expected, twig_in_filter($value, $compare));
    }

    public function provideInFilterCases()
    {
<<<<<<< HEAD
        $array = array(1, 2, 'a' => 3, 5, 6, 7);
        $keys = array_keys($array);

        return array(
            array(true, 1, $array),
            array(true, '3', $array),
            array(true, '3', 'abc3def'),
            array(true, 1, new CoreTestIterator($array, $keys, true, 1)),
            array(true, '3', new CoreTestIterator($array, $keys, true, 3)),
            array(true, '3', new CoreTestIteratorAggregateAggregate($array, $keys, true, 3)),
            array(false, 4, $array),
            array(false, 4, new CoreTestIterator($array, $keys, true)),
            array(false, 4, new CoreTestIteratorAggregateAggregate($array, $keys, true)),
            array(false, 1, 1),
            array(true, 'b', new SimpleXMLElement('<xml><a>b</a></xml>')),
        );
=======
        $array = [1, 2, 'a' => 3, 5, 6, 7];
        $keys = array_keys($array);

        return [
            [true, 1, $array],
            [true, '3', $array],
            [true, '3', 'abc3def'],
            [true, 1, new CoreTestIterator($array, $keys, true, 1)],
            [true, '3', new CoreTestIterator($array, $keys, true, 3)],
            [true, '3', new CoreTestIteratorAggregateAggregate($array, $keys, true, 3)],
            [false, 4, $array],
            [false, 4, new CoreTestIterator($array, $keys, true)],
            [false, 4, new CoreTestIteratorAggregateAggregate($array, $keys, true)],
            [false, 1, 1],
            [true, 'b', new \SimpleXMLElement('<xml><a>b</a></xml>')],
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @dataProvider provideSliceFilterCases
     */
    public function testSliceFilter($expected, $input, $start, $length = null, $preserveKeys = false)
    {
<<<<<<< HEAD
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock());
=======
        $twig = new Environment($this->getMockBuilder('\Twig\Loader\LoaderInterface')->getMock());
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertSame($expected, twig_slice($twig, $input, $start, $length, $preserveKeys));
    }

    public function provideSliceFilterCases()
    {
<<<<<<< HEAD
        $i = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4);
        $keys = array_keys($i);

        return array(
            array(array('a' => 1), $i, 0, 1, true),
            array(array('a' => 1), $i, 0, 1, false),
            array(array('b' => 2, 'c' => 3), $i, 1, 2),
            array(array(1), array(1, 2, 3, 4), 0, 1),
            array(array(2, 3), array(1, 2, 3, 4), 1, 2),
            array(array(2, 3), new CoreTestIterator($i, $keys, true), 1, 2),
            array(array('c' => 3, 'd' => 4), new CoreTestIteratorAggregate($i, $keys, true), 2, null, true),
            array($i, new CoreTestIterator($i, $keys, true), 0, count($keys) + 10, true),
            array(array(), new CoreTestIterator($i, $keys, true), count($keys) + 10),
            array('de', 'abcdef', 3, 2),
            array(array(), new SimpleXMLElement('<items><item>1</item><item>2</item></items>'), 3),
            array(array(), new ArrayIterator(array(1, 2)), 3)
        );
    }
}

function foo_escaper_for_test(Twig_Environment $env, $string, $charset)
=======
        $i = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
        $keys = array_keys($i);

        return [
            [['a' => 1], $i, 0, 1, true],
            [['a' => 1], $i, 0, 1, false],
            [['b' => 2, 'c' => 3], $i, 1, 2],
            [[1], [1, 2, 3, 4], 0, 1],
            [[2, 3], [1, 2, 3, 4], 1, 2],
            [[2, 3], new CoreTestIterator($i, $keys, true), 1, 2],
            [['c' => 3, 'd' => 4], new CoreTestIteratorAggregate($i, $keys, true), 2, null, true],
            [$i, new CoreTestIterator($i, $keys, true), 0, \count($keys) + 10, true],
            [[], new CoreTestIterator($i, $keys, true), \count($keys) + 10],
            ['de', 'abcdef', 3, 2],
            [[], new \SimpleXMLElement('<items><item>1</item><item>2</item></items>'), 3],
            [[], new \ArrayIterator([1, 2]), 3],
        ];
    }
}

function foo_escaper_for_test(Environment $env, $string, $charset)
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    return $string.$charset;
}

<<<<<<< HEAD
final class CoreTestIteratorAggregate implements IteratorAggregate
=======
final class CoreTestIteratorAggregate implements \IteratorAggregate
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    private $iterator;

    public function __construct(array $array, array $keys, $allowAccess = false, $maxPosition = false)
    {
        $this->iterator = new CoreTestIterator($array, $keys, $allowAccess, $maxPosition);
    }

    public function getIterator()
    {
        return $this->iterator;
    }
}

<<<<<<< HEAD
final class CoreTestIteratorAggregateAggregate implements IteratorAggregate
=======
final class CoreTestIteratorAggregateAggregate implements \IteratorAggregate
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    private $iterator;

    public function __construct(array $array, array $keys, $allowValueAccess = false, $maxPosition = false)
    {
        $this->iterator = new CoreTestIteratorAggregate($array, $keys, $allowValueAccess, $maxPosition);
    }

    public function getIterator()
    {
        return $this->iterator;
    }
}

final class CoreTestIterator implements Iterator
{
    private $position;
    private $array;
    private $arrayKeys;
    private $allowValueAccess;
    private $maxPosition;

    public function __construct(array $values, array $keys, $allowValueAccess = false, $maxPosition = false)
    {
        $this->array = $values;
        $this->arrayKeys = $keys;
        $this->position = 0;
        $this->allowValueAccess = $allowValueAccess;
<<<<<<< HEAD
        $this->maxPosition = false === $maxPosition ? count($values) + 1 : $maxPosition;
=======
        $this->maxPosition = false === $maxPosition ? \count($values) + 1 : $maxPosition;
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        if ($this->allowValueAccess) {
            return $this->array[$this->key()];
        }

<<<<<<< HEAD
        throw new LogicException('Code should only use the keys, not the values provided by iterator.');
=======
        throw new \LogicException('Code should only use the keys, not the values provided by iterator.');
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function key()
    {
        return $this->arrayKeys[$this->position];
    }

    public function next()
    {
        ++$this->position;
        if ($this->position === $this->maxPosition) {
<<<<<<< HEAD
             throw new LogicException(sprintf('Code should not iterate beyond %d.', $this->maxPosition));
=======
            throw new \LogicException(sprintf('Code should not iterate beyond %d.', $this->maxPosition));
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }
    }

    public function valid()
    {
        return isset($this->arrayKeys[$this->position]);
    }
}
