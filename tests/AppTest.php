<?php

namespace App\PhpUnit\Tests;


use PHPUnit\Framework\TestCase;
use App\Demo\Concat;

final class AppTest extends TestCase {

    public function testToString(){

        $text = new Concat("Hello", "World");
        $this->assertEquals("Hello World", $text->toString());

    }


}
