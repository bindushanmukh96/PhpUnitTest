<?php
require 'data/TestData.php';
// require 'data/TestDataForm2.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertContains;

class SignupTest extends TestCase
{
 
    //  Positive assert test to check that string is not empty
    /**
     * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoThree()
     */
    public function testFieldsEnteredNotEmpty($data)
    {
      for($i=0;$i<count($data);$i++)
      {
        $this->assertNotEmpty($data[$i]);
      }
     }

    
    

    
    //Positive assert test to check that string or not
    /**
     * @dataProvider TestDataForm2::positiveTestDataOfUserCardInfoThree()
     */
    public function testEnteredIsString($data)
    {
      for($i=0;$i<count($data);$i++)
      {
        $this->assertIsString($data[$i]);
      }
     }
      


     //Positive assert test to check that key in array is not empty
      /**
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

     

     //Positive assert test to check that key in array is string or not
      /**
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

    

    // assert test to check that email is valid 
    /**
     * @dataProvider TestData::positiveTestDataForEmailValidation()
     */
    public function testEmailIsValid($data)
    {
      $pattern='/^[A-Za-z0-9_\-]+(\.[A-Za-z0-9_\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})$/';
      $this->assertMatchesRegularExpression($pattern,$data);

    }



    // assert test to check that email is  not valid 
     /**
     * @dataProvider TestData::negativeTestDataForEmailValidation()
     */
    public function testEmailIsnotValid($data)
    {
      $pattern='/^[A-Za-z0-9_\-]+(\.[A-Za-z0-9_\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})$/';
      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }


     // assert test to check that password is valid 
    /**
     * @dataProvider TestData::positiveTestDataForPasswordValidation()
     */
    public function testPasswordIsValid($data)
    {
      $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

      $this->assertMatchesRegularExpression($pattern,$data);

    }

    // assert test to check that password is not valid 
    /**
     * @dataProvider TestData::negativeTestDataForPasswordValidation()
     */
    public function testPasswordIsNotValid($data)
    {
      $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
      echo $data;

      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }

     

   

    // assert test to check that all parameters are empty 
     /**
     * @dataProvider TestDataForm2::negativeTestDataOfUserCardInfoThree()
     */
    public function testAllAssociativeArrayDataIsEmpty($data)
    {
      foreach($data as $key)
      {
   
      $this->assertEmpty($key);
      }

    }
    
      // assert test to check that all parameters are not string 
     /**
     * @dataProvider TestDataForm2::negativeTestDataOfUserCardInfoOne()
     */
    public function testArrayDataIsNotString($data)
    {
      for($i=0;$i<count($data);$i++)
      {
   
      $this->assertIsNotString($data);
      }

    }

      // assert test to check that all parameters are not string
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



   
  


     

    



    
    

 




 














}