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
    public function testJSONDta($data)
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode($data),
            json_encode($data)
        );
    }
    
    // positive assert to check the jsondata is present in file or not
    public function testJsonDataFile()
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
    public function testJsonFile()
    {
        $this->assertJsonFileEqualsJsonFile(__DIR__.'/data/RecurlyMockJsonDataFive.json',__DIR__.'/data/RecurlyMockJsonDataFive.json');
    }
    
    //Positive assert to compare the json objects
    public function testJsonData()
    {
        $dataOne = '{"data":"test"}';
        $dataTwo = '{"data":"test"}';
        $this->assertJsonStringEqualsJsonString($dataOne,$dataTwo);
    }
    
    //positive assert to compare the two xml data
    public function testXmlData()
    {
        $dataThree = '<name>TestXML</name>';
        $this->assertXmlStringEqualsXmlString($dataThree,$dataThree);
    }

    //positive assert to compare two xml files
    public function testXmlFile()
    {
        $path1 = __DIR__.'/data/xmldata1.xml';
        $this->assertXmlFileEqualsXmlFile($path1,$path1);
    }

    //positive assert to compare two json strings
    public function testJsonString()
    {
        $this->assertJsonStringEqualsJsonString('{"name":"TestSample"}','{"name":"TestSample"}');
    }
    
    //positive assert to compare an xml string with xml file
    public function testXmlStringFile()
    {
        $dataThree=(__DIR__.'/data/xmldata1.xml');
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

    //postive assert to check the key in json object
    public function testJsonHasKey()
    {
        $path3 = json_decode(file_get_contents(__DIR__.'/data/RecurlyMockJsonDataFive.json'),true);
        $this->assertArrayHasKey('account_code',$path3['account details']);
        $this->assertArrayHasKey('parent_account_code',$path3['account details']);
        $this->assertArrayHasKey('first_name',$path3['account details']);
        $this->assertArrayHasKey('last_name',$path3['account details']);
        $this->assertArrayHasKey('email',$path3['account details']);
        $this->assertArrayHasKey('state',$path3['account details']);
        $this->assertArrayHasKey('created_at',$path3['account details']);
    }

    //positive assert to check the keys in xml object
    public function testXmlHasKey()
    {
        $path = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/xmldata1.xml'))),true);
        $this->assertArrayHasKey('account_code',$path);
        $this->assertArrayHasKey('parent_account_code',$path);
        $this->assertArrayHasKey('first_name',$path);
        $this->assertArrayHasKey('last_name',$path);
        $this->assertArrayHasKey('email',$path);
    }

    //positive assert to check the values in xml object
    public function testXmlKeyIsString()
    {
        $path = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/xmldata1.xml'))),true);
        $this->assertIsString($path['first_name']);
        $this->assertIsString($path['last_name']);
        $this->assertIsString($path['email']);
    }

    //positive assert to check the parameter is not empty
    public function testXmlparamsNotEmpty()
    {
        $path = json_decode(json_encode(simplexml_load_string(file_get_contents(__DIR__.'/data/xmldata1.xml'))),true);
        $this->assertNotEmpty($path['first_name']);
        $this->assertNotEmpty($path['last_name']);
        $this->assertNotEmpty($path['email']);
    }
}