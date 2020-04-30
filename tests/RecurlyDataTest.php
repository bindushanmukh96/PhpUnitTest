<?php

require 'data/RecurlyMockInfo.php';
require 'data/RecurlyMockBillingInfo.php';
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertJsonFileEqualsJsonFile;
use function PHPUnit\Framework\assertJsonStringEqualsJsonFile;
use function PHPUnit\Framework\assertJsonStringEqualsJsonString;

class RecurlyDataTest extends TestCase
{
    // /**
    //  * @dataProvider RecurlyMockInfo::recurlyMockInfoWithPositiveTestData()
    //  * @dataProvider RecurlyMockBillingInfo::recurlyMockInfoWithPositiveTestData()
    //  * @dataProvider RecurlyMockBillingInfo::recurlyMockInfoWithSecondPositiveTestData()
    //  */
    // public function testRecurlyMockJsonData($data)
    // {
    //     $this->assertJsonStringEqualsJsonString(
    //         json_encode($data),
    //         json_encode($data)
    //     );
    // }
    
    // // positive assert to check the jsondata is present in file or not
    // public function testRecurlyMockJsonDataWithFile()
    // {
    //     $RecurlyDataset = (__DIR__.'/data/RecurlyMockJsonData/RecurlyMockJsonDataFive.txt');
    //     $dataSet = '{
    //                   "account details": {
    //                   "account_code": "5",
    //                   "parent_account_code": "CrcTest",
    //                   "bill_to": "self",
    //                   "email": "TestSample76@hotmail.com",
    //                   "first_name": "Test7Sample6",
    //                   "last_name": "Sample76",
    //                   "company_name": "",
    //                   "phone": "(722)-815481",
    //                   "country" : "US",
    //                   "vat_number": "",
    //                   "tax_exempt": "",
    //                   "entity_use_code": "AHFD",
    //                   "account_acquisition": "cent",
    //                   "billing_info": "",
    //                   "cart_affiliate_id": "",
    //                   "shipping_address": "",
    //                   "accept_language": "",
    //                   "cc_emails": "",
    //                   "preferred_locale": "",
    //                   "transaction_type": "",
    //                   "state": "live",
    //                   "created_at": "2020-04-23T09:23:34.000Z",
    //                   "updated_at": "2020-04-23T09:23:34.000Z"
    //                 }
    //     }';
    //     $this->assertJsonStringEqualsJsonFile($RecurlyDataset,$dataSet);
    // }
    
    // //Positive assert to check the json data of two files
    // public function testRecurlyMockJsonFiles()
    // {
    //     $this->assertJsonFileEqualsJsonFile(__DIR__.'/data/RecurlyMockJsonData/RecurlyMockJsonDataFour.txt',__DIR__.'/data/RecurlyMockJsonData/RecurlyMockJsonDataFour.txt');
    //     $this->assertJsonFileEqualsJsonFile(__DIR__.'/data/RecurlyBillingJsonInfo/RecurlyMockBillingInfoFour.txt',__DIR__.'/data/RecurlyBillingJsonInfo/RecurlyMockBillingInfoFour.txt');
    // }
    
    // //positive assert to compare two xml files
    // public function testRecurlyMockXmlFiles()
    // {
    //     $RecurlyDataset = __DIR__.'/data/RecurlyXmlData/RecurlyXmlDataOne.xml';
    //     $this->assertXmlFileEqualsXmlFile($RecurlyDataset,$RecurlyDataset);
    // }

    // //positive assert to compare an xml string with xml file
    // public function testXmlStringFile()
    // {
    //     $datasetOne = (__DIR__.'/data/RecurlyXmlData/RecurlyXmlDataOne.xml');
    //     $datasetTwo = '<account>
    //                    <account_code>1</account_code>
    //                    <parent_account_code>1</parent_account_code>
    //                    <email>testsampleSample1@gamil.com</email>
    //                    <first_name>testSample</first_name>
    //                    <last_name>sample1</last_name>
    //                    <preferred_locale>en-US</preferred_locale>
    //                    <address>
    //                    <country>US</country>
    //                    </address>
    //                    <shipping_address>
    //                    <nickname>Work</nickname>
    //                    <first_name>testSample</first_name>
    //                    <last_name>sample1</last_name>
    //                    <company>CRC Inc</company>
    //                    <phone>(021)-846937</phone>
    //                    <email>testsampleSample1@gamil.com</email>
    //                    <country>US</country>
    //                    </shipping_address>
    //                    </account>';
    //     $this->assertXmlStringEqualsXmlFile($datasetOne,$datasetTwo);
    // }

