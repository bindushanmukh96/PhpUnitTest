<?php



class TestData
{
  
  
  
     /**
     * Positive test Data in the form of assocaitive array where all parameters are not empty and string values
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are string
     */
    
    public function positiveTestDataOfUserDetailsOne()
    {
        $dataset1 = 
        [[
          "FirstName"=>"    test",
          "LastName"=>"    sample",
          "Email"=>"    tsample@gmail.com",
          "Password"=>"  cam56Aw",
          ]];
        $dataset2 = 
        [[
          "FirsName"=>"test26   ",
          "LastName"=>"sample1   ",
          "Email"=>"tsample1@gmail.com   ",
          "Password"=>"   cam516Aw",
          ]];
        $dataset3 = 
        [[
          "FirstName"=>"test2   ",
          "LastName"=>"Sample22e   ",
          "Email"=>"tsample2@gmail.com   ",
          "Password"=>"Cgaju$7   ",
          ]];
        $dataset4 = 
        [[
          "FirstName"=>"    test3   ",
          "LastName"=>"   sample3  ",
          "Email"=>"  tsample3@gmail.com   ",
          "Password"=>"   1234567   ",
          ]];
        $dataset5 = 
        [[
          "FirstName"=>"     test4 ",
          "LastName"=>"     sample4 ",
          "Email"=>"     tsample4@gmail.com ",
          "Password"=>"   Cgaju&7 ",
          ]];
        
        return
        [
        'postive test data in the form of associative array set one' => $dataset1,
        'postive test data in the form of associatve array set two' => $dataset2,
        'postive test data in the form of associative array set three' => $dataset3,
        'postive test data in the form of associative array set four' => $dataset4,
        'postive test data in the form of associative array set five' => $dataset5
       ];
 }
 
 
 
    /**
     * Positive test Data in the form of array where all parameters are not empty and string values
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are string
     */
 
 public  function positiveTestDataOfUserDetailsTwo()
 {
   return
   [
     'positive test data in the form of array set one' =>
     [[ 
       "   test   ",
       "   sample   ",
       "    tessample@gmail.com   ",
       "  #j6kTu^  ",
       ]],
       'positive test data in the form of array set two' =>
       [[
         "   test1  ",
         "  sample  ",
         "   tessample1@hji.com  ",
         "   &ghb6jag  ",
         ]],
         'positive test data in form of array set three' =>
         [[
           "  test2  ",
           "  sample2  ",
           "  tessample2@ihg.com  ",
           "   45687$@  ",
           ]],
           'positive test data in form of array set five' =>
           [[
             "  tests3   ",
             "   sample3  ",
             "   tesssample3@ymail.com  ",
             "  0)(*&^%y  ",
             ]]
 ];
 }
 
 
 
    /**
     * Negative test Data in the form of associative array where all parameters are not empty and string values
     * Use this data for validating assert condition to check where one parameter are not empty
     */ 
 public function NegativeTestDataOfUserDetailsOne()
    {
      $dataset1 = 
      [[
        "FirstName" => "",
        "LastName" => "   sample", 
        "Email" => "  tsample6@gmail.com",
        "Password" => "  cam56Aw",
        ]];
      $dataset2 = 
      [[
        "FirstName" => "test1   ", 
        "LastName" => "", 
        "Email" => "tsample7@gmail.com  ",
        "Password" => "cam516Aw  ",
        ]];
      $dataset3 = 
      [[
        "FirstName" => "  test2  ",
        "LastName"=> "   sample2  ",
        "Email"=> "",
        "Password"=> "  Cgaju$7  ",
        ]];
      $dataset4 = 
      [[
        "FirstName" => "  test46  ",
        "LastName" => "  sampler4  ",
        "Email" => "   tsample4@gmail.com  ",
        "Password" => "   Cgajfu&7   ",
        ]];
      $dataset5 = 
      [[
        "FirstName" => " test3",
        "LastName" => "sample3",
        "Email" => "tsample8@gmail.com",
        "password" => "",
        ]];
      $dataset6 = 
      [[
        "FirstName" => "test4",
        "LastName" => "sample4",
        "Email" => "tsample9@gmail.com",
        "Password" => "Cgaju&7",
        ]];
        return
        [
        'negative test data fname is empty set one' => $dataset1,
        'negative test data lname is empty set two' => $dataset2,
        'negaive test data email is empty set three'  => $dataset3,
        'negative test data email is duplicate set four' => $dataset4,
        'negative test data password is not selected set five' => $dataset5,
        'negative test data country is not selected set six' => $dataset6
       ];
 }
 
 
 
