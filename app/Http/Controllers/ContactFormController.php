<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function sendEmail(ContactFormRequest $request, int $id)
    {
        return true;
    }
}
