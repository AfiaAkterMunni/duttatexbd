@extends('layouts.master')
@section('title', 'About')
@section('content')
    <!-- About Start-->
    <div class="lg:flex lg:flex-row py-20 font-[Roboto] px-12">
        <div class="lg:basis-1/2 p-6">
            <h1 class="text-2xl font-semibold pb-5 tracking-wider">Established in 1995</h1>
            <img src="{{asset('images/img8.png')}}" alt="" class="mx-auto">
        </div>
        <div class="lg:basis-1/2 p-6 text-justify">
            <h1 class="text-2xl font-extrabold border-b-2 border-y-stone-500">ABOUT DUTTATEX…</h1>
            <p class="text-md leading-7 text-gray-600 font-serif pt-3">We introduce ourselves as very proactive
                Manufacturers and Exporters since 1995 of Fashion-Casual, Sports, Work and Promotional Wear as far as
                the Total Look concerns, having 100% units based in Bangladesh. <br><br>The product range encompasses
                the diverse needs of the Industry for Men – Women –
                Children and including T-Shirt, Polo and Rugby Polo, Sweaters, Sweatshirt, Fleece, Shirts, Cargo Pants,
                Knitted and Woven, all
                customizable washes, treatments and decorations (printing-embroideries-applications) on the basis of the
                multiple demands. The quality of our garments is well recognized and guaranteed by a long lasting
                collaboration with the most diverse Companies all around the world. <br><br>We look forward to your
                workwear, sportswear, promotional wear, casual wear, promotional textiles, bulk
                t-shirts, plain t-shirts, and polo shirts. Inquiry.</p>
        </div>
    </div>
    <!-- About End-->

    <!-- About Start-->
    <div class="lg:flex lg:flex-row  xl:px-28 lg:px-18 md:px-16 px-12 bg-cyan-50 py-10">
        <div class="lg:basis-1/3 lg:mr-12">
            <h4 class="pb-5 text-2xl font-bold text-center" id="about">What We Do</h4>
            <p class="text-justify text-sm leading-6">We proudly present ourselves as proactive Manufacturers and
                Exporters, a legacy we’ve upheld since 1995. Our expertise spans Fashion-Casual, Sports, Work, and
                Promotional Wear, offering a comprehensive Total Look solution. Our operations are 100% based in
                Bangladesh.<br><br>
                Our product range caters to diverse industry needs, covering Men, Women, and Children. It includes
                T-Shirts, Polo and Rugby Polos, Sweaters, Sweatshirts, Fleece, Shirts, Cargo Pants, Knitted and Woven
                garments. We offer customizable washes, treatments, and decorations (printing, embroidery, applications)
                to meet various demands. Our garments’ quality is renowned, backed by enduring partnerships with global
                companies.<span id="dots">...</span><span id="more" class="hidden"><br>Our in-house Laboratory crafts
                    prototypes,
                    tailored samples for collections, and rapid production. Our IT Department supports all technological
                    aspects throughout the production cycle, ensuring efficiency. <br><br>We accommodate orders of
                    varying
                    sizes, from single items to massive productions, maintaining precision, quality, and competitive
                    prices. We
                    offer flexibility in quantities, unrivaled attention to detail, and consistent customer
                    support. <br><br>Whether single orders or monthly planned productions, we adapt to your needs,
                    guaranteeing Quantity, Quality, Timing, and Target Price. Our international experience assures
                    compliance with EC and Worldwide Norms. <br><br>Feel free to contact us anytime for inquiries. We’re
                    here to provide unwavering support. Your satisfaction is our commitment!<br><br></span></p>
            <button onclick="myFunction()" id="myBtn"
                class="bg-cyan-600 px-3 py-1 text-white rounded-lg mt-3 hover:bg-sky-600">Read more</button>
        </div>
        <div class="lg:basis-1/3 lg:mr-12">
            <h4 class="pb-5 text-2xl font-bold text-center">What We Provide</h4>
            <p class="text-justify text-sm leading-6">At DuttaTex, we take pride in being a premier workwear
                manufacturer, dedicated to providing businesses and individuals with top-notch workwear solutions. With
                a rich history spanning 25Years , we have honed our expertise to become a trusted partner in the
                industry.<br><br><strong>Design and Innovation:</strong> Our team of skilled designers and textile
                experts work
                tirelessly to create workwear that not only meets industry standards but also embraces the latest trends
                and innovations. We believe that functionality should not compromise style, and our designs reflect this
                commitment. <br><br><strong>Quality Materials:</strong> The foundation of durable workwear lies in the
                materials used.<span id="dots2">...</span><span id="more2" class="hidden"><br>We source the finest
                    fabrics and
                    materials, ensuring that our products can withstand the rigors of demanding work environments.
                    Whether it’s
                    flame-resistant clothing, rugged outdoor gear, or corporate uniforms, we use materials that deliver
                    both comfort and durability. <br><br><strong>Customization:</strong> We understand that every
                    business has unique
                    needs. That’s why we offer customization options, allowing you to tailor our workwear to your
                    specific requirements. From embroidery and logos to size and fit, we ensure that your workwear
                    represents your brand with pride. <br><br><strong>Sustainability:</strong> We are committed to
                    sustainable
                    manufacturing practices. Our eco-friendly initiatives include responsible sourcing, reduced waste,
                    and energy-efficient production processes. <br><br><strong>Customer Satisfaction:</strong> Our
                    ultimate goal is your
                    satisfaction. We provide exceptional customer service, timely delivery, and competitive pricing,
                    making us the preferred choice for workwear needs. <br><br>At DuttaTex , we don’t just make
                    workwear; we create solutions that empower individuals and businesses to work comfortably,
                    confidently, and safely. Join hands with us, and experience the difference in quality and service
                    that defines our work. <br><br></span></p>
            <button onclick="myFunction2()" id="myBtn2"
                class="bg-cyan-600 px-3 py-1 text-white rounded-lg mt-3 hover:bg-sky-600">Read more</button>
        </div>
        <div class="basis-1/3">
            <h4 class="pb-5 text-2xl font-bold text-center">Our Mission</h4>
            <p class="text-justify text-sm leading-6">At Duttatex Workwear Factory, our mission is clear and resolute:
                to be a driving force behind excellence in workwear manufacturing. Since our establishment, we have been
                dedicated to producing workwear solutions that not only meet industry standards but also exceed the
                expectations of our valued clients. <br><br><strong>Quality Assurance:</strong> Our foremost mission is
                to ensure the highest level of quality in every garment we
                produce. We utilize the latest technology, adhere to stringent quality control processes, and source the
                finest materials to guarantee that our workwear is built to last. <br><br><strong>Safety First:</strong>
                We are committed to the safety and well-being of the individuals who<span id="dots3">...</span><span
                    id="more3" class="hidden"><br>
                    rely on our workwear. Our mission is to design and manufacture garments that provide optimal
                    protection
                    in various work environments. <br><br><strong>Customization and Innovation:</strong> We understand
                    that
                    each client has unique needs. Our mission is to offer
                    customization options that allow our clients to tailor their workwear to their specific
                    requirements. We
                    continuously innovate our designs and manufacturing processes to stay at the forefront of the
                    industry.
                    <br><br>
                    <strong>Sustainability:</strong> Duttatex is dedicated to sustainability. Our mission is to minimize
                    our
                    environmental
                    footprint by adopting eco-friendly practices throughout our production processes. <br><br>
                    <strong>Customer Satisfaction:</strong> Ultimately, our mission is to ensure the complete
                    satisfaction
                    of our customers.
                    We achieve this by offering exceptional customer service, timely deliveries, and competitive
                    pricing.
                    <br><br>
                    At Duttatex Workwear Factory, our mission is not just about making workwear; it’s about making
                    workwear
                    that empowers individuals and businesses, enhances safety, and promotes productivity. Join us in our
                    mission, and experience the difference in quality, reliability, and service that defines Duttatex.
                    <br><br></span></p>
            <button onclick="myFunction3()" id="myBtn3"
                class="bg-cyan-600 px-3 py-1 text-white rounded-lg mt-3 hover:bg-sky-600">Read more</button>
        </div>
    </div>
    <!-- About End-->
    @endsection