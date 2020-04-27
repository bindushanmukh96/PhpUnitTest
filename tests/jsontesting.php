<?php

require 'data/RecurlyMockInfo.php';
// require 'data/RecurlyMockJsonDataFive.json';
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertJsonFileEqualsJsonFile;
use function PHPUnit\Framework\assertJsonStringEqualsJsonFile;
use function PHPUnit\Framework\assertJsonStringEqualsJsonString;

class jsontesting extends TestCase
{
    /**
     * @dataProvider RecurlyMockInfo::recurlyMockInfoWithPositiveTestData()
     */
    public function testRecurlyMockJsonData($data)
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode($data),
            json_encode($data)
        );
    }
    
    // positive assert to check the jsondata is present in file or not
    public function testRecurlyMockJsonDataWithFile()
    {
        // $path1 = file_get_contents(__DIR__.'/data/RecurlyMockJsonDataFive.txt');
        $path2 = (__DIR__.'/data/RecurlyMockJsonDataFive.json');
       
        $data= '{
            "account details": {
                "account_code": "crc",
                "parent_account_code": "CrcTest",
                "bill_to": "self",
                "email": "TestSample76@hotmail.com",
                "first_name": "Test7Sample6",
                "last_name": "Sample76",
                "company_name": "",
                "phone": "(722)-815481",
                "vat_number": "",
                "tax_exempt": "",
                "entity_use_code": "AHFD",
                "account_acquisition": "cent",
                "billing_info": "",
                "cart_affiliate_id": "",
                "shipping_address": "",
                "accept_language": "",
                "cc_emails": "",
                "preferred_locale": "",
                "transaction_type": "",
                "state": "live",
                "created_at": "2020-04-23T09:23:34.000Z",
                "updated_at": "2020-04-23T09:23:34.000Z"
            }
        }';
        $this->assertJsonStringEqualsJsonFile($path2,$data);
    }
    
    //Positive assert to check the json data of two files
    public function testRecurlyMockJsonFiles()
    {
        $this->assertJsonFileEqualsJsonFile(__DIR__.'/data/RecurlyMockJsonDataFive.json',__DIR__.'/data/RecurlyMockJsonDataFive.json');
    }
    
    //positive assert to compare two xml files
    public function testRecurlyMockXmlFiles()
    {
        $path1 = __DIR__.'/data/XmlDataOne.xml';
        $this->assertXmlFileEqualsXmlFile($path1,$path1);
    }

    //positive assert to compare an xml string with xml file
    public function testXmlStringFile()
    {
        $dataThree=(__DIR__.'/data/XmlDataOne.xml');
        $data = '
        <account>
        <account_code>1</account_code>
        <parent_account_code>1</parent_account_code>
        <email>testsampleSample1@gamil.com</email>
        <first_name>testSample</first_name>
        <last_name>sample1</last_name>
        <preferred_locale>en-US</preferred_locale>
        <address>
          <country>US</country>
        </address>
          <shipping_address>
            <nickname>Work</nickname>
            <first_name>testSample</first_name>
            <last_name>sample1</last_name>
            <company>CRC Inc</company>
            <phone>(021)-846937</phone>
            <email>testsampleSample1@gamil.com</email>
            <country>US</country>
          </shipping_address>
        </account>';
        $this->assertXmlStringEqualsXmlFile($dataThree,$data);
    }

    //postive assert to check the parameters in json object 
    public function testRecurlyJsonDataHasParams()
    {
        $RecurlyDataset = json_decode(file_get_contents(__DIR__.'/data/RecurlyMockJsonDataFive.json'),true);
        $this->assertArrayHasKey('account_code',$RecurlyDataset['account details']);
        $this->assertArrayHasKey('parent_account_code',$RecurlyDataset['account details']);
        $this->assertArrayHasKey('first_name',$RecurlyDataset['account details']);
        $this->assertArrayHasKey('last_name',$RecurlyDataset['account details']);
        $this->assertArrayHasKey('email',$RecurlyDataset['account details']);
        $this->assertArrayHasKey('state',$RecurlyDataset['account details']);
        $this->assertArrayHasKey('created_at',$RecurlyDataset['account details']);
        $this->assertArrayHasKey('phone',$RecurlyDataset['account details']);
    }

    //positive assert to check the parameters is valid or not
    public function testRecurlyJsonHasValidData()
    {
        $RecurlyDataset=json_decode(file_get_contents(__DIR__.'/data/RecurlyMockJsonDataFive.json'),true);
        $this->assertIsString($RecurlyDataset['account details']['account_code']);
        $this->assertIsString($RecurlyDataset['account details']['parent_account_code']);
        $this->assertIsString($RecurlyDataset['account details']['first_name']);
        $this->assertIsString($RecurlyDataset['account details']['last_name']);
        $this->assertIsString($RecurlyDataset['account details']['email']);
        $this->assertIsString($RecurlyDataset['account details']['state']);
        $this->assertIsString($RecurlyDataset['account details']['created_at']);
        $this->assertIsString($RecurlyDataset['account details']['phone']);
    }

    //positive assert to check the parameters in xml object
    public function testRecurlyXmlDataHasParams()
    {
        $RecurlyDataset = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/XmlDataOne.xml'))),true);
        $this->assertArrayHasKey('account_code',$RecurlyDataset);
        $this->assertArrayHasKey('parent_account_code',$RecurlyDataset);
        $this->assertArrayHasKey('first_name',$RecurlyDataset);
        $this->assertArrayHasKey('last_name',$RecurlyDataset);
        $this->assertArrayHasKey('email',$RecurlyDataset);
        $this->assertArrayHasKey('phone',$RecurlyDataset['shipping_address']);
    }

    //positive assert to check the Parameters in xml object is valid or not
    public function testRecurlyXmlHasValidData()
    {
        $RecurlyDataset = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/XmlDataOne.xml'))),true);
        $this->assertIsString($RecurlyDataset['first_name']);
        $this->assertIsString($RecurlyDataset['last_name']);
        $this->assertIsString($RecurlyDataset['email']);
        $this->assertIsString($RecurlyDataset['shipping_address']['phone']);
    }

    //positive assert to check the parameter is not empty
    public function testRecurlyXmlDataIsNotEmpty()
    {
        $RecurlyDataset = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/XmlDataOne.xml'))),true);
        $this->assertNotEmpty($RecurlyDataset['first_name']);
        $this->assertNotEmpty($RecurlyDataset['last_name']);
        $this->assertNotEmpty($RecurlyDataset['email']);
        $this->assertNotEmpty($RecurlyDataset['address']['country']);
        $this->assertNotEmpty($RecurlyDataset['shipping_address']['phone']);
        $this->assertNotEmpty($RecurlyDataset['shipping_address']['first_name']);
        $this->assertNotEmpty($RecurlyDataset['shipping_address']['last_name']);
    }

    //positive assert to check the shipping data is valid
    public function testRecurlyXmlShippingDataIsValid()
    {
        $RecurlyDataset = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/XmlDataOne.xml'))),true);
        $this->assertEquals($RecurlyDataset['shipping_address']['first_name'],$RecurlyDataset['first_name']);
        $this->assertEquals($RecurlyDataset['shipping_address']['last_name'],$RecurlyDataset['last_name']);
        $this->assertEquals($RecurlyDataset['shipping_address']['email'],$RecurlyDataset['email']);
    }
}