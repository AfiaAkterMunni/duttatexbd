@extends('layouts.master')
@section('title', 'Products')
@section('content')
<!-- Category sidebar Start-->
<div class="flex flex-row">
  <div class="lg:basis-1/5 basis-2/6 lg:m-6 m-3 lg:p-2.5 p-1 h-screen overflow-x-hidden" id="accordian" style="scroll-behavior: smooth; scrollbar-width: thin; scrollbar-color: rgb(211, 222, 245) rgb(245, 241, 241);">
    <ul class="show-dropdown">
      <li class="mx-[20px] border-b text-[#9c9c9c] text-md py-2 px-4">All Categories</li>
      @foreach($categories as $category)
      <li>
        <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all hover:bg-sky-100 hover:text-gray-600" href="javascript:void(0);">{{$category->name}}</a>
        <ul class="pl-10 hidden">
          @foreach($category->subcategories as $subcategory)
          <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all hover:bg-blue-50">{{$subcategory->name}}</a></li>
          @endforeach
        </ul>
      </li>
      @endforeach
    </ul>
  </div>
  <div class="lg:basis-4/5 basis-4/6">
    <!-- Product Categories title Start-->
    <div class="px-16 pt-8 pb-2">
      <h4 class="text-[22px] text-gray-500 underline underline-offset-4 decoration-gray-400"><a href="{{route('subcategory')}}">Products By Category</a></h4>
    </div>
    <!-- Product Categories title End-->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 py-10 lg:px-16 md:px-16 pr-14 pl-8 text-center uppercase text-lg">
      @foreach($subcategories as $subcategory)
      <div>
        <a href="{{route('product')}}">
          <img src="{{asset('uploads/subcategories/' . $subcategory->image)}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
          <h3 class="pt-3">{{$subcategory->name}}</h3>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- Category sidebar End-->

<!-- scroll on top button Start-->
<a id="button" class="inline-block bg-blue-600 w-9 h-9 text-center rounded fixed bottom-5 right-5 opacity-0 invisible z-[1000] after:content-['\f077'] font-['FontAwesome'] text-2xl text-white hover:cursor-pointer hover:bg-gray-500 active:bg-sky-400"></a>
<!-- scroll on top button End-->

<script type="text/javascript" src="{{asset('js/multiaccordian.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/scrollbutton.js')}}"></script>
@endsection