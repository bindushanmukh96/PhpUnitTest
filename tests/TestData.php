<?php



class TestData
{


    //Positive test Data where all fields are there
    public function TestData1()
    {
        $dataset1=array("fname"=>"test","lname"=>"sample", "email"=>"tsample@gmail.com","password"=>"cam56Aw","country"=>"US");
        $dataset2=array("fname"=>"111111", "lname"=>"sample1", "email"=>"tsample1@gmail.com","password"=>"cam516Aw","country"=>"US");
        $dataset3=array("fname"=>"test2","lname"=>"2222e2","email"=>"tsample2@gmail.com","password"=>"Cgaju$7","Country"=>"Australia");
        $dataset4=array("fname"=>"test3","lname"=>"sample3","email"=>"tsample3@gmail.com","password"=>"1234567","Country"=>"Australia");
        $dataset5=array("fname"=>"test4","lname"=>"sample4","email"=>"tsample4@gmail.com","password"=>"Cgaju&7","Country"=>"Australia");
        
        return[
        'postive test data'=>array($dataset1),
        'postive test data'=>array($dataset2),
        'postive test data'=>array($dataset3),
        'postive test data'=>array($dataset4),
        'postive test data'=>array($dataset5),
       ];
 }


//Negative test data where one feild is missing 
 public function TestData2()
    {
      $dataset1=array("fname"=>"","lname"=>"sample", "email"=>"tsample6@gmail.com","password"=>"cam56Aw","country"=>"US");
      $dataset2=array("fname"=>"test1", "lname"=>"", "email"=>"tsample7@gmail.com","password"=>"cam516Aw","country"=>"US");
      $dataset3=array("fname"=>"test2","lname"=>"sample2","email"=>"","password"=>"Cgaju$7","Country"=>"Australia");
      $dataset4=array("fname"=>"test46","lname"=>"sampler4","email"=>"tsample4@gmail.com","password"=>"Cgajfu&7","Country"=>"Australia");
      $dataset5=array("fname"=>"test3","lname"=>"sample3","email"=>"tsample8@gmail.com","password"=>"","Country"=>"Australia");
      $dataset6=array("fname"=>"test4","lname"=>"sample4","email"=>"tsample9@gmail.com","password"=>"Cgaju&7","Country"=>"");
        return[
        'negative test data fname is empty'=>array($dataset1),
        'negative test data lname is empty'=>array($dataset2),
        'negaive test data email is empty'=>array($dataset3),
        'negative test data email is duplicate'=>array($dataset4),
        'negative test data password is not selected'=>($dataset5),
        'negative test data country is not selected'=>($dataset6)
       ];
 }


 //Negative tests cases where only one field is not empty
 public function TestData3()
 {
     $dataset1=array("fname"=>"test","lname"=>"", "email"=>"","password"=>"","country"=>"");
     $dataset2=array("fname"=>"", "lname"=>"sample1", "email"=>"","password"=>"","country"=>"");
     $dataset3=array("fname"=>"","lname"=>"","email"=>"tsample22@gmail.com","password"=>"","Country"=>"");
     $dataset4=array("fname"=>"","lname"=>"","email"=>"","password"=>"1234567","Country"=>"");
     $dataset5=array("fname"=>"","lname"=>"","email"=>"","password"=>"","Country"=>"Australia");
     
     
     return[
     'negative test data only fname is not empty'=>array($dataset1),
     'negative test data only lname is not empty'=>array($dataset2),
     'negative test data only email is not empty'=>array($dataset3),
     'negative test data only password is not empty'=>array($dataset4),
     'negative test data only country is not empty'=>array($dataset5),
     'negative test data  password exceeds the length'=>["tests466","sample3","tess66sample3@ymail.com","0)(*77hA6jfd32ty&^%y","australia"]
    ];
}


public function TestData5()
{
return
[
'positive test data'=>["test","sample","tessample@gmail.com","#j6kTu^","Australia"],
'positive test data'=>["test1","sample","tessample1@hji.com","&ghb6jag","US"],
'positive test data'=>["test2","sample2","tessample2@ihg.com","45687$@","US"],
'positive test data'=>["tests3","sample3","tesssample3@ymail.com","0)(*&^%y","australia"]
];
}


//negative Test cases where email is incorrect
public function TestData6()
{
return
[
'negative test data email incorrect'=>["test","sample","tessamplegmail.com","#j6kTu^","Australia"],
'negative test data email incorrect'=>["test1","sample","tessample1@hjicom","&ghb6jag","US"],
'negative test data email incorrect'=>["test2","sample2","123452@@ihg.com","45687$@","US"],
'negative test data email incorrect'=>["tests3","sample3","tess987653@.com","0)(*&^%y","australia"]
];
}







}




