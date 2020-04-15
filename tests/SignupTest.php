<?php
require 'data/TestData.php';
require 'data/TestDataForm2.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertContains;

class SignupTest extends TestCase
{
  
  
  
  //  Positive assert test to check that string is not empty
    /**
     * @dataProvider TestData::positiveTestDataOfUserDetailsTwo()
     * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoOne()
     * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoThree()
     */
    public function testFieldsEnteredNotEmpty($data)
    {
      for($i=0;$i<count($data);$i++)
      {
        $this->assertNotEmpty($data[$i]);
      }
     }
     
     
     
    //Positive assert test to check that all  parameters are string 
    /**
     * @dataProvider TestData::positiveTestDataOfUserDetailsTwo()
     * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoOne()
     * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoThree()
     */
    public function testEnteredIsString($data)
    {
      for($i=0;$i<count($data);$i++)
      {
        $this->assertIsString($data[$i]);
      }
     }
     
     
     
     //Negative assert test to check that all parameters are not string 
     /**
     * @dataProvider TestDataForm2::NegativeTestDataOfUserCardInfoOne()
     */
    public function testArrayDataIsNotString($data)
    {
      for($i=0;$i<count($data);$i++)
      {
   
      $this->assertIsNotString($data);
      }

    }
    
    
    
    //Positive assert test to check that key in array is not empty
      /**
      * @dataProvider TestData::positiveTestDataOfUserDetailsOne()
      * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoTwo()
      * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoFour()
      */
    public function testArrayKeyNotEmpty($data)
    {
      foreach($data as $key)
      {
     echo $key;
      $this->assertNotEmpty($key);
      }
    }
    
    
    
    //Negative  assert test to check that all parameters are empty where data is associative array
     /**
     * @dataProvider TestData::negativeTestDataOfUserDetailsThree()
     * @dataProvider TestDataForm2::negativeTestDataOfUserCardInfoThree()
     */
    public function testAllAssociativeArrayDataIsEmpty($data)
    {
      foreach($data as $key)
      {
        $this->assertEmpty($key);
      }

    }
    
    
    
    //Positive assert test to check that key in array is string 
      /**
      * @dataProvider TestData::positiveTestDataOfUserDetailsOne()
      * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoTwo()
      * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoFour()
      */
    public function testArrayKeyIsString($data)
    {
      foreach($data as $key)
      {
     echo $key;
      $this->assertIsString($key);
      }
    }
    
    
    
    //Negative  assert test to check that all parameters are not string where data is in form of Associative Array
     /**
     * @dataProvider TestDataForm2::negativeTestDataOfUserCardInfoTwo()
     */
    public function testAllAssociativeArrayDataIsNotString($data)
    {
      foreach($data as $key)
      {
   
      $this->assertIsNotString($key);
      }
    }
    
    
    
    // Positive assert test to check that Name is String
    /**
     * @dataProvider TestData::positiveTestDataForNameValidation()
     */
    public function testNameIsString($data)
    {
      $this->assertIsString($data);
    }
    
    
    
    // Negative assert test to check that Name is not  empty 
    /**
     * @dataProvider TestData::positiveTestDataForNameValidation()
     */
    public function testNameIsNotEmpty($data)
    {
      $this->assertNotEmpty($data);

    }
    
    
    
    //Positive assert test to check that email is valid 
    /**
     * @dataProvider TestData::positiveTestDataForEmailValidation()
     */
    public function testEmailIsValid($data)
    {
      $pattern='/^[A-Za-z0-9_\-]+(\.[A-Za-z0-9_\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})$/';
      $this->assertMatchesRegularExpression($pattern,$data);

    }
    
    
    
    //Negative assert test to check that email is  not valid 
     /**
     * @dataProvider TestData::negativeTestDataForEmailValidation()
     */
    public function testEmailIsnotValid($data)
    {
      $pattern='/^[A-Za-z0-9_\-]+(\.[A-Za-z0-9_\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})$/';
      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }
    
    
    
    //Positive assert test to check that password is valid 
    /**
     * @dataProvider TestData::positiveTestDataForPasswordValidation()
     */
    public function testPasswordIsValid($data)
    {
      $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

      $this->assertMatchesRegularExpression($pattern,$data);

    }
    
    
    
    //Negative assert test to check that password is not valid 
    /**
     * @dataProvider TestData::negativeTestDataForPasswordValidation()
     */
    public function testPasswordIsNotValid($data)
    {
      $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
      echo $data;

      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }
    
    
    
    //Positive assert test to check that MobileNumber is valid 
    /**
     * @dataProvider TestDataForm2::positiveTestDataForMobileNumberValidation()
     */
    public function testMobileNumberIsValid($data)
    {
      $pattern = "/^[(]{0,1}[0-9]{2,3}[)]{0,1}[-\s\.]{0,1}[0-9]{2,4}[-\s\.]{0,1}[0-9]{4}$/";

      $this->assertMatchesRegularExpression($pattern,$data);

    }
    
    
    
    //Negative assert test to check that MobileNumber is not valid 
    /**
     * @dataProvider TestDataForm2::negativeTestDataForMobileNumberValidation()
     */
    public function testMobileNumberIsnotValid($data)
    {
      $pattern = "/^[(]{0,1}[0-9]{2,3}[)]{0,1}[-\s\.]{0,1}[0-9]{2,4}[-\s\.]{0,1}[0-9]{4}$/";

      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }
    
    
    
    //Positive assert test to check that Credit Card is  valid 
    /**
     * @dataProvider TestDataForm2::positiveTestDataForCreditCardValidation()
     */
    public function testCreditCardIsValid($data)
    {
      $pattern = "/^([0-9]{4}[\s]?){3}([0-9]{4})$/";

      $this->assertMatchesRegularExpression($pattern,$data);

    }
    
    
    
    //Negative assert test to check that Credit Card is not  valid 
    /**
     * @dataProvider TestDataForm2::negativeTestDataForCreditCardValidation()
     */
    public function testCreditCardIsNotValid($data)
    {
      $pattern = "/^([0-9]{4}[\s]?){3}([0-9]{4})$/";

      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }









   
  


}