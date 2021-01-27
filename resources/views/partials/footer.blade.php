<footer>
  <div class="footer-label dark-div">
    <div class="f-label-content ft-social">
      <ul class="social-accounts  social-listing list-inline mini-custom ">
        <li class="facebook">
          <a target="_blank" href="#" title="Facebook">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="twitter">
          <a target="_blank" href="#" title="Twitter">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="google-plus">
          <a target="_blank" href="#" title="Google Plus">
            <i class="fa fa-google-plus"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="footer-inner dark-div">
    <div class="footer-sidebar">
      <div class="container container-1340">
        <div class="row control-sidebar">
          <aside id="text-15" class=" col-md-4 widget widget_text module widget-col">
            <div class="widget-inner">
              <h2 class="widget-title h4">QUIENES SOMOS</h2>
              <div class="textwidget">
                <p style="margin-bottom: 20px;">
                  Somos una empresa comprometida con atender las necesidades de nuestros clientes. Proveemos la solución en cuestiones de suministro de refacciones.
                </p>
              </div>
            </div>
          </aside>

          <aside id="nav_menu-4" class=" col-md-4 widget widget_nav_menu module widget-col">
            <div class="widget-inner">
              <h2 class="widget-title h4">PRODUCTOS</h2>
              <div class="menu-edd-products-footer-container">
                <ul id="menu-edd-products-footer" class="menu">
                  @foreach($supplies_footer as $supplie)
                    <li id="menu-item-7408" class="menu-item menu-item-type-post_type menu-item-object-download menu-item-7408">
                      <a href="{{ route('products.show', [
                        'manufacturer'=> $supplie->manufacturer_slug,
                        'number' => $supplie->number_slug,
                        ]) }}">{{ $supplie->number }}</a>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </aside>

          <aside id="text-29" class=" col-md-4 widget widget_text module widget-col">
            <div class="widget-inner">
              <h2 class="widget-title h4">ATENCION</h2>
              <div class="textwidget">    
                <div id="c_schedule_3394" class="ct-sc-schedule-box">
                  <div class="ct-sc-schedule-box-content">
                    <div class="ct-sc-schedule-box-table">
                      <div class="ct-sc-schedule-box-cell">
                        <div>
                          <i class="fa fa-clock-o"></i>LUN - VIE
                        </div>
                      </div>
                      <div class="ct-sc-schedule-box-cell">
                        <div>9AM – 6PM</div>
                      </div>
                    </div>
                    <div class="ct-sc-schedule-box-table">
                      <div class="ct-sc-schedule-box-cell">
                        <div>
                          <i class="fa fa-clock-o"></i>SAB &amp; DOM
                        </div>
                      </div>
                      <div class="ct-sc-schedule-box-cell">
                        <div>CERRADO</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-info dark-div">
    <div class="container container-1340">
      <div class="row">
        <div class="col-md-6 col-sm-6 copyright font-1">
          ©2020 MRODistribuidora
        </div>
        <div class="col-md-6 col-sm-6 link font-1">
          <div class="menu-footer-menu-container">
            <ul id="menu-footer-menu" class="menu">
              <li id="menu-item-4895" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4895">
                <a href="/">INICIO</a>
              </li>
              <li id="menu-item-5330" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5330">
                <a href="/about">NOSOTROS</a>
              </li>
              <li id="menu-item-4897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4897">
                <a href="/contact">CONTACTO</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/590cebcf64f23d19a89b0fa1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->