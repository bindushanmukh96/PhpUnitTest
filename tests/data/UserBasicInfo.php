<?php

class UserBasicInfo
{
     /**
     * Positive test Data  where all parameters are not empty and valid
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @returns array
     */
    public function userBasicInfoWithPositiveTestData()
    {
        $datasetOne = [
          [
            "firstName"  =>  "    test",
            "lastName"   =>  "    sample4  ",
            "email"      =>  "    tsample@gmail.com",
            "password"   =>  "     6cam56Aw  "
          ]
        ];
        $datasetTwo = [
          [
            "firsName"  =>  "   test26   ",
            "lastName"  =>  "  sample1   ",
            "email"     =>  " tsample1@mailbox.co.in   ",
            "password"  =>  "    cam516A^"
          ]
        ];
        $datasetThree = [
          [
            "firstName"  =>  " test2   ",
            "lastName"   =>  "   Sample22e   ",
            "email"      =>  "tsample2@gmail.com   ",
            "password"   =>  "   Cgaju$74   "
          ]
        ];
        $datasetFour = [
          [
            "firstName"  =>  "    test3   ",
            "lastName"   =>  "   sample3  ",
            "email"      =>  "  tsample3@gmail.com   ",
            "password"   =>  "   91234567   "
          ]
        ];
        $datasetFive = [
          [
            "firstName"  =>  "     test4 ",
            "lastName"   =>  "     sample4 ",
            "email"      =>  "     tsample4@gmail.com ",
            "password"   =>  "   Cgaju&76 "
          ]
        ];
        
        return
        [
          'postive test data set one'   => $datasetOne,
          'postive test data set two'   => $datasetTwo,
          'postive test data set three' => $datasetThree,
          'postive test data set four'  => $datasetFour,
          'postive test data set five'  => $datasetFive
        ];
    }
     
     /**
     * Negative test Data where all parameters are not empty and not valid
     * Use this data for validating assert condition to check where one parameter are not empty
     * 
     * @returns Array
     */ 
    public function userBasicInfoWithNegativeTestData()
    {
        $datasetOne = [
          [
            "firstName"  =>  " test^   ",
            "lastName"   =>  "   &sample", 
            "email"      =>  "  tsample6@gmail..com",
            "password"   =>  "  caw"
          ]
        ];
        $datasetTwo = [
          [
            "firstName"  =>  "test1%*  ", 
            "lastName"   =>  "  &Sample5# ", 
            "mail"       =>  "tsample7@l..com  ",
            "password"   =>  " Hi "
          ]
        ];
        $datasetThree = [
          [
            "firstName"  =>  "  test2 % ",
            "lastName"   =>  "   sample2*  ",
            "email"      =>  "sampletest55..606tst@hotmail.org",
            "password"   =>  "  $7  "
          ]
        ];
        $datasetFour= [
          [
            "firstName"  =>  " test3@@  ",
            "lastName"   =>  "  sample3 ^  ",
            "email"      =>  " testingsample..@mail.org",
            "password"   =>  " C "
          ]
        ];
        $datasetFive = [
          [
            "firstName"  =>  "test4$",
            "lastName"   =>  "sample4^",
            "email"      =>  "_TEST-SAMPLE_44@OUTLOOK.COM",
            "password"   =>  "  !@#  "
          ]
        ];
      
        return
        [
          'negative test data set one'    => $datasetOne,
          'negative test data set two'    => $datasetTwo,
          'negative test  data set three' => $datasetThree,
          'negative test data set four'   => $datasetFour,
          'negative test data set five'   => $datasetFive
        ];
    }
     
