<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function store(StoreContactRequest $request)
    {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/contacts');
        $image->move($destinationPath, $name);
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
            'image' => $name
        ];
        Contact::create($data);
        return redirect(route('contact'))->with('success', 'Your Message Sent Successfully!!!');

    }
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('dashboard.pages.contact', ['contacts' => $contacts]);
    }
    public function delete($id)
    {
        $contact = Contact::find($id);
        if($contact->image)
        {
            unlink('uploads/contacts/'.$contact->image);
        }
        $contact->delete();
        return redirect(route('contact.index'))->with('success', 'Deleted Successfully!!!');
    }

    public function search(Request $request)
    {
        dd($request);
    }
}
