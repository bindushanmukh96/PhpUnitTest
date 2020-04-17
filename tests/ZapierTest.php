<?php

require 'data/ZapierData.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNotEmpty;

class ZapierTest extends TestCase
{

      //  Positive assert test to check that string is not empty
     /**
      * @dataProvider ZapierData::zapierDataWithPositiveTestData()
      * @dataProvider ZapierData::zapierDataWithSecondPositiveTestData()
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
       * @dataProvider ZapierData::zapierDataWithPositiveTestData()
       * @dataProvider ZapierData::zapierDataWithSecondPositiveTestData()
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
       
       //positive assert to validate the Email
       /**
        * @dataProvider ZapierData::dataProviderWithValidEmail
        */
        public function testEmailIsValid($data)
        {
            $pattern="/^[A-Za-z0-9_\-]+(\.[A-Za-z0-9_\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})$/";
            $this->assertMatchesRegularExpression($pattern,$data);
        }
        
        //Negative assert to validate the Email
        /**
         * @dataProvider ZapierData::dataProviderWithInvalidEmail
         */
        public function testEmailNotValid($data)
        {
            $pattern="/^[A-Za-z0-9\-]+(\.[A-Za-z0-9\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})/";
            $this->assertDoesNotMatchRegularExpression($pattern,$data);
        }
        
        //Positive Assert to check the Name is String
        /**
         * @dataProvider ZapierData::dataProviderWithValidName()
         */
        public function testNameIsValid($data)
        {
            $this->assertIsString($data);
        }

}
