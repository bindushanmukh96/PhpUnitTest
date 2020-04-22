<?php

require 'data/RecurlyMockInfo.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertJson;
use function PHPUnit\Framework\assertJsonFileEqualsJsonFile;

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

    /**
     * 
     */
    public function testJson()
    {
        $path1='D:\xampp\htdocs\phpTest\tests\data\jsonexample1.txt';
        $path2='D:\xampp\htdocs\phpTest\tests\data\jsonexample1.txt';
        $this.assertJsonFileEqualsJsonFile($path2,$path1);
    }
}
?>