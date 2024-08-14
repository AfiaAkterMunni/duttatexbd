<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubscribeRequest;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function store(StoreSubscribeRequest $request)
    {
        $data = [
            'email' => $request->input('email')
        ];
        Subscriber::create($data);
        return redirect(route('homepage').'#footerSub')->with('success', 'Subscribed Successfully!!!');
    }

}
