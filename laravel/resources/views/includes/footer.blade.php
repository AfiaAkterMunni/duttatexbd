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

    // scroll on top button Start

var btn = $('#button');
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.removeClass('opacity-0 . invisible');
        btn.addClass('opacity-100 . visible');
    } else {
        btn.removeClass('opacity-10 . visible');
        btn.addClass('opacity-0 . invisible');

    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});

// scroll on top button End
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>