<?php

namespace RyanChandler\LaravelMakeView\Tests;

class MakeViewTest extends TestCase
{
    /** @test */
    public function it_creates_a_view()
    {
        $this->artisan('make:view', [
            'path' => 'example'
        ]);

        $this->assertFileExists(
            resource_path('views/example.blade.php')
        );
    }

    /** @test */
    public function it_creates_nested_views()
    {
        $this->artisan('make:view', [
            'path' => 'nested.view.file'
        ]);

        $this->assertFileExists(
            resource_path('views/nested/view/file.blade.php')
        );
    }
}