    // //postive assert to check the parameters in json object 
    // public function testRecurlyJsonDataHasParams()
    // {
    //     $RecurlyDataset = json_decode(file_get_contents(__DIR__.'/data/RecurlyMockJsonData/RecurlyMockJsonDataFive.txt'),true);
    //     $this->assertArrayHasKey('account_code',$RecurlyDataset['account details']);
    //     $this->assertArrayHasKey('parent_account_code',$RecurlyDataset['account details']);
    //     $this->assertArrayHasKey('first_name',$RecurlyDataset['account details']);
    //     $this->assertArrayHasKey('last_name',$RecurlyDataset['account details']);
    //     $this->assertArrayHasKey('email',$RecurlyDataset['account details']);
    //     $this->assertArrayHasKey('state',$RecurlyDataset['account details']);
    //     $this->assertArrayHasKey('created_at',$RecurlyDataset['account details']);
    //     $this->assertArrayHasKey('phone',$RecurlyDataset['account details']);
    //     $this->assertArrayHasKey('country',$RecurlyDataset['account details']);
        
    //     $RecurlyDatasetTwo = json_decode(file_get_contents(__DIR__.'/data/RecurlyBillingJsonInfo/RecurlyMockBillingInfoFive.txt'),true);
    //     $this->assertArrayHasKey('account_code',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('parent_account_code',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('first_name',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('last_name',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('email',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('state',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('created_at',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('phone',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('card_number',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('card_exp_date_month',$RecurlyDatasetTwo['account details']);
    //     $this->assertArrayHasKey('card_exp_date_year',$RecurlyDatasetTwo['account details']);
    // }

    // //positive assert to check the parameters is valid or not
    // public function testRecurlyJsonHasValidData()
    // {
    //     $RecurlyDataset=json_decode(file_get_contents(__DIR__.'/data/RecurlyBillingJsonInfo/RecurlyMockBillingInfoFive.txt'),true);
    //     $this->assertIsString($RecurlyDataset['account details']['account_code']);
    //     $this->assertIsString($RecurlyDataset['account details']['parent_account_code']);
    //     $this->assertIsString($RecurlyDataset['account details']['first_name']);
    //     $this->assertIsString($RecurlyDataset['account details']['last_name']);
    //     $this->assertIsString($RecurlyDataset['account details']['email']);
    //     $this->assertIsString($RecurlyDataset['account details']['state']);
    //     $this->assertIsString($RecurlyDataset['account details']['created_at']);
    //     $this->assertIsString($RecurlyDataset['account details']['phone']);
    //     $this->assertIsString($RecurlyDataset['account details']['country']);

    //     $RecurlyDatasetTwo = json_decode(file_get_contents(__DIR__.'/data/RecurlyBillingJsonInfo/RecurlyMockBillingInfoFive.txt'),true);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['account_code']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['parent_account_code']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['first_name']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['last_name']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['email']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['state']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['created_at']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['phone']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['card_number']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['card_exp_date_month']);
    //     $this->assertIsString($RecurlyDatasetTwo['account details']['card_exp_date_year']);
    // }

    // //positive asset to check that parameters are not empty
    // public function testRecurlyJsonKeysNotEmpty()
    // {
    //     $RecurlyDataset=json_decode(file_get_contents(__DIR__.'/data/RecurlyMockJsonData/RecurlyMockJsonDataFive.txt'),true);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['account_code']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['parent_account_code']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['bill_to']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['first_name']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['last_name']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['email']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['phone']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['created_at']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['state']);
    //     $this->assertNotEmpty($RecurlyDataset['account details']['country']);

    //     $RecurlyDatasetTwo = json_decode(file_get_contents(__DIR__.'/data/RecurlyBillingJsonInfo/RecurlyMockBillingInfoFive.txt'),true);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['account_code']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['parent_account_code']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['first_name']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['last_name']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['email']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['phone']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['state']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['country']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['card_number']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['card_exp_date_month']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account details']['card_exp_date_year']);
    // }

    // //positive assert to check the parameters in xml object
    // public function testRecurlyXmlDataHasParams()
    // {
    //     $RecurlyDataset = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/RecurlyXmlData/RecurlyXmlDataOne.xml'))),true);
    //     $this->assertArrayHasKey('account_code',$RecurlyDataset);
    //     $this->assertArrayHasKey('parent_account_code',$RecurlyDataset);
    //     $this->assertArrayHasKey('first_name',$RecurlyDataset);
    //     $this->assertArrayHasKey('last_name',$RecurlyDataset);
    //     $this->assertArrayHasKey('email',$RecurlyDataset);
    //     $this->assertArrayHasKey('phone',$RecurlyDataset['shipping_address']);

    //     $RecurlyDatasetTwo = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/RecurlyBillingXmlInfo/RecurlyBillingXmlInfoOne.xml'))),true);
    //     $this->assertArrayHasKey('account_code',$RecurlyDatasetTwo);
    //     $this->assertArrayHasKey('parent_account_code',$RecurlyDatasetTwo);
    //     $this->assertArrayHasKey('first_name',$RecurlyDatasetTwo);
    //     $this->assertArrayHasKey('last_name',$RecurlyDatasetTwo);
    //     $this->assertArrayHasKey('email',$RecurlyDatasetTwo);
    //     $this->assertArrayHasKey('phone',$RecurlyDatasetTwo['shipping_address']);
    //     $this->assertArrayHasKey('year',$RecurlyDatasetTwo);
    //     $this->assertArrayHasKey('month',$RecurlyDatasetTwo);
    //     $this->assertArrayHasKey('first_six',$RecurlyDatasetTwo);
    //     $this->assertArrayHasKey('last_four',$RecurlyDatasetTwo);
    // }

    

