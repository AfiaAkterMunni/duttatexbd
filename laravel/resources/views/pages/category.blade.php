@extends('layouts.master')
@section('title', 'Category')
@section('content')
  <!-- Breadcrumb Start-->
  <div class="px-24 w-1/4">
    <ul class="list-none mt-8 text-gray-500">
      <li class="inline"><a href="#">Home</a></li>
      <li class="inline before:content-['/\00a0']"><a href="#">Products</a></li>
    </ul>
  </div>
  <!-- Breadcrumb End-->

  <!-- Product Galery Start-->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-12 pb-10 pt-5 lg:px-24 md:px-20 px-16 text-center uppercase text-lg">
    <div>
      <a href="{{route('subcategory')}}">
        <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="{{route('subcategory')}}">
        <img src="{{asset('images/1.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="{{route('subcategory')}}">
        <img src="{{asset('images/3.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="{{route('subcategory')}}">
        <img src="{{asset('images/5.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="{{route('subcategory')}}">
        <img src="{{asset('images/6.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="{{route('subcategory')}}">
        <img src="{{asset('images/7.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="{{route('subcategory')}}">
        <img src="{{asset('images/8.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="{{route('subcategory')}}">
        <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
  </div>
  <!-- Product Galery End-->

  <!-- scroll on top button Start-->
  <a id="button" class="inline-block bg-blue-600 w-9 h-9 text-center rounded fixed bottom-5 right-5 opacity-0 invisible z-[1000] after:content-['\f077'] font-['FontAwesome'] text-2xl text-white hover:cursor-pointer hover:bg-gray-500 active:bg-sky-400"></a>
    <!-- scroll on top button End-->
    
    <script type="text/javascript" src="{{asset('js/frontend/scrollbutton.js')}}"></script>
@endsection