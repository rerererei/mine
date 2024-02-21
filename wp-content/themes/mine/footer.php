    <footer class="mine-footer">
      <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/MINE-03.webp" style="margin:1px">
      </div>
      <p>〒759-2214</p>
      <p>山口県美祢市大嶺町奥分170</p>
      <br>
      <p class="tel-str">お気軽にお電話ください。</p>
      <p class="telnum">0837-52-2100</p>
      <p class="tel-str">お問合せ対応時間10:00~17:00</p>

    </footer>
    <?php wp_footer(); ?>
    <!--システム・プラグイン用-->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
      $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        draggable: false, 
        swipe: false,
      });
    </script>    
  </body>
</html>