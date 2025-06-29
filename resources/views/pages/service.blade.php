@extends('layouts.master')
@section('title', optional($seo)->seo_title ?? 'DuttaTex - Services')
@section('content')

<!-- Services Start-->
<div class="font-[Roboto] px-20 py-8">
    <div class="lg:flex lg:flex-row py-4">
        <div class="lg:basis-1/2 md:p-8 p-4 lg:order-last order-none">
            <img src="{{asset('images/service_nrbfashion.webp')}}" alt="" class="mx-auto w-full">
        </div>
        <div class="lg:basis-1/2 md:p-6 p-4 text-justify">
            <h1 class="text-3xl font-extrabold">Designing & Sampling</h1>
            <p class="text-lg leading-7 text-gray-600 font-serif pt-5">Our team of skilled craftsmen and women possess a
                remarkable ability to transform tech packs into garments with unparalleled accuracy, achieving an
                impressive 99% precision right from the initial sample development stage. With a collective experience
                of over two decades, their expertise shines through in every stitch, ensuring top-notch craftsmanship
                and delivering exceptional quality garments.<span id="dots">...</span><span id="more" class="hidden"><br>Our team of skilled craftsmen and women possess a
                    remarkable ability to transform tech packs into garments with unparalleled accuracy, achieving an
                    impressive 99% precision right from the initial sample development stage. With a collective experience
                    of over two decades, their expertise shines through in every stitch, ensuring top-notch craftsmanship
                    and delivering exceptional quality garments.<br><br></span></p>
            <button onclick="serviceButton()" id="myBtn"
                class="bg-cyan-600 px-3 py-1 text-white rounded-lg mt-3 hover:bg-sky-600">Read more</button>
        </div>
    </div>

    <div class="lg:flex lg:flex-row py-4">
        <div class="lg:basis-1/2 md:p-8 p-4">
            <img src="{{asset('images/service_nrbfashion2.png')}}" alt="" class="mx-auto w-full">
        </div>
        <div class="lg:basis-1/2 md:p-6 p-4 text-justify lg:order-last order-none">
            <h1 class="text-3xl font-extrabold">Personalized Or Private Labels</h1>
            <p class="text-lg leading-7 text-gray-600 font-serif pt-5">Add a personal touch to our garments with your
                own brand label through our personalized or private labeling services. Add a personal touch to our
                garments with your own brand label through our personalized or private labeling services. Add a personal
                touch to our garments with your own brand label through our personalized or private labeling services.
            </p>
            <button class="bg-cyan-600 px-3 py-2 text-white rounded-lg mt-5 hover:bg-sky-600">Read more</button>
        </div>
    </div>

    <div class="lg:flex lg:flex-row py-4">
        <div class="lg:basis-1/2 md:p-8 p-4 lg:order-last order-none">
            <img src="{{asset('images/service_nrbfashion3.webp')}}" alt="" class="mx-auto w-full">
        </div>
        <div class="lg:basis-1/2 md:p-6 p-4 text-justify">
            <h1 class="text-3xl font-extrabold">Extraordinary Quality Guaranteed
            </h1>
            <p class="text-lg leading-7 text-gray-600 font-serif pt-5">Our garments factory thrives on delivering products that perfectly match our customers'

                specifications through a rigorous ODM/OEM process. The smiles of our satisfied clients are a testament to our unwavering commitment to providing exceptional quality. With a focus on excellence, we go the extra mile to ensure that every garment meets the highest standards of quality and craftsmanship. Your satisfaction is our priority, and we take pride in delivering products that bring joy and confidence to our valued customers.</p>
            <button class="bg-cyan-600 px-3 py-2 text-white rounded-lg mt-5 hover:bg-sky-600">Read more</button>
        </div>
    </div>

    <div class="lg:flex lg:flex-row py-4">
        <div class="lg:basis-1/2 md:p-8 p-4">
            <img src="{{asset('images/service_nrbfashion4.jpg')}}" alt="" class="mx-auto w-full">
        </div>
        <div class="lg:basis-1/2 md:p-6 p-4 text-justify lg:order-last order-none">
            <h1 class="text-3xl font-extrabold">Environmentally-Friendly Manufacturing</h1>
            <p class="text-lg leading-7 text-gray-600 font-serif pt-5">At our garments factory, we prioritize sustainability and ethical practices in every step of

                the manufacturing process. As a responsible manufacturer, we are committed to minimizing our environmental impact by adopting eco-friendly materials, reducing waste, and implementing energy-efficient production methods. Our dedication to sustainable manufacturing ensures that you receive high-quality garments that are not only fashionable but also ethically produced. Join us in making a positive difference in the fashion industry by choosing our sustainable manufacturing services.</p>
            <button class="bg-cyan-600 px-3 py-2 text-white rounded-lg mt-5 hover:bg-sky-600">Read more</button>
        </div>
    </div>
</div>
<!-- Services End-->

<!-- scroll on top button Start-->
<a id="button" class="inline-block bg-blue-600 w-9 h-9 text-center rounded fixed bottom-5 right-5 opacity-0 invisible z-[1000] after:content-['\f077'] font-['FontAwesome'] text-2xl text-white hover:cursor-pointer hover:bg-gray-500 active:bg-sky-400"></a>
<!-- scroll on top button End-->

<script type="text/javascript" src="{{asset('js/frontend/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/scrollbutton.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/service.js')}}"></script>


@endsection