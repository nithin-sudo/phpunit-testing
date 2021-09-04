<?php
include 'main\BinarySearch.php';
use PHPUnit\Framework\TestCase;


class BinarySearchTest extends TestCase 
{
    public $myarray = array(10,20,30,40);
    public $unsorted = array(22,11,5,99,55);
    
    /**
     * @test
     */
    public function GivenDataWhenTrueShouldReturnTrue() 
    {
        $binary = new BinarySearch();
        $result = $binary->binarySearch(20, $this->myarray);
        $this->assertEquals($result,1,$messageone = 'First Test');
    }
    /**
     * @test
     */
    public function GivenDataWhenFalseShouldReturnFalse() 
    {
        $binary = new BinarySearch();
        $result = $binary->binarySearch(25, $this->myarray);
        $this->assertEquals($result,-1,$message = 'Second Test');
    }

    /**
     * @test
     */
    public function GivenDataWhenUnsortedArrayShouldReturnFalse() 
    {
        $binary = new BinarySearch();
        $actual = $binary->binarySearch(11, $this->unsorted);
    
        if($actual == -1)
        {
            $actual = true; 
        }
        else
        {
            $actual == false;
        }
        $this->assertEquals($actual,true,$message = 'Third Test');
    }
}
?>