# BaseTDD
### Test Driven Development
#### In test-driven development, each new feature begins with writing a test.

## Why?
    * To write fully testable code
    * Avoid unwanted behaviour when changing code.
    * Easier to refactor.
    
### Before we start:

* Fork this repo and clone it to local.
* Basic knowledge of PHP OOP is a must.
* Having PHPStorm IDE will be a bonus.

## Set up:
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

## Testing:
Now to test if it is failing:
### PHPStorm
    1. Right click `/src/Tests` folder.
    2. Click run 'Tests'.
    3. In edit configuration click on the button Fix.
    4. Add the full path to `vendor/autoload.php` in Path to script.
    5. You will now be able to run your test.
    6. In future, click the green run/play button to run tests. 
    
![alt text](https://github.com/fah7eem/BaseTDD/blob/master/misc/phpstorm.gif "Run tests in PHPStorm")

### OR

### Command Line
`Run the command phpunit in the root of the repository.`

![alt text](https://github.com/fah7eem/BaseTDD/blob/master/misc/phpcmd.png "phpunit tests in cmd")

The test should be failin as seen in the graphic examples above.

## Passing the test.

In `src/Tests/Project/Entity/tddExampleTest.php` :

`$this->assertEquals($Class->addition(2,2),4);`

The above method cll makes an assertion that the two given arguments are EQUAL to each other.
You can pass the test by changing the it too:

`$this->assertEquals(4,4);`
