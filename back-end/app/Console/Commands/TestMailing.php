<?php

namespace App\Console\Commands;

use App\Mail\TestMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestMailing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test-mailing';

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
        collect(['mahmudsheikh25@gmail.com', 'mudisheikh@outlook.com'])
            ->each(fn($item)=>Mail::to($item)->queue(new TestMail()) )
//            ->each(fn($item)=>Mail::to($item)->queue(new TestMail()) )
        ;
    }
}
