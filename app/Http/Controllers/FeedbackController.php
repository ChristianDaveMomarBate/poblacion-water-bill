<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('users.feedback.create');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'feedback_content' => 'required|string',
            ]);

            Feedback::create([
                'user_id' => Auth::user()->id,
                'feedback_content' => $request->feedback_content,
            ]);

            return redirect()->route('userPage')->with('status', 'Feedback was sent successfully!');
        } else {
            return redirect()->route('login')->with('status', 'Login to send feedback.');
        }
    }

    public function destroy($id)
    {
        $feedbacks = Feedback::find($id);

        $feedbacks->delete();
        return redirect()->route('feedback.index')->with('destroy', 'Feedback deleted successfully!');
    }
}
