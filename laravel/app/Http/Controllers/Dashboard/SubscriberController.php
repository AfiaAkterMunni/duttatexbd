<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('dashboard.pages.subscriber', ['subscribers' => $subscribers]);
    }
    public function delete($id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->delete();
        return redirect(route('subscriber'))->with('success', 'Deleted Successfully!!!');
    }

}
