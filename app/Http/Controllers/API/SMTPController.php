<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SMTPRequest;
use App\Mail\SMTP;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class SMTPController extends Controller
{

    /**
     * @param SMTPRequest $request
     * @return JsonResponse
     */
    public function send(SMTPRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $message = $this->message($data);

        Mail::to('nicker08@inbox.ru')->send(new SMTP(
            $data['subject'],
            $message,
        ));

        return response()
            ->header('Access-Control-Allow-Origin', '*')
            ->json([
                'success' => 1
            ]);
    }

    private function message($data)
    {
        return "
            <h1>{$data['subject']}</h1>\n
            <p><b>Email:</b>  {$data['email']}</p>\n
            <p><b>Вопрос:</b>  {$data['content']}</p>
        ";
    }
}
