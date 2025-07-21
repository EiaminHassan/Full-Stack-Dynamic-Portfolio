<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Prepare contact data
            $contactData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'project' => $request->input('project'),
                'message' => $request->input('message'),
                'submitted_at' => now()->format('Y-m-d H:i:s')
            ];

            // Send email to yourself
            Mail::to('eiaminhassan35@gmail.com')->send(new ContactFormMail($contactData));

            return back()->with('success', 'Thank you for your message! I will get back to you soon.');

        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Contact form submission failed: ' . $e->getMessage());
            \Log::error('Contact form data:', $request->all());
            
            // Save the contact data to a file as backup
            $logFile = storage_path('logs/contact_submissions.log');
            $logData = date('Y-m-d H:i:s') . " - " . json_encode($request->all()) . "\n";
            file_put_contents($logFile, $logData, FILE_APPEND | LOCK_EX);
            
            return back()->with('success', 'Thank you for your message! Your message has been saved and I will get back to you soon. If urgent, please contact me directly at eiaminhassan35@gmail.com.');
        }
    }
}
