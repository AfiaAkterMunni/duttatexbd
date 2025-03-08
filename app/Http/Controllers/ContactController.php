<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $seo = SeoSetting::where('page_name', 'contact')->first();
        return view('pages.contact', [
            'seo' => $seo
        ]);
    }

    public function store(StoreContactRequest $request)
    {

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ];
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/contacts');
            $image->move($destinationPath, $name);
            $data['attachment'] = $name;
        }
        Contact::create($data);
        return redirect(route('contact'))->with('success', 'Your Message Sent Successfully!!!');

    }
    public function index()
    {
        $contacts = Contact::latest()->paginate(15);
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
        $contacts = Contact::where('name', 'LIKE', "$request->search")
            ->orWhere('email', 'LIKE', "%$request->search%")
            ->orWhere('phone', 'LIKE', "$request->search")
            ->paginate(15);

        return view('dashboard.pages.contact', ['contacts' => $contacts]);
    }


}
