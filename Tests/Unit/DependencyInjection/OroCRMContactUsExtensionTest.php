<?php

namespace OroCRM\Bundle\ContactUsBundle\Tests\Unit\DependencyInjection;

class OroCRMContactUsExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testSubclassOf()
    {
        $rc = new \ReflectionClass('OroCRM\Bundle\ContactUsBundle\DependencyInjection\OroCRMContactUsExtension');
        $this->assertTrue($rc->isSubclassOf('Symfony\Component\HttpKernel\DependencyInjection\Extension'));
    }
}
