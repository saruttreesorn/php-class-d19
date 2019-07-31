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
class Twig_Tests_LegacyIntegrationTest extends Twig_Test_IntegrationTestCase
{
    public function getExtensions()
    {
        return array(
            new LegacyTwigTestExtension(),
        );
=======
use Twig\Extension\AbstractExtension;
use Twig\Test\IntegrationTestCase;

class Twig_Tests_LegacyIntegrationTest extends IntegrationTestCase
{
    public function getExtensions()
    {
        return [
            new LegacyTwigTestExtension(),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getFixturesDir()
    {
<<<<<<< HEAD
        return dirname(__FILE__).'/LegacyFixtures/';
=======
        return __DIR__.'/LegacyFixtures/';
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function getTests($name, $legacyTests = false)
    {
        if (!$legacyTests) {
<<<<<<< HEAD
            return array(array('not', '-', '', array(), '', array()));
=======
            return [['', '', '', [], '', []]];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        }

        return parent::getTests($name, true);
    }
}

<<<<<<< HEAD
class LegacyTwigTestExtension extends Twig_Extension
{
    public function getTests()
    {
        return array(
            'multi word' => new Twig_Test_Method($this, 'is_multi_word'),
        );
=======
class LegacyTwigTestExtension extends AbstractExtension
{
    public function getTests()
    {
        return [
            'multi word' => new Twig_Test_Method($this, 'is_multi_word'),
        ];
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    public function is_multi_word($value)
    {
        return false !== strpos($value, ' ');
    }

    public function getName()
    {
        return 'legacy_integration_test';
    }
}
