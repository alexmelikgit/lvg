////** mail */////

// $(document).ready(function () {
//   $('form').submit(function (event) {
//     event.preventDefault(); // Prevent default form submission

//     // Create FormData object
//     var formData = new FormData(this);
//     console.log(formData);
//     // Send form data via AJAX
//     $.ajax({
//       type: 'POST',
//       url: 'https://lvgrealestatedubai.com/wp-content/themes/lvg/assets/js/process-form.php', // Replace with the path to your PHP script
//       data: formData,
//       processData: false,
//       contentType: false,
//       success: function (response) {
//         // Handle success response here (e.g., show success message)
//         // alert('Form submitted successfully!');
//         // Redirect to thank you page or perform other actions
//         // window.location.href = 'https://lvgrealestatedubai.com/thanks/';
//       },
//       error: function (xhr, status, error) {
//         // Handle error response here (e.g., show error message)
//         // window.location.href = 'https://lvgrealestatedubai.com/thanks/';
//         console.log('Error submitting form: ' + error);
//       }
//     });
//   });
// });


////** mail */////

const burger = document.querySelector(".burger");
const menu = document.querySelector(".main-nav");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
  menu.classList.toggle("mobile-active");
});

const socialGroup = document.querySelectorAll(".team__grid-item-social");
const teamGridGroup = document.querySelectorAll(".team__grid-item-footer");
const teamBtns = document.querySelectorAll(".team__grid-item-btn");

teamBtns.forEach((btn, index) => {
  btn.addEventListener("mouseenter", function () {
    socialGroup[index].classList.toggle("hover-active");
    teamGridGroup[index].classList.toggle("hover-active");
  });

  btn.addEventListener("click", function () {
    const isActive = socialGroup[index].classList.contains("active");

    socialGroup.forEach((item) => {
      item.classList.remove("active");
    });

    if (!isActive) {
      socialGroup[index].classList.add("active");
    }
  });
});

// document.addEventListener("DOMContentLoaded", function () {

//   var contactForm = document.querySelector('.contacts__footer');
//   var modalOverlay = document.querySelector('.lw-modal-overlay');

//   contactForm.addEventListener('submit', function (event) {
//     event.preventDefault(); // Prevent the form from submitting normally

//     // Check if all fields are filled
//     var email = document.querySelector('.email').value;

//     if (email) { // If all fields are filled, show the modal

//       var formID = this.getAttribute('data-form');
//       var reference = this.getAttribute('data-reference');


//       modalOverlay.classList.add('active');
//     } else {
//       console.log("Not all fields are filled");
//     }
//   });
// });

$(document).ready(function () {
  var sliderFor = $(".slider-for");
  var sliderNav = $(".slider-nav");

  sliderFor.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".slider-nav",
  });

  sliderNav.slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: false,
    arrows: true,
    centerMode: false,
    focusOnSelect: false,
    variableWidth: false,
    infinite: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 543,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  var sliderForProperty = $(".slider-for-property");
  var sliderNavProperty = $(".slider-nav-property");

  sliderForProperty.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".slider-nav-property",
  });

  sliderNavProperty.slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".slider-for-property",
    dots: false,
    arrows: true,
    centerMode: false,
    focusOnSelect: false,
    variableWidth: false,
    infinite: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 543,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".intro_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
  });

  $(".intro_slider_index_second").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 960,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".intro_slider_about").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 960,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".data__list").slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 6,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 543,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  if ($(".partners__slider").length) {
    $(".partners__slider").each(function () {
      var slider = $(this);
      slider.slick({
        infinite: true,
        arrows: true,
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 960,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
        appendDots: slider.parents(".partners-container").find(".nav__slider"),
        appendArrows: slider
          .parents(".partners-container")
          .find(".nav__slider"),
      });
    });
  }
  $(".slider-for-index").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".slider-nav-index",
  });

  $(".slider-nav-index").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-for-index",
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    variableWidth: true,
  });
});

const buttons = document.querySelectorAll(".intro__list-item-btn");

