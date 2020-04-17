<?php

require 'data/ZapierData.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNotEmpty;

class ZapierTest extends TestCase
{
    
    // //  Positive assert test to check that string is not empty
    // /**
    //  * @dataProvider ZapierData::ZapierDataWithPositiveTestData
    //  */
    // public function testFieldsEnteredNotEmpty($data)
    // {
    //   for($i=0;$i<count($data);$i++)
    //   {
    //     $this->assertNotEmpty($data[$i]);
    //   }
    //  }
     
     
     
    // //Positive assert test to check that all  parameters are string 
    // /**
    //  * @dataProvider ZapierTestData::positiveTestDataOfZapOne()
    //  */
    // public function testEnteredIsString($data)
    // {
    //   for($i=0;$i<count($data);$i++)
    //   {
    //     $this->assertIsString($data[$i]);
    //   }
    //  }

      //  Positive assert test to check that string is not empty
     /**
      * @dataProvider ZapierData::zapierDataWithSecondPositiveTestData()
      * @dataProvider ZapierData::ZapierDataWithPositiveTestData()
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
       * @dataProvider ZapierData::ZapierDataWithPositiveTestData()
       */
      public function testEnteredDataIsString($data)
      {
          foreach($data as $key)
          {
              $this->assertIsString($key);
          }
      }



      //Negative assert to ckeck that all paramters are empty
      /**
       * @dataProvider ZapierData::zapierDataWithAllParametersEmpty()
       */
       public function testEnteredDataIsEmpty($data)
       {
           foreach($data as $key)
           {
               $this->assertEmpty($key);
           }
       }


    //    //positive assert to validate the Email
    //    /**
    //     * @dataProvider ZapierTestData::positiveTestDataForEmailValidation()
    //     */
    //     public function testEmailIsValid($data)
    //     {
    //         $pattern="/^[A-Za-z0-9_\-]+(\.[A-Za-z0-9_\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})$/";
    //         $this->assertMatchesRegularExpression($pattern,$data);
    //     }
        
    //     //Negative assert to validate the Email
    //     /**
    //      * @dataProvider ZapierTestData::negativeTestDataForEmailValidation()
    //      */
    //     public function testEmailNotValid($data)
    //     {
    //         $pattern="/^[A-Za-z0-9\-]+(\.[A-Za-z0-9\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})/";
    //         $this->assertDoesNotMatchRegularExpression($pattern,$data);
    //     }


    //     //Positive Assert to check the Name is String
    //     /**
    //      * @dataProvider ZapierTestData::positiveTestDataForNameValidation()
    //      */
    //     public function testNameIsValid($data)
    //     {
    //         $this->assertIsString($data);
    //     }

}
