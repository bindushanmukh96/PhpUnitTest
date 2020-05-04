<?php

class QuickBillingInfo
{
     /**
     * Positive test Data  where all parameters are not empty and valid
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function quickBillingInfoWithPositiveTestData()
    {
        $datasetOne = [
          [
            "fullAddress"  =>  "162 addressSample",
            "cityName"     =>  "Newyork",
            "state"        =>  "California",
            "zipCode"      =>  "CA926678",
            "creditCard"   =>  "7827546362849274",
            "mm/yy"        =>  "01/24",
            "cvv"          =>  "383"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"  =>  "147 Addresstest",
            "cityName"     =>  "San Francisco",
            "state"        =>  "virginia",
            "zipCode"      =>  "V739562",
            "creditCard"   =>  "8294628464832747",
            "mm/yy"        =>  "11/24",
            "cvv"          =>  "829"
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"  =>  "629 address TestRoad",
            "cityName"     =>  "chicago",
            "state"        =>  "Indiana",
            "zipCode"      =>  "I723749",
            "creditCard"   =>  "3729363829726382",
            "mm/yy"        =>  "12/21",
            "cvv"          =>  "632"
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"  =>  "948 testAddress street 8",
            "cityName"     =>  "hyderabad",
            "state"        =>  "medchal",
            "zipCode"      =>  "937472",
            "creditCard"   =>  "7283739547264829",
            "mm/yy"        =>  "12/24",
            "cvv"          =>  "892"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"  =>  "283 street 9 testAddress",
            "cityName"     =>  "washington",
            "state"        =>  "Indiana",
            "zipCode"      =>  "I789435",
            "creditCard"   =>  "4932729473855283",
            "mm/yy"        =>  "10/22",
            "cvv"          =>  "715"
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
     * @return array
     */ 
    public function quickBillingInfoWithNegativeTestData()
    {
        $datasetOne = [
          [
            "fullAddress"  =>  "638 ^%$#ess",
            "cityName"     =>  "728394",
            "state"        =>  "Iowa&%$",
            "zipCode"      =>  "^#%829",
            "creditCard"   =>  "hd20uuw2iehd7820",
            "mm/yy"        =>  "13/17",
            "cvv"          =>  "he"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"  =>  "Hteu&^20&",
            "cityName"     =>  "273Hy8",
            "state"        =>  "juwie13@@",
            "zipCode"      =>  "nshwihd",
            "creditCard"   =>  "hy36827^&*(T472",
            "mm/yy"        =>  "4@/2!",
            "cvv"          =>  "(@f"
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"  =>  "842 hwi4b&^#",
            "cityName"     =>  "$6teyd",
            "state"        =>  "&@*34638",
            "zipCode"      =>  "7294",
            "creditCard"   =>  "628382746284",
            "mm/yy"        =>  "11",
            "cvv"          =>  "8"
          ]
        ];
        $datasetFour= [
          [
            "fullAddress"  =>  "sje 728^%$ hsbd",
            "cityName"     =>  "indiana^54",
            "state"        =>  "^&87hO",
            "zipCode"      =>  "6257",
            "creditCard"   =>  "9829673826382638261822",
            "mm/yy"        =>  "122/99",
            "cvv"          =>  "78H"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"  =>  "738 ^&*hsbdh",
            "cityName"     =>  "&6hsuz",
            "state"        =>  "virgina%^28",
            "zipCode"      =>  "981299182",
            "creditCard"   =>  "7283Tyhwi82891&!*(",
            "mm/yy"        =>  "1/221",
            "cvv"          =>  "91028"
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
     * @return array
     */
    public function quickBillingInfoNegativeTestDataWithOneParamter()
    {
        $datasetOne = [
          [
            "fullAddress"  =>  "283 testAddress street 23",
            "cityName"     =>  "",
            "state"        =>  "",
            "zipCode"      =>  "",
            "creditCard"   =>  "",
            "mm/yy"        =>  "",
            "cvv"          =>  ""
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "",
            "state"        =>  "",
            "zipCode"      =>  "",
            "creditCard"   =>  "",
            "mm/yy"        =>  "11/22",
            "cvv"          =>  ""
          ] 
        ];
        $datasetThree = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "Los Angeles",
            "state"        =>  "",
            "zipCode"      =>  "",
            "creditCard"   =>  "",
            "mm/yy"        =>  "",
            "cvv"          =>  ""
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "",
            "state"        =>  "",
            "zipCode"      =>  "729374",
            "creditCard"   =>  "",
            "mm/yy"        =>  "",
            "cvv"          =>  ""
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
     * Negative test Data  where only two  parameters are not  empty 
     * Use this data for validating assert condition where only two  parameters are not   empty
     * 
     * @return array
     */
    public function quickBillingInfoWithParamtersEmpty()
    {  
        $datasetOne = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "california",
            "state"        =>  "",
            "zipCode"      =>  "829459",
            "creditCard"   =>  "",
            "mm/yy"        =>  "",
            "cvv"          =>  "174"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"  =>  "283 westroad street 6",
            "cityName"     =>  "",
            "state"        =>  "virginia",
            "zipCode"      =>  "",
            "creditCard"   =>  "7392483926836382",
            "mm/yy"        =>  "",
            "cvv"          =>  "829"
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "washington",
            "state"        =>  "",
            "zipCode"      =>  "779247",
            "creditCard"   =>  "",
            "mm/yy"        =>  "11/22",
            "cvv"          =>  ""
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"  =>  "382 testAddressSample",
            "cityName"     =>  "",
            "state"        =>  "Virginia",
            "zipCode"      =>  "8294722",
            "creditCard"   =>  "",
            "mm/yy"        =>  "10/24",
            "cvv"          =>  "739"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"  =>  "388 2 Sample test address ",
            "cityName"     =>  "",
            "state"        =>  "Indiana&",
            "zipCode"      =>  "",
            "creditCard"   =>  "6287527382945627h",
            "mm/yy"        =>  "10/24",
            "cvv"          =>  "829"
          ]
        ];
        $datasetSix = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "california",
            "state"        =>  "",
            "zipCode"      =>  "826482I",
            "creditCard"   =>  "2848537283638527356",
            "mm/yy"        =>  "",
            "cvv"          =>  "2838"
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
}