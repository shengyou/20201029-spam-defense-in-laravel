<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use App\Services\AkismetDetectionService;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(FeedbackRequest $request, AkismetDetectionService $akismet)
    {
        $spamDetectResult = $akismet->checkContactMessage(
            $request->input('name'),
            $request->input('email'),
            $request->input('message'),
        );

        $attributes = array_merge(
            $request->only(['name', 'email', 'message']),
            ['flag_as_spam' => $spamDetectResult]
        );

        Feedback::create($attributes);

        return redirect()->route('contact.index')
            ->with('success', '謝謝您的來信，我們將儘速與您聯絡');
    }
}