     /**
     * Negative test Data in the form of associative array where all parameters are not empty 
     * Use this data for validating assert condition to check all parameters are not empty
     */
 public function negativeTestDataOfUserDetailsTwo()
 {
     $dataset1 = 
     [[
       "FirstName" => "test",
       "LastName" => "", 
       "Email" => "",
       "Password"=>"",
       ]];
     $dataset2 =
     [[
       "FirstName" => "", 
       "LastName" => "sample1",
       "Email" => "",
       "password" => "",
       ]];
     $dataset3 =
     [[
       "FirstName" => "",
       "LastName" => "",
       "Email" => "     tsample22@gmail.com",
       "Password" => "",
       ]];
     $dataset4 = 
     [[
       "FirstName" => "",
       "LastName" => "",
       "Email" => "",
       "Password" => "1234567",
      ]];
     $dataset5 =
     [[
       "FirstName" => "",
       "LastName" => "",
       "Email" => "",
       "Password" => "",
       ]];
     $dataset6 =
     [[
      "FirstName" => "tests466",
      "LastName" => "sample3",
      "Email" => "tess66sample3@ymail.com",
      "Password" => "0)(*77hA6jfd32ty&^%y",
       ]];
     

     return
     [
     'negative test data only fname is not empty set one' => $dataset1,
     'negative test data only lname is not empty set two' => $dataset2,
     'negative test data only email is not empty set three' => $dataset3,
     'negative test data only password is not empty set four' => $dataset4,
     'negative test data only country is not empty set five' => $dataset5,
     'negative test data  password exceeds the length set six' => $dataset6,
    ];
}


      /**
     * Negative test Data in the form of associative array where all parameters are empty 
     * Use this data for validating assert condition to check all parameters are  empty
     */
    public function negativeTestDataOfUserDetailsThree()
    {
        $dataset1 = 
        [[
          "FirstName" => "",
          "LastName" => "", 
          "Email" => "",
          "Password"=>"",
          ]];
        $dataset2 =
        [[
          "FirstName" => "", 
          "LastName" => "",
          "Email" => "",
          "Password" => "",
          ]];
        $dataset3 =
        [[
          "FirstName" => "",
          "LastName" => "",
          "Email" => "",
          "Password" => "",
          ]];
        $dataset4 = 
        [[
          "FirstName" => "",
          "LastName" => "",
          "Email" => "",
          "Password" => "",
         ]];
        $dataset5 =
        [[
          "FirstName" => "",
          "LastName" => "",
          "Email" => "",
          "Password" => "",
          ]];
        $dataset6 =
        [[
         "FirstName" => "",
         "LastName" => "",
         "Email" => "",
         "Password" => "",
          ]];
        
   
        return
        [
        'negative test data where all parameters are empty set one' => $dataset1,
        'negative test data where all parameters are empty set two' => $dataset2,
        'negative test data where all parameters are empty set three' => $dataset3,
        'negative test data where all parameters are empty set four' => $dataset4,
        'negative test data where all parameters are empty set five' => $dataset5,
        'negative test data where all parameters are empty  set six' => $dataset6,
       ];
   }



     /**
     * Negative test Data in the form of associative array where only two  parameters are not  empty 
     * Use this data for validating assert condition where only two  parameters are not   empty
     */
    public function negativeTestDataOfUserDetailsFour()
    {
        $dataset1 = 
        [[
          "FirstName" => "test1",
          "LastName" => "Sample1", 
          "Email" => "",
          "Password"=>"",
          ]];
        $dataset2 =
        [[
          "FirstName" => "Test131", 
          "LastName" => "",
          "Email" => "Test445Sample@gmail.com",
          "Password" => "",
          ]];
        $dataset3 =
        [[
          "FirstName" => "Test72",
          "LastName" => "",
          "Email" => "",
          "Password" => "%6hIuT3h",
          ]]; return
        [
        'negative test data where only two paramters are not empty set one' => $dataset1,
        'negative test data where only two parameters are not empty set two' => $dataset2,
        'negative test data where only two parameters are not empty set three' => $dataset3,
       ];
   }



