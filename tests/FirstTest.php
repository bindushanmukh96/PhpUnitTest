<?php
use PHPUnit\Framework\TestCase;
// include "CsvFileIterator.php";


class FirstTest extends TestCase
{

    /**
     * @dataProvider sampledata
     */
    public function test_SmallTest($a, $b, $exp)
    {
        echo $a;
     $this->assertEquals($exp,$a + $b);


    }

    public function sampleProvider()
    {
        return [
            [1, 1, 2],
            [2, 8, 10],
            [10, 4, 14],
            [23, 11, 34]
        ];

    }


    public function sampledata()
    {
        return new CsvFileIterator(__DIR__."/data.csv");
    }



}
?>
