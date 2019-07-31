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
use Twig\Profiler\Dumper\TextDumper;

>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
class Twig_Tests_Profiler_Dumper_TextTest extends Twig_Tests_Profiler_Dumper_AbstractTest
{
    public function testDump()
    {
<<<<<<< HEAD
        $dumper = new Twig_Profiler_Dumper_Text();
=======
        $dumper = new TextDumper();
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $this->assertStringMatchesFormat(<<<EOF
main %d.%dms/%d%
└ index.twig %d.%dms/%d%
  └ embedded.twig::block(body)
  └ embedded.twig
  │ └ included.twig
  └ index.twig::macro(foo)
  └ embedded.twig
    └ included.twig

EOF
        , $dumper->dump($this->getProfile()));
    }
}
