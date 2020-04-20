<?php

class UserCreditCardInfo
{
    /**
     * Positive test Data  where all parameters are not empty and Valid
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function userCreditCardInfoWithPositiveTestData()
    {
      return 
      [
        'positive test data set one' => [
          [
            "mobileNumber"  =>  "   (898)-567809",
            "creditCard"    =>  "    3097186382167369",
            "cvv"           =>  "   846"
          ]
        ],
        'positive test data set two' => [
          [
            "mobileNumber"  =>  "(741)-617749     ",
            "creditCard"    =>  "4912306179265296   ",
            "cvv"           =>  "730    "
          ]
        ],
        'positive test data set three' => [
          [
            "mobileNumber"  =>  "    (517)-020409",
            "creditCard"    =>  "      8201739442968164",
            "cvv"           =>  "   385"
          ]
        ],
        'positive test data set four' => [
          [
            "mobileNumber"  =>  "    (518)-832641    ",
            "creditCard"    =>  "   7290701927946190    ",
            "cvv"           =>  "    861    "
          ]
        ],
        'positive test data set five' => [
          [
            "mobileNumber"  =>  "   (293)-382272   ",
            "creditCard"    =>  "   7629274035292648   ",
            "cvv"           =>  "   472   "
          ]
        ]
      ];
    }

     /**
     * Positive test Data  where all parameters are not empty and Valid
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function userCreditCardInfoWithSecondPositiveTestData()
    {
        $datasetOne = [
          [
            "mobileNumber"  =>  "   (898)-567809",
            "creditCard"    =>  "    3097186382167369",
            "cvv"           =>  "   846"
          ]
        ];
        $datasetTwo = [
          [
            "mobileNumber"  =>  "(741)-617749     ",
            "creditCard"    =>  "4912306179265296   ",
            "cvv"           =>  "730    "
          ]
        ];
        $datasetThree = [
          [
            "mobileNumber"  =>  "    (517)-020409",
            "creditCard"    =>  "      8201739442968164",
            "cvv"           =>  "   385"
          ]
        ];
        $datasetFour = [
          [
            "mobileNumber"  =>  "    (518)-832641    ",
            "creditCard"    =>  "   7290701927946190    ",
            "cvv"           =>  "    861    "
          ]
        ];
        $datasetFive = [
          [
            "mobileNumber"  =>  "   (293)-382272   ",
            "creditCard"    =>  "   7629274035292648   ",
            "cvv"           =>  "   472   "
          ]
        ];

        return
        [
          'positive test data set one'   =>  $datasetOne,
          'positive test data set two'   =>  $datasetTwo,
          'positive test data set three' =>  $datasetThree,
          'positive test data set Four'  =>  $datasetFour,
          'positive test data set Five'  =>  $datasetFive
        ];
    }
    
    
    /**
     * Positive test Data where all parameters are not empty and valid
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function userCreditCardInfoWithThirdPositiveTestData()
    {
      $datasetOne = [
        [
          "mobileNumber"  =>  "      (02)38738227",
          "creditCard"    =>  "    2782936498943648     ",
          "cvv"           =>  "   628"

        ]
      ];
      $datasetTwo = [
        [
          "mobileNumber"  =>  "    (04)28734763   ",
          "creditCard"    =>  "2873867302610338      ",
          "cvv"           =>  "836  " 
        ]
      ];
      $datasetThree = [
        [
          "mobileNumber"  =>  "     (02)38739462 ",
          "creditCard"    =>  "    3762387493529462   ",
          "cvv"           =>  " 236  "
        ]
      ];
      $datasetFour = [
        [
          "mobileNumber"  =>  "   (04)76282721  ",
          "creditCard"    =>  "   7637 9362 8362 9364   ",
          "cvv"           =>  "  729  "
        ]
      ];
      $datasetFive = [
        [
          "mobileNumber"  =>  "  (02)82639473",
          "creditCard"    =>  "8782696392528462   ",
          "cvv"           =>  "  287  "
        ]
      ];

      return
      [
        'positive test data set one'   =>  $datasetOne,
        'positive test data set two'   =>  $datasetTwo,
        'positive test data set Three' =>  $datasetThree,
        'positive test data set four'  =>  $datasetFour,
        'positive test data set five'  =>  $datasetFive
      ];
    }
    
     /**
     * Negative test Data where all parameters are not valid values
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function userCreditCardInfoWithNegativeTestData()
    {
      return 
      [
        'negative test data set one' => [
          [
            "mobileNumber"  =>  (738)-737383,
            "creditCard"    =>  7364285478253727,
            "cvv"           =>  792
          ]
        ],
        'negative test data set two' => [
          [
            "mobileNumber"  =>  (637)-352836,
            "creditCard"    =>  6382926353825782,
            "cvv"           =>  291
          ]
        ],
        'negative test data set three' => [
          [
            "mobileNumber"  =>  (529)-672317,
            "creditCard"    =>  5283467837529635,
            "cvv"           =>  536
          ]
        ],
        'negative test data set four' => [
          [
            "mobileNumber"  =>  (282)-729263,
            "creditCard"    =>  9273000729724291,
            "cvv"           =>  892
          ]
        ],
        'negative test data set five'=>[
          [
            "mobileNumber"  =>  (816)-272817,
            "creditCard"    =>  8293572439178202,
            "cvv"           =>  729
          ]
        ]
      ];
    }
    
    /**
     * Negative test Data where all parameters are empty
     * Use this data for validating assert condition to check all parameters are string
     * 
     * @return array
     */
    public function userCreditCardInfoWithNegativeTestDataAllParametersEmpty()
    {
      return [
        [[
          "mobileNumber"   =>  "",
          "creditCard"     =>  "",
          "cvv"            =>  ""
        ]]
      ];
    }
    
