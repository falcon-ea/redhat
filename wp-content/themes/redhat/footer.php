<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redhat
 */

?>

	<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__logo"><img src="<?php the_field('footer_logo', 'options');?>" alt="RedhHat"></div>
      <div class="footer__info"> 
        <div class="footer__info-sert"><?php the_field('footer_info-sert', 'options');?></div><a class="footer__info-conf" href="#">Политика конфиденциальности</a>
      </div>
      <div class="footer__soc"><a class="footer__soc-icon footer__soc-icon_inst" href="#"></a><a class="footer__soc-icon footer__soc-icon_vk" href="#"></a></div>
      <div class="footer__contacts"><a class="footer__contacts-phone" href="tel:+77018295099"><?php the_field('footer_contacts-phone', 'options');?></a>
        <div class="footer__contacts-address"><?php the_field('footer_contacts-address', 'options');?></div>
      </div><a class="btn footer__btn" href="#"> <span><?php the_field('footer_btn', 'options');?></span></a><a class="footer__info-conf footer__info-conf_mobile" href="#">Политика конфиденциальности</a>
    </div>
  </div>
</footer>
<div class="overlay"></div>
<div class="popup">
  <div class="popup__close"></div>
  <form class="popup__form" id="popup-form">
    <div class="popup__form-title">Получите подарок</div>
    <input type="hidden" name="title" value="Получите подарок" id="form-title">
    <div class="popup__form-subtitle">Мы перезвоним в течение 5 минут</div>
    <label class="popup__form-label" for="popup-name"><span class="popup__form-icon"></span>
      <input class="popup__form-input" type="text" name="name" placeholder="Введите Ваше имя" required id="popup-name">
    </label>
    <label class="popup__form-label" for="popup-tel"><span class="popup__form-icon"></span>
      <input class="popup__form-input" type="tel" name="tel" placeholder="+7 (___) ___-__-__" required id="popup-tel">
    </label>
    <input class="btn popup__form-btn" type="submit" value="Получить подарок">
    <div class="popup__form-desc">Нажимая кнопку вы даете согласие на обработку <a href="#">персональных данных</a></div>
  </form>
  <div class="popup__thx">
    <div class="popup__thx-title">Спасибо за обращение</div>
    <div class="popup__thx-subtitle">Мы перезвоним в течение 5 минут</div>
  </div>
  <div class="popup__conf">
    Разнообразный и богатый опыт рамки и место обучения кадров требуют от нас анализа направлений прогрессивного развития. Таким образом новая модель организационной деятельности позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач. Товарищи! рамки и место обучения кадров играет важную роль в формировании модели развития. С другой стороны начало повседневной работы по формированию позиции позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений.
    Разнообразный и богатый опыт рамки и место обучения кадров требуют от нас анализа направлений прогрессивного развития. Таким образом новая модель организационной деятельности позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач. Товарищи! рамки и место обучения кадров играет важную роль в формировании модели развития. С другой стороны начало повседневной работы по формированию позиции позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений.
    Разнообразный и богатый опыт рамки и место обучения кадров требуют от нас анализа направлений прогрессивного развития. Таким образом новая модель организационной деятельности позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач. Товарищи! рамки и место обучения кадров играет важную роль в формировании модели развития. С другой стороны начало повседневной работы по формированию позиции позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений.
  </div>
</div>
    </div>
  <script type="text/javascript" src="js/main.js"></script></body>
  <?php wp_footer(); ?>
</html>