buttons.forEach((button) => {
  button.addEventListener("click", function () {
    button.classList.toggle("active");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const currentLocation = window.location.href;
  const links = document.querySelectorAll(".main-nav-list-link");

  links.forEach((link) => {
    if (link.href === currentLocation) {
      link.classList.add("active");
    }
  });
});

const product_btns = document.querySelectorAll(".product__btns-btn");

product_btns.forEach((btn) => {
  btn.addEventListener("click", function () {
    btn.classList.toggle("active");
  });
});

const filter_btns = document.querySelectorAll(".filter__btns-btn");

filter_btns.forEach((btn) => {
  btn.addEventListener("click", function () {
    // Удаляем класс 'active' у всех ссылок перед добавлением его к текущей ссылке
    filter_btns.forEach((item) => {
      item.classList.remove("active");
    });

    // Добавляем класс 'active' только к текущей ссылке
    btn.classList.toggle("active");



  });
});

const category_btns = document.querySelectorAll(".filter__btns-btn-category");

category_btns.forEach((btn) => {
  btn.addEventListener("click", function () {
    // Удаляем класс 'active' у всех ссылок перед добавлением его к текущей ссылке
    category_btns.forEach((item) => {
      item.classList.remove("active");
    });

    // Добавляем класс 'active' только к текущей ссылке
    btn.classList.toggle("active");
  });
});

const status_btns = document.querySelectorAll(".filter__btns-btn-status");

status_btns.forEach((btn) => {
  btn.addEventListener("click", function () {
    // Удаляем класс 'active' у всех ссылок перед добавлением его к текущей ссылке
    status_btns.forEach((item) => {
      item.classList.remove("active");
    });

    // Добавляем класс 'active' только к текущей ссылке
    btn.classList.toggle("active");
  });
});

$(document).ready(function () {
  $.mask.definitions["9"] = false;
  $.mask.definitions["5"] = "[0-9]";
  jQuery("#crm_form_field").mask("+971(555) 55-55-55");
});

document.querySelectorAll(".dropdown").forEach(function (dropdownWrapper) {
  const dropdownBtn = dropdownWrapper.querySelector(".dropdown__button");
  const dropdownList = dropdownWrapper.querySelector(".dropdown__list");
  const dropdownItems = dropdownList.querySelectorAll(".dropdown__list-item");
  const dropdownInput = dropdownWrapper.querySelector(
    ".dropdown__input_hidden"
  );

  dropdownBtn.addEventListener("click", function () {
    dropdownList.classList.toggle("dropdown__list_visible");
    this.classList.toggle("dropdown__button_active");
  });

  dropdownItems.forEach(function (listItem) {
    listItem.addEventListener("click", function (e) {
      dropdownItems.forEach(function (el) {
        el.classList.remove("dropdown__list-item_active");
      });
      e.target.classList.add("dropdown__list-item_active");
      dropdownBtn.innerText = this.innerText;
      dropdownInput.value = this.dataset.value;
      dropdownList.classList.remove("dropdown__list_visible");
    });
  });

  document.addEventListener("click", function (e) {
    if (e.target !== dropdownBtn) {
      dropdownBtn.classList.remove("dropdown__button_active");
      dropdownList.classList.remove("dropdown__list_visible");
    }
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Tab" || e.key === "Escape") {
      dropdownBtn.classList.remove("dropdown__button_active");
      dropdownList.classList.remove("dropdown__list_visible");
    }
  });
});

document
  .querySelectorAll(".dropdown_with-chk")
  .forEach(function (dropdownWrapper) {
    const dropdownBtn = dropdownWrapper.querySelector(
      ".dropdown_with-chk__button"
    );
    const dropdownList = dropdownWrapper.querySelector(
      ".dropdown_with-chk__list"
    );
    const dropdownItems = dropdownList.querySelectorAll(
      ".dropdown_with-chk__list-item"
    );

    dropdownBtn.addEventListener("click", function () {
      dropdownList.classList.toggle("dropdown_with-chk__list_visible");
      this.classList.toggle("dropdown_with-chk__button_active");
    });

    dropdownItems.forEach(function (listItem) {
      listItem.addEventListener("click", function (e) {
        e.target.classList.toggle("dropdown_with-chk__list-item_active");
      });
    });

    document.addEventListener("click", function (e) {
      if (
        e.target !== dropdownBtn &&
        e.target !== dropdownItems &&
        !e.target.classList.contains("dropdown_with-chk__list-item") &&
        !e.target.classList.contains("dropdown_with-chk__list-item_label")
      ) {
        dropdownBtn.classList.remove("dropdown_with-chk__button_active");
        dropdownList.classList.remove("dropdown_with-chk__list_visible");
      }
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Tab" || e.key === "Escape") {
        dropdownBtn.classList.remove("dropdown_with-chk__button_active");
        dropdownList.classList.remove("dropdown_with-chk__list_visible");
      }
    });
  });

