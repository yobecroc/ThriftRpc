<?php
/**
 * Tests for ThriftRpc
 */

use PHPUnit\Framework\TestCase;
use Thriftrpc\Thriftrpc;

class ThriftrpcTest extends TestCase {
    private Thriftrpc $instance;

    protected function setUp(): void {
        $this->instance = new Thriftrpc(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Thriftrpc::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
