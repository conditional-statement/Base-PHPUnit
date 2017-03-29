# BaseTDD
### Test Driven Development
#### In test-driven development, each new feature begins with writing a test.

### Before we start:

* Fork this repo and clone it to local.
* Basic knowledge of PHP OOP is a must.
* Having PHPStorm IDE will be a bonus.

### Set up:
* Install [PHPUnit](https://phpunit.de/getting-started.html)
* Composer Install in root folder.

### Looking at the test file:

Open the file `src/Tests/Project/Entity/tddExampleTest.php`.
You will find the following method in the class tddExampleTest.

    /**
     * @test
     */
    public function sumOfNumbers()
    {
        $Class = new tddExample();
        $this->assertEquals($Class->addition(2,2),4);
    }

The above method is a simple test of method addition() in the class ttdExample. 
You can find tddExample class in the file `src/Project/Entity/tddExample.php`

### Testing:
Now to test if it is failing:
## PHPStorm
![alt text](https://github.com/fah7eem/BaseTDD/blob/master/misc/phpstorm.gif "Run tests in PHPStorm")
