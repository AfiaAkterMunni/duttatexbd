@extends('layouts.master')
@section('title', optional($seo)->seo_title ?? 'DuttaTex - ' . $product->name)
@section('content')
<!-- Single Product Start-->
<div class="lg:flex lg:flex-row m-16">
  <div class="sticky top-40 self-start lg:basis-1/2">
    <img src="{{ asset('uploads/galleries/' . $product->gallery->image) }}" alt="{{ $product->gallery->name }}" class="mx-auto w-80">
    @if (count($relatedProducts))
    <div class="py-7">
      <div>
        <h1 class="text-center text-2xl font-semibold">You May Also Like</h1>
      </div>
      <div class="flex w-3/4 mx-auto">
        @foreach ($relatedProducts as $relProduct)
        <div class="w-36 p-3 relative inline-block group">
          <span class="invisible bg-[black] text-[#fff] text-center rounded-[6px] px-2 py-[5px] absolute top-[100%] left-2/4 -ml-[60px] after:content-[''] after:absolute  after:bottom-full after:left-1/2 after:-ml-[5px] after:border-[5px] after:border-solid after:border-transparent after:border-b-black group-hover:visible">{{ $relProduct->name }}</span>
          <a href="{{ route('product.show', ['slug' => $relProduct->slug]) }}">
            <img src="{{ asset('uploads/galleries/'. $relProduct->gallery->image) }}" alt="{{ $relProduct->gallery->name }}" class="rounded-lg border-2">
          </a>

        </div>
        @endforeach
      </div>
    </div>
    @endif
  </div>
  <div class="lg:basis-1/2 lg:order-last order-none pt-2 text-justify pr-24">
    <div class="pb-5">
      <h1 class="text-3xl font-semibold">{{ $product->name }}</h1>
    </div>
    <div>{!! $product->description !!}</div>
    {{-- <button class="openModalButton border border-slate-300 px-3 py-1.5 text-blue-500 font-semibold rounded-lg mt-6 hover:bg-sky-600 hover:text-white tracking-wider uppercase">quick inquiry</button> --}}
  </div>
</div>
<!-- Single Product End-->

<!-- scroll on top button Start-->
<a id="button" class="inline-block bg-blue-600 w-9 h-9 text-center rounded fixed bottom-5 right-5 opacity-0 invisible z-[1000] after:content-['\f077'] font-['FontAwesome'] text-2xl text-white hover:cursor-pointer hover:bg-gray-500 active:bg-sky-400"></a>
<!-- scroll on top button End-->

<script type="text/javascript" src="{{asset('js/frontend/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/scrollbutton.js')}}"></script>
@endsection