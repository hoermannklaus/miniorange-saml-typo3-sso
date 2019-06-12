<?php
namespace MiniOrange\MiniorangeSaml\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author miniOrange <info@miniorange.com>
 */
class ResponseControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MiniOrange\MiniorangeSaml\Controller\ResponseController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MiniOrange\MiniorangeSaml\Controller\ResponseController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}