     /**
     * Negative test Data where one parameter is not empty 
     * Use this data for validating assert condition to check all parameters are not empty
     * 
     * @returns Array
     */
    public function userBasicInfoNegativeTestDataWithOneParamter()
    {
        $datasetOne = [
          [
            "firstName"  =>  "test@  ",
            "lastName"   =>  "", 
            "email"      =>  "",
            "password"   =>  ""
          ]
        ];
        $datasetTwo = [
          [
            "firstName"  =>  "", 
            "lastName"   =>  "   sample1^",
            "email"      =>  "",
            "password"   =>  ""
          ] 
        ];
        $datasetThree = [
          [
            "firstName"  =>  "",
            "lastName"   =>  "",
            "email"      =>  "     tsample22@gmail..com",
            "password"   =>  ""
          ]
        ];
        $datasetFour = [
          [
             "firstName"  =>  "",
             "lastName"   =>  "",
             "email"      =>  "",
             "password"   =>  "1267"
          ]
        ];
      
      return
       [
          'negative test data set one'   => $datasetOne,
          'negative test data set two'   => $datasetTwo,
          'negative test data set three' => $datasetThree,
          'negative test data set four'  => $datasetFour
      ];
    }
    
     /**
     * Negative test Data in the form of associative array where all parameters are empty 
     * Use this data for validating assert condition to check all parameters are  empty
     * 
     * @return Array
     */
    public function userBasicInfoWithAllParametersEmpty()
    {
      return [
         [[
            "firstName"  =>  "",
            "lastName"   =>  "", 
            "email"      =>  "",
            "password"   =>  ""
          ]]
        ];
    }
     
     /**
     * Negative test Data  where only two  parameters are not  empty 
     * Use this data for validating assert condition where only two  parameters are not   empty
     * 
     * @returns Array
     */
    public function userBasicInfoWithParamtersEmpty()
    {  
        $datasetOne = [
          [
            "firstName"  =>  "test1",
            "lastName"   =>  "Sample1", 
            "email"      =>  "",
            "password"   =>  ""
          ]
        ];
        $datasetTwo = [
          [
            "firstName"  =>  "Test131#", 
            "lastName"   =>  "",
            "email"      =>  "Test445Sample@@gmail.com",
            "password"   =>  ""
          ]
        ];
        $datasetThree = [
          [
            "firstName"  =>  "Test72@",
            "lastName"   =>  "",
            "email"      =>  "",
            "password"   =>  "%6h3h"
          ]
        ];
        $datasetFour = [
            [
              "firstName"  =>  "",
              "lastName"   =>  "Sample91", 
              "email"      =>  "Sample91@yahoo.co.in",
              "password"   =>  ""
            ]
        ];
        $datasetFive = [
          [
            "firstName"  =>  "", 
            "lastName"   =>  "Sample65",
            "email"      =>  "",
            "password"   =>  "%7hIkTh0"
          ]
        ];
        $datasetSix = [
          [
            "firstName"  =>  "",
            "lastName"   =>  "",
            "email"      =>  "TestSample657@hij..org",
            "password"   =>  "%T3h"
            ]
        ];
        
        return
        [
          'negative test data set one'   => $datasetOne,
          'negative test data set two'   => $datasetTwo,
          'negative test data set three' => $datasetThree,
          'negative test data set Four'  => $datasetFour,
          'negative test data set five'  => $datasetFive,
          'negative test data set six'   => $datasetSix
       ];
    }
   
    /**
    * Positive Test Data for fname and lname validation
    * use this test data for  fname and lname validating assert condition
    *
    *@returns Array
    */
    public function dataProviderWithValidName()
    {
      return 
      [
        'positve test data one'    => ["Test467"],
        'positve test data two'    => ["Sample1"],
        'positve test data three'  => ["testsample4"],
        'positve test data four'   => ["Test66sample"],
        'positve test data five'   => ["testingSample7"],
        'positve test data six'    => ["TestSample"],
        'positve test data seven'  => ["Sample2Testing"],
        'positve test data eight'  => ["Sample3test"],
        'positve test data nine'   => ["testsample66"],
        'positve test data ten'    => ["Test1Sample398"]
      ];
    }

