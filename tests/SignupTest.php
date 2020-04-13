<?php
require './data/TestData.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertContains;

class SignupTest extends TestCase
{
 
 
// public $provider= new TestData();

    /**
     * @dataProvider TestData::testdata()
     */
    public function testFieldsEnteredNotEmpty($data)
    {
      for($i=0;$i<count($data);$i++)
      {
        $this->assertNotEmpty($data[$i]);
      }
     }

    
    //  /**
    //  * @dataProvider TestData::positiveTestDataofSignUpFormOne_One
    //  */
    // public function testArrayKeynotEmpty($data)
    // {
    //   foreach($data as $key)
    //   {
    //  echo $key;
    //   $this->assertNotEmpty($key);
    //   }
    // }

    
    
    // /**
    //  * @dataProvider TestData::positiveTestDataOfSignUpFormOne_Two
    //  */
    // public function testEnteredisString($data)
    // {
    //   for($i=0;$i<count($data);$i++)
    //   {
    //     $this->assertIsString($data[$i]);
    //   }
    //  }

    // /**
    //  * @dataProvider TestData::positiveTestDataOfSignUpFormTwo_Two
    //  */
    // public function testArrayisEmpty($data)
    // {
    //   foreach($data as $key)
    //   {
    //    $this->assertEmpty($key);

    //   }


    // }
//     public static function TestData5()
// {
// return
// [
// 'positive test data'=>[["test","sample","tessample@gmail.com","#j6kTu^","Australia"]],
// 'positive test data'=>[["test1","sample","tessample1@hji.com","&ghb6jag","US"]],
// 'positive test data'=>[["test2","sample2","tessample2@ihg.com","45687$@","US"]],
// 'positive test data'=>[["tests3","sample3","tesssample3@ymail.com","0)(*&^%y","australia"]]
// ];
// }
     

    



    
    

 




 














}