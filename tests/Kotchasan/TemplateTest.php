<?php
namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-03-25 at 17:23:56.
 */
class TemplateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Template
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Template();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * Generated from @assert ('', '', 'FileNotFound')->isEmpty() [==] true.
     *
     * @covers Kotchasan\Template::create
     */
    public function testCreate()
    {

        $this->assertTrue(
            \Kotchasan\Template::create('', '', 'FileNotFound')->isEmpty()
        );
    }

    /**
     * Generated from @assert ('FileNotFound') [throws] InvalidArgumentException.
     *
     * @covers Kotchasan\Template::createFromFile
     * @expectedException InvalidArgumentException
     */
    public function testCreateFromFile()
    {

        \Kotchasan\Template::createFromFile('FileNotFound');
    }

    /**
     * Generated from @assert ('/{TITLE}/', 'Title', '<b>{TITLE}</b>') [==] '<b>Title</b>'.
     *
     * @covers Kotchasan\Template::pregReplace
     */
    public function testPregReplace()
    {

        $this->assertEquals(
            '<b>Title</b>', \Kotchasan\Template::pregReplace('/{TITLE}/', 'Title', '<b>{TITLE}</b>')
        );
    }

    /**
     * Generated from @assert ('/{LNG_([\w\s\.\-\'\(\),%\/:&\#;]+)}/e', '\Kotchasan\Language::get(array(1=>"$1"))', '<b>{LNG_Language test}</b>') [==] '<b>Language test</b>'.
     *
     * @covers Kotchasan\Template::pregReplace
     */
    public function testPregReplace2()
    {

        $this->assertEquals(
            '<b>Language test</b>', \Kotchasan\Template::pregReplace('/{LNG_([\w\s\.\-\'\(\),%\/:&\#;]+)}/e', '\Kotchasan\Language::get(array(1=>"$1"))', '<b>{LNG_Language test}</b>')
        );
    }

    /**
     * @covers Kotchasan\Template::init
     * @todo   Implement testInit().
     */
    public function testInit()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kotchasan\Template::add
     * @todo   Implement testAdd().
     */
    public function testAdd()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kotchasan\Template::render
     * @todo   Implement testRender().
     */
    public function testRender()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kotchasan\Template::load
     * @todo   Implement testLoad().
     */
    public function testLoad()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kotchasan\Template::isEmpty
     * @todo   Implement testIsEmpty().
     */
    public function testIsEmpty()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kotchasan\Template::getPath
     * @todo   Implement testGetPath().
     */
    public function testGetPath()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
