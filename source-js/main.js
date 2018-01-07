jQuery(document).ready(function () {
  jQuery('.main-slider').slick({
    infinite: true,
    speed: 1500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    appendArrows: false,
    autoplaySpeed: 3000
  })
  jQuery('#popup-main').click(function (event) {
    event.preventDefault()

    jQuery('#popup1').addClass('active')
    jQuery('#overlay').fadeIn()
    jQuery('#popup-close, #overlay').click(function (event) {
      event.preventDefault()
      jQuery('#popup1').removeClass('active')
      jQuery('#overlay').fadeOut()
    })

  })

})

//jQuery(document).ready(function () {
//Скрыть PopUp при загрузке страницы
//  PopUpHide()
//})

//Функция отображения PopUp
//function PopUpShow () {
// jQuery('#popup1').show()
//}

//Функция скрытия PopUp
//function PopUpHide () {
// jQuery('#popup1').hide()
//}


