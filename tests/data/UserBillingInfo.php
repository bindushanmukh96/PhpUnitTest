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
            "fullAddress"    =>  "162 addressSample",
            "cityName"       =>  "Newyork",
            "state"          =>  "California",
            "zipCode"        =>  "96678",
            "recurly_token"  =>  "hdheuka67riebksswhshssiwyaleusodbwqy"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"    =>  "147 Addresstest",
            "cityName"       =>  "San Francisco",
            "state"          =>  "virginia",
            "zipCode"        =>  "83962",
            "recurly_token"  =>  "qwusgw791hdheuka67riebksswhshsd"
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"    =>  "629 address TestRoad",
            "cityName"       =>  "chicago",
            "state"          =>  "Indiana",
            "zipCode"        =>  "93749",
            "recurly_token"  =>  "skwoans5j72aksbahdheuka67riebksswhshs"
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"    =>  "948 testAddress street 8",
            "cityName"       =>  "hyderabad",
            "state"          =>  "Telangana",
            "zipCode"        =>  "73892",
            "recurly_token"  =>  "sjsgqyg61hjsbav16bjabaeuka67riebksswhshs"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"    =>  "283 street 9 testAddress",
            "cityName"       =>  "washington",
            "state"          =>  "Indiana",
            "zipCode"        =>  "78945",
            "recurly_token"  =>  "aoqajwba7bzmqab1jnsa67riebksswhshs"
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
            "fullAddress"    =>  "638 ^%$#ess",
            "cityName"       =>  "728394",
            "state"          =>  "Iowa&%$",
            "zipCode"        =>  "^#%829",
            "recurly_token"  =>  "suq*7hdheuka67riebksswhshs"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"    =>  "Hteu&^20&",
            "cityName"       =>  "273Hy8",
            "state"          =>  "juwie13@@",
            "zipCode"        =>  "nshwihd",
            "recurly_token"  =>  "jajg^*jsaywhdheuka67riebksswhshs"
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"    =>  "842 hwi4b&^#",
            "cityName"       =>  "$6teyd",
            "state"          =>  "&@*34638h",
            "zipCode"        =>  "72",
            "recurly_token"  =>  "skajdv&bjsva67riebksswhshs"
          ]
        ];
        $datasetFour= [
          [
            "fullAddress"    =>  "sje 728^%$ hsbd",
            "cityName"       =>  "indiana^54",
            "state"          =>  "^&87hO",
            "zipCode"        =>  "62577943689",
            "recurly_token"  =>  "hsjbHfwfuwijana7*ss(mah7riebksswhshs"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"    =>  "738 ^&*hsbdh",
            "cityName"       =>  "&6hsuz",
            "state"          =>  "virgina%^28",
            "zipCode"        =>  "98129#",
            "recurly_token"  =>  "ikwissja^kssg(djja)6sj7riebksswhshs"
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
            "fullAddress"    =>  "283 testAddress street 23",
            "cityName"       =>  "",
            "state"          =>  "",
            "zipCode"        =>  "",
            "recurly_token"  =>  ""
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"    =>  "",
            "cityName"       =>  "",
            "state"          =>  "Indiana",
            "zipCode"        =>  "",
            "recurly_token"  =>  ""
          ] 
        ];
        $datasetThree = [
          [
            "fullAddress"    =>  "",
            "cityName"       =>  "Los Angeles",
            "state"          =>  "",
            "zipCode"        =>  "",
            "recurly_token"  =>  ""
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"    =>  "",
            "cityName"       =>  "",
            "state"          =>  "",
            "zipCode"        =>  "72&8",
            "recurly_token"  =>  ""
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"    =>  "",
            "cityName"       =>  "",
            "state"          =>  "",
            "zipCode"        =>  "",
            "recurly_token"  =>  "hdkysb76sjddjxmsgsk&&"
          ]
        ];
      
      return
      [
        'negative test data set one'   => $datasetOne,
        'negative test data set two'   => $datasetTwo,
        'negative test data set three' => $datasetThree,
        'negative test data set four'  => $datasetFour,
        'negative test data set five'  => $datasetFive
        
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
            "fullAddress"    =>  "",
            "cityName"       =>  "california",
            "state"          =>  "",
            "zipCode"        =>  "829459R",
            "recurly_token"  =>  "hdkysb76sjddjxmsgsk&&"
          ]
        ];
        $datasetTwo = [
          [
            "fullAddress"    =>  "283 westroad street 6",
            "cityName"       =>  "",
            "state"          =>  "virginia",
            "zipCode"        =>  "",
            "recurly_token"  =>  "jkikysb76sjddjxmsgsk&&dhsyw"
          ]
        ];
        $datasetThree = [
          [
            "fullAddress"    =>  "",
            "cityName"       =>  "washington",
            "state"          =>  "",
            "zipCode"        =>  "7792470326",
            "recurly_token"  =>  "jkikysb76sjddjxmsgsk&&dh23dyrissyw"
          ]
        ];
        $datasetFour = [
          [
            "fullAddress"    =>  "382 testAddressSample",
            "cityName"       =>  "",
            "state"          =>  "Virginia",
            "zipCode"        =>  "8294722$",
            "recurly_token"  =>  "9))kikysb76sjddjxmsgsk&&dh23dyrissyw"
          ]
        ];
        $datasetFive = [
          [
            "fullAddress"    =>  "388 2 Sample test address ",
            "cityName"       =>  "",
            "state"          =>  "Indiana&",
            "zipCode"        =>  "",
            "recurly_token"  =>  ""
          ]
        ];
        $datasetSix = [
          [
            "fullAddress"    =>  "",
            "cityName"       =>  "california",
            "state"          =>  "",
            "zipCode"        =>  "826482I",
            "recurly_token"  =>  ""
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