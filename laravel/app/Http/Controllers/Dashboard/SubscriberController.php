<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubscribeRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('dashboard.pages.subscriber', ['subscribers' => $subscribers]);
    }
    public function store(StoreSubscribeRequest $request)
    {
        $data = [
            'email' => $request->input('email')
        ];
        Subscriber::create($data);
        return redirect(route('homepage').'#footerSub')->with('success', 'Subscribed Successfully!!!');
    }
    public function delete($id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->delete();
        return redirect(route('subscriber'))->with('success', 'Deleted Successfully!!!');
    }

}
