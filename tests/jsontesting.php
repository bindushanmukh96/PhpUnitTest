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
        $path2 = (__DIR__.'/data/RecurlyMockJsonDataFive.txt');
        $data='{
            "account details": {
                "account_code": "crc",
                "parent_account_code": "CrcTest",
                "bill_to": "self",
                "email": "TestSample76@hotmail.com",
                "first_name": "Test7Sample6",
                "last_name": "Sample76",
                "company_name": "",
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
        // $path1 = file_get_contents(__DIR__.'/data/RecurlyMockJsonDataFive.txt');
       

        $this->assertJsonFileEqualsJsonFile(__DIR__.'/data/RecurlyMockJsonDataFive.txt',__DIR__.'/data/RecurlyMockJsonDataFive.txt');
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
        $data = '<account>
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
        $path2 = (file_get_contents(__DIR__.'/data/RecurlyMockJsonDataFive.txt'));
        echo $path2;
        echo gettype($path2);
    }
}