<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class Contact extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        try {
            Mail::to(env('MAIL_TO_ADDRESS1'))
                ->send(new ContactMail([
                    'contactName' => $request->input('contactName'),
                    'contactEmail' => $request->input('contactEmail'),
                    'contactSubject' => $request->input('contactSubject'),
                    'contactMessage' => $request->input('contactMessage'),
                ]));

            return response()
                ->json([
                    'response' => 'ok',
                    'description' => 'mail sent'
                ]);
        } catch (Throwable $e) {
            return response()
                ->json([
                    'response' => 'error',
                    'description' => sprintf('Type: %s. Message: %s', get_class($e), $e->getMessage())
                ]);
        }
    }
}
