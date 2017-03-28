<?php
/**
 * Created by PhpStorm.
 * User: faheem
 * Date: 2017/02/01
 * Time: 2:27 PM
 */

namespace Tests\Project\Entity;
use Project\Entity\tddExample;
class tddExampleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testme()
    {
        $tdd = new tddExample();
        $this->assertEquals($tdd->addTwoNumbers(1,3) , 4);
    }
}