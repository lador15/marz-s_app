<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\SiswaModel;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $siswa;

    public function __construct(SiswaModel $siswa)
    {
        $this->siswa = $siswa;
    }

    public function handle(): void
    {
        $email = new SendEmail($this->siswa);
        Mail::to($this->siswa['email'])->send($email);
    }
}
