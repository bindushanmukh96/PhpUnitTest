<?php

class TestDataForm2
{
  
  
  
    /**
     * Positive test Data in the form of  array where all parameters are not empty and string values
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are string
     */
    public function positiveTestDataOfUserCardInfoOne()
    {
     return 
     [
       'positive test data set one'=>
       [[
         "    (236)-765789",
         "   1234567891234566",
         "   666",
       ]],
       'positive test data set two'=>
       [[
         "   (111)-705600   ",
         "  8095190432790227   ",
         "  806  ",
       ]],
       'positive test data set three'=>
       [[
         "    (987)-644699 ",
         "    1947865430000395  ",
         "216  ",
         ]],
       'positive test data set four'=>
       [[
         "   (776)-273951  ",
         "    6208278918903632  ",
         "  216  ",
       ]],
       'positive test data set five'=>
       [[
         "(187)-085642     ",
         "4712908362184941   ",
         "216  ",
       ]]
     ];
    }
    
    
    
    
    /**
     * Positive test Data in the form of assocaitive array where all parameters are not empty and string values
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are string
     */
    public function positiveTestDataOfUserCardInfoTwo()
    {
      return
      [
        'positive test data as associative array set one' =>
        [[
          "Phone Number" => "   (898)-567809",
          "credit card" => "    3097186382167369",
          "cvv" => "   846"

        ]],
        'positive test data as associative array set two' =>
        [[
          "Phone Number" => "(741)-617749     ",
          "credit card" => "4912306179265296   ",
          "cvv" => "730    ",
        ]],
        'positive test data as associative array set three' =>
        [[
          "Phone Number" => "    (517)-020409",
          "credit card" => "     8201739442968164",
          "cvv" => "   385",
        ]],
        'positive test data as associative array set four' =>
        [[
          "Phone Number" => "    (518)-832641    ",
          "credit card" => "   7290701927946190    ",
          "cvv" => "    861    ",
        ]],
        'positive test data as associative array set five' =>
        [[
          "Phone Number" => "   (293)-382272   ",
          "credit card" => "   7629274035292648   ",
          "cvv" => "   472   ",
        ]]
      ];
    }

    
    
    
    /**
     * Positive test Data in the form of array where all parameters are not empty and string values
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are string
     */
    public function positiveTestDataOfUserCardInfoThree()
    {
      return
      [
        'positive test data set one'=>
        [[
          "     (02)98765432",
          "   2893327227293628",
          "   238",
        ]],
        'positive test data set two'=>
        [[
          "(03)23024803      ",
          "9822893690269533   ",
          "492    ",
        ]],
        'positive test data set three'=>
        [[
          "       (04)39829379",
          "   2872823432828373",
          "827   ",
        ]],
        'positive test data set four'=>
        [[
          "       (02) 0403 9982   ",
          "   2728946289172781    ",
          "   927   ",
        ]],
        'positive test data set five'=>
        [[
          "       (03)87288372",
          "2891498300630363   ",
          "762   ",
        ]],

      ];
    }
    
    
    
    
    /**
     * Positive test Data in the form of assocaitive array where all parameters are not empty and string values
     * Use this data for validating assert condition to check all parameters are not empty
     * Use this data for validating assert condition to check all parameters are string
     */
    public function positiveTestDataOfUserCardInfoFour()
    {
      return
      [
        'positive test data set one'=>
        [[
          "Phone Number" => "      (02)38738227",
          "credit card" => "2782936498943648     ",
          "cvv" => "   628",
        ]],
        'positive test data set two'=>
        [[
          "Phone Number" => "    (04)28734763   ",
          "credit card" => "2873867302610338      ",
          "cvv" => "836  ",
        ]],
        'positive test data set Three'=>
        [[
          "Phone Number" => "     (02)38739462 ",
          "credit card" => "    3762387493529462   ",
          "cvv" => " 236  ",
        ]],
        'positive test data set four'=>
        [[
          "Phone Number" => "   (04)76282721  ",
          "credit card" => "   7637 9362 8362 9364   ",
          "cvv" => "  729  ",
        ]],
        'positive test data set five'=>
        [[
          "Phone Number" => "  (02)82639473",
          "credit card" => "8782696392528462   ",
          "cvv" => "  287  ",
        ]]

      ];
    }
    
    
    
