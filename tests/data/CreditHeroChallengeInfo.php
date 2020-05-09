<?php

use PHPUnit\Framework\TestCase;

class CreditHeroChallengeInfo
{
    /**
     * positive test data to check the data is valid and not empty
     * 
     * @return array
     */
    public function creditHeroChallengeInfoWithPositiveTestData()
    {
        return 
        [
            'positive test data set one' => [
              "productDescription"  =>  "Sample product one",
              "currency"            =>  "USD",
              "amount"              =>  "199",
              "recurlyAccountCode"  =>  "qgshdfau2715TGW" 
            ],
            'positive test data set two' => [
              "productDescription"  =>  "Sample Test Product two",
              "currency"            =>  "AUD",
              "amount"              =>  "299",
              "recurlyAccountCode"  =>  "sd173Fgehdhsyi8"         
            ],
            'positive test data set three' => [
              "productDescription"  =>  "Sample Test three",
              "currency"            =>  "USD",
              "amount"              =>  "399",
              "recurlyAccountCode"  =>  "qig92hdg82gshiy"     
            ],
            'positive test data set four' => [
              "productDescription"  =>  "Sample Test Product four",
              "currency"            =>  "AUD",
              "amount"              =>  "299",
              "recurlyAccountCode"  =>  "iy73Fgehqhsy6i2"         
            ],
            'positive test data set five' => [
              "productDescription"  =>  "Sample Test five",
              "currency"            =>  "USD",
              "amount"              =>  "599",
              "recurlyAccountCode"  =>  "str92hdgo2gshiy"     
            ] 
        ];
    }

    /**
     * positive test data to check the data is valid and not empty
     * 
     * @return array
     */
    public function creditHeroChallengeInfoWithSecondPositiveTestData()
    {
        $datasetOne = [
          [
            "productDescription"  =>  "Sample test product One",
            "currency"            =>  "cent",
            "amount"              =>  "599",
            "recurlyAccountCode"  =>  "hsbe729vsh238hs"     
          ]
        ];
        $datasetTwo = [
          [
            "productDescription"  =>  "Product test Sample Two",
            "currency"            =>  "dollars",
            "amount"              =>  "399",
            "recurlyAccountCode"  =>  "793gsye782frt56"  
          ]
        ];
        $datasetThree = [
          [
            "productDescription"  =>  "test product sample Three",
            "currency"            =>  "NYD",
            "amount"              =>  "199",
            "recurlyAccountCode"  =>  "bsj729shw234bsh"    
          ]
        ];
        $datasetFour = [
          [
            "productDescription"  =>  "test product sample Four",
            "currency"            =>  "USD",
            "amount"              =>  "399",
            "recurlyAccountCode"  =>  "h2g729shw2h4bsh"    
          ]
        ];
        $datasetFive = [
          [
            "productDescription"  =>  "test product sample Five",
            "currency"            =>  "AUD",
            "amount"              =>  "499",
            "recurlyAccountCode"  =>  "q2ij2tshw2y4bsh"    
          ]
        ];

        return
        [
          'positive test data set one'   => $datasetOne,
          'positive test data set two'   => $datasetTwo,
          'positive test data set three' => $datasetThree,
          'positive test data set four'  => $datasetFour,
          'positive test data set five'  => $datasetFive      
        ];
    }

    /**
     * negative test data check the data is not valid
     * 
     * @return arrray
     */
    public function creditHeroChallengeInfoWithNegativeTestData()
    {
        return
        [
          'negative test data set one' => [
            "productDescription"  =>  "sample@ Product%$1",
            "currency"            =>  "AUD56$",
            "amount"              =>  "Twenty7",
            "recurlyAccountCode"  =>  "hyw%hxhg72638k"       
          ],
          'negative test data set two' => [
            "productDescription"  =>  "TWEfsy ^@^@",
            "currency"            =>  "USD$",
            "amount"              =>  "5Tr",
            "recurlyAccountCode"  =>  "12344576152689#"
          ],
          'negative test data set three' => [
            "productDescription"  =>  "sample%412 Tsets",
            "currency"            =>  "@UD",
            "amount"              =>  "3!@T",
            "recurlyAccountCode"  =>  "y^%$325ERT#uhyt"    
          ],
          'negative test data set four' => [
            "productDescription"  =>  "sample%412 Tsets",
            "currency"            =>  "AUD&",
            "amount"              =>  "3tev",
            "recurlyAccountCode"  =>  "hw7%$3^5ERT#uhy"    
          ],
          'negative test data set five' => [
            "productDescription"  =>  "sample%412 Tsets",
            "currency"            =>  "US&",
            "amount"              =>  "tev8",
            "recurlyAccountCode"  =>  "qT7%$3^5ERT#uhy"    
          ]
        ];
    }

    /**
     * negative test data where one parameter empty
     * 
     * @return array
     */
    public function creditHeroChallengeInfoWithOneParamEmpty()
    {
        $datasetOne = [
          [
            "productDescription"  =>  "sample test description",
            "currency"            =>  "",
            "amount"              =>  "199Y",
            "recurlyAccountCode"  =>  "hye643gst3th1tr"
          ]    
        ];
        $datasetTwo = [
          [
            "productDescription"  =>  "",
            "currency"            =>  "AUD",
            "amount"              =>  "399@",
            "recurlyAccountCode"  =>  "f628yhei62getur"  
          ]
        ];
        $datasetThree = [
          [
            "productDescription"  =>  "sample desciption",
            "currency"            =>  "",
            "amount"              =>  "199",
            "recurlyAccountCode"  =>  "hs9fr2usg23fdr#"      
          ]
        ];
        $datasetFour = [
          [
            "productDescription"  =>  "test sample@52",
            "currency"            =>  "USD",
            "amount"              =>  "",
            "recurlyAccountCode"  =>  "q62tgsr527getyi"      
          ]
        ];
        $datasetFive = [
          [
            "productDescription"  =>  "sample%",
            "currency"            =>  "AUD",
            "amount"              =>  "349",
            "recurlyAccountCode"  =>  ""      
          ]
        ];

        return
        [
          "negative test data set one"    => $datasetOne,
          "negative test data set two"    => $datasetTwo,
          "negative test data set Three"  => $datasetThree,
          "negative test data set Four"   => $datasetFour,
          "negative test data set Five"   => $datasetFive
        ];
    }

    /**
     * negative test data where params are empty
     * 
     * @return Array
     */
    public function creditHeroChallengeInfoWithParamsEmpty()
    {
        return
        [
          'negative test data set one' => [
            "productDescription"  =>  "",
            "currency"            =>  "",
            "amount"              =>  "399",
            "recurlyAccountCode"  =>  "h56riy4rty87trw"   
          ],
          'negative test data set two' => [
            "productDescription"  =>  "Sample product",
            "currency"            =>  "USD",
            "amount"              =>  "199",
            "recurlyAccountCode"  =>  ""  
          ],
          'negative test data set three' => [
            "productDescription"  =>  "",
            "currency"            =>  "USD",
            "amount"              =>  "",
            "recurlyAccountCode"  =>  ""    
          ],
          'negative test data set four' => [
            "productDescription"  =>  "sample description",
            "currency"            =>  "AUD",
            "amount"              =>  "",
            "recurlyAccountCode"  =>  ""          
          ],
          'negative test data set five' => [
            "productDescription"  =>  "sample test description@",
            "currency"            =>  "",
            "amount"              =>  "299J",
            "recurlyAccountCode"  =>  ""
          ]    
        ];   
    }
}