    /**
     * negative test Data where atleast one parameter is empty 
     * Use this data for validating assert condition to check atleast one parameter is empty
     * 
     * @return array
     */
    public function userCreditCardInfoWithNegativeTestDataWithEmptyParameters()
    {
      return 
      [
        'negative test data set one' => [
          [
            "mobileNumber"  =>  "      (04)39738827",
            "creditCard"    =>  "",
            "cvv"           =>  "   348"
          ]
        ],
        'negative test data set two' => [
          [
            "mobileNumber"  =>  "",
            "creditCard"    =>  "3475067302610338      ",
            "cvv"           =>  "506  "
          ]
        ],
        'negative test data set Three' => [
          [
            "mobileNumber"  =>  "     (04)78732492 ",
            "creditCard"    =>  "    3163347443519462   ",
            "cvv"           =>  ""
          ]
        ],
        'negative test data set four' => [
          [
            "mobileNumber"  =>  "   (02)7922451  ",
            "creditCard"    =>  "",
            "cvv"           =>  ""
          ]
        ],
        'negative test data set five' => [
          [
            "mobileNumber"  =>  "",
            "creditCard"    =>  "8154927402730472   ",
            "cvv"           =>  ""
          ]
        ],
        'negative test data set six'=> [
          [
            "mobileNumber"  =>  "   (04)91639263  ",
            "creditCard"    =>  "",
            "cvv"           =>  "",
          ]
        ],
        'negative test data set seven'=> [
          [
            "mobileNumber"  =>  "",
            "creditCard"    =>  "",
            "cvv"           =>  "853"
          ]
        ],
      ];
    }

