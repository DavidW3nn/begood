 // Untuk fungsi copy
 var buttonsCopy = document.getElementsByClassName("copy-btn");
 Array.from(buttonsCopy).forEach(function(button) {
     button.addEventListener("click", function() {
         var targetId = button.getAttribute("data-clipboard-target");
         var textToCopy = document.querySelector(targetId).innerText;

         // Salin teks ke clipboard
         navigator.clipboard
             .writeText(textToCopy)
             .then(function() {
                 // Tampilkan notifikasi
                 var notification = document.getElementById("notification");
                 notification.style.display = "block";
                 console.log("Teks berhasil disalin");

                 // Sembunyikan notifikasi setelah beberapa detik
                 setTimeout(function() {
                     notification.style.display = "none";
                 }, 3000);
             })
             .catch(function(err) {
                 console.error("Gagal menyalin: ", err);
             });
     });
 });


 // Untuk carousel ( Home )
 const galleryContainer = document.querySelector(".gallery-container");
 const galleryControlsContainer = document.querySelector(".gallery-controls");
 const galleryControls = ["previous", "next"];
 const galleryItems = document.querySelectorAll(".gallery-item");

 class Carousel {
     constructor(container, controls, items) {
         this.carouselContainer = container;
         this.carouselControls = controls;
         this.carouselArray = [...items];
     }

     updateGallery() {
         this.carouselArray.forEach((el) => {
             el.classList.remove(
                 "gallery-item-1",
                 "gallery-item-2",
                 "gallery-item-3",
                 "gallery-item-4",
                 "gallery-item-5"
             );
         });

         this.carouselArray.slice(0, 5).forEach((el, i) => {
             el.classList.add(`gallery-item-${i + 1}`);
         });
     }

     setCurrentState(direction) {
         if (direction.className.includes("previous")) {
             this.carouselArray.unshift(this.carouselArray.pop());
         } else {
             this.carouselArray.push(this.carouselArray.shift());
         }
         this.updateGallery();
     }

     setControls() {
         this.carouselControls.forEach((control) => {
             const button = document.createElement("button");
             button.className = `gallery-controls-${control}`;
             //   button.innerText = control.charAt(0).toUpperCase() + control.slice(1);
             galleryControlsContainer.appendChild(button);
         });
     }

     useControls() {
         const triggers = [...galleryControlsContainer.childNodes];
         triggers.forEach((control) => {
             control.addEventListener("click", (e) => {
                 e.preventDefault();
                 this.setCurrentState(control);
             });
         });
     }
 }

 const exampleCarousel = new Carousel(
     galleryContainer,
     galleryControls,
     galleryItems
 );
 exampleCarousel.setControls();
 exampleCarousel.useControls();