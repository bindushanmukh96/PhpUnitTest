<?php

class UserBillingInfo
{
     /**
     * Positive test Data where all parameters are not empty and valid
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function userBillingInfoWithPositiveTestData()
    {
        $datasetOne = [
          [
            "fullAddress"  =>  "162 addressSample",
            "cityName"     =>  "Newyork",
            "state"        =>  "California",
            "zipCode"      =>  "96678"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"  =>  "147 Addresstest",
            "cityName"     =>  "San Francisco",
            "state"        =>  "virginia",
            "zipCode"      =>  "83962"
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"  =>  "629 address TestRoad",
            "cityName"     =>  "chicago",
            "state"        =>  "Indiana",
            "zipCode"      =>  "93749"
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"  =>  "948 testAddress street 8",
            "cityName"     =>  "hyderabad",
            "state"        =>  "Telangana",
            "zipCode"      =>  "73892"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"  =>  "283 street 9 testAddress",
            "cityName"     =>  "washington",
            "state"        =>  "Indiana",
            "zipCode"      =>  "78945"
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
    public function userBillingInfoWithNegativeTestData()
    {
        $datasetOne = [
          [
            "fullAddress"  =>  "638 ^%$#ess",
            "cityName"     =>  "728394",
            "state"        =>  "Iowa&%$",
            "zipCode"      =>  "^#%829"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"  =>  "Hteu&^20&",
            "cityName"     =>  "273Hy8",
            "state"        =>  "juwie13@@",
            "zipCode"      =>  "nshwihd"
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"  =>  "842 hwi4b&^#",
            "cityName"     =>  "$6teyd",
            "state"        =>  "&@*34638h",
            "zipCode"      =>  "72"
          ]
        ];
        $datasetFour= [
          [
            "fullAddress"  =>  "sje 728^%$ hsbd",
            "cityName"     =>  "indiana^54",
            "state"        =>  "^&87hO",
            "zipCode"      =>  "62577943689"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"  =>  "738 ^&*hsbdh",
            "cityName"     =>  "&6hsuz",
            "state"        =>  "virgina%^28",
            "zipCode"      =>  "98129#"
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
    public function userBillingInfoNegativeTestDataWithOneParamter()
    {
        $datasetOne = [
          [
            "fullAddress"  =>  "283 testAddress street 23",
            "cityName"     =>  "",
            "state"        =>  "",
            "zipCode"      =>  ""
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "",
            "state"        =>  "Indiana",
            "zipCode"      =>  ""
          ] 
        ];
        $datasetThree = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "Los Angeles",
            "state"        =>  "",
            "zipCode"      =>  ""
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "",
            "state"        =>  "",
            "zipCode"      =>  "72&8"
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
     * Negative test Data where only two parameters are not empty 
     * Use this data for validating assert condition where only two parameters are not empty
     * 
     * @return array
     */
    public function userBillingInfoWithParamtersEmpty()
    {  
        $datasetOne = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "california",
            "state"        =>  "",
            "zipCode"      =>  "829459R"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"  =>  "283 westroad street 6",
            "cityName"     =>  "",
            "state"        =>  "virginia",
            "zipCode"      =>  ""
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "washington",
            "state"        =>  "",
            "zipCode"      =>  "7792470326"
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"  =>  "382 testAddressSample",
            "cityName"     =>  "",
            "state"        =>  "Virginia",
            "zipCode"      =>  "8294722$"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"  =>  "388 2 Sample test address ",
            "cityName"     =>  "",
            "state"        =>  "Indiana&",
            "zipCode"      =>  ""
          ]
        ];
        $datasetSix = [
          [
            "fullAddress"  =>  "",
            "cityName"     =>  "california",
            "state"        =>  "",
            "zipCode"      =>  "826482I"
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