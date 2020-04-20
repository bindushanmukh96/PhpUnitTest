<?php

use PHPUnit\Framework\TestCase;

class RecurlyMockInfo
{
    
    /**
     * Positive test data to check whether the function working properly or not
     * 
     * @return array
     */
    public function recurlyMockInfoWithPositiveTestData()
    {
        return
        [
           "positive test data set one"  => [
              [
                "firstName"     =>  "testSample",
                "lastName"      =>  "sample1",
                "email"         =>  "testsampleSample1.@gamil.com",
                "mobileNumber"  =>  "(021)-846937",
                "creditCard"    =>  "9273649374936483",
                "cvv"           =>  "234"
              ]
            ],
            "positive test data set two"  => [
              [
                "firstName"     =>  "testSample116",
                "lastName"      =>  "sample116",
                "email"         =>  "test_sample116@mailbox.co.in",
                "mobileNumber"  =>  "(826)-639374",
                "cvv"           =>  "923"
              ]
            ],
            "positive test data set three"  => [
              [
                "firstName"     =>  "Sampletest11",
                "lastName"      =>  "test1",
                "email"         =>  "sampletest11@gmail.com",
                "mobileNumber"  =>  "(02)92735283",
                "cvv"           =>  "823"
              ]
            ]
        ];
    }

    /**
     * posotive test data to check functionality working properly or not
     * 
     * @return array
     */
    public function recurlyMockInfoWithSecondPositiveTestData()
    {
        $datasetOne = [ 
          [
            "firstName"     =>  "Test6Sample4",
            "lastName"      =>  "test6",
            "email"         =>  "TestSaample64@gmail.com",
            "mobileNumber"  =>  "(528)-916428",
            "cvv"           =>  "821"
          ]
        ];
        $datasetTwo = [
          [
            "firstName"     =>  "Test7Sample6",
            "lastNamr"      =>  "Sample76",
            "email"         =>  "TestSample76@hotmail.com",
            "mobileNumber"  =>  "(722)-815481",
            "cvv"           =>  "835"
          ]
        ];
        $datasetThree = [
          [
            "firstName"     =>  "Test84Sample",
            "lastName"      =>  "Sample81",
            "email"         =>  "sample36@test_5@mailbox2.co.in",
            "mobileNumber"  =>  "(017)-817372",
            "cvv"           =>  "812"
          ]
        ];

        return 
        [
          "positive test data set one"   =>  $datasetOne,
          "positive test data set two"   =>  $datasetTwo,
          "positive test data set Three" =>  $datasetThree
        ];
    }

    /**
     * Negative Test Data to check the functionality working properly
     * 
     * @return array
     */
    public function recurlyMockInfoWithNegativeTestData()
    {
        return
        [
            "negative test data set one" => [
              [
                "firstName"     =>  "Test1$",
                "secondName"    =>  "Sample71#",
                "email"         =>  "sample71@@gmail..com",
                "mobileNumber"  =>  "(913)81715371y",
                "creditCard"    =>  "9618253786519I63",
                "cvv"           =>  "91u"
              ]
            ],
            "negative test data set two" => [
              [
                "firstName"     =>  "Test2*",
                "secondName"    =>  "Sample!!",
                "email"         =>  "sample!82.mailbox.in",
                "mobileNumber"  =>  "(9164)86128262^",
                "creditCard"    =>  "9624$826715&916g",
                "cvv"           =>  "81&"
              ]
            ],
            "negative test data set three" => [
              [
                "firstName"     =>  "Test4^",
                "lastName"      =>  "Sample*6",
                "email"         =>  "Testy62$@mail@in",
                "mobileNumber"  =>  "(*74)926vd472",
                "creditCard"    =>  "926491635926",
                "cvv"           =>  "8"
              ]
            ],
            "negative test data set four" => [
              [
                "firstName"     =>  "!$6856",
                "lastName"      =>  "(725g)",
                "email"         =>  "TestSample&gamil.com",
                "mobileNumber"  =>  "(862)7",
                "creditCard"    =>  "926317380692814371936183",
                "cvv"           =>  "RHJ" 
              ]    
            ] ,
            "negative test data set five" => [
              [
                "firstName"     =>  "Sample77",
                "lastName"      =>  "Test67",
                "email"         =>  ".Sample_@gmail.com",
                "mobileNumber"  =>  "(971)826092",
                "creditCard"    =>  "9262971517529026",
                "cvv"           =>  "896"
              ]
            ] 
        ];
    }

