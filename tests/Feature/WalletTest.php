<?php

namespace Tests\Feature;

use App\Transfer;
use App\Wallet;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WalletTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function testGetWallet()
    {
        $wallet = factory(Wallet::class)->create();
        $transfer = factory(Transfer::class,3)->create(
            ['wallet_id' => $wallet->id]
        );
        $response = $this->json('GET', '/api/wallet');
        $response->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'money',
                'transfers' => [
                    '*' => [
                        'id',
                        'amount',
                        'description',
                        'wallet_id'
                    ]
                ]
            ]);

        $response->assertJsonCount(3,'transfers');

    }
}
