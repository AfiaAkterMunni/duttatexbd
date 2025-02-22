<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('dashboard.pages.galleries.index', ['galleries' => $galleries]);
    }

    public function create()
    {
        return view('dashboard.pages.galleries.create');
    }

    public function store(StoreGalleryRequest $request) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/galleries');
        $image->move($destinationPath, $name);
        $data = [
            'name' => $request->input('name'),
            'image' => $name
        ];
        Gallery::create($data);
        return redirect(route('gallery.index'))->with('success', 'Image Added Successfully!!!');
    }

    public function search(Request $request)
    {
        $galleries = Gallery::where('name', 'LIKE', "%$request->search%")->paginate(12);
        return view('dashboard.pages.galleries.index', ['galleries' => $galleries]);
    }

    public function paginate()
    {
        $galleries = Gallery::latest()->paginate(12);
        return response()->json($galleries);
    }

    public function ajaxSearch(Request $request)
    {
        $galleries = Gallery::where('name', 'LIKE', "%$request->search%")->take(12)->get();
        return response()->json($galleries);
    }
}
