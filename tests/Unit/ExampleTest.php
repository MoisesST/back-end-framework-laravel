<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
  /**
   * A basic test example.
   */
  public function test_that_true_is_true(): void
  {
    $this->assertTrue(true);
  }

  public function test_is_even_number(): void
  {
    $number = 4;
    $this->assertTrue($number % 2 === 0);
  }

  public function test_string_contains_substring(): void
  {
    $mainString = "Hello, World!";
    $substring = "Hello";
    $this->assertStringContainsString($substring, $mainString);
  }

  public function test_array_is_empty(): void
  {
    $array = [];
    $this->assertEmpty($array);
  }
}
