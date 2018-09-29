<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    protected const STATUS_LIST = [
        0 => "Новая",
        1 => "В работе",
        2 => "Завершенная",
        3 => "Отклоненная",
    ];

    public function index(Feedback $feedback)
    {
        return view('admin.pages.feedback')->with([
            'feedback' => $feedback->orderBy('id', 'desc')->get(),
            'statusList' => self::STATUS_LIST,
        ]);
    }

    public function update(Request $request, Feedback $feedback)
    {
        $feedback->update($request->all());

        return response()->json([
            'data' => $feedback->toArray()
        ]);
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return response()->json([], 200);
    }
}
