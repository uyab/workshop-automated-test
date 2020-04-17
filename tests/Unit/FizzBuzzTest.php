<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testKelipatan3()
    {
        $result = fizzbuzz(3);
        $this->assertEquals('fizz', $result);

        $result = fizzbuzz(6);
        $this->assertEquals('fizz', $result);

        $result = fizzbuzz(30);
        $this->assertEquals('fizz', $result);

        $result = fizzbuzz(300);
        $this->assertEquals('fizz', $result);
    }

    public function testKelipatan5()
    {
        $result = fizzbuzz(5);
        $this->assertEquals('buzz', $result);

        $result = fizzbuzz(10);
        $this->assertEquals('buzz', $result);

        $result = fizzbuzz(50);
        $this->assertEquals('buzz', $result);

        $result = fizzbuzz(500);
        $this->assertEquals('buzz', $result);
    }
}
