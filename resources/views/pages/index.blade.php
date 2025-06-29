@extends('layouts.master')
@section('title', optional($seo)->seo_title ?? 'DuttaTex - Home')
@section('content')

<!-- slider Start-->
<div class="w-full mt-[-120px]">
  <img class="mySlides w-full min-h-40" src="{{asset('images/1.jpg')}}">
  <img class="mySlides w-full min-h-40" src="{{asset('images/2.jpg')}}">
  <img class="mySlides w-full min-h-40" src="{{asset('images/3.jpg')}}">
  <img class="mySlides w-full min-h-40" src="{{asset('images/4.jpg')}}">
</div>
<!-- slider End-->

<!-- About Start-->
<div class="md:flex md:justify-between md:items-center my-10 lg:px-24 md:px-16 px-12">
  <div class="md:pr-10 md:my-2 my-10">
    <h4 class="pb-5 text-xl font-bold text-center">Designing & Sampling</h4>
    <p class="text-justify text-sm leading-6 mb-5">Our team of skilled craftsmen and women possess a remarkable ability to transform tech packs into garments with unparalleled accuracy, achieving an impressive 99% precision right from the initial sample development stage. With a collective experience of over two decades, their expertise shines…</p>
    <a class="bg-cyan-600 px-3 py-2 text-white rounded-lg hover:bg-sky-600" href="{{route('about').'#about'}}">Read more</a>
  </div>
  <div class="md:pr-10 md:my-2 my-10">
    <h4 class="pb-5 text-xl font-bold text-center">Personalized or Private Labels</h4>
    <p class="text-justify text-sm leading-6 mb-5">Add a personal touch to our garments with your own brand label through our personalized or private labeling services. Add a personal touch to our garments with your own brand label through our personalized or private labeling services. Add a personal touch…</p>
    <a class="bg-cyan-600 px-3 py-2 text-white rounded-lg hover:bg-sky-600" href="{{route('about').'#about'}}">Read more</a>
  </div>
  <div class="md:my-2 my-10">
    <h4 class="pb-5 text-xl font-bold text-center">Extraordinary Quality Guaranteed</h4>
    <p class="text-justify text-sm leading-6 mb-5">Our garments factory thrives on delivering products that perfectly match our customers' specifications through a rigorous ODM/OEM process. The smiles of our satisfied clients are a testament to our unwavering commitment to providing exceptional quality. With a focus on excellence, we go the…</p>
    <a class="bg-cyan-600 px-3 py-2 text-white rounded-lg hover:bg-sky-600" href="{{route('about').'#about'}}">Read more</a>
  </div>
</div>
<!-- About End-->

<!-- Product Galery Start-->
<div class="grid grid-cols-2 md:grid-cols-4 gap-12 py-10 lg:px-24 md:px-20 px-16 text-center text-lg">
  @foreach($products as $product)
  <div>
    <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
      <img src="{{ asset('uploads/galleries/' . $product->gallery->image) }}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="{{ $product->gallery->name }}">
      <h3 class="pt-3">{{$product->name}}</h3>
    </a>
  </div>
  @endforeach
</div>
<!-- Product Galery End-->


<!-- certificate Start-->
<div class="py-16">
  <div>
    <h1 class="md:text-3xl text-lg font-semibold text-center">COMPLIANCE CERTIFICATE</h1>
    <hr class="md:w-96 w-16 h-0.5 mx-auto my-4 bg-gray-500 border-0 md:my-2">
  </div>
  <div class="wrapper w-full relative my-10">
    <ul class="carousel grid grid-flow-col overflow-x-auto snap-x gap-x-2 xl:gap-0 scroll-smooth mx-24" style="grid-auto-columns: calc((100% / 4)); scrollbar-width: none;">
      <li class="card pb-4 flex-col">
        <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/BSCI-1.jpg')}}" alt="img" draggable="false"></div>
      </li>
      <li class="card pb-4 flex-col">
        <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/GOTS1.jpg')}}" alt="img" draggable="false"></div>
      </li>
      <li class="card pb-4 flex-col">
        <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/OEKO-TEX1.jpg')}}" alt="img" draggable="false"></div>
      </li>
      <li class="card pb-4 flex-col">
        <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/ACCORD-1.jpg')}}" alt="img" draggable="false"></div>
      </li>
      <li class="card pb-4 flex-col">
        <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/ALLIANCE-1.jpg')}}" alt="img" draggable="false"></div>
      </li>
    </ul>
  </div>
</div>
<!-- certificate End-->

<!-- scroll on top button Start-->
<a id="button" class="inline-block bg-blue-600 w-9 h-9 text-center rounded fixed bottom-5 right-5 opacity-0 invisible z-[1000] after:content-['\f077'] font-['FontAwesome'] text-2xl text-white hover:cursor-pointer hover:bg-gray-500 active:bg-sky-400"></a>
<!-- scroll on top button End-->

<script type="text/javascript" src="{{asset('js/frontend/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/certificate.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/scrollbutton.js')}}"></script>

@endsection