const modalOpeners = document.querySelectorAll(".product-card__download");
const form_btns = document.querySelectorAll(".form-btn");
const download_btn = document.querySelector(".lw-modal__form-btn");
const modal_form = document.querySelector(".lw-modal__form");
const check_btn = document.querySelector(".lw-modal__check-btn");
const form_download_btn = document.getElementById('download_btn');

if (modalOpeners.length) {
  let activeModal = null;
  let closeButton = null; // Определение переменной closeButton

  const closeModal = () => {
    if (activeModal !== null) {
      activeModal.parentNode.classList.remove("active");
      document.removeEventListener("click", onOverlayClickCloseModal);
      document.removeEventListener("keydown", onEscCloseModal);
      closeButton = activeModal.querySelector(".close-modal-btn"); // Обновление closeButton
      if (closeButton) {
        closeButton.removeEventListener("click", closeModal);
      }
      activeModal = null;
    }
  };

  const onOverlayClickCloseModal = (evt) => {
    if (evt.target.classList.contains("lw-modal-overlay")) {
      closeModal();
    }
  };

  const onEscCloseModal = (evt) => {
    if (evt.key === "Escape" || evt.keyCode === 27) {
      closeModal();
    }
  };

  const onClickOpenModal = (evt) => {
    const target = evt.currentTarget;
    activeModal = document.querySelector(`#${target.dataset.modalId}`);

    if (activeModal !== null) {
      activeModal.parentNode.classList.add("active");
      document.addEventListener("click", onOverlayClickCloseModal);
      document.addEventListener("keydown", onEscCloseModal);

      closeButton = activeModal.querySelector(".close-modal-btn"); // Обновление closeButton
      if (closeButton) {
        closeButton.addEventListener("click", closeModal);
      }
    }
  };

  modalOpeners.forEach((btn) => {
    btn.addEventListener("click", onClickOpenModal);
  });
}


// Находим элементы кнопок и модального окна
const lwModalOverlay = document.querySelector('.lw-modal-overlay');
const lwFormCheckBtn = document.querySelector('.lw-form__check-btn');
const lwFormConfirmCheckBtn = document.querySelector('.lw-form-confirm__check-btn');
const closeModalBtn = document.querySelector('.close-modal-btn');

// Функция для удаления класса "active" у lw-modal-overlay и закрытия модального окна
const removeActiveClassAndCloseModal = () => {
  lwModalOverlay.classList.remove('active');
};


// Функция для закрытия модального окна при клике на оверлей
const onOverlayClickCloseModal = (evt) => {
  if (evt.target.classList.contains("lw-modal-overlay")) {
    removeActiveClassAndCloseModal();
  }
};

// Функция для закрытия модального окна при нажатии Esc
const onEscCloseModal = (evt) => {
  if (evt.key === "Escape" || evt.keyCode === 27) {
    removeActiveClassAndCloseModal();
  }
};

// Добавляем обработчики событий для кнопок
if (lwFormCheckBtn) {
  lwFormCheckBtn.addEventListener('click', removeActiveClassAndCloseModal);
}

if (closeModalBtn) {
  closeModalBtn.addEventListener('click', removeActiveClassAndCloseModal);
}

// Добавляем обработчики для закрытия модального окна при клике на оверлей и нажатии Esc
lwModalOverlay.addEventListener('click', onOverlayClickCloseModal);
document.addEventListener('keydown', onEscCloseModal);
// Добавляем обработчики для закрытия модального окна при клике на оверлей и нажатии Esc
lwModalOverlay.addEventListener('click', onOverlayClickCloseModal);
document.addEventListener('keydown', onEscCloseModal);


