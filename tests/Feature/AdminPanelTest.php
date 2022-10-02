<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_users_cannot_access_product_create_form()
    {
        $response = $this->get('/bracelets-create');

        $response->assertStatus(403);
    }

    public function test_users_cannot_create_a_product()
    {
        $this->post(
            '/bracelets-create',
            ['title' => 'Jafar', 'category_name' => 'prirodne', 'description' => 'bla bla', 'thumbnail' => '/images/demo2.png', 'price' => 2]
        )
            ->assertStatus(403);

        $this->assertDatabaseMissing(
            'bracelets',
            ['title' => 'Jafar', 'category_name' => 'prirodne', 'description' => 'bla bla', 'thumbnail' => '/images/demo2.png', 'price' => 2]
        );
    }
}
