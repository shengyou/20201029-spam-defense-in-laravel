<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(FeedbackRequest $request)
    {
        Feedback::create($request->all());

        return redirect()->route('contact.index')
            ->with('success', '謝謝您的來信，我們將儘速與您聯絡');
    }
}