document.addEventListener("DOMContentLoaded", function () {

  var contactForm = document.querySelector('.contacts__footer-modal');
  var modalOverlay = document.querySelector('.lw-modal-overlay');

  if (contactForm) {
    contactForm.addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent the form from submitting normally

      // Check if all fields are filled
      var email_modal = document.querySelector('.email_modal').value;
      var phone_modal = document.querySelector('.tel_modal').value;

      if (email_modal && phone_modal) { // If all fields are filled, show the modal
        // Получаем id модального окна из атрибута data-modal-id кнопки
        const modalId = form_download_btn.getAttribute('data-modal-id');
        console.log(modalId)
        // Находим модальное окно по его id
        const modal = document.getElementById(modalId);

        // Отображаем модальное окно, добавляя класс 'active' к его родительскому элементу
        modal.parentNode.classList.add('active');

        // У самого себя (кнопки) удаляем класс 'active'
        this.classList.remove('active');
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const lwModalOverlays = document.querySelectorAll('.lw-modal-overlay');
  const closeButtons = document.querySelectorAll('.close-modal-btn');
  const lwFormConfirmCheckBtn = document.querySelector('.lw-form-confirm__check-btn');
  const lwModalEscCloseBtns = document.querySelectorAll('.lw-modal');

  // Функция для удаления класса "active" у всех lw-modal-overlay
  const removeActiveClassFromOverlays = () => {
    lwModalOverlays.forEach(function (overlay) {
      overlay.classList.remove('active');
    });
  };

  // Обработчик события клика на кнопки close-modal-btn
  if (closeButtons) {
    closeButtons.forEach(function (button) {
      button.addEventListener('click', removeActiveClassFromOverlays);
    });
  }

  // Обработчик события клика на кнопку lw-form-confirm__check-btn
  if (lwFormConfirmCheckBtn) {
    lwFormConfirmCheckBtn.addEventListener('click', removeActiveClassFromOverlays);
  }

  // Функция для закрытия модального окна при клике на оверлей
  const onOverlayClickCloseModal = (evt) => {
    if (evt.target.classList.contains("lw-modal-overlay")) {
      removeActiveClassFromOverlays();
    }
  };

  // Функция для закрытия модального окна при нажатии Esc
  const onEscCloseModal = (evt) => {
    if (evt.key === "Escape" || evt.keyCode === 27) {
      removeActiveClassFromOverlays();
    }
  };

  // Обработчик события для закрытия модального окна при клике на оверлей
  lwModalOverlays.forEach(function (overlay) {
    overlay.addEventListener('click', onOverlayClickCloseModal);
  });

  // Обработчик события для закрытия модального окна при нажатии Esc
  document.addEventListener('keydown', onEscCloseModal);
});

document.addEventListener("DOMContentLoaded", function () {
  // Проверяем, существует ли элемент на текущей странице
  const element = document.querySelector(".main-header-index");
  if (element) {
    // Добавляем обработчик события прокрутки страницы
    window.addEventListener("scroll", function () {
      // Если прокрутка больше или равна 800px
      if (window.scrollY >= 800) {
        // Присваиваем класс scrolled
        element.classList.add("scrolled");
      } else {
        // Удаляем класс scrolled
        element.classList.remove("scrolled");
      }
    });
  }
});

const langBtns = document.querySelectorAll(".language-btn");
const langBtn = document.querySelector(".language-btn-index");
const off_plan_Btn = document.querySelector(".product-off_plan__filter-btn");
const btn_open_close_filter = document.querySelector(".btn-open-close-filter");
const desc_filters_adv = document.querySelector(".desc-filters-adv");
const filters_filter_dekstop = document.querySelector(
  ".product__filters-filter-dekstop"
);
const off_plan_list = document.querySelector(".product-off_plan__list");
const filters_objects_decktop = document.querySelector(
  ".product__filters-objects-decktop"
);
const filters_objects_tablet = document.querySelector(
  ".product__filters-objects-tablet"
);
const amenities_group = document.querySelector(".amenities__group");
const off_plan_filter_reset = document.querySelector(".off_plan__filter-reset");
const hero_list_alt = document.querySelector(".hero__list--alt");

// if (langBtns) {
//   langBtns.forEach(function (button) {
//     button.addEventListener("click", function () {
//       if (button.textContent.trim() === "eng") {
//         button.textContent = "rus";
//         // Здесь можно добавить код для смены языка на русский
//       } else {
//         button.textContent = "eng";
//         // Здесь можно добавить код для смены языка на английский
//       }
//     });
//   });
// }

// if (langBtn) {
//   langBtn.addEventListener("click", function () {
//     if (langBtn.textContent.trim() === "eng") {
//       langBtn.textContent = "rus";
//       // Здесь можно добавить код для смены языка на русский
//     } else {
//       langBtn.textContent = "eng";
//       // Здесь можно добавить код для смены языка на английский
//     }
//   });
// }

if (filters_filter_dekstop) {
  filters_filter_dekstop.addEventListener("click", function () {
    if(filters_filter_dekstop.classList.contains('active')){
      filters_filter_dekstop.classList.remove('active')
      amenities_group.classList.remove('active')
    }else{
      filters_filter_dekstop.classList.add('active')
      amenities_group.classList.add('active')

    }
    if (filters_filter_dekstop.innerText === "HIDE ALL FILTERS") {
      filters_filter_dekstop.innerText = "Show all filters";
    } else {
      filters_filter_dekstop.innerText = "HIDE ALL FILTERS";
    }
  });

}

if (off_plan_Btn) {
  off_plan_Btn.addEventListener("click", function () {
    off_plan_Btn.classList.toggle("active");
    if (off_plan_list) {
      off_plan_list.classList.toggle("active");
    }
    if (filters_objects_decktop) {
      filters_objects_decktop.classList.toggle("active");
    }
    if (filters_objects_tablet) {
      filters_objects_tablet.classList.toggle("active");
    }
    if (amenities_group) {
      amenities_group.classList.toggle("tablet-active");
    }
    if (off_plan_filter_reset) {
      off_plan_filter_reset.classList.toggle("active");
    }
    if (hero_list_alt) {
      // hero_list_alt.classList.toggle("active");
    }

    if (off_plan_Btn.textContent.trim() === "Filter") {
      off_plan_Btn.textContent = "Hide";
      // Здесь можно добавить код для смены языка на русский
    } else if (off_plan_Btn.textContent.trim() === "Advanced Filter") {
      // Если текущий текст кнопки уже "Advanced Filter", не изменяем его
    } else {
      off_plan_Btn.textContent = "Filter"
      // Здесь можно добавить код для смены языка на английский
    }
  });
}
if (btn_open_close_filter) {
  btn_open_close_filter.addEventListener("click", function () {
    btn_open_close_filter.classList.toggle("active");
    if (desc_filters_adv) {
      desc_filters_adv.classList.toggle("active");
    }
    if (filters_objects_decktop) {
      filters_objects_decktop.classList.toggle("active");
    }
    if (filters_objects_tablet) {
      filters_objects_tablet.classList.toggle("active");
    }
    if (amenities_group) {
      amenities_group.classList.toggle("tablet-active");
    }
    if (off_plan_filter_reset) {
      off_plan_filter_reset.classList.toggle("active");
    }
    if (hero_list_alt) {
      hero_list_alt.classList.toggle("active");
    }

    if (btn_open_close_filter.textContent.trim() === "hide") {
      btn_open_close_filter.textContent = "FILTER";
      // Здесь можно добавить код для смены языка на русский
    } else if (btn_open_close_filter.textContent.trim() === "Advanced Filter") {
      // Если текущий текст кнопки уже "Advanced Filter", не изменяем его
    } else {
      btn_open_close_filter.textContent = "hide";
      // Здесь можно добавить код для смены языка на английский
    }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  // Даем небольшую задержку для загрузки всех элементов в DOM
  setTimeout(function () {
    // Проверяем наличие элементов с классом .select2-selection--multiple
    var select2SelectionMultiple = document.querySelectorAll(
      ".select2-selection--multiple"
    );

    if (select2SelectionMultiple.length > 0) {
      // Если элементы найдены, применяем класс .alternative к ним
      select2SelectionMultiple.forEach(function (element) {
        element.classList.add("alternative");
      });
    } else {
      // Если элементы не найдены, выводим сообщение об этом
      console.log(
        "Элементы с классом .select2-selection--multiple не найдены."
      );
    }
  }, 1000);
});

// Инициализируем Select2
$(document).ready(function () {
  $(".js-example-js-example-basic-single").select2();
});

document.addEventListener("DOMContentLoaded", function () {
  var tabs = document.querySelectorAll(".property-location-btn");

  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      var location = this.getAttribute("data-location");
      console.log(location);
      var iframeSrc =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.126044850566!2d55.15394027520808!3d25.097594277775183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b43d5cfeb55%3A0x625c793d7f78c700!2sConcord%20Tower!5e0!3m2!1sen!2skg!4v1712901025385!5m2!1sen!2skg";

      // Здесь можно изменить src iframe в соответствии с выбранным местоположением
      switch (location) {
        case "schools":
          iframeSrc =
            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10953.443496423291!2d55.158139888356885!3d25.092084244298167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b7d75948555%3A0x3a43b3073c1b3901!2sRegent%20International%20School!5e0!3m2!1sen!2skg!4v1713002340279!5m2!1sen!2skg";
          break;
        case "shopping-malls":
          // И так далее для каждого местоположения
          iframeSrc =
            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14451.99040473552!2d55.150246010708635!3d25.101942541550564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b65ec3fce9b%3A0xab198f4b1f145413!2sRetail%20Access!5e0!3m2!1sen!2skg!4v1713002524542!5m2!1sen!2skg";
          break;
        case "hospitals":
          // И так далее для каждого местоположения
          iframeSrc =
            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8300.430557039172!2d55.17063425264071!3d25.10279467085312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b759505704b%3A0x1b0a5d49c2785416!2sAl%20Zahra%20Hospital%20Dubai!5e0!3m2!1sen!2skg!4v1713002679974!5m2!1sen!2skg";
          break;
        case "restaurants":
          // И так далее для каждого местоположения
          iframeSrc =
            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14451.990236633912!2d55.15033185482022!3d25.101943964140943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b186201cbe7%3A0x215e449e7c0bae3a!2sMelt%20and%20Roast%20Restaurant!5e0!3m2!1sen!2skg!4v1713002437422!5m2!1sen!2skg";
          break;
        case "metro-stations":
          // И так далее для каждого местоположения
          iframeSrc =
            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10952.537165817814!2d55.15831797654837!3d25.102206662555528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b717eece5e5%3A0x107d0abcc871c72f!2sDubai%20Internet%20City%20Metro%20Station!5e0!3m2!1sen!2skg!4v1713002247031!5m2!1sen!2skg";
          break;
      }

      var iframe = document.querySelector(".location_iframe");
      iframe.src = iframeSrc;

      // Убираем класс active у всех табов и добавляем его только к текущему
      tabs.forEach(function (tab) {
        tab.classList.remove("active");
      });
      this.classList.add("active");
    });
  });
});

