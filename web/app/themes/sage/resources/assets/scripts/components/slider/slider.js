export default class Slider {
  constructor(sliderContainerId, slidesToShow = 1) {
    this.sliderContainer = document.getElementById(sliderContainerId);
    this.slider = this.sliderContainer.querySelector('.slider');
    this.slides = this.slider.querySelectorAll('.slide');
    this.pagination = document.querySelector(`.pagination[data-slider='${sliderContainerId}']`);
    this.currentSlide = 0;
    this.totalSlides = this.slides.length;
    this.slidesToShow = slidesToShow;
    this.initPagination();
    this.updateSlider();

    // Переменные для отслеживания свайпов и драг
    this.startX = 0;
    this.isDragging = false;

    // Добавляем обработку тача
    this.sliderContainer.addEventListener('touchstart', this.touchStart.bind(this), false);
    this.sliderContainer.addEventListener('touchmove', this.touchMove.bind(this), false);
    this.sliderContainer.addEventListener('touchend', this.touchEnd.bind(this), false);

    // Добавляем обработку драг-энд-дропа
    this.sliderContainer.addEventListener('mousedown', this.mouseDown.bind(this), false);
    this.sliderContainer.addEventListener('mousemove', this.mouseMove.bind(this), false);
    this.sliderContainer.addEventListener('mouseup', this.mouseUp.bind(this), false);
    this.sliderContainer.addEventListener('mouseleave', this.mouseUp.bind(this), false);
  }

  // Инициализация пагинации
  initPagination() {
    for (let i = 0; i < Math.ceil(this.totalSlides / this.slidesToShow); i++) {
      const button = document.createElement('button');
      button.classList.add('pagination-dot');
      button.addEventListener('click', () => this.goToSlide(i));
      this.pagination.appendChild(button);
    }
    this.paginationButtons = this.pagination.querySelectorAll('button');
  }

  // Переход к определенному слайду
  goToSlide(index) {
    this.currentSlide = index;
    this.updateSlider();
  }

  // Обновление состояния слайдера
  updateSlider() {
    const slideWidth = 100 / this.slidesToShow;
    this.slider.style.transform = `translateX(-${this.currentSlide * slideWidth}%)`;
    this.paginationButtons.forEach(button => button.classList.remove('active'));
    this.paginationButtons[this.currentSlide].classList.add('active');
  }

  // Обработчики тач-событий
  touchStart(e) {
    this.startX = e.touches[0].clientX;
    this.isDragging = true;
  }

  touchMove(e) {
    if (!this.isDragging) return;
    const deltaX = e.touches[0].clientX - this.startX;
    if (Math.abs(deltaX) > 50) {  // Если свайп больше 50 пикселей
      this.isDragging = false;
      if (deltaX > 0) {
        this.swipeRight();
      } else {
        this.swipeLeft();
      }
    }
  }

  touchEnd() {
    this.isDragging = false;
  }

  // Обработчики событий мыши для драг-н-дроп
  mouseDown(e) {
    this.startX = e.clientX;
    this.isDragging = true;
  }

  mouseMove(e) {
    if (!this.isDragging) return;
    const deltaX = e.clientX - this.startX;
    if (Math.abs(deltaX) > 50) {  // Если драг больше 50 пикселей
      this.isDragging = false;
      if (deltaX > 0) {
        this.swipeRight();
      } else {
        this.swipeLeft();
      }
    }
  }

  mouseUp() {
    this.isDragging = false;
  }

  // Переход на предыдущий слайд
  swipeRight() {
    if (this.currentSlide > 0) {
      this.currentSlide--;
      this.updateSlider();
    }
  }

  // Переход на следующий слайд
  swipeLeft() {
    if (this.currentSlide < this.totalSlides - this.slidesToShow) {
      this.currentSlide++;
      this.updateSlider();
    }
  }
}
