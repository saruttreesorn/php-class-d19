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
require_once dirname(__FILE__).'/FilesystemHelper.php';

class Twig_Tests_FileCachingTest extends PHPUnit_Framework_TestCase
=======
use Twig\Environment;
use Twig\Loader\ArrayLoader;

require_once __DIR__.'/FilesystemHelper.php';

class Twig_Tests_FileCachingTest extends \PHPUnit\Framework\TestCase
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
{
    private $env;
    private $tmpDir;

    protected function setUp()
    {
        $this->tmpDir = sys_get_temp_dir().'/TwigTests';
        if (!file_exists($this->tmpDir)) {
            @mkdir($this->tmpDir, 0777, true);
        }

        if (!is_writable($this->tmpDir)) {
            $this->markTestSkipped(sprintf('Unable to run the tests as "%s" is not writable.', $this->tmpDir));
        }

<<<<<<< HEAD
        $this->env = new Twig_Environment(new Twig_Loader_Array(array('index' => 'index', 'index2' => 'index2')), array('cache' => $this->tmpDir));
=======
        $this->env = new Environment(new ArrayLoader(['index' => 'index', 'index2' => 'index2']), ['cache' => $this->tmpDir]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    protected function tearDown()
    {
        Twig_Tests_FilesystemHelper::removeDir($this->tmpDir);
    }

    /**
     * @group legacy
     */
    public function testWritingCacheFiles()
    {
        $name = 'index';
<<<<<<< HEAD
        $this->env->loadTemplate($name);
=======
        $this->env->load($name);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $cacheFileName = $this->env->getCacheFilename($name);

        $this->assertFileExists($cacheFileName, 'Cache file does not exist.');
    }

    /**
     * @group legacy
     */
    public function testClearingCacheFiles()
    {
        $name = 'index2';
<<<<<<< HEAD
        $this->env->loadTemplate($name);
=======
        $this->env->load($name);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        $cacheFileName = $this->env->getCacheFilename($name);

        $this->assertFileExists($cacheFileName, 'Cache file does not exist.');
        $this->env->clearCacheFiles();
        $this->assertFileNotExists($cacheFileName, 'Cache file was not cleared.');
    }
}