$(".js-example-js-example-basic-single").select2();

$(".js-example-js-example-basic-single").on(
  "select2:opening select2:closing",
  function (event) {
    var $searchfield = $(this).parent().find(".select2-search__field");
    $searchfield.prop("disabled", true);
  }
);
$('[multiple]').each(function(){
  $(this).on('select2:select', (e)=>{
    if(e.params.data.element.hasAttribute('data-all')){

      $(this).find('option').prop('selected', true);
      $(this).trigger('change')
      $(this).parent().addClass('selected-all')
      return;
    }

    if($(this).find('option:not(:selected)').length <= 1){
      $(this).find('option[data-all]').prop('selected', true);
      $(this).trigger('change')
      $(this).parent().removeClass('selected-all');
    }

  })
  $(this).on('select2:unselect', (e)=>{
    if(e.params.data.element.hasAttribute('data-all')){
      $(this).find('option[data-all]').prop('selected', false);
      $(this).find('option').prop('selected', false);
    }else{
      $(this).find('option[data-all]').prop('selected', false);
    }
    $(this).parent().removeClass('selected-all');
    $(this).trigger('change')
  })
})

document.addEventListener("DOMContentLoaded", function () {
  var lastScrollTop = 0;
  var headers = document.querySelectorAll(".main-header, .main-header-index");
  var navs = document.querySelectorAll(".main-nav");
  var hero = document.querySelector(".hero");
  var headerHeight = headers[0].offsetHeight; // Предполагаем, что оба заголовка имеют одинаковую высоту
  var didScroll;
  var delta = 5; // количество пикселей, прокрученных вниз, прежде чем начать показывать/скрывать заголовок

  window.addEventListener("scroll", function () {
    didScroll = true;
  });

  setInterval(function () {
    if (didScroll) {
      headers.forEach(function (header) {
        hasScrolled(header);
      });
      didScroll = false;
    }
  }, 250);

  function hasScrolled(header) {
    var st = window.pageYOffset || document.documentElement.scrollTop;

    // Убедимся, что скролл на достаточное расстояние
    if (Math.abs(lastScrollTop - st) <= delta) return;

    var isMobileActive = false;
    navs.forEach(function (nav) {
      if (nav.classList.contains('mobile-active')) {
        isMobileActive = true;
      }
    });

    // Если у .main-nav есть класс .mobile-active, просто выходим из функции
    if (isMobileActive) return;

    // Если текущая прокрутка больше предыдущей, значит мы прокручиваем вниз
    if (st > lastScrollTop) {
      // Прокрутка вниз
      header.style.transform = "translateY(-100%)";
      // hero.classList.add('active');
    } else {
      // Прокрутка вверх
      header.style.transform = "translateY(0)";
      // hero.classList.remove('active');
    }

    lastScrollTop = st;
  }
});


