<?php
/**
 * Tests for SurfaceKraken
 */

use PHPUnit\Framework\TestCase;
use Surfacekraken\Surfacekraken;

class SurfacekrakenTest extends TestCase {
    private Surfacekraken $instance;

    protected function setUp(): void {
        $this->instance = new Surfacekraken(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Surfacekraken::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
