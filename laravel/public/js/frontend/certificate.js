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
 carousel2.scrollLeft = carousel2.offsetWidth;
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
   startScrollLeft = carousel2.scrollLeft;
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
     carousel2.scrollLeft = carousel2.scrollWidth - (2 * carousel2.offsetWidth);
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