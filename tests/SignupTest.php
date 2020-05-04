<?php
require 'data/UserBasicInfo.php';
require 'data/UserCreditCardInfo.php';
require 'data/ZapierData.php';
require 'data/RecurlyMockInfo.php';
require 'data/QuickBillingInfo.php';
use PHPUnit\Framework\TestCase;

// use function PHPUnit\Framework\assertContains;

class SignupTest extends TestCase
{
  
      //Positive assert test to check that key in array is not empty
      /**
      * @dataProvider UserBasicInfo::userBasicInfoWithPositiveTestData()
      * @dataProvider UserCreditCardInfo::userCreditCardInfoWithPositiveTestData()
      * @dataProvider UserCreditCardInfo::usercreditCardInfoWithSecondPositiveTestData()
      * @dataProvider ZapierData::zapierDataWithPositiveTestData()
      * @dataProvider QuickBillingInfo::quickBillingInfoWithPositiveTestData()
      * @dataProvider RecurlyMockInfo::recurlyMockInfoWithPositiveTestData()
      * @dataProvider RecurlyMockInfo::recurlyMockInfoWithSecondPositiveTestData()
      */
    public function testArrayKeyNotEmpty($data)
    {
      foreach($data as $key)
      {
      $this->assertNotEmpty($key);
      }
    }
    
    //Negative  assert test to check that all parameters are empty 
     /**
     * @dataProvider UserBasicInfo::userBasicInfoWithAllParametersEmpty()
     * @dataProvider UserCreditCardInfo::userCreditCardInfoWithNegativeTestDataAllParametersEmpty()
     * @dataProvider ZapierData::zapierDataWithAllParametersEmpty()
     * @dataProvider RecurlyMockInfo::recurlyMockInfoWithNegativeTestDataAllParamtersEmpty()
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
      * @dataProvider UserBasicInfo::userBasicInfoWithPositiveTestData()
      * @dataProvider UserCreditCardInfo::userCreditCardInfoWithSecondPositiveTestData()
      * @dataProvider UserCreditCardInfo::userCreditCardInfoWithPositiveTestData()
      * @dataProvider  UserCreditCardInfo::userCreditCardInfoWithThirdPositiveTestData()
      * @dataProvider ZapierData::zapierDataWithPositiveTestData()
      * @dataProvider ZapierData::zapierDataWithSecondPositiveTestData()
      * @dataProvider RecurlyMockInfo::recurlyMockInfoWithPositiveTestData()
      * @dataProvider RecurlyMockInfo::recurlyMockInfoWithSecondPositiveTestData()
      * @dataProvider QuickBillingInfo::quickBillingInfoWithPositiveTestData()
      */
    public function testArrayKeyIsString($data)
    {
      foreach($data as $key)
      {
      $this->assertIsString($key);
      }
    }
    
    //Negative  assert test to check that all parameters are not string where data is in form of Associative Array
     /**
     * @dataProvider UserCreditCardInfo::userCreditCardInfoWithNegativeTestData()
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
     * @dataProvider UserBasicInfo::dataProviderWithValidName()
     */
    public function testNameIsString($data)
    {
      $this->assertIsString($data);
    }
    
    // Negative assert test to check that Name is not  empty 
    /**
     * @dataProvider UserBasicInfo::dataProviderWithInvalidName()
     */
    public function testNameIsNotEmpty($data)
    {
      $this->assertNotEmpty($data);

    }
    
    //Positive assert test to check that email is valid 
    /**
     * @dataProvider UserBasicInfo::dataProviderWithValidEmail()
     */
    public function testEmailIsValid($data)
    {
      $pattern='/^[A-Za-z0-9_\-]+(\.[A-Za-z0-9_\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})$/';
      $this->assertMatchesRegularExpression($pattern,$data);

    }
    
    //Negative assert test to check that email is  not valid 
     /**
     * @dataProvider TestData::UserBasicInfo::dataProviderWithInvalidEmail()
     */
    public function testEmailIsnotValid($data)
    {
      $pattern='/^[A-Za-z0-9_\-]+(\.[A-Za-z0-9_\-]+)*\@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,16})$/';
      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }
    
    //Positive assert test to check that password is valid 
    /**
     * @dataProvider UserBasicInfo::dataProviderWithValidPassword()
     */
    public function testPasswordIsValid($data)
    {
      $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

      $this->assertMatchesRegularExpression($pattern,$data);

    }
    
    //Negative assert test to check that password is not valid 
    /**
     * @dataProvider UserBasicInfo::dataProviderWithInvalidName()
     */
    public function testPasswordIsNotValid($data)
    {
      $pattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
    

      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }
    
    //Positive assert test to check that MobileNumber is valid 
    /**
     * @dataProvider UserCreditCardInfo::dataProviderWithValidMobileNumber()
     */
    public function testMobileNumberIsValid($data)
    {
      $pattern = "/^[(]{0,1}[0-9]{2,3}[)]{0,1}[-\s\.]{0,1}[0-9]{2,4}[-\s\.]{0,1}[0-9]{4}$/";

      $this->assertMatchesRegularExpression($pattern,$data);

    }
    
    //Negative assert test to check that MobileNumber is not valid 
    /**
     * @dataProvider UserCreditCardInfo::dataProviderWithInvalidMobileNumber()
     */
    public function testMobileNumberIsnotValid($data)
    {
      $pattern = "/^[(]{0,1}[0-9]{2,3}[)]{0,1}[-\s\.]{0,1}[0-9]{2,4}[-\s\.]{0,1}[0-9]{4}$/";

      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }
    
    //Positive assert test to check that Credit Card is  valid 
    /**
     * @dataProvider UserCreditCardInfo::dataProviderWithValidCreditCard()
     */
    public function testCreditCardIsValid($data)
    {
      $pattern = "/^([0-9]{4}[\s]?){3}([0-9]{4})$/";

      $this->assertMatchesRegularExpression($pattern,$data);

    }
    
    //Negative assert test to check that Credit Card is not  valid 
    /**
     * @dataProvider UserCreditCardInfo::dataProviderWithInvalidCreditCard()
     */
    public function testCreditCardIsNotValid($data)
    {
      $pattern = "/^([0-9]{4}[\s]?){3}([0-9]{4})$/";

      $this->assertDoesNotMatchRegularExpression($pattern,$data);

    }
  }