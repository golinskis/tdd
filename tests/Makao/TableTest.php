<?php
/**
 * Created by PhpStorm.
 * User: szymongolinski
 * Date: 17.07.2018
 * Time: 15:44
 */

namespace Tests\Makao;

use Makao\Table;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function testShouldCreateEmptyTable(){

        // Given
        $tableUnderTest = new Table();

        // When
       $actual = $tableUnderTest->countPlayers();

        // Then

        $this->assertSame(0,$actual);
    }

}