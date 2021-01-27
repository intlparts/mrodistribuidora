@extends('layouts.app')
@section('content')
<div id="body-wrap" class="enable-lazy-load">
    <div id="wrap">
        <header class="config-header-list-page">	
            @include('partials.navigation')
            <div class="header-style-forall">
                <div class="hs-ct-content">
                    <div class="bg-header-top" style="background-image:url({{asset('assets/images/background1.jpg') }})">
                        <div class="header-style-basic container container-1340  dark-div ">
                            <h1 class="h3">{{ $title }}</h1> 
                            <div class="cactus-breadcrumb">
                                <a href="/">Home</a> 
                                <span class="ct-s-v-u">\</span> 
                                <span class="current">{{ $title }}</span>
                            </div><!-- .breadcrumbs -->									
                        </div>
                    </div>                              
                </div>
            </div>                                
        </header>
        <div id="cactus-body-container">    
            <div class="cactus-sidebar-control "> <!-- sb-right , sb-left -->
                <div class="container container-1340-main">
                    <div class="row">
                        <div class="col-md-9 main-content-col">  
                            <div class="main-content-col-body">
                                <div class="single-page-content single-content"> 
                                    <article id="post-2675" class="cactus-single-content post-2675 page type-page status-publish hentry">
                                        <div class="body-content">
                                            <div class="vc_row wpb_row vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="ct-sc-services">
                                                            <div class="cactus-listing-wrap">
                                                                <div class="cactus-listing-config style-3"> <!--addClass: style-1 + (style-2 -> style-n)-->
                                                                    <div class="cactus-sub-wrap">
                                                                        <div class="cactus-post-item hentry">
                                                                        <div class="entry-content">
                                                                            <div class="picture" style="float: inline-end;">
                                                                            <div class="picture-content">
                                                                                <img src="{{ asset('assets/images/startup.jpg') }}">
                                                                            </div>
                                                                            </div>
                                                                            <div class="content">
                                                                                <div class="excerpt">
                                                                                    <p>Somos una empresa comprometida con atender las necesidades de nuestros clientes. Proveemos la solución en cuestiones de suministro de refacciones, piezas de máquinas, motores, válvulas, equipos pesados, componentes electrónicos, equipos de cómputo o cualquier otro equipamiento que usted necesite. Somos especialistas en proveer piezas difíciles de encontrar, obsoletas y piezas urgentes trabajando con importaciones y exportaciones a todo el mundo. Tenemos un equipo de trabajo altamente calificado para brindar productos de alta calidad y con un tiempo de entrega optimizado. Somos una empresa internacional con sede en los Estados Unidos y oficina en México. Somos la solución en la compra de cualquier producto que su empresa necesite. Ofrecemos productos de gran calidad y un excelente servicio. Estamos enterados que nuestros clientes son la razón de nuestra existencia, gracias por confiar en nosotros.</p>
                                                                                    <h4 style="margin-bottom: 20px;">Visión</h4>
                                                                                    <ol>
                                                                                        <li>Ser el aliado estratégico de nuestros clientes, apoyando con soluciones en logística, abastecimiento, importación de productos de MRO (Mantenimiento, Reparaciones y Operaciones).</li>
                                                                                        <li>Atender a todos nuestros clientes para que estén satisfechos con la calidad de nuestros servicios.</li>
                                                                                        <li>Ser motivación para el desarrollo de las personas que colaboran con nuestra compañía.</li>
                                                                                        <li>Ser la empresa numero uno en distribución de piezas de MRO en México.</li>
                                                                                    </ol>
                                                                                    <h4 style="margin-bottom: 20px;">Misión</h4>
                                                                                    <ol>
                                                                                        <li>Ser la empresa con mejores profesionales para proveer piezas de MRO.</li>
                                                                                        <li>Abastecer a la industria de partes industriales para mantenimiento, reparaciones y operaciones que la misma pueda necesitar.</li>
                                                                                        <li>Hacer llegar las piezas solicitadas por nuestros clientes en la mejor optimización del tiempo.</li>
                                                                                        <li>Superar las expectativas de nuestros clientes en cuanto a producto y servicio.</li>
                                                                                        <li>Estas son las razones por las que todos nuestros clientes permanecen con nosotros.</li>
                                                                                    </ol>
                                                                                </div>
                                                                                <div class="cactus-last-child"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-footer"></div><!-- .entry-footer -->
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection