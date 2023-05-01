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

        Mail::to('contact@shop.Indesit.ru')->send(new SMTP(
            $data['subject'],
            $message,
        ));

        return response()
            ->json([
                'success' => 1
            ]);
    }

    private function message($data)
    {
        return "
            <h1>{$data['subject']}</h1>\n
            <p><b>Имя:</b>  {$data['name']}</p>\n
            <p><b>Email:</b>  {$data['from']}</p>\n
            <p><b>Вопрос:</b>  {$data['content']}</p>
        ";
    }
}
