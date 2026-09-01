<?php
/**
 * Tests for NFTForgeLegend
 */

use PHPUnit\Framework\TestCase;
use Nftforgelegend\Nftforgelegend;

class NftforgelegendTest extends TestCase {
    private Nftforgelegend $instance;

    protected function setUp(): void {
        $this->instance = new Nftforgelegend(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftforgelegend::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
