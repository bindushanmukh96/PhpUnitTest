<?php

require 'data/UpshellData.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNotEmpty;

class UpshellTest extends TestCase
{

      //  Positive assert test to check that string is not empty
     /**
      * @dataProvider UpshellData::upshellDataWithPositiveTestData()
      * @dataProvider UpshellData::upshellDataWithSecondPositiveTestData()
      */
      public function testEnteredArrayIsNotEmpty($data)
      {
        foreach($data as $key)
        {
            $this->assertNotEmpty($key);
        }
      }

      //  Positive assert test to check that parameters are string
      /**
       * @dataProvider UpshellData::upshellDataWithPositiveTestData()
       * @dataProvider UpshellData::upshellDataWithSecondPositiveTestData()
       */
      public function testEnteredDataIsString($data)
      {
          foreach($data as $key)
          {
              $this->assertIsString($key);
          }
      }
      
      //Negative assert to check that all paramters are empty
      /**
       * @dataProvider UpshellData::upshellDataWithAllParamsEmpty()
       */
       public function testEnteredDataIsEmpty($data)
       {
           foreach($data as $key)
           {
               $this->assertEmpty($key);
           }
       }
}