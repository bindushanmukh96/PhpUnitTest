<?php

require 'data/RecurlyMockInfo.php';
use PHPUnit\Framework\TestCase;

// use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertJsonFileEqualsJsonFile;
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
    
    // public function testJsonFile()
    // {
    //     $path1='D:\xampp\htdocs\phpTest\tests\data\RecurlyMockJsonDataFive.json';
    //     $this.assertJsonFileEqualsJsonFile($path1,$path1);
    // }

    public function testJsonData()
    {
        $dataOne = '{"data":"test"}';
        $dataTwo = '{"data":"test"}';
        $this->assertJsonStringEqualsJsonString($dataOne,$dataTwo);
    }
}
?>