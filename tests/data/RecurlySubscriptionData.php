<?php

class RecurlySubscriptionData
{
     /**
     * Positive test Data  where all parameters are not empty and valid
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are valid
     * 
     * @return array
     */
    public function recurlySubscriptionDataWithPositiveTestData()
    {
        $datasetOne = [
          [
            "accountCode"  =>  "hd728sge0gt3",
            "currency"     =>  "USD",
            "planCode"     =>  "cr_start"
          ]
        ];
        $datasetTwo = [
          [
            "accountCode"  =>  "jue724gsfe82g3",
            "currency"     =>  "INR",
            "planCode"     =>  "cr_grow"
          ]
        ];
        $datasetThree = [
          [
            "accountCode"  =>  "73hdtria74gsjd",
            "currency"     =>  "AUD",
            "planCode"     =>  "cr_scale"
          ]
        ];
        $datasetFour = [
          [
            "accountCode"  =>  "jteusf52gdjg383g",
            "currency"     =>  "NZD",
            "planCode"     =>  "cr_enterprise"
          ]
        ];
        $datasetFive = [
          [
            "accountCode"  =>  "sfje724sjsgeb",
            "currency"     =>  "AUD",
            "planCode"     =>  "cr_start"
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
    public function recurlySubscriptionDataWithNegativeTestData()
    {
        $datasetOne = [
          [
            "accountCode"  =>  "HYtr%$#76",
            "currency"     =>  "USD^",
            "planCode"     =>  "483"
          ]
        ];
        $datasetTwo = [
          [
            "accountCode"  =>  "g6&(jdhetiH",
            "currency"     =>  "AUD$",
            "planCode"     =>  "start^"
          ]
        ];
        $datasetThree = [
          [
            "accountCode"  =>  "ghtREWKIG",
            "currency"     =>  "INR$",
            "planCode"     =>  "entry^"
          ]
        ];
        $datasetFour= [
          [
            "accountCode"  =>  "Ytejsk^&*",
            "currency"     =>  "USD$",
            "planCode"     =>  "growi*"
          ]
        ];
        $datasetFive = [
          [
            "accountCode"  =>  "sjegTye^&45283",
            "currency"     =>  "Aud%",
            "planCode"     =>  "hdy"
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
    public function recurlySubscriptionDataNegativeTestDataWithOneParamter()
    {
        $datasetOne = [
          [
            "accountCode"  =>  "",
            "currency"     =>  "",
            "planCode"     =>  "cr_start"
          ]
        ];
        $datasetTwo = [
          [
            "accountCode"  =>  "",
            "currency"     =>  "NZD",
            "planCode"     =>  ""
          ]
        ];
      
      return
       [
          'negative test data set one'   => $datasetOne,
          'negative test data set three' => $datasetTwo
       ];
    }
     
     /**
     * Negative test Data  where only two  parameters are not  empty 
     * Use this data for validating assert condition where only two  parameters are not   empty
     * 
     * @return array
     */
    public function recurlySubscriptionDataWithParamtersEmpty()
    {  
        $datasetOne = [
          [
            "accountCode"  =>  "",
            "currency"     =>  "NZD",
            "planCode"     =>  "cr_grow$"
          ]
        ];
        $datasetTwo = [
          [
            "accountCode"  =>  "",
            "currency"     =>  "AUD",
            "planCode"     =>  ""
          ]
        ];
        $datasetThree = [
          [
            "accountCode"  =>  "",
            "currency"     =>  "INR",
            "planCode"     =>  "cr_start5"
          ]
        ];
        $datasetFour = [
          [
            "accountCode"  =>  "",
            "currency"     =>  "AUD",
            "planCode"     =>  "cr_start"
          ]
        ];
        $datasetFive = [
          [
            "accountCode"  =>  "edfs43terr56",
            "currency"     =>  "",
            "planCode"     =>  "cr_grow"
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