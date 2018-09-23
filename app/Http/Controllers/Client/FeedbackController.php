<?php

namespace App\Http\Controllers\Client;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends BaseController
{
    public function __invoke(Request $request, Feedback $feedback)
    {
        return response()->json([
            'data' => $feedback->create($request->all())->toArray(),
        ]);
    }
}
