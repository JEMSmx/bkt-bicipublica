<footer class="j-workspace">
    <div class="j-wrap">
      <div class="contact-ways">
        <div class="footer-unit social-networks">
          <h3>Redes sociales</h3>
          <hr>
          <ul>
            <li>
              <a href="https://www.facebook.com/bktbp" target="_blank" title="Facebook BKT Bicipublica">
                <img src="<?php echo $config->urls->templates; ?>static/455375-1495344734/images/icono-facebook.svg" alt="Síguenos en facebok">
              </a>
            </li>
            <li>
              <a href="https://twitter.com/BKTbicipublica" target="_blank" title="Twitter Facebook BKT Bici pública">
                <img src="<?php echo $config->urls->templates; ?>static/455375-1495344734/images/icono-twitter.svg" alt="Síguenos en twitter">
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-unit footer-contact">
          <h3>Contacto</h3>
          <hr>
          <p>
            <a href="tel:3336136383" title="Teléfono Facebook BKT Bicipublica">(33) 3613 6383</a>
            <br>
            <a href="mailto:info@bktbicipublica.com" title="Contacto BKT Bici pública">info@bktbicipublica.com</a>
          </p>
        </div>
        <div class="footer-unit location">
          <h3>Ubicación</h3>
          <hr>
          <p>
            Av. Federalismo 403 Col. Centro C.P 44100 <br>
            Guadalajara, México.
          </p>
        </div>
      </div>
      <div class="footer-bottom" style="margin: 32px 0;">
         <p style="color: #00cae4;font-weight: 400;font-size: 20px;margin-right: 295px;white-space: nowrap;text-align: 400px;">Miembro de:</p>
        <img src="/site/templates/assets/images/logo_nabsa.svg" width="417px" heigth="179px">
      </div>
      <div class="footer-bottom">
        <svg version="1.0" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 80.6 44.5" style="enable-background:new 0 0 80.6 44.5;" xml:space="preserve">
          <g>
            <path class="st0" d="M52.2,9.2c1.9-1.9,3.9-1.9,4.5-1.9h9c-1.2,1.6-2.6,3.5-2.6,3.5h4.4l3.8-5.4L67.5,0h-4.4c0,0,1.5,2,2.7,3.6
              h-9.1c-3,0-5.2,1-7.2,3L30.5,26.2c-0.5,0.5-1.1,0.9-1.7,1.2c-1.2-6.8-7.1-11.9-14.3-11.9C6.5,15.5,0,22,0,30
              c0,8,6.5,14.5,14.5,14.5c7.5,0,13.7-5.7,14.4-13.1c1.6-0.5,3-1.3,4.2-2.5L52.2,9.2z M14.5,40.6C8.6,40.6,3.8,35.9,3.8,30
              s4.8-10.6,10.6-10.6c5.2,0,9.6,3.8,10.5,8.7l-12.8,0l2.7,3.8H25C24.1,36.8,19.7,40.6,14.5,40.6z"/>
            <path class="st0" d="M30.5,9.2l5.6,5.7l2.6-2.6l-5.6-5.7c-1.9-1.9-4.4-3-7.2-3H14.9l-2.7,3.7l13.8,0C27.6,7.4,29.3,8,30.5,9.2z"/>
            <path class="st0" d="M66.1,15.5c-6.6,0-12.3,4.5-14,10.6l-5.4-5.5l-2.6,2.6l5.5,5.6c0.6,0.6,1.3,1.2,2,1.6c0.2,7.8,6.6,14,14.5,14
              c8,0,14.5-6.5,14.5-14.5C80.6,22,74.1,15.5,66.1,15.5z M66.1,40.6c-5.3,0-9.6-3.8-10.5-8.9c0.4,0,0.8,0.1,1.2,0.1h9.1
              c-1.2,1.7-2.7,3.6-2.7,3.6h4.4l3.8-5.4l-3.8-5.4h-4.4c0,0,1.4,1.9,2.6,3.5h-9c-0.2,0-0.6,0-1.1-0.1c0.9-4.9,5.3-8.7,10.5-8.7
              c5.9,0,10.6,4.8,10.6,10.6S72,40.6,66.1,40.6z"/>
          </g>
        </svg>
                <p>® BKT Bici pública Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>
  <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script>
    function toggleHeaderResponsive() {
      $('header').toggleClass("mobile-active")
    }
    document.getElementById("menu-icon").addEventListener('click', toggleHeaderResponsive);
    document.getElementById("close-icon").addEventListener('click', toggleHeaderResponsive);
    AOS.init({
      offset: 200,
      duration: 400,
      easing: 'ease-in',
      delay: 100,
    });
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-70250129-15', 'auto');
  ga('send', 'pageview');
  </script>
</body>
</html>