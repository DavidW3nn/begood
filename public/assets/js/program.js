// const images = [
//     "1.jpg",
//     "2.jpg",
//     "3.jpeg",
//     // Tambahkan lebih banyak URL gambar
// ];

// const carouselInner = document.querySelector('.carousel-inner');
// const carouselIndicators = document.querySelector('.carousel-indicators');

// images.forEach((image, index) => {
//     const item = document.createElement('div');
//     item.classList.add('carousel-item');
//     if (index === 0) item.classList.add('active');
//     item.innerHTML = `
//         <div class="d-flex justify-content-center">
//             <img src="/image${image}" class="d-block w-50" alt="Image ${index + 1}">
//         </div>
//     `;
//     carouselInner.appendChild(item);

//     const indicator = document.createElement('li');
//     indicator.setAttribute('data-target', '#carousel1');
//     indicator.setAttribute('data-slide-to', index);
//     if (index === 0) indicator.classList.add('active');
//     carouselIndicators.appendChild(indicator);
// });
