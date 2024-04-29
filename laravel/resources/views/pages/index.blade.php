<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DuttaTex</title>
  <!-- cdn link for tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

  <!-- cdn link for ionicons icon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- cdn link for jquery -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- cdn link for font-awesome icon -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <style>
    .wrapper .carousel {
      /* display: grid; */
      /* grid-auto-flow: column; */
      /* grid-auto-columns: calc((100% / 4)); */
      /* overflow-x: auto; */
      /* scroll-snap-type: x mandatory; */
      /* gap: 0px; */
      /* border-radius: 8px; */
      /* scrollbar-width: none; */
    }

    
    @media screen and (max-width: 900px) {
      .wrapper .carousel {
        grid-auto-columns: calc((100% / 2) - 9px);
      }
    }

    @media screen and (max-width: 600px) {
      .wrapper .carousel {
        grid-auto-columns: 100%;
      }
    }
  </style>
</head>

<body>
  <!-- Navigation Start-->
  <nav class="bg-[#027DAE] md:flex md:justify-between md:items-center py-2.5 md:px-8 px-2">
    <div class="flex justify-between items-center ">
      <a href="#" class="md:pl-10 pl-0 z-[16] md:z-auto ">
        <img src="{{asset('images/duttatex-Logo.png')}}" class="h-14 sm:h-20" alt="Duttatex Logo" />
      </a>
      <span class="text-3xl text-white cursor-pointer md:hidden block mx-2 z-[16] md:z-auto">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>
    <ul class="md:flex pr-4 md:text-white text-black w-full md:w-auto md:static absolute top-[-400px] left-0 transition-all ease-in duration-500 z-[5] md:z-auto md:py-0 py-4 bg-[#027DAE]">
      <li class="py-3 px-4">
        <a href="index.html" class="text-lg hover:text-cyan-200">Home</a>
      </li>
      <li class="py-3 px-4">
        <a href="about.html" class="text-lg hover:text-cyan-200">About</a>
      </li>
      <li class="py-3 px-4">
        <a href="category.html" class="text-lg hover:text-cyan-200">Products</a>
      </li>
      <li class="py-3 px-4">
        <a href="services.html" class="text-lg hover:text-cyan-200">Services</a>
      </li>
      <li class="py-3 px-4">
        <a href="contact.html" class="text-lg hover:text-cyan-200">Contact</a>
      </li>
    </ul>
  </nav>
  <!-- Navigation End-->

  <!-- scroll on top button Start-->
  <a id="button" class="inline-block bg-blue-600 w-9 h-9 text-center rounded fixed bottom-5 right-5 opacity-0 invisible z-[1000] after:content-['\f077'] font-['FontAwesome'] text-2xl text-white hover:cursor-pointer hover:bg-gray-500 active:bg-sky-400"></a>
  <!-- scroll on top button End-->

  <!-- slider Start-->
  <div class="w-full">
    <img class="mySlides w-full min-h-40" src="{{asset('images/banner_1.jpg')}}">
    <img class="mySlides w-full min-h-40" src="{{asset('images/banner_3.jpg')}}">
    <img class="mySlides w-full min-h-40" src="{{asset('images/banner_4.jpg')}}">
    <img class="mySlides w-full min-h-40" src="{{asset('images/banner_5.jpg')}}">
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
      <a class="bg-cyan-600 px-3 py-2 text-white rounded-lg hover:bg-sky-600" href="about.html#about">Read more</a>
    </div>
    <div class="md:pr-10 md:my-2 my-10">
      <h4 class="pb-5 text-2xl font-bold text-center">What We Provide</h4>
      <p class="text-justify text-sm leading-6 mb-5">We proudly present ourselves as proactive Manufacturers and Exporters, a
        legacy we’ve
        upheld since 1995. Our expertise spans Fashion-Casual, Sports, Work, and Promotional Wear, offering a
        comprehensive Total Look solution. Our operations are 100% based in Bangladesh. Our product range caters to
        diverse…</p>
      <a class="bg-cyan-600 px-3 py-2 text-white rounded-lg hover:bg-sky-600" href="about.html#about">Read more</a>
    </div>
    <div class="md:my-2 my-10">
      <h4 class="pb-5 text-2xl font-bold text-center">Our Mission</h4>
      <p class="text-justify text-sm leading-6 mb-5">We proudly present ourselves as proactive Manufacturers and Exporters, a
        legacy we’ve
        upheld since 1995. Our expertise spans Fashion-Casual, Sports, Work, and Promotional Wear, offering a
        comprehensive Total Look solution. Our operations are 100% based in Bangladesh. Our product range caters to
        diverse…</p>
      <a class="bg-cyan-600 px-3 py-2 text-white rounded-lg hover:bg-sky-600" href="about.html#about">Read more</a>
    </div>
  </div>
  <!-- About End-->

  <!-- Product Galery Start-->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-12 py-10 lg:px-24 md:px-20 px-16 text-center uppercase text-lg">
    <div>
      <a href="subcategory.html">
        <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="subcategory.html">
        <img src="{{asset('images/1.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="subcategory.html">
        <img src="{{asset('images/3.jpg')}}" class="h-auto max-w-full rounded-lg rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="subcategory.html">
        <img src="{{asset('images/5.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="subcategory.html">
        <img src="{{asset('images/6.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="subcategory.html">
        <img src="{{asset('images/7.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="subcategory.html">
        <img src="{{asset('images/8.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
    <div>
      <a href="subcategory.html">
        <img src="{{asset('images/4.jpg')}}" class="h-auto max-w-full rounded-lg border-2 transition duration-300 ease-in-out hover:scale-110" alt="">
        <h3 class="pt-3">Shirt</h3>
      </a>
    </div>
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
  <div class="pt-16">
    <div>
      <h1 class="md:text-3xl text-lg font-semibold text-center">COMPLIANCE CERTIFICATE</h1>
      <hr class="md:w-96 w-16 h-0.5 mx-auto my-4 bg-gray-500 border-0 md:my-1">
    </div>
    <div class="wrapper w-full relative">
      <ul class="carousel grid grid-flow-col overflow-x-auto snap-x gap-0 scroll-smooth mx-24" style="grid-auto-columns: calc((100% / 4)); scrollbar-width: none;">
        <li class="card pb-4 h-64 flex-col">
          <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/BSCI-1.jpg')}}" alt="img" draggable="false"></div>
        </li>
        <li class="card pb-4 h-64 flex-col">
          <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/GOTS1.jpg')}}" alt="img" draggable="false"></div>
        </li>
        <li class="card pb-4 h-64 flex-col">
          <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/OEKO-TEX1.jpg')}}" alt="img" draggable="false"></div>
        </li>
        <li class="card pb-4 h-64 flex-col">
          <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/ACCORD-1.jpg')}}" alt="img" draggable="false"></div>
        </li>
        <li class="card pb-4 h-64 flex-col">
          <div class="img"><img class="w-64 border-2 border-[f1eeee] object-cover" src="{{asset('images/ALLIANCE-1.jpg')}}" alt="img" draggable="false"></div>
        </li>
      </ul>
    </div>
  </div>
  <!-- certificate End-->

  <!-- Footer Start-->
  <div>
    <footer class="bg-[#027DAE] mb-0 w-full md:flex md:justify-between md:items-center lg:px-20 md:px-7 px-16 md:py-2 py-5">
      <div class="pb-5 md:pb-0">
        <a href="#" class="">
          <img src="{{asset('images/duttatex-Logo.png')}}" class="h-14 sm:h-20 md:h-14 lg:h-20" alt="Duttatex Logo" />
        </a>
      </div>
      <div class="text-white text-sm md:text-xs lg:text-sm pb-5 md:pb-0">
        <ul>
          <li class="pb-2"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon>Telephone : +8801329692671</li>
          <li class="pb-2"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon>WhatsApp : +88 01715 819 086</li>
          <li class="pb-2"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon>Urgent Call : +88 01715 819 086</li>
          <li><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon>E-mail : prabir@duttatex.com</li>
        </ul>
      </div>
      <div class="text-white text-sm md:text-xs lg:text-sm pb-5 md:pb-0">
        <ul>
          <li class="pb-1"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="" class="hover:underline">Home</a></li>
          <li class="pb-1"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="" class="hover:underline">About</a></li>
          <li class="pb-1"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="" class="hover:underline">Products</a></li>
          <li class="pb-1"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="" class="hover:underline">Serices</a></li>
          <li><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="" class="hover:underline">Contact</a></li>
        </ul>
      </div>
      <div class="ml-0">
        <form class="">
          <label for="" class="block pb-2 text-white text-base">Get Notified About The Next Update!</label>
          <input class="p-2 mr-1 rounded" type="email" name="" placeholder="Enter Email">
          <button class="bg-sky-700 p-2 rounded text-white font-semibold hover:bg-sky-800" type="submit" name="" value="">Subscribe</button>
        </form>
      </div>
    </footer>
    <div class="md:flex md:flex-row mt-3 mb-1 mx-5">
      <div class="md:basis-1/2 text-center">
        <p class="text-md text-gray-500">Copyright © 2024 Duttatex | Powered by Duttatex</p>
      </div>
      <div class="md:basis-1/2 text-center md:pt-0 pt-5">
        <a href="https://www.linkedin.com/in/nrb-fashion-prabir-87159934/" class="mr-4"><ion-icon name="logo-linkedin" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
        <a href="https://twitter.com/NrBfashion" class="mr-4"><ion-icon name="logo-twitter" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
        <a href="" class="mr-4"><ion-icon name="logo-skype" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
        <a href="" class="mr-4"><ion-icon name="logo-whatsapp" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
        <a href="" class="mr-4"><ion-icon name="videocam-outline" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
        <a href=""><ion-icon name="mail-outline" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
      </div>
    </div>
  </div>
  <!-- Footer End-->

  <!-- Social icon bar Start-->
  <div class="fixed right-0 top-2/4 translate-y-[-50%]">
    <a href="https://www.linkedin.com/in/nrb-fashion-prabir-87159934/" class="text-white bg-[#0076B3] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-linkedin"></i></a>
    <a href="https://twitter.com/NrBfashion" class="text-white bg-[#50A4D5] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-twitter"></i></a>
    <a href="#" class="text-white bg-[#D74B40] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-envelope"></i></a>
    <a href="#" class="text-white bg-[#36A4DC] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-skype"></i></a>
    <a href="#" class="text-white bg-[#299580] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-whatsapp"></i></a>
  </div>
  <!-- Social icon bar End-->

  <script>
    function Menu(e) {
      let list = document.querySelector('ul');
      if (e.name === 'menu') {
        e.name = "close";
        list.classList.add('top-[76px]');
        list.classList.add('opacity-80');
      } else {
        e.name = "menu";
        list.classList.remove('top-[76px]');
        list.classList.remove('opacity-80');
      }
    }

    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }

    //certificate slider start

    const wrapper = document.querySelector(".wrapper");
    const carousel2 = document.querySelector(".carousel");
    const firstCardWidth = carousel2.querySelector(".card").offsetWidth;
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const carouselChildrens = [...carousel2.children];

    let isDragging = false,
      isAutoPlay = true,
      startX, startScrollLeft, timeoutId;

    // Get the number of cards that can fit in the carousel at once
    let cardPerView = Math.round(carousel2.offsetWidth / firstCardWidth);

    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
      carousel2.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

    // Insert copies of the first few cards to end of carousel for infinite scrolling
    carouselChildrens.slice(0, cardPerView).forEach(card => {
      carousel2.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
    carousel2.classList.add("no-transition");
    carousel2.scrollLeft = carousel.offsetWidth;
    carousel2.classList.remove("no-transition");

    // Add event listeners for the arrow buttons to scroll the carousel left and right
    arrowBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        carousel2.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
      });
    });

    const dragStart = (e) => {
      isDragging = true;
      carousel2.classList.add("dragging");
      // Records the initial cursor and scroll position of the carousel
      startX = e.pageX;
      startScrollLeft = carousel.scrollLeft;
    }

    const dragging = (e) => {
      if (!isDragging) return; // if isDragging is false return from here
      // Updates the scroll position of the carousel based on the cursor movement
      carousel2.scrollLeft = startScrollLeft - (e.pageX - startX);
    }

    const dragStop = () => {
      isDragging = false;
      carousel2.classList.remove("dragging");
    }

    const infiniteScroll = () => {
      // If the carousel is at the beginning, scroll to the end
      if (carousel2.scrollLeft === 0) {
        carousel2.classList.add("no-transition");
        carousel2.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel2.classList.remove("no-transition");
      }
      // If the carousel is at the end, scroll to the beginning
      else if (Math.ceil(carousel2.scrollLeft) === carousel2.scrollWidth - carousel2.offsetWidth) {
        carousel2.classList.add("no-transition");
        carousel2.scrollLeft = carousel2.offsetWidth;
        carousel2.classList.remove("no-transition");
      }

      // Clear existing timeout & start autoplay if mouse is not hovering over carousel
      clearTimeout(timeoutId);
      if (!wrapper.matches(":hover")) autoPlay();
    }

    const autoPlay = () => {
      if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
      // Autoplay the carousel after every 2500 ms
      timeoutId = setTimeout(() => carousel2.scrollLeft += firstCardWidth, 1000);
    }
    autoPlay();

    carousel2.addEventListener("mousedown", dragStart);
    carousel2.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel2.addEventListener("scroll", infiniteScroll);
    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);

    //certificate slider end
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

  <!-- link for externel js file -->
  <script src="js/frontend.js" type="text/javascript"></script>
</body>

</html>