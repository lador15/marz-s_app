<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use App\Models\SiswaModel;

class SendEmailController extends Controller
{
    public function index()
    {
       $siswas = SiswaModel::all();
       foreach ($siswas as $siswa) {
        if (!empty($siswa->email)) {
            SendEmailJob::dispatch($siswa);
        }
       }
    }

    public function store(Request $request)
    {
        $siswa = $request->all();

        dispatch(new SendEmailJob($siswa));
        return response()->json(['message' => 'Email berhasil dikirim.']);
    }

}
