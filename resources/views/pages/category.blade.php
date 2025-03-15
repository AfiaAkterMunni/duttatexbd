@extends('layouts.master')
@section('title', optional($seo)->seo_title ?? 'DuttaTex - Categories')
@section('content')
<!-- Breadcrumb Start-->
<!-- <div class="px-24 w-1/4">
  <ul class="list-none mt-8 text-gray-500">
    <li class="inline"><a href="#">Home</a></li>
    <li class="inline before:content-['/\00a0']"><a href="#">Products</a></li>
  </ul>
</div> -->
<!-- Breadcrumb End-->

<!-- Product Categories title Start-->
<div class="px-24 pt-8 pb-4">
  <h2 class="text-[22px] text-gray-500 decoration-gray-400">Product Categories</h2>
</div>
<!-- Product Categories title End-->

<!-- Product Galery Start-->
<div class="grid grid-cols-2 md:grid-cols-4 gap-12 pb-10 pt-5 lg:px-24 md:px-20 px-16 text-center uppercase text-lg">
  @foreach($categories as $category)
  <div>
    <a href="{{route('categories.show', ['slug' => $category->slug])}}">
      <img src="{{ asset('uploads/galleries/' . $category->gallery->image) }}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="{{ $category->gallery->name }}">
      <h3 class="pt-3">{{$category->name}}</h3>
    </a>
  </div>
  @endforeach
</div>
<div class="flex justify-center py-8 px-4 text-xs tracking-wide text-blue-500 font-semibold">
  <!-- Pagination -->
  <div>
    {{ $categories->links('includes.paginator') }}
  </div>
</div>
<!-- Product Galery End-->

<!-- scroll on top button Start-->
<a id="button" class="inline-block bg-blue-600 w-9 h-9 text-center rounded fixed bottom-5 right-5 opacity-0 invisible z-[1000] after:content-['\f077'] font-['FontAwesome'] text-2xl text-white hover:cursor-pointer hover:bg-gray-500 active:bg-sky-400"></a>
<!-- scroll on top button End-->

<script type="text/javascript" src="{{asset('js/frontend/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/scrollbutton.js')}}"></script>
@endsection