document.addEventListener("DOMContentLoaded", function () {
  // Получаем все кнопки для сброса фильтров
  var resetFiltersBtns = document.querySelectorAll('.product__filters-reset');

  // Получаем все элементы фильтров, которые нужно сбросить
  var selectElements = document.querySelectorAll('.js-example-js-example-basic-single');
  var inputElements = document.querySelectorAll('.hero__list-item-price input[type="number"]');

  // Получаем все кнопки фильтров
  var filterButtons = document.querySelectorAll('.product__btns-btn');

  // Получаем все кнопки фильтров
  var filterButtonsCategory = document.querySelectorAll('.filter__btns-btn-category');

  // Получаем все кнопки фильтров
  var filterButtonsStatus = document.querySelectorAll('.filter__btns-btn-status');

  // Создаем массив для хранения начального состояния кнопок фильтров
  var initialButtonState = [];
  filterButtons.forEach(function (button) {
    initialButtonState.push(button.classList.contains('active'));
  });

  // Добавляем обработчик события клика для каждой кнопки сброса фильтров
  resetFiltersBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      location.reload();
      // Сбрасываем значения для каждого элемента фильтра Select2
      selectElements.forEach(function (select) {
        var select2 = $(select).data('select2');
        if (select2) {
          select2.$element.val(null).trigger('change.select2');
        }
      });

      // Сбрасываем введенные значения в полях ввода
      inputElements.forEach(function (input) {
        input.value = '';
      });

      // Восстанавливаем начальное активное состояние для кнопок фильтров
      filterButtons.forEach(function (button, index) {
        if (initialButtonState[index]) {
          button.classList.add('active');
        } else {
          button.classList.remove('active');
        }
      });
      // Восстанавливаем начальное активное состояние для кнопок фильтров
      filterButtonsCategory.forEach(function (button, index) {
        if (initialButtonState[index]) {
          button.classList.add('active');
        } else {
          button.classList.remove('active');
        }
      });
      // Восстанавливаем начальное активное состояние для кнопок фильтров
      filterButtonsStatus.forEach(function (button, index) {
        if (initialButtonState[index]) {
          button.classList.add('active');
        } else {
          button.classList.remove('active');
        }
      });
    });
  });
});


