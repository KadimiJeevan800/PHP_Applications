<?php

use PHPUnit\Framework\TestCase;
include_once 'src/User.php';
final class UserTest extends TestCase
{
    // Tests will go here
    //Constructor of test class ...
    public function testClassConstructor()
    {
        $user = new User(18, 'John');
    
        $this->assertSame('John', $user->name);
        $this->assertSame(18, $user->age);
        $this->assertEmpty($user->favorite_movies);
    }
    //function for getting name of the user 
    public function testTellName()
    {
    $user = new User(18, 'John');

    $this->assertIsString($user->tellName());
    $this->assertStringContainsStringIgnoringCase('John', $user->tellName());
    }
    //function for getting age of the user..
    public function testTellAge()
    {
    $user = new User(18, 'John');

    $this->assertIsString($user->tellAge());
    $this->assertStringContainsStringIgnoringCase('18', $user->tellAge());
    }
  
    //function which will add the movies of the user's..

    public function testAddFavoriteMovie()
    {
    $user = new User(18, 'John');

    $this->assertTrue($user->addFavoriteMovie('Avengers'));
    $this->assertContains('Avengers', $user->favorite_movies);
    $this->assertCount(1, $user->favorite_movies);
    }

   
}
//Creating the object for the Testing Class
$obj= new UserTest();
$obj->testClassConstructor();



/*

//Example Method for PHP Unit
require 'Cal.php';
require_once 'PHPUnit/Autoload.php';
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
    public function __construct()
    {
        echo "Constructed Loaded...";
    }
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $this->calculator = new Calculator();
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
}

$obj=new CalculatorTests();
///$obj->setUp();
$obj->testAdd();
//$obj->tearDown();
*/
?>