<?php

namespace Test\App;

use \PHPUnit\Framework\TestCase;

class Agetest extends TestCase{


    public function testCalculateAge(){

        $today = new \DateTime();
        $dob = new \DateTime();
        $dob->setDate(1984,9,8);

        $age = new \App\Age($dob, $today);
        $this->assertEquals($age->calculate(), 36);

        
    }

}