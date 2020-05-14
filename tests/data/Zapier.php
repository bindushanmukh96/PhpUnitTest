<?php

class Zapier
{
     /**
     * Positive test Data  where all parameters are not empty and valid
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function zapierWithPositiveTestData()
    {
        $datasetOne = [
          [
            "firstName"    =>  "Test11Data1",
            "lastName"     =>  "Sample11",
            "email"        =>  "test11Data1Sample11@gmail.com",
            "fullAddress"  =>  "162 addressSample",
            "cityName"     =>  "Newyork",
            "state"        =>  "California",
            "zipCode"      =>  "96678"
          ]
        ];
        $datasetTwo = [
          [
            "firstName"    =>  "Test22Data2",
            "lastName"     =>  "Sample22",
            "email"        =>  "test22Data2Sample@yahoo.com",
            "fullAddress"  =>  "147 Addresstest",
            "cityName"     =>  "San Francisco",
            "state"        =>  "virginia",
            "zipCode"      =>  "83962"
          ]
        ];
        $datasetThree = [
          [
            "firstName"    =>  "Test33Data3",
            "lastName"     =>  "Sample3",
            "email"        =>  "test33Data2@hotmail.co.in",
            "fullAddress"  =>  "629 address TestRoad",
            "cityName"     =>  "chicago",
            "state"        =>  "Indiana",
            "zipCode"      =>  "93749"
          ]
        ];
        $datasetFour = [
          [
            "firstName"    =>  "testsample",
            "lastName"     =>  "data6",
            "email"        =>  "testdata6sample6@hotmail.com",
            "fullAddress"  =>  "hyderabad",
            "state"        =>  "Telangana",
            "zipCode"      =>  "73892"
          ]
        ];
        $datasetFive = [
          [
            "firstName"    =>  "test7sample",
            "lastName"     =>  "data4",
            "email"        =>  "testdat7a@mailbox.org",
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
     * Negative test Data  where only  parameters are  empty 
     * Use this data for validating assert condition where only two  parameters are not   empty
     * 
     * @return array
     */
    public function zapierWithParametersEmpty()
    {  
        $datasetOne = [
          [
            "firstName"    =>  "",
            "lastName"     =>  "Sample11",
            "email"        =>  "test167Sample181@gmail.com",
            "fullAddress"  =>  "211 addressSample",
            "cityName"     =>  "Newyork",
            "state"        =>  "California",
            "zipCode"      =>  "84678"
          ]
        ];
        $datasetTwo = [
          [
            "firstName"    =>  true,
            "lastName"     =>  "1",
            "email"        =>  "Data1Sample101@gmail.com",
            "fullAddress"  =>  "12 addressSampleTest",
            "cityName"     =>  "Newyork",
            "state"        =>  "Texas",
            "zipCode"      =>  "40878"
          ]
        ];
        $datasetThree = [
          [
            "firstName"    =>  "Test11Data1",
            "lastName"     =>  "",
            "email"        =>  "",
            "fullAddress"  =>  "162 addressSample",
            "cityName"     =>  "LosAngeles",
            "state"        =>  "California",
            "zipCode"      =>  "95678"
          ]
        ];
        $datasetFour = [
          [
            "firstName"    =>  "Test11Data147",
            "lastName"     =>  "Sample78",
            "email"        =>  "test11Sample11@gmail.com",
            "fullAddress"  =>  "86 addressSample",
            "cityName"     =>  "",
            "state"        =>  "California",
            "zipCode"      =>  "68678"
          ]
        ];
        $datasetFive = [
          [
            "firstName"    =>  "Test181&1",
            "lastName"     =>  "",
            "email"        =>  "test11Data1Sample11@gmail.com",
            "fullAddress"  =>  "",
            "cityName"     =>  null,
            "state"        =>  "California",
            "zipCode"      =>  "96678"
          ]
        ];
        $datasetSix = [
          [
            "firstName"    =>  "Test11Data1",
            "lastName"     =>  "Sample11",
            "email"        =>  "test11Data1Sample11@gmail.com",
            "fullAddress"  =>  "",
            "cityName"     =>  "Newyork",
            "state"        =>  "",
            "zipCode"      =>  ""
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
     * Negative test Data  where only  parameters are  empty 
     * Use this data for validating assert condition where only two  parameters are not   empty
     * 
     * @return array
     */
    public function zapierWithNegativeTestData()
    {  
        $datasetOne = [
          [
            "firstName"    =>   true,
            "lastName"     =>  "Sample11*&%",
            "email"        =>  "test17Sample181@gmailcom",
            "fullAddress"  =>  "(0&%addressSample",
            "cityName"     =>  "Newyork90^%$",
            "state"        =>   878,
            "zipCode"      =>  "hgdhe"
          ]
        ];
        $datasetTwo = [
          [
            "firstName"    =>   78291729,
            "lastName"     =>   false,
            "email"        =>  "Data1Sample101@^*gmail..com",
            "fullAddress"  =>  "12 addressSampleTest",
            "cityName"     =>   79292,
            "state"        =>  "Los Angeles",
            "zipCode"      =>  "40878"
          ]
        ];
        $datasetThree = [
          [
            "firstName"    =>  "Test11Data1",
            "lastName"     =>  "Data@Sample&(",
            "email"        =>   5789,
            "fullAddress"  =>   true,
            "cityName"     =>  "LosAngeles",
            "state"        =>  "California",
            "zipCode"      =>  "95678"
          ]
        ];
        $datasetFour = [
          [
            "firstName"    =>  "Test11Data147",
            "lastName"     =>  "Sample78",
            "email"        =>  "test11Sample11@gmail.com",
            "fullAddress"  =>   true,
            "cityName"     =>   7876,
            "state"        =>  "California",
            "zipCode"      =>  "68678"
          ]
        ];
        $datasetFive = [
          [
            "firstName"    =>  "Test181&1",
            "lastName"     =>  "89999",
            "email"        =>  "test11Data1Sample11@gmail.com",
            "fullAddress"  =>  "&$80Sample Test",
            "cityName"     =>  "null",
            "state"        =>   true,
            "zipCode"      =>  "96678"
          ]
        ];
        
        return
        [
          'negative test data set one'   => $datasetOne,
          'negative test data set two'   => $datasetTwo,
          'negative test data set three' => $datasetThree,
          'negative test data set Four'  => $datasetFour,
          'negative test data set five'  => $datasetFive
        ];
    }
}


