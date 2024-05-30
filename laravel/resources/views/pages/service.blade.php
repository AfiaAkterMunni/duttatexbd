@extends('layouts.master')
@section('title', 'Services')
@section('content')

    <!-- Services Start-->
    <div class="font-[Roboto] px-20 py-8">
        <div class="lg:flex lg:flex-row py-4">
            <div class="lg:basis-1/2 md:p-8 p-4 lg:order-last order-none">
                <img src="{{asset('images/img5.png')}}" alt="" class="mx-auto w-full">
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
                <img src="{{asset('images/img1.png')}}" alt="" class="mx-auto w-full">
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
                <img src="{{asset('images/img2.png')}}" alt="" class="mx-auto w-full">
            </div>
            <div class="lg:basis-1/2 md:p-6 p-4 text-justify">
                <h1 class="text-3xl font-extrabold">Designing & Sampling</h1>
                <p class="text-lg leading-7 text-gray-600 font-serif pt-5">Our team of skilled craftsmen and women possess a
                    remarkable ability to transform tech packs into garments with unparalleled accuracy, achieving an
                    impressive 99% precision right from the initial sample development stage. With a collective experience
                    of over two decades, their expertise shines through in every stitch, ensuring top-notch craftsmanship
                    and delivering exceptional quality garments.</p>
                <button class="bg-cyan-600 px-3 py-2 text-white rounded-lg mt-5 hover:bg-sky-600">Read more</button>
            </div>
        </div>
    
        <div class="lg:flex lg:flex-row py-4">
            <div class="lg:basis-1/2 md:p-8 p-4">
                <img src="{{asset('images/img5.png')}}" alt="" class="mx-auto w-full">
            </div>
            <div class="lg:basis-1/2 md:p-6 p-4 text-justify lg:order-last order-none">
                <h1 class="text-3xl font-extrabold">Designing & Sampling</h1>
                <p class="text-lg leading-7 text-gray-600 font-serif pt-5">Our team of skilled craftsmen and women possess a
                    remarkable ability to transform tech packs into garments with unparalleled accuracy, achieving an
                    impressive 99% precision right from the initial sample development stage. With a collective experience
                    of over two decades, their expertise shines through in every stitch, ensuring top-notch craftsmanship
                    and delivering exceptional quality garments.</p>
                <button class="bg-cyan-600 px-3 py-2 text-white rounded-lg mt-5 hover:bg-sky-600">Read more</button>
            </div>
        </div>
    </div>
    <!-- Services End-->

    <script type="text/javascript" src="{{asset('js/frontend/service.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/frontend/scrollbutton.js')}}"></script>


@endsection