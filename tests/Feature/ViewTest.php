<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testViewNested(): void
    {
        $this->get('/admin')
            ->assertStatus(200);
    }

    public function testView(): void
    {
        $this->view('/contoh', ['name' => 'Dany'])
            ->assertSeeText('Hello Dany');
    }
}
