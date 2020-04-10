<?php
use PHPUnit\Framework\TestCase;


class FirstTest extends TestCase
{

    /**
     * @dataProvider sampleProvider
     */
    public function test_SmallTest($a, $b, $exp)
    {
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



}
?>
