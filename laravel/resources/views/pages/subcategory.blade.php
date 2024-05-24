@extends('layouts.master')
@section('title', 'SubCategory')
@section('content')
<!-- Category sidebar Start-->
<div class="flex flex-row">
    <div class="lg:basis-1/5 basis-2/6 lg:m-6 m-3 lg:p-2.5 p-1 h-screen overflow-x-hidden" id="accordian" style="scroll-behavior: smooth; scrollbar-width: thin; scrollbar-color: rgb(211, 222, 245) rgb(245, 241, 241);">
      <ul class="show-dropdown">
        <li class="mx-[20px] border-b text-[#9c9c9c] text-md py-2 px-4">All Categories</li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Shirt</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">T-Shirt</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Polo</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Hoodies</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Shirt</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all" href="javascript:void(0);">Sweat Pant</a>
          <ul class="pl-5 hidden">
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Men</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Women</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Kids</a></li>
              <li><a href="javascript:void(0);" class="text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all">Promotional</a></li>
          </ul>
        </li>
        <li>
          <a class="mx-[20px] text-[#9c9c9c] text-base py-4 px-4 block rounded relative transition-all " href="javascript:void(0);">fhfy</a>
        </li>
      </ul>
    </div>
    <div class="lg:basis-4/5 basis-4/6">
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 py-10 lg:px-16 md:px-16 pr-14 pl-8 text-center uppercase text-lg">
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/1.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/3.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/5.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/6.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/7.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/8.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        <div>
          <a href="{{route('product')}}">
            <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
            <h3 class="pt-3">Shirt</h3>
          </a>
        </div>
        
      </div>
    </div>
  </div>
  <!-- Category sidebar End-->
  @endsection