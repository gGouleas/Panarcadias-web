<?php

namespace Tests\Feature;

use App\Mail\MessageReceived;
use App\Models\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class ReceiveMessagesTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_receive_messages()
    {
        Mail::fake();

        //create a message and persist it 
        $message = Message::factory()->make();
        $response = $this->post('messages', [
            'name' => $message->name,
            'phone' => $message->phone,
            'email' => $message->email,
            'body' => $message->body
        ]);

        //Assert email was sent to admin
        Mail::assertSent(MessageReceived::class, function ($mail) {
            return $mail->hasTo('gigouleas@gmail.com');
        });
        //Assert response from messages controller
        assertEquals($response->getContent(), 'success');
        $response->assertStatus(201);
    }
}