    /**
     * Negative test data to check the functionality working properly or not
     * 
     * @return array
     */
    public function recurlyMockInfoWithNegativeTestDataParamtersEmpty()
    {
        $datasetOne = [
          [
            "firstName"     =>  "",
            "lastName"      =>  "Sample6#",
            "email"         =>  "testSample621@gmail.com",
            "mobileNumber"  =>  "(926)915306",
            "creditCard"    =>  "9263826382649154",
            "cvv"           =>  "438" 
          ],
        ];
        $datasetTwo = [
          [
            "firstName"     =>  "SampleTest5",
            "lastName"      =>  "",
            "email"         =>  "Sample_Test65@mailbox.co.in",
            "mobileNumber"  =>  "(926)438253",
            "creditCard"    =>  "6382539282638291",
            "cvv"           =>  "821",
          ]
        ];
        $datasetThree = [
          [
            "firstName"     =>  "Test7",
            "lastName"      =>  "Sample78",
            "email"         =>  "",
            "mobileNumber"  =>  "(891)926352",
            "creditCard"    =>  "7319427363726382",
            "cvv"           =>  "823"     
          ]
        ];
        $datasetFour = [
          [
            "firstName"     =>  "Test21",
            "lastName"      =>  "sampple21",
            "email"         =>  "test21Sample7@hotmail.com",
            "mobileNumber"  =>  "",
            "creditCard"    =>  "916263824627562",
            "cvv"           =>  "718"
          ]
        ];
        $datasetFive = [
          [
            "firstName"     =>  "test14",
            "lastName"      =>  "sample12",
            "email"         =>  "test14sample12@gmail.com",
            "mobileNumber"  =>  "(916)364824",
            "creditCard"    =>  "",
            "cvv"           =>  "812"
          ]
        ];
        $datasetSix = [
          [
              "firstName"     =>  "Sample61",
              "lastName"      =>  "test4",
              "email"         =>  "test4sample61@gmail.com",
              "mobileNumber"  =>  "(729)925437",
              "creditCard"    =>  "8163916293625372",
              "cvv"           =>  "813"
          ]
        ];

        return
        [
            "negative test data set one"    =>  $datasetOne,
            "negative test data set two"    =>  $datasetTwo,
            "negative test data set three"  =>  $datasetThree,
            "negative test data set four"   =>  $datasetFour,
            "negative test data set five"   =>  $datasetFive,
            "negative test data set six"    =>  $datasetSix     
        ];
    }

    /**
     * negative test data to check the functionality working properly or not
     * 
     * @return array
     */
    public function recurlyMockInfoWithNegativeSecondTestDataParamtersEmpty()
    {
        return
        [
          'negative test data set one' => [
            [
              "firstName"     =>  "",
              "lastName"      =>  "",
              "email"         =>  "testsample@gmail..com",
              "mobileNumber"  =>  "(02)72549263",
              "creditCard"    =>  "9637259263848374",
              "cvv"           =>  "816"    
            ]
          ],
          'negative test data set two' => [
            [
              "firstName"     =>  "test76",
              "lastName"      =>  "sample6",
              "email"         =>  "",
              "mobileNumber"  =>  "",
              "creditCard"    =>  "8162729365189283",
              "cvv"           =>  "810"  
            ]    
          ],
          "negative test data set three" => [
            [
              "firstName"     =>  "test87",
              "lastName"      =>  "Sample78",
              "email"         =>  "test87sample78@mailbox.co.in",
              "mobileNumber"  =>  "(04)92735681",
              "creditCard"    =>  "",
              "cvv"           =>  "" 
            ]
          ],
          "negative test data set four" => [
            [
              "firstName"     =>  "",
              "lastName"      =>  "",
              "email"         =>  "",
              "mobileNumber"  =>  "(629)934637",
              "creditCard"    =>  "8273953782538652",
              "cvv"           =>  ""   
            ]
          ],
          "negative test data set five" => [
            [
              "firstName"     =>  "Sample6",
              "lastName"      =>  "test53",
              "email"         =>  "sample6test53@hotmail.com",
              "mobileNumber"  =>  "",
              "creditCard"    =>  "",
              "cvv"           =>  ""
            ]
          ]
        ];
    }

    /**
     * Negative test to check the functionality working properly or not
     * 
     * @return array
     */
    public function recurlyMockInfoWithNegativeTestDataAllParamtersEmpty()
    {
      return [
        [[
           "firstName"     =>  "",
           "lastName"      =>  "",
           "email"         =>  "",
           "mobileNumber"  =>  "",
           "creditCard"    =>  "",
           "cvv"           =>  ""
        ]]
      ];
    }


} 