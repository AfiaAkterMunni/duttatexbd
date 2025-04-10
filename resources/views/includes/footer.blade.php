<!-- Footer Start-->
<div>
  <footer class="bg-[#027DAE] mb-0 w-full md:flex md:justify-between md:items-center lg:px-20 md:px-7 px-16 md:py-2 py-5">
    <div class="pb-5 md:pb-0">
      <a href="{{route('homepage')}}" class="">
        <img src="{{asset('images/duttatex-Logo.png')}}" class="h-14 sm:h-20 md:h-14 lg:h-20" alt="Duttatex Logo" />
      </a>
    </div>
    <div class="text-white text-sm md:text-xs lg:text-sm pb-5 md:pb-0">
      <ul>
        <li class="pb-2"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon>WhatsApp : +88 01715 819 086</li>
        <li class="pb-2"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon>Urgent Call : +88 01715 819 086</li>
        <li><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon>E-mail : prabir@duttatex.com</li>
      </ul>
    </div>
    <div class="text-white text-sm md:text-xs lg:text-sm pb-5 md:pb-0">
      <ul>
        <li class="pb-1"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="{{route('homepage')}}" class="hover:underline">Home</a></li>
        <li class="pb-1"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="{{route('about')}}" class="hover:underline">About</a></li>
        <li class="pb-1"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="{{route('categories')}}" class="hover:underline">Products</a></li>
        <li class="pb-1"><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="{{route('service')}}" class="hover:underline">Services</a></li>
        <li><ion-icon name="play-outline" class="size-2.5 pr-2"></ion-icon><a href="{{route('contact')}}" class="hover:underline">Contact</a></li>
      </ul>
    </div>
    <div class="ml-0">
      @if (session('success'))
      <div class="flex items-center justify-between py-2 px-4 mb-8 text-md text-white bg-green-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        id="toaster">
        <div class="flex items-center">
          <span>{{ session('success') }}</span>
        </div>
        <button
          class="inline-flex items-center justify-center w-6 h-6 text-white transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
          aria-label="close" onclick="document.getElementById('toaster').style.display = 'none';">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
            <path
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      @endif
      <form action="{{route('subscribe.store')}}" class="" method="POST" id="footerSub">
        @csrf
        <label for="" class="block pb-2 text-white text-base">Get Notified About The Next Update!</label>
        <input class="p-2 mr-1 rounded" type="email" name="email" placeholder="Enter Email">
        <button class="bg-sky-700 p-2 rounded text-white font-semibold hover:bg-sky-800" type="submit" value="">Subscribe</button>
        @error('email')
        <p class="text-red-500">{{$message}}</p>
        @enderror
      </form>
    </div>
  </footer>
  <div class="md:flex md:flex-row mt-3 mb-1 mx-5">
    <div class="md:basis-1/2 text-center">
      <p class="text-md text-gray-500">Copyright © 2024 Duttatex | Powered by Duttatex</p>
    </div>
    <div class="md:basis-1/2 text-center md:pt-0 pt-5">
      <a href="https://www.linkedin.com/in/nrb-fashion-prabir-87159934/" class="mr-4" target="_blank"><ion-icon name="logo-linkedin" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
      <a href="https://twitter.com/NrBfashion" class="mr-4" target="_blank"><ion-icon name="logo-twitter" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
      <a href="mailto:prabir@nrbfashion.com" class="mr-4" target="_blank"><ion-icon name="mail" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
      <a href="skype:username?call" class="mr-4" target="_blank"><ion-icon name="logo-skype" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
      <a href="https://api.whatsapp.com/send?phone=8801715819086" class="mr-4" target="_blank"><ion-icon name="logo-whatsapp" class="md:size-3.5 size-4 rounded bg-sky-700 text-white md:p-0.5 p-1"></ion-icon></a>
    </div>
  </div>
</div>
<!-- Footer End-->

<!-- Social icon bar Start-->
<div class="fixed right-0 top-2/4 translate-y-[-50%]">
  <a href="https://www.linkedin.com/in/nrb-fashion-prabir-87159934/" class="text-white bg-[#0076B3] block text-center p-3 text-lg hover:bg-black transition-all" target="_blank"><i class="fa fa-linkedin"></i></a>
  <a href="https://twitter.com/NrBfashion" target="_blank" class="text-white bg-[#50A4D5] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-twitter"></i></a>
  <a href="mailto:prabir@nrbfashion.com" target="_blank" class="text-white bg-[#D74B40] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-envelope"></i></a>
  <a href="skype:username?call" target="_blank" class="text-white bg-[#36A4DC] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-skype"></i></a>
  <a href="https://api.whatsapp.com/send?phone=8801715819086" class="text-white bg-[#299580] block text-center p-3 text-lg hover:bg-black transition-all"><i class="fa fa-whatsapp"></i></a>
</div>
<!-- Social icon bar End-->



<!-- <script src="{{asset('js/app.js')}}"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->