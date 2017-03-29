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
    public function sumOfNumbers()
    {
        $Class = new tddExample();
        $this->assertEquals($Class->addition(2,2),4);
    }

}