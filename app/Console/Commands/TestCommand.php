<?php

namespace App\Console\Commands;

use App\Enums\LanguageLocale;
use App\Models\MediaItem;
use App\Models\Project;
use App\Models\Question;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        var_dump(serialize(MediaItem::skills()->get()->toArray()));

//        dd(LanguageLocale::cases());
//        $q = Question::find(2);
//        $this->info(print_r($q->category->title, 1));
//
        dd(intval(null));
    }
}
