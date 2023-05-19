<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Http\Requests\StoreBarangRequest;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Kategori;

class BarangTest extends TestCase
{
    use WithFaker;
    /**
     * @test
    */
    public function it_stores_data()
    {
        $user = User::factory()->create();

        $category = Kategori::create(['kategori_name' => $this->faker->word()]);

        $response = $this->actingAs($user)
        ->post(route('barang.store'), [
            'name' => $this->faker->words(3, true),
            'kategoris_id' =>  $this->faker->numberBetween(1,3),
            'SKU' => $this->faker->numberBetween(1,5),

        ]);

        $response->assertStatus(302);

        $response->assertRedirect(route('barang.index'));
    }

    /**
     * @test
    */
    public function it_verifies_authorized()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $formRequest = new StoreBarangRequest();

        $this->assertTrue($formRequest->authorize());
    }


}
