<?php

use PHPUnit\Framework\TestCase;

class UpshellData
{
    /**
     * positive test data to check the data is valid and not empty
     * 
     * @return array
     */
    public function upshellDataWithPositiveTestData()
    {
        return 
        [
            'positive test data set one' => [
              "productTitle"        =>  "Test Product",
              "productDescription"  =>  "Sample product",
              "currency"            =>  "cents",
              "amount"              =>  "199",
              "recurlyAccountCode"  =>  "8gshdfau2715TGW" 
            ],
            'positive test data set two' => [
              "productTitle"        =>  "Test Prodcut2",
              "productDescription"  =>  "Sample Test Product",
              "currency"            =>  "dollars",
              "amount"              =>  "299",
              "recurlyAccountCode"  =>  "9173Fgehdhsy682"         
            ],
            'positive test data set three' => [
              "productTitle"        =>  "Test Product3",
              "productDescription"  =>  "Sample Test",
              "currency"            =>  "cents",
              "amount"              =>  "399",
              "recurlyAccountCode"  =>  "bsg92hdg82gshiy"     
            ] 
        ];
    }

    /**
     * positive test data to check the data is valid and not empty
     * 
     * @return array
     */
    public function upshellDataWithSecondPositiveTestData()
    {
        $datasetOne = [
          [
            "productTitle"        =>  "Sample Product",
            "productDescription"  =>  "Sample test product",
            "currency"            =>  "cent",
            "amount"              =>  "599",
            "recurlyAccountCode"  =>  "hsbe729vsh238hs"     
          ]
        ];
        $datasetTwo = [
          [
            "productTitle"        =>  "Sample Test",
            "productDescription"  =>  "Product test",
            "currency"            =>  "dollars",
            "amount"              =>  "399",
            "recurlyAccountCode"  =>  "793gsye782frt56"  
          ]
        ];
        $datasetThree = [
          [
            "productTitle"        =>  "Sample Test Product",
            "productDescription"  =>  "test product sample",
            "currency"            =>  "cents",
            "amount"              =>  "299",
            "recurlyAccountCode"  =>  "bsj729shw234bsh"    
          ]
        ];

        return
        [
          'positive test data set one'   => $datasetOne,
          'positive test data set two'   => $datasetTwo,
          'positive test data set three' => $datasetThree    
        ];
    }

    /**
     * negative test data check the data is not valid
     * 
     * @return arrray
     */
    public function upshellDataWithNegativeTestData()
    {
        return
        [
          'negative test data set one' => [
            "productTitle"        =>  "S@mple1",
            "productDescription"  =>  "sample@ Product%$1",
            "currency"            =>  "cents56$",
            "amount"              =>  "Twenty7",
            "recurlyAccountCode"  =>  "hyw%hxhg72638k"       
          ],
          'negative test data set two' => [
            "productTitle"        =>  "Test$3",
            "productDescription"  =>  "TWEfsy ^@^@",
            "currency"            =>  "dOllars$",
            "amount"              =>  "5Tr",
            "recurlyAccountCode"  =>  "12344576152689#"
          ],
          'negative test data set three' => [
            "productTitle"        =>  "Sample!@#",
            "productDescription"  =>  "sample%412 Tsets",
            "currency"            =>  "C@nts",
            "amount"              =>  "3!@T",
            "recurlyAccountCode"  =>  "y^%$325ERT#uhyt"    
          ]
        ];
    }

    /**
     * negative test data where one parameter empty
     * 
     * @return array
     */
    public function upshellDataWithOneParamEmpty()
    {
        $datasetOne = [
          [
            "productTitle"        =>  "",
            "productDescription"  =>  "sample test description",
            "currency"            =>  "cents$",
            "amount"              =>  "199Y",
            "recurlyAccountCode"  =>  "hye643gst3th1tr"
          ]    
        ];
        $datasetTwo = [
          [
            "producTitle"         =>  "Sample2",
            "productDescription"  =>  "",
            "currency"            =>  "dollar",
            "amount"              =>  "399@",
            "recurlyAccountCode"  =>  "f628yhei62getur"  
          ]
        ];
        $datasetThree = [
          [
            "productTitle"        =>  "Test5",
            "productDescription"  =>  "sample desciption",
            "currency"            =>  "",
            "amount"              =>  "199",
            "recurlyAccountCode"  =>  "hs6fr2usg23fdr#"      
          ]
        ];
        $datasetFour = [
          [
            "productTitle"        =>  "sample%",
            "productDescription"  =>  "test sample@52",
            "currency"            =>  "cents",
            "amount"              =>  "",
            "recurlyAccountCode"  =>  "q62tgsr527getyi"      
          ]
        ];
        $datasetFive = [
          [
            "productTitle"        =>  "test",
            "productDescription"  =>  "sample%",
            "currency"            =>  "cents",
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
    public function upshellDataWithParamsEmpty()
    {
        return
        [
          'negative test data set one' => [
            "productTitle"        =>  "",
            "productDescription"  =>  "",
            "currency"            =>  "",
            "amount"              =>  "399",
            "recurlyAccountCode"  =>  "h56riy4rty87trw"   
          ],
          'negative test data set two' => [
            "productTitle"        =>  "",
            "productDescription"  =>  "Sample product",
            "currency"            =>  "cents",
            "amount"              =>  "199",
            "recurlyAccountCode"  =>  ""  
          ],
          'negative test data set three' => [
            "productTitle"        =>  "",
            "productDescription"  =>  "",
            "currency"            =>  "dollars",
            "amount"              =>  "",
            "recurlyAccountCode"  =>  ""    
          ],
          'negative test data set four' => [
            "productTitle"        =>  "test sample4",
            "productDescription"  =>  "sampl description",
            "currency"            =>  "cents",
            "amount"              =>  "",
            "recurlyAccountCode"  =>  ""          
          ],
          'negative test data set five' => [
            'productTitle'        =>  "",
            "productDescription"  =>  "Sample test description",
            "currency"            =>  "",
            "amount"              =>  "199",
            "recurlyAccountCode"  =>  ""    
          ]    
        ];   
    }

    /**
     * negative test data where all parameters are empty
     * 
     * @return array
     */
    public function upshellDataWithAllParamsEmpty()
    {
        return [
            [[
               "productTitle"        =>  "",
               "productDescription"  =>  "",
               "currency"            =>  "",
               "account"             =>  "",
               "recurlyAccountCode"  =>  ""
            ]]
          ];
    }
}
