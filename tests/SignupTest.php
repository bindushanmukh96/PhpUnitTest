<?php
require 'TestData.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertContains;

class SignupTest extends TestCase
{
 
 


    /**
     * @dataProvider TestData3
     */
    public function testFieldsEnteredNotEmpty($data)
    {
     foreach($data as $key)
     {

       $this->assertNotEmpty($key);
     }
     }
    
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



 














}