<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormSubmitRequest;
use App\Mail\ContactMail;
use App\Models\Feedback;
use App\Services\TelegramOrdersService;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(FormSubmitRequest $request)
    {
        $feedbackIdFromCookie = request()->cookie('form_filled') ?? null;

        //Куки есть, значение в куках численное, фидбек не найден - удаляем куку
        if(intval($feedbackIdFromCookie) && !$fb = Feedback::find(intval($feedbackIdFromCookie)) ?? null){
            cookie()->queue(cookie()->forget('form_filled'));
        }

        // куки нет - коммент не отправлялся недавно
        if (!$feedbackIdFromCookie){
            $validated = $request->validated();
            $msg = Feedback::create($validated);

            if ($msg?->id){ // коммент создался - создаем куку
                cookie()->queue(cookie('form_filled', $msg->id, 60*6));
            }

            $tg = new TelegramOrdersService();
            $tg->sendFeedbackMessage($msg);

        //TODO вынести отправку
//        foreach (['artemsh.job@gmail.com', $validated['email']] as $recipient) {
//            Mail::to($recipient)->queue(new ContactMail($validated['name'], $validated['email'], $validated['message'], $recipient));
//        }

            return [
                'success' => true,
                'message' => __('home.contact_form_success'),
            ];
        } else {
            return [
                'success' => false,
                'message' => __('home.contact_form_error_often', ['time' => date_format($fb?->created_at, 'H:i\, d.m.y') ?? '']),
            ];
        }


    }
}