   /**
     * Negative test Data in the form of associative array where only two  parameters are not  empty 
     * Use this data for validating assert condition where only two  parameters are not   empty
     */
    public function negativeTestDataOfUserDetailsFive()
    {
        $dataset1 = 
        [[
          "FirstName" => "",
          "LastName" => "Sample91", 
          "Email" => "Sample91@yahoo.co.in",
          "Password"=>"",
          ]];
        $dataset2 =
        [[
          "FirstName" => "", 
          "LastName" => "Sample65",
          "Email" => "",
          "Password" => "%7hIkTh0",
          ]];
        $dataset3 =
        [[
          "FirstName" => "",
          "LastName" => "",
          "Email" => "TestSample657@hij.org",
          "Password" => "%6hIuT3h",
          ]]; return
        [
        'negative test data where only two paramters are not empty set one' => $dataset1,
        'negative test data where only two parameters are not empty set two' => $dataset2,
        'negative test data where only two paramters are not empty set three' => $dataset3,
       ];
   }
   
   
   
/**
 * Positive Test Data for fname and lname validation
 * use this test data for  fname and lname validating assert condition
 */
public function positiveTestDataForNameValidation()
{
  return
  [
    'positve test data one' => ["Test467"],
    'positve test data two' => ["Sample1"],
    'positve test data three' => ["testsample4"],
    'positve test data four' => ["Test66sample"],
    'positve test data five' => ["testingSample7"],
    'positve test data six' => ["TestSample"],
    'positve test data seven' => ["Sample2Testing"],
    'positve test data eight' => ["Sample3test"],
    'positve test data nine' => ["testsample66"],
    'positve test data ten' => ["Test1Sample398"]
  ];

}




 /**
 * Negative Test Data for fname and lname validation
 * use this test data for  fname and lname not valid assert condition
 */
public function negativeTestDataForNameValidation()
{
  return
  [
  
  'negative test data one' =>["12345678945-6786%8"],
  'negative test data two' => ["testing.Sample_!@#%"],
  'negative test data three' => ["!@#$%^&**"],
  'negative test data four' => ["GT%&*976123829253256"],
  'negative test data five' => ["^%(ERTYUIOSdfghgshkshiweyowhsjkbxl"],
  'negative test data six' => ["dfghjklzxcvbnertyuixcvbertyu(^#"],
  'negative test data seven' => ["12345678@34*945678"],

  ];

}



/**
 * Positive Test Data for email validation
 * use this test data for  email validating assert condition
 */
public function positiveTestDataForEmailValidation()
{
  return
  [
    'positve test data one' => ["_test_sample_H@gmail.com"],
    'positve test data two' => ["_test-967.sample@hotmail.co.in"],
    'positve test data three' => ["_TEST-SAMPLE_44@OUTLOOK.COM"],
    'positve test data four' => ["testSamples1._test@hij.com"],
    'positve test data five' => ["TeST-62.sample.sample@g-maili.com"],
    'positve test data six' => ["TestSample4-0i2-iu@mail.org"],
    'positve test data seven' => ["sample_test.E@h-mail.co.in"],
    'positve test data eight' => ["Sample_test23.example@yop-mail.com"],
    'positve test data nine' => ["testsample66-960--n@pmail.org"],
    'positve test data ten' => ["Test1_Sample3-98_test@yahoo.org"]
  ];

}



/**
 * Negative Test Data for email validation
 * use this test data for  email not valid assert condition
 */
public function negativeTestDataForEmailValidation()
{
  return
  [
  'negative test data one' => ["TestSample_a@@.com"],
  'negative test data two' => ["testingsample h@.yahhoo.com"],
  'negative test data three' => [".testingsample66@hotmail.com"],
  'negative test data four' => ["testingsample..@mail.org"],
  'negative test data five' => [".sampletesting-998.jn@.co.in"],
  'negative test data six' => ["sampleTEST_example..-@yp_mail.com"],
  'negative test data seven' => ["SampleTest67_02ih@yopmail.com1233"],
  'negative test data eight' => ["sampletest7.2test@..org"],
  'negative test data nine' => ["sampletest55..606tst@hotmail.org"],
  'negative test data ten' => ["Sample.442test@_pmail.org"],
  ];

}



/**
 * Positive Test Data for password validation
 * use this test data for  password validating assert condition
 */
public function positiveTestDataForPasswordValidation()
{
  return
    [
      'positive test data one' => ["@#$%1Hjo"],
      'positive test data two' => ["j%42@#Hy"],
      'positive test data three' => ["Hy6)(#%@"],
      'positive test data four' => ["gTy@6i$3"],
      'positive test data five' => ["Ut9j8@#%"]
    ];
}



/**
 * Negative Test Data for password validation
 * use this test data for  password validating assert condition
 */
public function negativeTestDataForPasswordValidation()
{
  return
  [
    'negative test data one' => ["@Ghutrit"],
    'negative test data two' => ["&resfvnl"],
    'negative test data three' =>["@1234567"],
    'negative test data four' => ["TjIYRgTb"],
    'negative test data five' => ["JTREWQSD"],
    'negative test data six' => ["Tgjui7gd"],
    'negative test data seven' => ["TjIYRjugTb"],
    'negative test data eight' => ["JTREWQSD56796"],
    'negative test data nine' => ["!@#$%^&*)(*&^%h"],
    'negative test data ten' => ["12345678987654"],
  ];
}

}


