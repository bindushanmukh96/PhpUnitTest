<?php
use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase{


    /**
     * @dataProvider sampleSignup
     */
    public function testParametes($params)
    {
    
        $this->assertIsString($params);
    }
    /**
     * @dataProvider sampleSignup
     */
    public function testParametesNotEmpty($params)
    {

       $this->assertNotEmpty($params);

    }

    /**
     * @dataProvider ArrayData1
     */

    public function testParametersIsPresent($data)
    {
     for($i=0;$i<count($data);$i++)
     {  
        
      $this->assertNotEmpty($data[$i]);
      $this->assertIsString($data[$i]);
     }
        
    }

    public function sampleSignup()
    {
        return[
            ["fname","name"],
            ["lname"],
            ["email"],
            ["password"],
            ["country"]

        ];

    }

    public function ArrayData1()
    {
        $dataset1=array("shawn","mendes", "smendes@gmail.com","cam56Aw","US");
        $dataset2=array("shawn1", "mendes1", "smendes1@gmail.com","cam516Aw","US");
        return[
        array($dataset1),
        array($dataset2),
       ];



    }



}




?>