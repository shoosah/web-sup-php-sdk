<?php
namespace Serato\UserProfileSdk\Test\Message;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Serato\UserProfileSdk\Message\TrialProductUpdate;

class TrialProductUpdateTest extends PHPUnitTestCase
{
    public function testSetters0()
    {
        $userId = 123;
        $productName = 'sample';
        $expiryDate = '2016-12-02';

        $trialProduct = TrialProductUpdate::create($userId)
                        ->setProductName($productName)
                        ->setExpiry($expiryDate);

        $this->assertEquals('TrialProductUpdate', $trialProduct->getType());
        $this->assertEquals($productName, $trialProduct->getProductName());
        $this->assertEquals($expiryDate, $trialProduct->getExpiry());
    }

    public function testSetters1()
    {
        $userId = 123;
        $productName = 'sample';
        $expiryDateTimeStamp = '1480636800';
        $expiryDate = '2016-12-02';

        $trialProduct = TrialProductUpdate::create($userId)
            ->setProductName($productName)
            ->setExpiryWithDateFormat($expiryDateTimeStamp);

        $this->assertEquals('TrialProductUpdate', $trialProduct->getType());
        $this->assertEquals($productName, $trialProduct->getProductName());
        $this->assertEquals($expiryDate, $trialProduct->getExpiry());
    }
}