const fileInput = document.getElementById('fileInput');

if (fileInput) {
  fileInput.addEventListener('change', function () {
    const fileList = this.files;
    if (fileList.length > 0) {
      // Если файл выбран, показать его имя
      document.querySelector('.main-btn-label').innerText = fileList[0].name;
    } else {
      // Если файл не выбран, вернуть исходный текст
      document.querySelector('.main-btn-label').innerText = 'Attach photos';
    }
  });
}

$(document).ready(function () {
  $('.js-example-basic-single').select2();
});


const fileInput_2 = document.getElementById('fileInput_2');

if (fileInput_2) {
  fileInput_2.addEventListener('change', function () {
    const fileList = this.files;
    if (fileList.length > 0) {
      // Если файл выбран, показать его имя
      document.querySelector('.main-btn-label').innerText = fileList[0].name;
    } else {
      // Если файл не выбран, вернуть исходный текст
      document.querySelector('.main-btn-label').innerText = 'Attach file';
    }
  });
}


// console.log(selectResidential);
// console.log(selectCommercial);
document.addEventListener('DOMContentLoaded', function () {
  $('.js-example-basic-single').on('change', function (e) {
    let selectResidential = document.querySelectorAll('.select-residential');
    let selectCommercial = document.querySelectorAll('.select-сommercial');
    // Проверяем наличие элементов, прежде чем работать с их классами
    if (selectResidential && selectCommercial) {
      if ($(this).val() === 'commercial') {
        // Если выбран вариант "Commercial", добавляем класс active к selectCommercial
        console.log(selectCommercial)
        selectResidential.forEach(item => {
          item.classList.remove('active');
        })
        selectCommercial.forEach(item => {
          item.classList.add('active');
        })
      } else {
        // Если выбран вариант "Residential", добавляем класс active к selectResidential
        selectResidential.forEach(item => {
          item.classList.add('active');
        })
        selectCommercial.forEach(item => {
          item.classList.remove('active');
        })
      }
    } else {
      console.error('Элементы select-residential и select-commercial не найдены');
    }
  });
  $('.filter__btns-btn-status').on('click', function () {
    let selectResidential = document.querySelectorAll('.select-residential');
    let selectCommercial = document.querySelectorAll('.select-сommercial');
    // Проверяем наличие элементов, прежде чем работать с их классами
    if (selectResidential && selectCommercial) {
      if ($(this).data('status') === 'commercial') {
        // Если выбран вариант "Commercial", добавляем класс active к selectCommercial
        selectResidential.forEach(item => {
          item.classList.remove('active');
        })
        selectCommercial.forEach(item => {
          item.classList.add('active');
        })
      } else {
        // Если выбран вариант "Residential", добавляем класс active к selectResidential
        selectResidential.forEach(item => {
          item.classList.add('active');
        })
        selectCommercial.forEach(item => {
          item.classList.remove('active');
        })
      }
    } else {
      console.error('Элементы select-residential и select-commercial не найдены');
    }
  });

});