    /**
     * Negative test Data in the form of array where all parameters are not string 
     * Use this data for validating assert condition to check all parameters are string
     */
    public function negativeTestDataOfUserCardInfoOne()
    {
      return
      [
        'negative test data set one'=>
        [[
          (782)-923610,
          3620602636520628,
          629,
        ]],
        'negative test data set two'=>
        [[
          (820)-253728,
          6293927739471037,
          820,
        ]],
        'negative test data set three'=>
        [[
          (192)-363474,
          7394917393526482,
          384,
        ]],
        'negative test data set four'=>
        [[
          (421)-567281,
          8362936282642836,
          728,
        ]],
        'negative test data set five'=>
        [[
          (835)-748273,
          7391845279238263,
          638,
        ]]

      ];
    }
    
    
    
    /**
     * Negative test Data in the form of assocaitive array where all parameters are not string values
     * Use this data for validating assert condition to check all parameters are string
     */
    public function negativeTestDataOfUserCardInfoTwo()
    {
      return
      [
        'negative test data set one'=>
        [[
          "Phone Number" => (738)-737383,
          "credit card" => 7364285478253727,
          "cvv" => 792,
        ]],
        'negative test data set two'=>
        [[
          "Phone Number" => (637)-352836,
          "credit card" => 6382926353825782,
          "cvv" => 291,
        ]],
        'negative test data set three'=>
        [[
          "Phone Number" => (529)-672317,
          "credit card" => 5283467837529635,
          "cvv" => 536,
        ]],
        'negative test data set four'=>
        [[
          "Phone Number" => (282)-729263,
          "credit card" => 9273000729724291,
          "cvv" => 892,
        ]],
        'negative test data set five'=>
        [[
          "Phone Number" => (816)-272817,
          "credit card" => 8293572439178202,
          "cvv" => 729,
        ]]

      ];
    }
    
    
    
    
    /**
     * Negative test Data in the form of assocaitive array where all parameters are empty
     * Use this data for validating assert condition to check all parameters are string
     */
    public function negativeTestDataOfUserCardInfoThree()
    {
      return
      [
        'negative test data set one'=>
        [[
          "Phone Number" => "",
          "credit card" => "",
          "cvv" => "",
        ]],
        'negative test data set two'=>
        [[
          "Phone Number" => "",
          "credit card" => "",
          "cvv" => "",
        ]],
        'negative test data set three'=>
        [[
          "Phone Number" => "",
          "credit card" => "",
          "cvv" => "",
        ]],
        'negative test data set four'=>
        [[
          "Phone Number" => "",
          "credit card" => "",
          "cvv" => "",
        ]],
        'negative test data set five'=>
        [[
          "Phone Number" => "",
          "credit card" => "",
          "cvv" => "",
        ]]

      ];
    }



    /**
     * negative test Data in the form of assocaitive array where atleast one parameter is empty 
     * Use this data for validating assert condition to check atleast one parameter is empty
     */
    public function negativeTestDataOfUserCardInfoFour()
    {
      return
      [
        'positive test data set one'=>
        [[
          "Phone Number" => "      (04)39738827",
          "credit card" => "",
          "cvv" => "   348",
        ]],
        'positive test data set two'=>
        [[
          "Phone Number" => "",
          "credit card" => "3475067302610338      ",
          "cvv" => "506  ",
        ]],
        'positive test data set Three'=>
        [[
          "Phone Number" => "     (04)78732492 ",
          "credit card" => "    3163347443519462   ",
          "cvv" => "",
        ]],
        'positive test data set four'=>
        [[
          "Phone Number" => "   (02)79222451  ",
          "credit card" => "   5697 9672 8622 9764   ",
          "cvv" => "  256  ",
        ]],
        'positive test data set five'=>
        [[
          "Phone Number" => "  (02)82639473",
          "credit card" => "8154927402730472   ",
          "cvv" => "  643  ",
        ]],

      ];
    }


   
    /**
     * negative test Data in the form of assocaitive array where  one parameter not empty 
     * Use this data for validating assert condition where only one parameter is not empty
     */
    public function negativeTestDataOfUserCardInfoFive()
    {
      return
      [
        'positive test data set one'=>
        [[
          "Phone Number" => "",
          "credit card" => "  9173751992619629",
          "cvv" => "",
        ]],
        'positive test data set two'=>
        [[
          "Phone Number" => "   (04)91639263  ",
          "credit card" => "",
          "cvv" => "",
        ]],
        'positive test data set Three'=>
        [[
          "Phone Number" => "",
          "credit card" => "",
          "cvv" => "934",
        ]],
      ];
    }

