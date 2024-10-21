 // Halamanaktivitas 
 // Untuk Slider Image
let next = document.querySelector(".next");
let prev = document.querySelector(".prev");
let slider = document.querySelector(".slider");

next.addEventListener("click", function() {
    let slides = document.querySelectorAll(".slides");
    slider.appendChild(slides[0]);
})

prev.addEventListener("click", function() {
    let slides = document.querySelectorAll(".slides");
    slider.prepend(slides[slides.length - 1]);
})

// Untuk tombol like dan unlike (menyala)
function toggleLikeActive(button) {
    // Menghapus kelas aktif dari tombol lainnya
    const buttons = document.querySelectorAll('.btn-outline-secondary');
    buttons.forEach(btn => {
        btn.classList.remove('active');
    });

    // Menambahkan kelas aktif pada tombol yang diklik
    button.classList.toggle('active');
}