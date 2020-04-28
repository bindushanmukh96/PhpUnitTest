<?php

use PHPUnit\Framework\TestCase;

class RecurlyMockBillingInfo
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
           'positive test data set one'  => [
              [
                "accountCode"   =>  "1",  
                "firstName"     =>  "testSample",
                "lastName"      =>  "sample1",
                "email"         =>  "testsampleSample1@gamil.com",
                "mobileNumber"  =>  "(021)-846937",
                "creditCard"    =>  "9273 6493 7493 6483",
                "cvv"           =>  "234",
                "month"         =>  "02",
                "year"          =>  "2024",
                "country"       =>  "US"
              ]
            ],
            'positive test data set two'  => [
              [
                "accountCode"   =>  "2",
                "firstName"     =>  "testSample116",
                "lastName"      =>  "sample116",
                "email"         =>  "test_sample116@mailbox.co.in",
                "mobileNumber"  =>  "(826)-639374",
                "creditCard"    =>  "9173-5482-6352-8368",
                "cvv"           =>  "923",
                "month"         =>  "11",
                "year"          =>  "2021",
                "country"       =>  "Australia"
              ]
            ],
            'positive test data set three'  => [
              [
                "accountCode"   =>  "3",
                "firstName"     =>  "Sampletest11",
                "lastName"      =>  "test1",
                "email"         =>  "sampletest11@gmail.com",
                "mobileNumber"  =>  "(02)92735283",
                "creditCard"    =>  "9172 5478 2936 8263",
                "cvv"           =>  "823",
                "month"         =>  "06",
                "year"          =>  "2022",
                "Country"       =>  "NewZealand"
              ]
            ]
        ];
    }

    /**
     * positive test data to check functionality working properly or not
     * 
     * @return array
     */
    public function recurlyMockInfoWithSecondPositiveTestData()
    {
        $datasetOne = [ 
          [
            "accountCode"   =>  "4",  
            "firstName"     =>  "Test6Sample4",
            "lastName"      =>  "test6",
            "email"         =>  "TestSaample64@gmail.com",
            "mobileNumber"  =>  "(528)-916428",
            "creditCard"    =>  "9283-4628-3625-8262",
            "cvv"           =>  "821",
            "month"         =>  "01",
            "year"          =>  "2022",
            "country"       =>  "Australia"
          ]
        ];
        $datasetTwo = [
          [
            "accountCode"   =>  "5",
            "firstName"     =>  "Test7Sample6",
            "lastNamr"      =>  "Sample76",
            "email"         =>  "TestSample76@hotmail.com",
            "mobileNumber"  =>  "(722)-815481",
            "creditCard"    =>  "9164262843826282",
            "cvv"           =>  "835",
            "month"         =>  "07",
            "year"          =>  "2020",
            "country"       =>  "US"
          ]
        ];
        $datasetThree = [
          [
            "accountCode"   =>  "6",
            "firstName"     =>  "Test84Sample",
            "lastName"      =>  "Sample81",
            "email"         =>  "sample36@test_5@mailbox2.co.in",
            "mobileNumber"  =>  "(017)-817372",
            "creditCard"    =>  "3725 7253 8262 3682",
            "cvv"           =>  "812",
            "month"         =>  "10",
            "year"          =>  "2023",
            "country"       =>  "Australia"
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
                "accountCode"   =>  "syw",
                "firstName"     =>  "Test1$",
                "secondName"    =>  "Sample71#",
                "email"         =>  "sample71@@gmail..com",
                "mobileNumber"  =>  "(913)81715371y",
                "creditCard"    =>  "9618-2537-8651-9I63",
                "cvv"           =>  "91u",
                "month"         =>  "13",
                "year"          =>  "2016",
                "country"       =>  "US%"
              ]
            ],
            "negative test data set two" => [
              [
                "accountCode"   =>  "asy",
                "firstName"     =>  "Test2*",
                "secondName"    =>  "Sample!!",
                "email"         =>  "sample!82.mailbox.in",
                "mobileNumber"  =>  "(9164)86128262^",
                "creditCard"    =>  "9624$826715&916g",
                "cvv"           =>  "81&",
                "month"         =>  "15",
                "year"          =>  "2013",
                "country"       =>  "Australia@#"
              ]
            ],
            "negative test data set three" => [
              [
                "accountCode"   =>  "iwb",
                "firstName"     =>  "Test4^",
                "lastName"      =>  "Sample*6",
                "email"         =>  "Testy62$@mail@in",
                "mobileNumber"  =>  "(*74)926vd472",
                "creditCard"    =>  "926491635926",
                "cvv"           =>  "8",
                "month"         =>  "jan",
                "year"          =>  "T202",
                "country"       =>  "Newzealand^"
              ]
            ],
            "negative test data set four" => [
              [
                "accountCode"   =>  "2Tj",
                "firstName"     =>  "!$6856",
                "lastName"      =>  "(725g)",
                "email"         =>  "TestSample&gamil.com",
                "mobileNumber"  =>  "(862)7",
                "creditCard"    =>  "926317380692814371936183",
                "cvv"           =>  "RHJ" ,
                "month"         =>  "15",
                "year"          =>  "2011", 
                "country"       =>  "US23"
              ]    
            ] ,
            "negative test data set five" => [
              [
                "accountCode"   =>  "wjw",
                "firstName"     =>  "Sample77",
                "lastName"      =>  "Test67",
                "email"         =>  ".Sample_@gmail.com",
                "mobileNumber"  =>  "(971)826092",
                "creditCard"    =>  "9262971517529026",
                "cvv"           =>  "896",
                "month"         =>  "70",
                "year"          =>  "2013",
                "country"       =>  "Australi$"
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
            "accountCode"   =>  "2",
            "firstName"     =>  "",
            "lastName"      =>  "Sample6#",
            "email"         =>  "testSample621@gmail.com",
            "mobileNumber"  =>  "(926)915306",
            "creditCard"    =>  "9263826382649154",
            "cvv"           =>  "438",
            "month"         =>  "06",
            "year"          =>  "2019",
            "country"       =>  "US" 
          ],
        ];
        $datasetTwo = [
          [
            "accountCode"   =>  "",
            "firstName"     =>  "SampleTest5",
            "lastName"      =>  "",
            "email"         =>  "Sample_Test65@mailbox.co.in",
            "mobileNumber"  =>  "(926)438253",
            "creditCard"    =>  "6382539282638291",
            "cvv"           =>  "821",
            "month"         =>  "12",
            "year"          =>  "2021",
            "country"       =>  "US"
          ]
        ];
        $datasetThree = [
          [
            "accountCode"   =>  "1",
            "firstName"     =>  "Test7",
            "lastName"      =>  "Sample78",
            "email"         =>  "",
            "mobileNumber"  =>  "(891)926352",
            "creditCard"    =>  "7319427363726382",
            "cvv"           =>  "823",
            "month"         =>  "",
            "year"          =>  "2020", 
            "country"       =>  "Australia"     
          ]
        ];
        $datasetFour = [
          [
            "accountCode"   =>  "3",
            "firstName"     =>  "Test21",
            "lastName"      =>  "sampple21",
            "email"         =>  "test21Sample7@hotmail.com",
            "mobileNumber"  =>  "",
            "creditCard"    =>  "916263824627562",
            "cvv"           =>  "718",
            "month"         =>  "08",
            "year"          =>  "2021",
            "country"       =>  "Newzealand"
          ]
        ];
        $datasetFive = [
          [
            "accountCode"   =>  "",
            "firstName"     =>  "test14",
            "lastName"      =>  "sample12",
            "email"         =>  "test14sample12@gmail.com",
            "mobileNumber"  =>  "(916)364824",
            "creditCard"    =>  "",
            "cvv"           =>  "812",
            "month"         =>  "12",
            "year"          =>  "",
            "country"       =>  "Australia"
          ]
        ];
        $datasetSix = [
          [
            "accountCode"   =>  "7",
            "firstName"     =>  "Sample61",
            "lastName"      =>  "test4",
            "email"         =>  "test4sample61@gmail.com",
            "mobileNumber"  =>  "(729)925437",
            "creditCard"    =>  "8163916293625372",
            "cvv"           =>  "813",
            "month"         =>  "",
            "year"          =>  "",
            "country"       =>  "US"
          ]
        ];
        $datasetSeven = [
          [
            "accountCode"   =>  "6",
            "firstName"     =>  "test8",
            "lastName"      =>  "sample6",
            "email"         =>  "test6sample6@hotmail.com",
            "mobileNumber"  =>  "(02)87355263",
            "creditCard"    =>  "5367826486485378",
            "cvv"           =>  "638",
            "month"         =>  "07",
            "year"          =>  "2020",
            "country"       =>  ""  
          ]
        ];

        return
        [
            "negative test data set one"    =>  $datasetOne,
            "negative test data set two"    =>  $datasetTwo,
            "negative test data set three"  =>  $datasetThree,
            "negative test data set four"   =>  $datasetFour,
            "negative test data set five"   =>  $datasetFive,
            "negative test data set six"    =>  $datasetSix,
            "negative test data set seven"  =>  $datasetSeven     
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
              "accountCode"   =>  "2",
              "firstName"     =>  "",
              "lastName"      =>  "",
              "email"         =>  "testsample@gmail..com",
              "mobileNumber"  =>  "(02)72549263",
              "creditCard"    =>  "9637259263848374",
              "cvv"           =>  "816",
              "month"         =>  "",
              "year"          =>  "",
              "country"       =>  "US",    
            ]
          ],
          'negative test data set two' => [
            [
              "accountCode"   =>  "8",
              "firstName"     =>  "test76",
              "lastName"      =>  "sample6",
              "email"         =>  "",
              "mobileNumber"  =>  "",
              "creditCard"    =>  "8162729365189283",
              "cvv"           =>  "810",
              "month"         =>  "12",
              "year"          =>  "2021",
              "country"       =>  "Australia" 
            ]    
          ],
          "negative test data set three" => [
            [
              "accountCode"   =>  "1",
              "firstName"     =>  "test87",
              "lastName"      =>  "Sample78",
              "email"         =>  "test87sample78@mailbox.co.in",
              "mobileNumber"  =>  "(04)92735681",
              "creditCard"    =>  "",
              "cvv"           =>  "",
              "month"         =>  "",
              "year"          =>  "",
              "country"       =>  "", 
            ]
          ],
          "negative test data set four" => [
            [
              "accountCode"   =>  "4",
              "firstName"     =>  "",
              "lastName"      =>  "",
              "email"         =>  "",
              "mobileNumber"  =>  "(629)934637",
              "creditCard"    =>  "8273 9537 8253 8652",
              "cvv"           =>  "372",
              "month"         =>  "11",
              "year"          =>  "2021",
              "country"       =>  "US"   
            ]
          ],
          "negative test data set five" => [
            [
              "accountCode"   =>  "6", 
              "firstName"     =>  "Sample6",
              "lastName"      =>  "test53",
              "email"         =>  "sample6test53@hotmail.com",
              "mobileNumber"  =>  "",
              "creditCard"    =>  "",
              "cvv"           =>  "",
              "month"         =>  "",
              "year"          =>  "", 
              "country"       =>  ""
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
           "accountCode"   =>  "2",
           "firstName"     =>  "",
           "lastName"      =>  "",
           "email"         =>  "",
           "mobileNumber"  =>  "",
           "creditCard"    =>  "",
           "cvv"           =>  "",
           "month"         =>  "",
           "year"          =>  "",  
           "country"       =>  ""
        ]]
      ];
    }

    /**
     *Negative test data to check functionality working properly or not
     *
     * @return array 
     */
    public function recurlyMockInfoWithNegativeTestDataTwoParamtersNotEmpty()
    {
      return
      [
        'negative test data set one' => [
          [
            "accountCode"   =>  "2",
            "firstName"     =>  "Sample1",
            "lastName"      =>  "test11",
            "email"         =>  "",
            "mobileNumber"  =>  "",
            "creditCard"    =>  "",
            "cvv"           =>  "",
            "month"         =>  "",
            "year"          =>  "",
            "country"       =>  ""
          ]
        ],
        'negative test data set two' => [
          [
            "accountCode"   =>  "6",
            "firstName"     =>  "",
            "lastName"      =>  "",
            "email"         =>  "test1_sample11@mailbox.co.in",
            "mobileNumber"  =>  "(824)916382",
            "creditCard"    =>  "",
            "cvv"           =>  "",
            "month"         =>  "",
            "year"          =>  "",
            "country"       =>  ""
          ]
        ],
        'negative test data set three' => [
          [
            "accountCode"   =>  "9",
            "firstName"     =>  "",
            "lastName"      =>  "",
            "email"         =>  "",
            "mobileNumber"  =>  "",
            "creditCard"    =>  "2748638283627382",
            "cvv"           =>  "824",
            "month"         =>  "11",
            "year"          =>  "2021", 
            "country"       =>  "Australia"   
          ]
        ],
        'negative test data set four' => [
          [
            "accountCode"   =>  "1",
            "firstName"     =>  "",
            "lastName"      =>  "",
            "email"         =>  "testdata_654@hotmail.com",
            "mobileNumber"  =>  "",
            "creditCard"    =>  "8269472592639462",
            "cvv"           =>  "",
            "month"         =>  "",
            "year"          =>  "", 
            "country"       =>  ""
          ]
        ],
        'negative test data set five' => [
          [
            "accountCode"   =>  "4",
            "firstName"     =>  "Sample14",
            "lastName"      =>  "",
            "email"         =>  "sample14_test65@hotmail.com",
            "mobileNumber"  =>  "",
            "creditCard"    =>  "",
            "cvv"           =>  "",
            "month"         =>  "",
            "year"          =>  "", 
            "country"       =>  "Newzealand"
          ]
        ],
        'negative test data set six' => [
          [
            "accountCode"   =>  "2",
            'firstName'      =>  "",
            'lastName'       =>  "",
            "email"          =>  "sample_test54@hotmail.com",
            "mobileNumbber"  =>  "",
            "creditCard"     =>  "",
            "cvv"            =>  "538",
            "month"          =>  "",
            "year"           =>  "",
            "country"        =>  ""  
          ]
        ],
      ];
    }

    /**
     * Negative test data to check the functionality working properly or not
     */
    public function recurlyMockInfoWithSecondNegativeTestData()
    {
      $datasetOne = [
        [
          "accountCode"   =>  "",
          "firstName"     =>  "",
          "lastName"      =>  "",
          "email"         =>  "test_sample.6@hotj@com",
          "mobileNumber"  =>  "(04)85295@629",
          "creditCard"    =>  "0127gdue9163",
          "cvv"           =>  "",
          "month"         =>  "",
          "year"          =>  "",
          "country"       =>  ""
        ]
      ];
      $datasetTwo = [
        [
          "accountCode"   =>  "7",  
          "firstName"     =>  "",
          "lastName"      =>  "",
          "email"         =>  "",
          "mobileNumber"  =>  "(835)743275",
          "creditCard"    =>  "",
          "cvv"           =>  "475",
          "month"         =>  "08",
          "year"          =>  "",
          "country"       =>  "Ausralia@"
        ]
      ];
      $datasetThree = [
        [
          "accountCode"   =>  "",
          "firstName"     =>  "",
          "lastName"      =>  "Sample12",
          "email"         =>  "",
          "mobileNumber"  =>  "(02)72539153",
          "creditCard"    =>  "",
          "cvv"           =>  "182",
          "month"         =>  "11",
          "year"          =>  "",
          "country"       =>  "US"
        ]
      ];

      return
      [
        'negative test data set one'    => $datasetOne,
        'negative test data set two'    => $datasetTwo,
        'negative test data set three'  => $datasetThree
      ];
    }
} 