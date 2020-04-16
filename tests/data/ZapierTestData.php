<?php

class ZapierTestData
{



    /**
     * Positive Test Data in the form of Array
     * Use test Data in validating whether all paramters are string
     * Use Test Data to check all parameters are present 
     */
    public function positiveTestDataOfZapOne()
    {
        return
        [
            'positive Test Data in the form of array set one' => 
            [[
                "TestData",
                "Sample",
                "testData1@gamil.com"
            ]],
            'positive Test Data in the form of array set two' => 
            [[
                "TestData1",
                " Sample1",
                "testSampleData4@gmail.com"
            ]],
            'positive Test Data in the form of array set three' => 
            [[
                "Test2Data2",
                "Sample22",
                "test2Data2Sample22@yahoo.com"
            ]],
            'positive Test Data in the form of array set four' => 
            [[
                "Test3Data3",
                "Sample3",
                "testData3Sample3@mailbox.org"
            ]],
            'positive Test Data in the form of array set five' => 
            [[
                "Test4data4",
                "Sample4",
                "testData4Sample@hotmail.co.in"
            ]]

        ];
    }

    
    
    
    /**
     * Positive Test Data in the form of Associative Array
     * Use test Data in validating whether all paramters are string
     * Use Test Data to check all parameters are present 
     */
    public function positiveTestDataOfZapTwo()
    {
        return
        [
            'positive Test Data in the form of associative array set one' =>
            [[
                "FirstName" => "Test11Data1",
                "LastName" => "Sample11",
                "Email" => "test11Data1Sample11@gmail.com",

            ]],
            'positive Test Data in the form of associative array set two' =>
            [[
                "FirstName" => "Test22Data2",
                "LastName" => "Sample22",
                "Email" => "test22Data2Sample@yahoo.com",

            ]],
            'positive Test Data in the form of associative array set three' =>
            [[
                "FirstName" => "Test33Data3",
                "LastName" => "Sample3",
                "Email" => "test33Data2@hotmail.co.in",

            ]],
            'positive Test Data in the form of associative array set four' =>
            [[
                "FirstName" => "testsample",
                "LastName" => "data6",
                "Email" => "testdata6sample6@hotmail.com",

            ]],
            'positive Test Data in the form of associative array set five' =>
            [[
                "FirstName" => "test7sample",
                "LastName" => "data4",
                "Email" => "testdat7a@mailbox.org",

            ]]
        ];
    }



    /**
     * negative Test Data in the form of Array
     * Use Test Data to validate the condition where one parameter is empty 
     */
        public function negativeTestDataofZapOne()
        {
            return
            [
                'negative Test Data as an array where one parameter is empty set one' =>
                [[
                    "TestData",
                    "SAmpleDAta",
                    ""
                ]],
                'negative Test Data As an Array where one parameter is empty set Two' =>
                [[
                    "Test2DAta1",
                    "",
                    "Test2Data1@gmail.com"
                ]],
                'negative Test Data as an Array where one parameter is empty set Three' =>
                [[
                    "",
                    "SAmpleData3",
                    "SampleData3@hotmail.com"
                ]]

            ];

        }


    
    /**
     * negative Test Data in the form of Associative Array
     * Use Test Data to validate  the condition where one parameter is empty
     */
        public function negativeTestDataofZapTwo()
        {
            return
            [
                'Negative Test Data as Associative Array where one parameter is empty set one' =>
                [[
                    "FirstName" => "TestSample1",
                    "LastName" => "Data11",
                    "Email" => "",
                ]],
                'Negative Test Data as Associative Array where one paramter is empty set Two' =>
                [[
                    "FirstName" => "TestSample2",
                    "LastName" => "",
                    "Email" => "TestSample2@mailbox.org",

                ]],
                'Negative Test Data as Associative Array where one parameter is empty set Three' =>
                [[
                    "FirstName" => "",
                    "LastName" => "SampleData3",
                    "Email" => "SampleData3@gmail.com"
                ]]

            ];
        }


        
    /**
     * Negative Test Data in the form of Array
     * Use Test Data to validate the condition where only one parameter is not empty
     */
        public function negativeTestDataofZapThree()
        {
            return
            [
                'negative Test data as Array where one parameter is not empty set Three' =>
                [
                    "TestData2",
                    "",
                    "",
                ],
                'negative Test data as Array where one parameter is not empty set Two' =>
                [
                    "",
                    "Sample2Test4",
                    "",
                ],
                'negative Test data as Array where one parameter is not empty set Three' =>
                [
                    "",
                    "",
                    "Sample6data6@mailbox.co.in"
                ]

            ];
        }
         



    /**
     * Negative Test Data in the form of  Associative Array
     * Use Test Data to validate the condition where one parameter is not empty 
     */
        public function negativeTestDataofZapFour()
        {
            return
            [
                'negative Test data as Associative Array where one parameter is not empty set One' =>
                [[
                    "FirstName" => "Sample4",
                    "LastName" => "",
                    "Email" => "",
                ]],
                'negative Test data as Associative Array where one paramter is not empty set Two' =>
                [[
                    "FirstName" => "",
                    "LastName" => "Tsample1",
                    "Email" => "",
                ]],
                'negative Test data as Associative Array where one parameter is not empty set Three' =>
                [[
                    "FirstName" => "",
                    "LastName" => "",
                    "Email" => "TsampleData2@mailbox.org"
                ]]
            ];
        }
        



    /**
     * Negative Test Data in the form of Array
     * Use Test Data to validate the condition where all parameters are empty 
     */
        public function negativeTestDataofZapFive()
        {
            return
            [
                'negative Test Data where all parameters are empty' =>
                [[
                    "FirstName" => "",
                    "LastName" => "",
                    "Email" => ""
                ]],
                'negative Test Data where all parameters are empty' =>
                [[
                    "FirstName" => "",
                    "LastName" => "",
                    "Email" => ""
                ]],
            ];
        }




 /**
 * Positive Test Data for FirstName and LastName validation
 * use this test data for  FirstName and LastName validating assert condition
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
 * Negative Test Data for FirstName and LastName validation
 * use this test data for  FirstName and LastName not valid assert condition
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



}
