<?php

namespace Tests\Feature;

use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_order()
    {
        $formData = array(
            'buyer_name' => 'John B',
            'manufacturer' => 'Ford',
            'model' => 'Focus',
            'total_price' => 700
        );

        $this->post('api/orders', $formData)
        ->assertStatus(201)
        ->assertJsonStructure(['uuid'])
        ;
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view_created_order()
    {
        $uuid = Order::latest()->first()->uuid;
        $this->get('api/orders/' . $uuid)
        ->assertStatus(200)
        ->assertJsonStructure([
            'uuid',
            'buyer_name',
            'contract_no',
            'manufacturer',
            'address',
            'email',
            'registration_no',
            'model',
            'colour',
            'total_price',
            'last_mileage',
            'created_at',
            'updated_at'
        ])
        ;
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_order()
    {
        $uuid = Order::latest()->first()->uuid;
        $formData = array(
            'manufacturer' => 'Ford2',
            'model' => 'Focus2',
            'total_price' => 600
        );
        $this->put('api/orders/' . $uuid, $formData)
        ->assertStatus(202)
        ->assertJsonStructure(['uuid'])
        ->assertJson($formData);
    }
}
