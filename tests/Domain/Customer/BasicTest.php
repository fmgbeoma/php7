<?php

namespace Bookstore\Tests\Domain\Customer;

use Bookstore\Domain\Customer\Basic;
use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    private $customer;

    public function setUp()
    {
        $this->customer = new Basic(1, 'han', 'solo', 'han@solo.com');
    }

    public function testAmountToBorrow()
    {
        $this->assertSame(3, $this->customer->getAmountToBorrow(), 'Basic customer should borrow up to 3 books.');
    }

    public function testGetMonthlyFee()
    {
        $this->assertEquals(5, $this->customer->getMonthlyFee(), 'Basic customer can only pay 5');
    }

//    public function testIsExemptOfTaxes()
//    {
//        $this->assertFalse($this->customer->isExemptOfTaxes(), 'Basic customer should be exempt of taxes');
//    }

}