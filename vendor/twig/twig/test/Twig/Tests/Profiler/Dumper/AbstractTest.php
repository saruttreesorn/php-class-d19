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
abstract class Twig_Tests_Profiler_Dumper_AbstractTest extends PHPUnit_Framework_TestCase
{
    protected function getProfile()
    {
        $profile = $this->getMockBuilder('Twig_Profiler_Profile')->disableOriginalConstructor()->getMock();

        $profile->expects($this->any())->method('isRoot')->will($this->returnValue(true));
        $profile->expects($this->any())->method('getName')->will($this->returnValue('main'));
        $profile->expects($this->any())->method('getDuration')->will($this->returnValue(1));
        $profile->expects($this->any())->method('getMemoryUsage')->will($this->returnValue(0));
        $profile->expects($this->any())->method('getPeakMemoryUsage')->will($this->returnValue(0));

        $subProfiles = array(
            $this->getIndexProfile(
                array(
                    $this->getEmbeddedBlockProfile(),
                    $this->getEmbeddedTemplateProfile(
                        array(
                            $this->getIncludedTemplateProfile(),
                        )
                    ),
                    $this->getMacroProfile(),
                    $this->getEmbeddedTemplateProfile(
                        array(
                            $this->getIncludedTemplateProfile(),
                        )
                    ),
                )
            ),
        );

        $profile->expects($this->any())->method('getProfiles')->will($this->returnValue($subProfiles));
        $profile->expects($this->any())->method('getIterator')->will($this->returnValue(new ArrayIterator($subProfiles)));
=======
use Twig\Profiler\Profile;

abstract class Twig_Tests_Profiler_Dumper_AbstractTest extends \PHPUnit\Framework\TestCase
{
    protected function getProfile()
    {
        $profile = new Profile('main');
        $subProfiles = [
            $this->getIndexProfile(
                [
                    $this->getEmbeddedBlockProfile(),
                    $this->getEmbeddedTemplateProfile(
                        [
                            $this->getIncludedTemplateProfile(),
                        ]
                    ),
                    $this->getMacroProfile(),
                    $this->getEmbeddedTemplateProfile(
                        [
                            $this->getIncludedTemplateProfile(),
                        ]
                    ),
                ]
            ),
        ];

        $p = new \ReflectionProperty($profile, 'profiles');
        $p->setAccessible(true);
        $p->setValue($profile, $subProfiles);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $profile;
    }

<<<<<<< HEAD
    private function getIndexProfile(array $subProfiles = array())
    {
        return $this->generateProfile('main', 1, true, 'template', 'index.twig', $subProfiles);
    }

    private function getEmbeddedBlockProfile(array $subProfiles = array())
    {
        return $this->generateProfile('body', 0.0001, false, 'block', 'embedded.twig', $subProfiles);
    }

    private function getEmbeddedTemplateProfile(array $subProfiles = array())
    {
        return $this->generateProfile('main', 0.0001, true, 'template', 'embedded.twig', $subProfiles);
    }

    private function getIncludedTemplateProfile(array $subProfiles = array())
    {
        return $this->generateProfile('main', 0.0001, true, 'template', 'included.twig', $subProfiles);
    }

    private function getMacroProfile(array $subProfiles = array())
    {
        return $this->generateProfile('foo', 0.0001, false, 'macro', 'index.twig', $subProfiles);
=======
    private function getIndexProfile(array $subProfiles = [])
    {
        return $this->generateProfile('main', 1, 'template', 'index.twig', $subProfiles);
    }

    private function getEmbeddedBlockProfile(array $subProfiles = [])
    {
        return $this->generateProfile('body', 0.0001, 'block', 'embedded.twig', $subProfiles);
    }

    private function getEmbeddedTemplateProfile(array $subProfiles = [])
    {
        return $this->generateProfile('main', 0.0001, 'template', 'embedded.twig', $subProfiles);
    }

    private function getIncludedTemplateProfile(array $subProfiles = [])
    {
        return $this->generateProfile('main', 0.0001, 'template', 'included.twig', $subProfiles);
    }

    private function getMacroProfile(array $subProfiles = [])
    {
        return $this->generateProfile('foo', 0.0001, 'macro', 'index.twig', $subProfiles);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
    }

    /**
     * @param string $name
     * @param float  $duration
     * @param bool   $isTemplate
     * @param string $type
     * @param string $templateName
     * @param array  $subProfiles
     *
<<<<<<< HEAD
     * @return Twig_Profiler_Profile
     */
    private function generateProfile($name, $duration, $isTemplate, $type, $templateName, array $subProfiles = array())
    {
        $profile = $this->getMockBuilder('Twig_Profiler_Profile')->disableOriginalConstructor()->getMock();

        $profile->expects($this->any())->method('isRoot')->will($this->returnValue(false));
        $profile->expects($this->any())->method('getName')->will($this->returnValue($name));
        $profile->expects($this->any())->method('getDuration')->will($this->returnValue($duration));
        $profile->expects($this->any())->method('getMemoryUsage')->will($this->returnValue(0));
        $profile->expects($this->any())->method('getPeakMemoryUsage')->will($this->returnValue(0));
        $profile->expects($this->any())->method('isTemplate')->will($this->returnValue($isTemplate));
        $profile->expects($this->any())->method('getType')->will($this->returnValue($type));
        $profile->expects($this->any())->method('getTemplate')->will($this->returnValue($templateName));
        $profile->expects($this->any())->method('getProfiles')->will($this->returnValue($subProfiles));
        $profile->expects($this->any())->method('getIterator')->will($this->returnValue(new ArrayIterator($subProfiles)));
=======
     * @return Profile
     */
    private function generateProfile($name, $duration, $type, $templateName, array $subProfiles = [])
    {
        $profile = new Profile($templateName, $type, $name);

        $p = new \ReflectionProperty($profile, 'profiles');
        $p->setAccessible(true);
        $p->setValue($profile, $subProfiles);

        $starts = new \ReflectionProperty($profile, 'starts');
        $starts->setAccessible(true);
        $starts->setValue($profile, [
            'wt' => 0,
            'mu' => 0,
            'pmu' => 0,
        ]);
        $ends = new \ReflectionProperty($profile, 'ends');
        $ends->setAccessible(true);
        $ends->setValue($profile, [
            'wt' => $duration,
            'mu' => 0,
            'pmu' => 0,
        ]);
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        return $profile;
    }
}