document.addEventListener("DOMContentLoaded", function () {
  // const residentialBtn = document.querySelector('.filter__btns-btn-category:nth-child(1)');
  // const commercialBtn = document.querySelector('.filter__btns-btn-category:nth-child(2)');

  const residentialBtn = document.querySelector('.filter__btns-btn-category.res');
  const commercialBtn = document.querySelector('.filter__btns-btn-category.com');
  const allBtn = document.querySelector('.filter__btns-btn-category.all');
  let selectResidential = document.querySelectorAll('.select-residential');
  let selectCommercial = document.querySelectorAll('.select-сommercial');

  allBtn && allBtn.addEventListener('click', function () {
    // Убираем класс active у всех кнопок и элементов select
    console.log('test4');
    selectCommercial.forEach(item => {
      item.classList.remove('active');
    })
    selectResidential.forEach(item => {
      item.classList.add('active');
    })
  });

  residentialBtn && residentialBtn.addEventListener('click', function () {
    // Убираем класс active у всех кнопок и элементов select
    console.log('test4');
    selectCommercial.forEach(item => {
      item.classList.remove('active');
    })
    selectResidential.forEach(item => {
      item.classList.add('active');
    })
  });

  commercialBtn && commercialBtn.addEventListener('click', function () {
    // Убираем класс active у всех кнопок и элементов select
    selectResidential.forEach(item => {
      item.classList.remove('active');
    })
    selectCommercial.forEach(item => {
      item.classList.add('active');
    })
  });
});
Fancybox.bind();
// /* 11 days */

// document.addEventListener('DOMContentLoaded', (event) => {
//     const container = document.getElementById('date-buttons-container');

//     // Function to format date
//     function formatDate(date) {
//         const options = { day: 'numeric', month: 'short', weekday: 'short' };
//         return date.toLocaleDateString('en-US', options);
//     }

//     // Function to create buttons for next 11 days
//     function createButtons() {
//         const today = new Date();
//         for (let i = 0; i < 11; i++) {
//             const futureDate = new Date(today);
//             futureDate.setDate(today.getDate() + i);

//             const button = document.createElement('button');
//             button.type = 'button';
//             button.className = 'filter__btns-btn-category product__btns-btn';
//             button.textContent = formatDate(futureDate);

//             container.appendChild(button);
//         }
//     }

//     createButtons();
// });