   /**
   * Negative Test Data for fname and lname validation
   * use this test data for  fname and lname not valid assert condition
   * 
   * @returns Array
   */
  public function dataProviderWithInvalidName()
  {
    return 
    [
      'negative test data one'   => ["12345678945-6786%8"],
      'negative test data two'   => ["testing.Sample_!@#%"],
      'negative test data three' => ["!@#$%^&**"],
      'negative test data four'  => ["GT%&*976123829253256"],
      'negative test data five'  => ["^%(ERTYUIOSdfghgshkshiweyowhsjkbxl"],
      'negative test data six'   => ["dfghjklzxcvbnertyuixcvbertyu(^#"],
      'negative test data seven' => ["12345678@34*945678"]
    ];
  }

  /**
  * Positive Test Data for email validation
  * use this test data for  email validating assert condition
  * 
  * @returns Array
  */
  public function dataProviderWithValidEmail()
  {
    return 
    [
      'positve test data one'   => ["_test_sample_H@gmail.com"],
      'positve test data two'   => ["_test-967.sample@hotmail.co.in"],
      'positve test data three' => ["_TEST-SAMPLE_44@OUTLOOK.COM"],
      'positve test data four'  => ["testSamples1._test@hij.com"],
      'positve test data five'  => ["TeST-62.sample.sample@g-maili.com"],
      'positve test data six'   => ["TestSample4-0i2-iu@mail.org"],
      'positve test data seven' => ["sample_test.E@h-mail.co.in"],
      'positve test data eight' => ["Sample_test23.example@yop-mail.com"],
      'positve test data nine'  => ["testsample66-960--n@pmail.org"],
      'positve test data ten'   => ["Test1_Sample3-98_test@yahoo.org"]
    ];
  }

  /**
  * Negative Test Data for email validation
  * use this test data for  email not valid assert condition
  * 
  * @returns Array
  */
  public function dataProviderWithInvalidEmail()
  {
    return 
    [
      'negative test data one'   => ["TestSample_a@@.com"],
      'negative test data two'   => ["testingsample h@.yahhoo.com"],
      'negative test data three' => [".testingsample66@hotmail.com"],
      'negative test data four'  => ["testingsample..@mail.org"],
      'negative test data five'  => [".sampletesting-998.jn@.co.in"],
      'negative test data six'   => ["sampleTEST_example..-@yp_mail.com"],
      'negative test data seven' => ["SampleTest67_02ih@yopmail.com1233"],
      'negative test data eight' => ["sampletest7.2test@..org"],
      'negative test data nine'  => ["sampletest55..606tst@hotmail.org"],
      'negative test data ten'   => ["Sample.442test@_pmail.org"]
    ];
  }
  
  /**
  * Positive Test Data for password validation
  * use this test data for  password validating assert condition
  * 
  * @returns Array
  */
  public function dataProviderWithValidPassword()
  {
    return 
    [
      'positive test data one'   =>  ["@#$%1Hjo"],
      'positive test data two'   =>  ["j%42@#Hy"],
      'positive test data three' =>  ["Hy6)(#%@"],
      'positive test data four'  =>  ["gTy@6i$3"],
      'positive test data five'  =>  ["Ut9j8@#%"]
    ];
  }

   /**
   * Negative Test Data for password validation
   * use this test data for  password validating assert condition
   * 
   * @return Array
   */
  public function dataProviderWithInvalidPassword()
  {
    return 
    [
      'negative test data one'    =>  ["@Ghu"],
      'negative test data two'    =>  ["&res"],
      'negative test data three'  =>  ["@123"],
      'negative test data four'   =>  ["TjIY"],
      'negative test data five'   =>  ["JTREW"],
      'negative test data six'    =>  ["T"],
      'negative test data seven'  =>  ["b"],
      'negative test data eight'  =>  ["96"],
      'negative test data nine'   =>  ["!^%h"],
      'negative test data ten'    =>  ["18654"]
    ];
  }
}


