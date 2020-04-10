<?php
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertArrayHasKey;
use function PHPUnit\Framework\assertContains;

class SignupTest extends TestCase
{

    /**
     * @dataProvider ArrayData2
     */
    public function testFieldsEnteredNotEmpty($data)
    {
     foreach($data as $key)
     {

       $this->assertNotEmpty($key);
     }
     }
    /**
     * @dataProvider ArrayData2
     */
    public function testContainsAllFields($data)
    {
     $fields="fname";
    //  echo $fields;
    $this.assertArrayHasKey($fields,$data);
     
    }





    public function ArrayData2()
    {
        // $dataset1=array("fname"=>"shawn","lname"=>"mendes", "email"=>"smendes@gmail.com","password"=>"cam56Aw","country"=>"US");
        // $dataset2=array("fname"=>"shawn1", "lname"=>"mendes1", "email"=>"smendes1@gmail.com","password"=>"cam516Aw","country"=>"US");
        return[
          array("fname"=>"shawn","lname"=>"mendes", "email"=>"smendes@gmail.com","password"=>"cam56Aw","country"=>"US");
        // array($dataset2),
       ];



    }












}