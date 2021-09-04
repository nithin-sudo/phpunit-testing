<?php
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    function testMultiplicationOfTwoNumbers()
    {
        $a=2;
        $b=2;
        $c= $a * $b;
        $this -> assertEquals($c,20);
    }
}
?>