     /**
     * Negative test Data where all parameters values are not valid
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function userCreditCardInfoWithNegativeTestWithInvalidData()
    {
      return
      [
        'negative test data set one' => [
          [
            "mobileNumber"  =>  "(738)-737383yf",
            "creditCard"    =>  "7364285HYRD478253727",
            "cvv"           =>  "79Y2"
          ]
        ],
        'negative test data set two' => [
          [
            "mobileNumber"  =>  "(637)-357542836#%",
            "creditCard"    =>  "6382926358653825782&$",
            "cvv"           =>  "291#"
          ]
        ],
        'negative test data set three' => [
          [
            "mobileNumber"  =>  "(529)-6754372317",
            "creditCard"    =>  "52834678387657529635",
            "cvv"           =>  "53697"
          ]
        ],
        'negative test data set four' => [
          [
            "mobileNumber"  =>  "(02)-729263895388",
            "creditCard"    =>  "927300072972429196356",
            "cvv"           =>  "89299653"
          ]
        ],
        'negative test data set five'=> [
          [
            "mobileNumber"  =>  "(816)-27868902817",
            "creditCard"    =>  "829hy$3572439178202",
            "cvv"           =>  "u729"
          ]
        ]
      ];
    }

     /**
     * Positive Test Data for Mobile Number validation
     * use this test data for  Mobile Number validating assert condition
     * 
     * @return array
     */
    public function dataProviderWithValidMobileNumber()
    {
      return
      [
        'positve test data one'   =>  ["(802)567102"],
        'positve test data two'   =>  ["(142)725392"],
        'positve test data three' =>  ["(593)543795"],
        'positve test data four'  =>  ["(553)873064"],
        'positve test data five'  =>  ["(972)380379"],
        'positve test data six'   =>  ["(02)85329648"],
        'positve test data seven' =>  ["(02)96548437"],
        'positve test data eight' =>  ["(04)95359743"],
        'positve test data nine'  =>  ["(02)67933280"],
        'positve test data ten'   =>  ["(04)92795669"]
      ];
    }
    
     /**
     * Negative Test Data for mobile number validation
     * use this test data for  mobile number not valid assert condition
     * 
     * @return array
     */
    public function dataProviderWithInvalidMobileNumber()
    {
      return
      [
        'negative test data one'   =>  ["(6436)886380654g"],
        'negative test data two'   =>  ["(8686)008084577" ],
        'negative test data three' =>  ["(8867)995287597"],
        'negative test data four'  =>  ["(7743)57683679h"],
        'negative test data five'  =>  ["(9932)97847538"],
        'negative test data six'   =>  ["(012)8653880643"],
        'negative test data seven' =>  ["(756)653266995347"],
        'negative test data eight' =>  ["(8927)372863523"],
        'negative test data nine'  =>  ["(12761)36220636"],
        'negative test data ten'   =>  ["(62893)63782639" ],
      ];
    }
    
     /**
     * Positive Test Data for Credit card validation
     * use this test data for  Credit card validating assert condition
     * 
     * @return array
     */
    public function dataProviderWithValidCreditCard()
    {
      return
      [
        'positve test data one'   =>  ["6926492722837352"],
        'positve test data two'   =>  ["2781588392578352"],
        'positve test data three' =>  [ "8836 2973 6829 3648"],
        'positve test data four'  =>  ["2972483953925283"],
        'positve test data five'  =>  ["87283762 9365 9263"],
        'positve test data six'   =>  ["2819 7352 8365 8263"],
        'positve test data seven' =>  ["7628 3852 9263 8362"],
        'positve test data eight' =>  ["7227 0273 8236 2837"],
        'positve test data nine'  =>  ["6293 5273 6283 5372"],
        'positve test data ten'   =>  ["8394 2926 3281 5378"]
      ];
    }

     /**
     * Negative Test Data for Credit Card validation
     * use this test data for  Credit Card not valid assert condition
     * 
     * @return array
     */
     public function dataProviderWithInvalidCreditCard()
     {
       return
       [
         'negative test data one'   => ["26718s82638bs226182"],
         'negative test data two'   => ["hdfagsjwiysnksuw"],
         'negative test data three' => ["(8867)-1628368268263"],
         'negative test data four'  => ["627692728837761862836826"],
         'negative test data five'  => ["2672$61727@81628%6826"],
         'negative test data six'   => ["628638251861"],
         'negative test data seven' => ["7218182527vsFFTUJNG2626"],
         'negative test data eight' => ["WDSUYKMGESUTDSTJKITRW"],
         'negative test data nine'  => ["*^$@!$%^&*(&^fs1527"],
         'negative test data ten'   => ["162624172571"],
      ];
    }
}