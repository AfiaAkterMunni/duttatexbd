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