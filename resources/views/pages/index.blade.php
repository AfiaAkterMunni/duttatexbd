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
    <h4 class="pb-5 text-2xl font-bold text-center">What We Do</h4>
    <p class="text-justify text-sm leading-6 mb-5">We proudly present ourselves as proactive Manufacturers and Exporters, a
      legacy we’ve
      upheld since 1995. Our expertise spans Fashion-Casual, Sports, Work, and Promotional Wear, offering a
      comprehensive Total Look solution. Our operations are 100% based in Bangladesh. Our product range caters to
      diverse…</p>
    <a class="bg-cyan-600 px-3 py-2 text-white rounded-lg hover:bg-sky-600" href="{{route('about').'#about'}}">Read more</a>
  </div>
  <div class="md:pr-10 md:my-2 my-10">
    <h4 class="pb-5 text-2xl font-bold text-center">What We Provide</h4>
    <p class="text-justify text-sm leading-6 mb-5">At DuttaTex, we take pride in being a premier workwear
      manufacturer, dedicated to providing businesses and individuals with top-notch workwear solutions. With
      a rich history spanning 25 Years , we have honed our expertise to become a trusted partner in the
      industry...</p>
    <a class="bg-cyan-600 px-3 py-2 text-white rounded-lg hover:bg-sky-600" href="{{route('about').'#about'}}">Read more</a>
  </div>
  <div class="md:my-2 my-10">
    <h4 class="pb-5 text-2xl font-bold text-center">Our Mission</h4>
    <p class="text-justify text-sm leading-6 mb-5">At Duttatex Workwear Factory, our mission is clear and resolute:
      to be a driving force behind excellence in workwear manufacturing. Since our establishment, we have been
      dedicated to producing workwear solutions that not only meet industry standards but also exceed the
      expectations of our valued clients...</p>
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

<!-- Services Start-->
<div class="grid grid-cols-2 md:grid-cols-4 gap-12 lg:mx-36 md:mx-30 sm:mx-24 mx-10 py-16">
  <div class="sm:pb-10">
    <img src="{{asset('images/dev1.png')}}" alt="" class="w-20 h-20 mx-auto transition duration-300 ease-in-out hover:scale-125">
    <h1 class="text-sm sm:text-xl md:text-sm lg:text-xl font-semibold pt-3 text-center">Development</h1>
  </div>
  <div class="sm:pb-10">
    <img src="{{asset('images/glo.png')}}" alt="" class="w-20 h-20 mx-auto transition duration-300 ease-in-out hover:scale-125">
    <h1 class="text-sm sm:text-xl md:text-sm lg:text-xl font-semibold pt-3 text-center">Global Sourcing</h1>
  </div>
  <div class="sm:pb-10">
    <img src="{{asset('images/2402475.png')}}" alt="" class="w-20 h-20 mx-auto transition duration-300 ease-in-out hover:scale-125">
    <h1 class="text-sm sm:text-xl md:text-sm lg:text-xl font-semibold pt-3 text-center">Merchandising</h1>
  </div>
  <div class="sm:pb-10">
    <img src="{{asset('images/ship1.png')}}" alt="" class="w-20 h-20 mx-auto transition duration-300 ease-in-out hover:scale-125">
    <h1 class="text-sm sm:text-xl md:text-sm lg:text-xl font-semibold pt-3 text-center">shipping</h1>
  </div>
</div>
<!-- Services End-->

<!-- certificate Start-->
<div>
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