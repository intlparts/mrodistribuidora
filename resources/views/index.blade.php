@extends('layouts.app')
@section('content')
<div id="body-wrap" class="enable-lazy-load">
        <div id="wrap">
            <header class="config-header-list-page">
                <div class="cactus-nav style-2">
                    <div id="main-menu" class="set-sticky-menu no-main-menu-absolute" style="height: 91px;">
                        <nav class="navbar navbar-default">
                            <div class="container container-1340">
                                <div class="main-menu-wrap">
                                    <ul class="nav navbar-nav logo-infomation">
                                        <li>
                                            <a href="/" title="Inicio MRODistribuidora">
                                                <img src="assets/images/Logo.png" alt="Logo MRODistribuidora">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right search-drop-down">
                                        <li>
                                            <a href="javascript:;" class="open-search-main-menu"><i class="fa fa-search"></i><i class="fa fa-times"></i></a>
                                            <ul class="search-main-menu dark-div">
                                                <li>
                                                    <form action="/search" method="get">
                                                        <input type="text" placeholder="buscar..." name="search">
                                                        <i class="fa fa-search"></i>
                                                        <input type="submit" value="Search">
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav open-menu-mobile">
                                        <li>
                                            <a href="javascript:;">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav cactus-main-menu">
                                        <li id="mega-menu-item-1636" class=" menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                            <a href="/">INICIO</i></a>
                                        </li>
                                        <li id="mega-menu-item-4155" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                            <a href="/productos">PRODUCTOS</i></a>
                                        </li>
                                        <li id="mega-menu-item-6328" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                            <a href="/about">QUIENES SOMOS</i></a>
                                        </li>
                                        <li id="mega-menu-item-5661" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                            <a href="/contacto">CONTACTO</i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div id="main-nav"> 
                        <nav class="navbar navbar-default">
                            <div class="container container-1340">
                                <ul class="nav navbar-nav logo-infomation">
                                    <li>
                                        <a href="/" title="Logo MRODistribuidora">
                                        <img src="assets/images/Logo.png" alt="Logo MRODistribuidora"></a>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right header-mobile-sub-menu">
                                    <li>
                                        <a href="javascript:;">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>          
                            </div>
                        </nav>
                    </div>    
                </div>                       
            </header>
            <div id="cactus-body-container" class="edd-addon template-full-width">    
                <div class="cactus-sidebar-control ">
                    <div class="container container-1340-main">
                        <div class="">
                            <div class="header-v4-builder">
                                <div class="top-content-bar dark-div">
                                    <div class="top-content-bar-content">
                                        <p>
                                            <span class="ct-note-menu large bg-m-color-2" style="background-color:#c72c2c">HOT</span>                                                                                   
                                            <a href="">ESPECIALISTAS EN PROVEER PIEZAS DIFICILES DE ENCONTRAR</a>
                                        </p>
                                        <p>
                                            <span class="ct-note-menu large bg-m-color-2" style="background-color:#77b727">NUEVO</span>                                                                                   
                                            <a href="" title="BE THE FIRST TO OWN FULL SET OF HARRY PORTER">LOS MEJORES PROVEEDORES Y FABRICANTES</a>
                                        </p>
                                    </div>
                                </div><!-- top-content-bar dark-div -->
                                <div class="side-content">
                                    <div class="menu-content">
                                        <div class="cactus-e-menu ">
                                            <div class="cactus-e-menu-content">
                                                <div class="eco-menu-row">
                                                    <div class="eco-main-menu">
                                                        <div class="eco-all-categories">
                                                            <div class="all-cat-no-link">
                                                                <i class="fa fa-bars"></i>
                                                                <span class="menu-name">FABRICANTES</span>
                                                            </div>
                                                        </div>                        
                                                        <ul>
                                                            @foreach($suppliers as $supplier)
                                                            
                                                                <li id="nav-menu-item-5718" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom">
                                                                    <a href="{{ route('fabricantes.show', ['name'=> $supplier->slug]) }}" class="menu-link dropdown-toggle disabled main-menu-link">
                                                                        <span class="menu-name">{{ $supplier->name }}</span>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                            <li id="nav-menu-item-5718" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom">
                                                                <a href="{{ route('fabricantes.index') }}" class="menu-link dropdown-toggle disabled main-menu-link">
                                                                    <span class="menu-name">VER TODOS</span>
                                                                </a>
                                                            </li>
                                                        </ul>                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- menu-content -->
                                <div class="metro-content">
                                    <div class="dark-div metro-details">
                                        <div class="ct-shortcode-sliderv1">
                                            <div class="first-child">
                                                <div class="content-item">
                                                    <div class="content-padding">
                                                        <div class="absolute-img big-img">
                                                            <div class="table-content">
                                                                <div class="table-row-content">
                                                                    <div class="table-cell-content">
                                                                        <h3 style="font-size: 28px; line-height: 40px; letter-spacing: normal;">
                                                                            PRODUCTOS DE REFACCION<br>
                                                                            INDUSTRIAL EN<br>
                                                                            GUADALAJARA
                                                                        </h3>
                                                                        <a style="background-color:#fff; color: #ec358d; margin-top:-3px;" href="/productos" class="btn btn-default  btn-style-1 btn-style-2 btn-style-4"><span class="add-style"><span> PRODUCTOS </span></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="last-child">
                                                <div class="content-item">
                                                    <div class="content-padding">
                                                        <div class="absolute-img small-img-above"></div>
                                                    </div>
                                                </div>
                                                <div class="content-item">
                                                    <div class="content-padding">
                                                        <div class="absolute-img small-img-below"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- ct-shortcode-sliderv1 -->
                                    </div>
                                </div><!-- metro-content -->
                            </div><!-- side-content -->
                        </div><!-- header-v4-builder -->
                    </div><!-- col-md-12 main-content-col -->
            <!--Header V4 -->
                    <div class="row">
                        <div class="col-md-9 main-content-col">
                            <div class="main-content-col-body">
                                <div class="single-page-content single-content"> 
                                    <article id="post-4469" class="cactus-single-content post-4469 page type-page status-publish hentry">
                                        <div class="body-content">
                                            <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1448955352212 vc_row-has-fill" style="position: relative; left: -20px; box-sizing: border-box; width: 1354px; padding-left: 20px; padding-right: 20px;">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner vc_custom_1444971148869">
                                                        <div class="wpb_wrapper">    
                                                            <div id="iconbox_3543" class="ct-sc-icon-box style-4">
                                                                <div class="ct-sc-icon-box-content">     
                                                                    <div id="ct_custom_4861448878206" class="iconbox-item col-md-4">
                                                                        <div class="ct-sc-special-hd ct-s2">
                                                                            <h3 class="primary-title h4">
                                                                                <span class="icon fa fa-cube"></span>                        
                                                                                <span>ENVIOS EN DOS DIAS</span>                    
                                                                            </h3>
                                                                        </div>
                                                                        <div class="text-content">
                                                                            <p>Los clientes esperan recibir sus pedidos cuanto antes. Es por eso que nuestros vendedores estan trabajando siempre para cumplir este requisito.</p>
                                                                        </div>                         
                                                                    </div>
                                                                    <div id="ct_custom_8831448878206" class="iconbox-item col-md-4">
                                                                        <div class="ct-sc-special-hd ct-s2">
                                                                            <h3 class="primary-title h4">
                                                                                <span class="icon fa fa-smile-o"></span>                        
                                                                                <span>30 DIAS DE DEVOLUCION</span>                    
                                                                            </h3>
                                                                        </div>
                                                                        <div class="text-content">
                                                                            <p>Prometemos ser su socio de confianza para la tecnología al brindarle el asesoramiento y el servicio que se merece, todo a precios competitivos.</p>
                                                                        </div>                               
                                                                    </div>
                                                                    <div id="ct_custom_621448878206" class="iconbox-item col-md-4">
                                                                        <div class="ct-sc-special-hd ct-s2">
                                                                            <h3 class="primary-title h4">
                                                                                <span class="icon fa fa-globe"></span>                        <span>ENVIO AL MUNDO ENTERO</span>                    
                                                                            </h3>
                                                                        </div>
                                                                        <div class="text-content">
                                                                            <p>Compre en más de 850 de las mejores marcas. Además, obtenga su dosis diaria de las noticias más recientes sobre las empresas en todo el mundo.</p>
                                                                        </div>                     
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_row-full-width vc_clearfix"></div>
                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1457600871230">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h3 style="text-align: center;">Nuevos Insumos</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1457600876804" style="position: relative; left: 0px; box-sizing: border-box; width: 1354px; padding-bottom: 50px !important">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">        
                                                            <div class="ct-ft-gallery shortcode archive " data-item="5" data-auto-play="0" data-auto-play-speed="5000">
                                                                <div class="ct-post-gallery">
                                                                    <div class="cactus-listing-wrap">
                                                                        <div class="cactus-listing-config style-2">
                                                                            <div class="cactus-sub-wrap ct-post-gallery-wrapper slick-initialized slick-slider">
                                                                                <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: inline-block;">Previous</button>                                    
                                                                                <div aria-live="polite" class="slick-list draggable">
                                                                                    <div class="slick-track">
                                                                                        @foreach($supplies1 as $supplie)
                                                                                        <div class="cactus-post-item hentry slick-slide slick-current slick-active" style="width: 425px;" data-slick-index="0" aria-hidden="false">
                                                                                            <div class="entry-content">
                                                                                                <div class="picture">
                                                                                                    <div class="picture-content">
                                                                                                        <a href="{{ route('products.show', [
                                                                                                            'manufacturer'=> $supplie->manufacturer_slug,
                                                                                                            'number' => $supplie->number_slug,
                                                                                                            ]) }}" title="{{ $supplie->number }}">
                                                                                                        <div class="adaptive">
                                                                                                            <img src="{{ asset('assets/images/team.jpg') }}" alt="edd-demo-02" class="cactus-lazy ct-done" style="display: block;" width="460" height="307">
                                                                                                        </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="content">
                                                                                                    <!--Title (no title remove)-->
                                                                                                    <h3 class="h5 cactus-post-title entry-title">
                                                                                                        <a href="{{ route('products.show', [
																																																					'manufacturer'=> $supplie->manufacturer_slug,
																																																					'number' => $supplie->number,
																																																					]) }}" title="{{ $supplie->number }}" title="">{{ $supplie->number }}</a>
                                                                                                    </h3>
                                                                                                    <!--Title-->
                                                                                                    <div class="cactus-last-child"></div>
                                                                                                    <!--fix pixel no remove-->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                      
                                                                    <div class="cactus-slider-button-prev" style="display: none;"></div>
                                                                    <div class="cactus-slider-button-next" style="display: none;"></div>
                                                                </div>
                                                                <div class="cactus-slider-paper"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_row-full-width vc_clearfix"></div>
                                            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1457600876804" style="position: relative; left: 0px; box-sizing: border-box; width: 1354px; padding-bottom: 50px !important">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">        
                                                            <div class="ct-ft-gallery shortcode archive " data-item="5" data-auto-play="0" data-auto-play-speed="5000">
                                                                <div class="ct-post-gallery">
                                                                    <div class="cactus-listing-wrap">
                                                                        <div class="cactus-listing-config style-2">
                                                                            <div class="cactus-sub-wrap ct-post-gallery-wrapper slick-initialized slick-slider">
                                                                                <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: inline-block;">Previous</button>                                      
                                                                                <div aria-live="polite" class="slick-list draggable">
                                                                                    <div class="slick-track" style="opacity: 1; width: 4675px; transform: translate3d(-1275px, 0px, 0px);">
                                                                                        <div class="cactus-post-item hentry slick-slide slick-cloned" style="width: 425px;" data-slick-index="-3" aria-hidden="true">
                                                                                            <div class="entry-content">                                <div class="picture">
                                                                                                    <div class="picture-content">
                                                                                                        <a href="/" title="SMOOTHLINE SCRIPT">
                                                                                                            <div class="adaptive">
                                                                                                                <img src="assets/images/business-hub-product-006-460x307.jpg" alt="business-hub-product-006" class="cactus-lazy ct-done" style="display: block;" width="460" height="307">
                                                                                                            </div>  
                                                                                                        </a>
                                                                                                    </div>  
                                                                                                </div>
                                                                                                <div class="content">
                                                                                                    <h3 class="h5 cactus-post-title entry-title"> 
                                                                                                        <a href="/" title="">SMOOTHLINE SCRIPT</a> 
                                                                                                    </h3>
                                                                                                    <div class="digital-price">
                                                                                                        <div class="price-details ">
                                                                                                            <span class="edd_price" id="">$ 69.99</span>      
                                                                                                        </div>
                                                                                                        <div class="buy-button ">
                                                                                                            <a href="/" class="btn btn-default btn-style-1 btn-style-2 btn-style-4 imp-color-1">
                                                                                                                <div class="add-style">
                                                                                                                    <span>BUY NOW</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>                                       
                                                                                                    <div class="cactus-last-child"></div> <!--fix pixel no remove-->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cactus-post-item hentry slick-slide slick-cloned" style="width: 425px;" data-slick-index="-2" aria-hidden="true">
                                                                                            <div class="entry-content">                                 <div class="picture">
                                                                                                    <div class="picture-content">
                                                                                                        <a href="/" title="STEELHEART">
                                                                                                            <div class="adaptive">
                                                                                                                <img src="assets/images/51-460x307.jpg" alt="5" class="cactus-lazy ct-done" style="display: block;" width="460" height="307">
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>                                   
                                                                                                </div>
                                                                                                <div class="content">
                                                                                                    <h3 class="h5 cactus-post-title entry-title"> 
                                                                                                        <a href="/" title="">STEELHEART</a> 
                                                                                                    </h3>                    
                                                                                                    <div class="digital-price">
                                                                                                        <div class="price-details ">
                                                                                                            <span class="edd_price" id="">$ 81.99</span>                
                                                                                                        </div>
                                                                                                        <div class="buy-button ">
                                                                                                            <a href="/" class="btn btn-default btn-style-1 btn-style-2 btn-style-4 imp-color-1">
                                                                                                                <div class="add-style">
                                                                                                                    <span>BUY NOW</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>                                      <div class="cactus-last-child"></div> 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cactus-post-item hentry slick-slide slick-cloned" style="width: 425px;" data-slick-index="-1" aria-hidden="true">
                                                                                            <div class="entry-content">                                 <div class="picture">
                                                                                                    <div class="picture-content">
                                                                                                        <a href="/" title="LOVETON TYPEFACE">
                                                                                                            <div class="adaptive">
                                                                                                                <img src="assets/images/business-hub-product-010-460x307.jpg" alt="business-hub-product-010" class="cactus-lazy ct-done" style="display: block;" width="460" height="307">
                                                                                                            </div>                         
                                                                                                        </a>
                                                                                                    </div>  
                                                                                                </div>
                                                                                                <div class="content">
                                                                                                    <h3 class="h5 cactus-post-title entry-title"> 
                                                                                                        <a href="/" title="">LOVETON TYPEFACE</a> 
                                                                                                    </h3>                                   
                                                                                                    <div class="digital-price">
                                                                                                        <div class="price-details ">
                                                                                                            <span class="edd_price" id="">$ 80.00</span>                
                                                                                                        </div>
                                                                                                        <div class="buy-button ">
                                                                                                            <a href="/" class="btn btn-default btn-style-1 btn-style-2 btn-style-4 imp-color-1">
                                                                                                                <div class="add-style">              
                                                                                                                    <span>BUY NOW</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>                                        
                                                                                                    <div class="cactus-last-child"></div> <!--fix pixel no remove-->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        @foreach($supplies2 as $supplie)
                                                                                        <div class="cactus-post-item hentry slick-slide slick-current slick-active" style="width: 425px;" data-slick-index="0" aria-hidden="false">
                                                                                            <div class="entry-content">
                                                                                                <div class="picture">
                                                                                                    <div class="picture-content">
																																																			<a href="{{ route('products.show', [
																																																				'manufacturer'=> $supplie->manufacturer_slug,
																																																				'number' => $supplie->number_slug,
																																																				]) }}" title="{{ $supplie->number }}" title="{{ $supplie->number }}">
																																																					<div class="adaptive">
																																																							<img src="{{ asset('assets/images/team.jpg') }}" alt="edd-demo-02" class="cactus-lazy ct-done" style="display: block;" width="460" height="307">
																																																					</div>
																																																			</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="content">
                                                                                                    <!--Title (no title remove)-->
                                                                                                    <h3 class="h5 cactus-post-title entry-title">
                                                                                                        <a href="{{ route('products.show', [
																																																					'manufacturer'=> $supplie->manufacturer_slug,
																																																					'number' => $supplie->number_slug,
																																																					]) }}" title="">{{ $supplie->number }}</a>
                                                                                                    </h3>
                                                                                                    <!--Title-->
                                                                                                    <div class="cactus-last-child"></div>
                                                                                                    <!--fix pixel no remove-->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                          
                                                                </div>
                                                                <div class="cactus-slider-paper"></div>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_row-full-width vc_clearfix"></div>
                                            <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1448881999421 vc_row-has-fill" style="position: relative; left: -20px; box-sizing: border-box; width: 1354px; padding-left: 20px; padding-right: 20px;">
                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner vc_custom_1454063188935"><div class="wpb_wrapper">  
                                                        <div id="c_testimonials_526" class="ct-ft-gallery shortcode ct-testi" data-auto-play="0" data-auto-play-speed="5000">
                                                            <div class="ct-post-gallery">
                                                                <ul class="ct-post-gallery-wrapper slick-initialized slick-slider">
                                                                    <div aria-live="polite" class="slick-list draggable" style="height: 216px;">
                                                                        <div class="slick-track" style="opacity: 1; width: 577px;">
                                                                            <li class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 577px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                                                <div class="ct-testimonials">
                                                                                    <div class="ct-testimonials-content">
                                                                                        <div class="testi-picture">
                                                                                            <div class="ct-img">
                                                                                                <img src="assets/images/jone-doe.png" alt="">
                                                                                            </div>
                                                                                            <div class="ct-star-point m-color-2">
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="testi-content">
                                                                                            <div class="testi-excerpt">
                                                                                                <p>Impresionante, increíblemente organizados, fácil de comunicarse, receptivo con las próximas iteraciones y un trabajo hermoso.</p>
                                                                                            </div>                        
                                                                                            <div class="testi-author">
                                                                                                <h6>RAUL SANCHEZ</h6>
                                                                                            </div>                    
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            <div class="cactus-slider-button-prev" style="display: none;"></div>
                                                            <div class="cactus-slider-button-next" style="display: none;"></div>
                                                        </div>
                                                        <div class="cactus-slider-paper"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner vc_custom_1454063201944">
                                                <div class="wpb_wrapper">    
                                                    <div id="c_testimonials_752" class="ct-ft-gallery shortcode ct-testi" data-auto-play="0" data-auto-play-speed="5000">
                                                        <div class="ct-post-gallery">
                                                            <ul class="ct-post-gallery-wrapper slick-initialized slick-slider">
                                                                <div aria-live="polite" class="slick-list draggable" style="height: 205px;">
                                                                    <div class="slick-track" style="opacity: 1; width: 577px;">
                                                                        <li class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 577px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                                            <div class="ct-testimonials">
                                                                                <div class="ct-testimonials-content">
                                                                                    <div class="testi-picture">
                                                                                        <div class="ct-img">
                                                                                            <img src="assets/images/samatha-doe.png" alt="">
                                                                                        </div>
                                                                                        <div class="ct-star-point m-color-2">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="testi-content">
                                                                                        <div class="testi-excerpt">
                                                                                            <p>Me encanta el nuevo logo. En particular, cómo la marca puede mantenerse por sí sola. Se siente alto, orgulloso y poderoso.</p>
                                                                                        </div>                        
                                                                                        <div class="testi-author">
                                                                                            <h6>DIANA MAESTRE</h6>
                                                                                        </div>                    
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                            <div class="cactus-slider-button-prev" style="display: none;"></div>
                                                            <div class="cactus-slider-button-next" style="display: none;"></div>
                                                        </div>
                                                        <div class="cactus-slider-paper"></div>
                                                    </div>                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                                    
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="entry-footer"></div><!-- .entry-footer -->     
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div>
    </div>
</div>            
@endsection