    // //positive assert to check the Parameters in xml object is valid or not
    // public function testRecurlyXmlHasValidData()
    // {
    //     $RecurlyDataset = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/RecurlyXmlData/RecurlyXmlDataOne.xml'))),true);
    //     $this->assertIsString($RecurlyDataset['account_code']);
    //     $this->assertIsString($RecurlyDataset['parent_account_code']);
    //     $this->assertIsString($RecurlyDataset['first_name']);
    //     $this->assertIsString($RecurlyDataset['last_name']);
    //     $this->assertIsString($RecurlyDataset['email']);
    //     $this->assertIsString($RecurlyDataset['shipping_address']['phone']);

    //     $RecurlyDatasetTwo = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/RecurlyBillingXmlInfo/RecurlyBillingXmlInfoOne.xml'))),true);
    //     $this->assertIsString($RecurlyDatasetTwo['account_code']);
    //     $this->assertIsString($RecurlyDatasetTwo['parent_account_code']);
    //     $this->assertIsString($RecurlyDatasetTwo['first_name']);
    //     $this->assertIsString($RecurlyDatasetTwo['last_name']);
    //     $this->assertIsString($RecurlyDatasetTwo['email']);
    //     $this->assertIsString($RecurlyDatasetTwo['shipping_address']['phone']);
    //     $this->assertIsString($RecurlyDatasetTwo['year']);
    //     $this->assertIsString($RecurlyDatasetTwo['month']);
    //     $this->assertIsString($RecurlyDatasetTwo['first_six']);
    //     $this->assertIsString($RecurlyDatasetTwo['last_four']);
    // }

    // //positive assert to check the parameter is not empty
    // public function testRecurlyXmlDataIsNotEmpty()
    // {
    //     $RecurlyDataset = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/RecurlyXmlData/RecurlyXmlDataOne.xml'))),true);
    //     $this->assertNotEmpty($RecurlyDataset['account_code']);
    //     $this->assertNotEmpty($RecurlyDataset['parent_account_code']);
    //     $this->assertNotEmpty($RecurlyDataset['first_name']);
    //     $this->assertNotEmpty($RecurlyDataset['last_name']);
    //     $this->assertNotEmpty($RecurlyDataset['email']);
    //     $this->assertNotEmpty($RecurlyDataset['address']['country']);
    //     $this->assertNotEmpty($RecurlyDataset['shipping_address']['phone']);
    //     $this->assertNotEmpty($RecurlyDataset['shipping_address']['first_name']);
    //     $this->assertNotEmpty($RecurlyDataset['shipping_address']['last_name']);

    //     $RecurlyDatasetTwo = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/RecurlyBillingXmlInfo/RecurlyBillingXmlInfoOne.xml'))),true);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['account_code']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['parent_account_code']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['first_name']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['last_name']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['email']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['address']['country']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['shipping_address']['phone']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['shipping_address']['first_name']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['shipping_address']['last_name']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['month']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['year']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['first_six']);
    //     $this->assertNotEmpty($RecurlyDatasetTwo['last_four']);
    // }

    // //positive assert to check the shipping data is valid
    // public function testRecurlyXmlShippingDataIsValid()
    // {
    //     $RecurlyDataset = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/RecurlyXmlData/RecurlyXmlDataOne.xml'))),true);
    //     $this->assertEquals($RecurlyDataset['shipping_address']['first_name'],$RecurlyDataset['first_name']);
    //     $this->assertEquals($RecurlyDataset['shipping_address']['last_name'],$RecurlyDataset['last_name']);
    //     $this->assertEquals($RecurlyDataset['shipping_address']['email'],$RecurlyDataset['email']);
    //     $this->assertEquals($RecurlyDataset['shipping_address']['country'],$RecurlyDataset['address']['country']);

    //     $RecurlyDatasetTwo = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/RecurlyBillingXmlInfo/RecurlyBillingXmlInfoOne.xml'))),true);
    //     $this->assertEquals($RecurlyDatasetTwo['shipping_address']['first_name'],$RecurlyDataset['first_name']);
    //     $this->assertEquals($RecurlyDatasetTwo['shipping_address']['last_name'],$RecurlyDataset['last_name']);
    //     $this->assertEquals($RecurlyDatasetTwo['shipping_address']['email'],$RecurlyDataset['email']);
    //     $this->assertEquals($RecurlyDatasetTwo['shipping_address']['country'],$RecurlyDatasetTwo['address']['country']);
    // }
    
    //positive test to check the response is valid
    public function testRecurlyResponseValid()
    {
        $RecurlyDatasetTwo = file_get_contents(__DIR__.'/data/RecurlyResponse.txt');
        echo $RecurlyDatasetTwo;
        echo gettype($RecurlyDatasetTwo);
        $this->assertNotEmpty($RecurlyDatasetTwo);
        $this->assertNotEmpty($RecurlyDatasetTwo['account']);
    }
}