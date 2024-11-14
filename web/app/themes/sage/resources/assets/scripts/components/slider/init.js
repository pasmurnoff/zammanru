import Slider from './slider'; // Предполагаем, что Slider.js содержит логику слайдера

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.slider-container').forEach(sliderContainer => {
    const slidesToShow = sliderContainer.classList.contains('slider-three') ? 3 : 1;
    new Slider(sliderContainer.id, slidesToShow);  // Передаем количество слайдов
  });
});

