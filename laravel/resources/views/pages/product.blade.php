@extends('layouts.master')
@section('title', 'SubCategory')
@section('content')
  <!-- Single Product Start-->
  <div class="lg:flex lg:flex-row m-16">
    <div class="lg:basis-1/2">
      <img src="{{asset('images/11.jpg')}}" alt="" class="mx-auto w-80">
      <div class="py-7 ">
        <div>
          <h1 class="text-center text-2xl font-semibold">You May Also Like</h1>
        </div>
        <div class="flex w-3/4 mx-auto">
          <div class="w-36 p-3">
            <a href="#">
              <img src="{{asset('images/1.jpg')}}" alt="" class="rounded-lg border-2">
            </a>
          </div>
          <div class="w-36 p-3">
            <a href="#">
              <img src="{{asset('images/3.jpg')}}" alt="" class="rounded-lg border-2">
            </a>
          </div>
          <div class="w-36 p-3">
            <a href="#">
              <img src="{{asset('images/4.jpg')}}" alt="" class="rounded-lg border-2">
            </a>
          </div>
          <div class="w-36 p-3">
            <a href="#">
              <img src="{{asset('images/12.jpg')}}" alt="" class="rounded-lg border-2">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="lg:basis-1/2 lg:order-last order-none pt-2 text-justify pr-24">
      <div class="pb-5">
        <h1 class="text-3xl font-semibold">Plain polo</h1>
      </div>
      <div>
        <p class="leading-8">Custom chino pants are a classic wardrobe staple and essential for any fashionista’s wardrobe. At our factory in Bangladesh, we have been producing custom chino pants for customers in America, Europe, and the Middle East since 1987. Our factories are certified by ISO, WRAP, BSCI, and SEDEX and use OEKO-TEX certified fabrics to ensure the highest quality. We offer a wide selection of custom chino pants to meet your needs.</p>
      </div>
      <div class="pt-6">
        <h6 class="pb-3"><strong>Product Description:</strong></h6>
        <p class="text-sm tracking-wider text-blue-700 font-semibold">Material: Cotton 200 GSM, Color: Black, Size: Medium, Style: Casual, Pattern: Striped, Sleeve Length: Short Sleeve, Neckline: Round Neck, Fit: Regular Fit, Care Instructions: Machine washable</p>
      </div>
      <button class="openModalButton border border-slate-300 px-3 py-1.5 text-blue-500 font-semibold rounded-lg mt-6 hover:bg-sky-600 hover:text-white tracking-wider uppercase">quick inquiry</button>
    </div>
  </div>
  <!-- Single Product End-->
@endsection