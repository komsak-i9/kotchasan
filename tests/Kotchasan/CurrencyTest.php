<?php
namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-02-15 at 22:39:48.
 */
class CurrencyTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @var Currency
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Currency();
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {

  }

  /**
   * Generated from @assert (1000, 7, true) [==] 70.
   *
   * @covers Kotchasan\Currency::calcVat
   */
  public function testCalcVat()
  {

    $this->assertEquals(
      70
      , \Kotchasan\Currency::calcVat(1000, 7, true)
    );
  }

  /**
   * Generated from @assert (1000, 7, false) [==] 65.420560747663558.
   *
   * @covers Kotchasan\Currency::calcVat
   */
  public function testCalcVat2()
  {

    $this->assertEquals(
      65.420560747663558
      , \Kotchasan\Currency::calcVat(1000, 7, false)
    );
  }

  /**
   * Generated from @assert (100.00) [==] 'one hundred Baht'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng()
  {

    $this->assertEquals(
      'one hundred Baht'
      , \Kotchasan\Currency::bahtEng(100.00)
    );
  }

  /**
   * Generated from @assert (1000.50) [==] 'one thousand Baht and fifty Satang'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng2()
  {

    $this->assertEquals(
      'one thousand Baht and fifty Satang'
      , \Kotchasan\Currency::bahtEng(1000.50)
    );
  }

  /**
   * Generated from @assert (1000050) [==] 'one millionfifty Baht'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng3()
  {

    $this->assertEquals(
      'one millionfifty Baht'
      , \Kotchasan\Currency::bahtEng(1000050)
    );
  }

  /**
   * Generated from @assert (-1000000050) [==] 'negative one billionfifty Baht'.
   *
   * @covers Kotchasan\Currency::bahtEng
   */
  public function testBahtEng4()
  {

    $this->assertEquals(
      'negative one billionfifty Baht'
      , \Kotchasan\Currency::bahtEng(-1000000050)
    );
  }

  /**
   * Generated from @assert (1000.50) [==] 'หนึ่งพันบาทห้าสิบสตางค์'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai()
  {

    $this->assertEquals(
      'หนึ่งพันบาทห้าสิบสตางค์'
      , \Kotchasan\Currency::bahtThai(1000.50)
    );
  }

  /**
   * Generated from @assert (1000.00) [==] 'หนึ่งพันบาทถ้วน'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai2()
  {

    $this->assertEquals(
      'หนึ่งพันบาทถ้วน'
      , \Kotchasan\Currency::bahtThai(1000.00)
    );
  }

  /**
   * Generated from @assert (1000) [==] 'หนึ่งพันบาทถ้วน'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai3()
  {

    $this->assertEquals(
      'หนึ่งพันบาทถ้วน'
      , \Kotchasan\Currency::bahtThai(1000)
    );
  }

  /**
   * Generated from @assert (1000050) [==] 'หนึ่งล้านห้าสิบบาทถ้วน'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai4()
  {

    $this->assertEquals(
      'หนึ่งล้านห้าสิบบาทถ้วน'
      , \Kotchasan\Currency::bahtThai(1000050)
    );
  }

  /**
   * Generated from @assert (-1000000050) [==] 'ลบหนึ่งพันล้านห้าสิบบาทถ้วน'.
   *
   * @covers Kotchasan\Currency::bahtThai
   */
  public function testBahtThai5()
  {

    $this->assertEquals(
      'ลบหนึ่งพันล้านห้าสิบบาทถ้วน'
      , \Kotchasan\Currency::bahtThai(-1000000050)
    );
  }

  /**
   * @covers Kotchasan\Currency::format
   * @todo   Implement testFormat().
   */
  public function testFormat()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
      'This test has not been implemented yet.'
    );
  }
}
