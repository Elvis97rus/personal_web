<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramOrdersService
{
    protected string $chat_id;
    protected string $bot_api;

    public function __construct()
    {
        $this->chat_id = config('app.telegram_chat_id');
        $this->bot_api = config('app.telegram_bot_api');
        $this->api = "https://api.telegram.org/bot$this->bot_api/sendMessage?chat_id=$this->chat_id";
    }

    public function sendFeedbackMessage($details)
    {
        $text = "Получено новое сообщение с " . ($details->type ?? 0) . PHP_EOL;
        $text .= "От: " . $details->name . PHP_EOL;
        $text .= "Почта: $details->email р." . PHP_EOL;
        $text .= "Сообщение: $details->message" . PHP_EOL;
        $text .= "Дата: $details->created_at" . PHP_EOL;

        $this->api .= "&text=$text";

        $this->makeRequest();
    }

//    public function sendStatusChanged($order)
//    {
//       $text = "Заказ №" . ($details->id ?? 0) . PHP_EOL;
//       $text .= "Статус: " . $order->status->value . PHP_EOL;
//       $this->api .= "&text=$text";
//       $this->makeRequest();
//    }

    protected function makeRequest()
    {
        try {
            $result = Http::get($this->api);
        } catch (\Exception $e){
            Log::build([
                'driver' => 'single',
                'path' => storage_path('logs/telegram_orders.log'),
            ])->info(print_r([$e->getMessage(),$this->api],1));
        }
    }
}