     /**
     * negative test Data in the form of assocaitive array where  one parameter is empty 
     * Use this data for validating assert condition where only one parameter is  empty
     */
    public function negativeTestDataOfUserCardInfoSix()
    {
      return
      [
        'positive test data set one'=>
        [[
          "Phone Number" => "(064)852875",
          "credit card" => "  9173751992619629",
          "cvv" => "",
        ]],
        'positive test data set two'=>
        [[
          "Phone Number" => "   (04)91639263  ",
          "credit card" => "  6274748502749639  ",
          "cvv" => "",
        ]],
        'positive test data set Three'=>
        [[
          "Phone Number" => "(284)929475",
          "credit card" => "",
          "cvv" => "934",
        ]],
        'positive test data set four'=>
        [[
          "Phone Number" => "",
          "credit card" => "8354772502749264",
          "cvv" => "947",
        ]],
      ];
    }
    
    
    
/**
 * Positive Test Data for Mobile Number validation
 * use this test data for  Mobile Number validating assert condition
 */
public function positiveTestDataForMobileNumberValidation()
{
  return
  [
    'positve test data one' => ["(802)567102"],
    'positve test data two' => ["(142)725392"],
    'positve test data three' =>["(593)543795"],
    'positve test data four' => ["(553)873064"],
    'positve test data five' =>["(972)380379"],
    'positve test data six' => ["(02)85329648"],
    'positve test data seven' => ["(02)96548437"],
    'positve test data eight' => ["(04)95359743"],
    'positve test data nine' => ["(02)67933280"],
    'positve test data ten' => ["(04)92795669"]
  ];

}



/**
 * Negative Test Data for mobile number validation
 * use this test data for  mobile number not valid assert condition
 */
public function negativeTestDataForMobileNumberValidation()
{
  return
  [
    'negative test data one' => ["(6436)886380654g"],
  'negative test data two' => ["(8686)008084577" ],
  'negative test data three' => ["(8867)995287597"],
  'negative test data four' => ["(7743)57683679h"],
  'negative test data five' => ["(9932)97847538"],
  'negative test data six' => ["(012)8653880643"],
  'negative test data seven' => ["(756)653266995347"],
  'negative test data eight' => ["(8927)372863523"],
  'negative test data nine' => ["(12761)36220636"],
  'negative test data ten' => ["(62893)63782639" ],
  ];

}



/**
 * Positive Test Data for Credit card validation
 * use this test data for  Credit card validating assert condition
 */
public function positiveTestDataForCreditCardValidation()
{
  return
  [
    'positve test data one' => ["6926492722837352"],
    'positve test data two' => ["2781588392578352"],
    'positve test data three' => [ "8836 2973 6829 3648"],
    'positve test data four' => ["2972483953925283"],
    'positve test data five' => ["87283762 9365 9263"],
    'positve test data six' => ["2819 7352 8365 8263"],
    'positve test data seven' => ["7628 3852 9263 8362"],
    'positve test data eight' => ["7227 0273 8236 2837"],
    'positve test data nine' => ["6293 5273 6283 5372"],
    'positve test data ten' => ["8394 2926 3281 5378"]
  ];

}





/**
 * Negative Test Data for Credit Card validation
 * use this test data for  Credit Card not valid assert condition
 */
public function negativeTestDataForCreditCardValidation()
{
  return
  [
  'negative test data one' => ["26718s82638bs226182"],
  'negative test data two' => ["hdfagsjwiysnksuw"],
  'negative test data three' => ["(8867)-1628368268263"],
  'negative test data four' => ["627692728837761862836826"],
  'negative test data five' => ["2672$61727@81628%6826"],
  'negative test data six' => ["628638251861"],
  'negative test data seven' => ["7218182527vsFFTUJNG2626"],
  'negative test data eight' => ["WDSUYKMGESUTDSTJKITRW"],
  'negative test data nine' => ["*^$@!$%^&*(&^fs1527"],
  'negative test data ten' => ["162624172571"],
  ];

}
}