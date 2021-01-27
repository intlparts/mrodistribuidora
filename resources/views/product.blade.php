@extends('layouts.app')
@section('content')
<div id="body-wrap" class="enable-lazy-load"> <!--body-wrap-->
    <div id="wrap"> <!--wrap-->
        <header class="config-header-list-page">
            @include('partials.navigation')            
            <div class="header-style-forall">
                <div class="hs-ct-content">
                    <div class="bg-header-top" style="background-image:url({{asset('assets/images/background1.jpg') }})">
                        <div class="header-style-basic container container-1340  dark-div ">
                            <h1 class="h3">
                                {{ $supplie->manufacturer->name }} / {{ $title }} <br>
                                <div style="display: flex; flex-direction: column; font-size: 14px; color: white;">
                                    <span><span style="color: #f8f8f8; font-size: 12px;">Correo:</span> <a href="mailto:jacquiline.garcia@mrodistribuidora.com" style="text-decoration: unset;
                                        color: white;">jacquiline.garcia@mrodistribuidora.com</a></span>
                                    <span><span style="color: #f8f8f8; font-size: 12px;">Teléfono:</span><a href="tel:013333343267" style="text-decoration: unset;
                                        color: white;">01 33 3334 3267</a></span>
                                </div>
                            </h1>
                            <div class="">
                               
                                <p></p>
                            </div>

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
            <div class="cactus-sidebar-control sb-right"> <!-- sb-right , sb-left -->
                <div class="container container-1340-main">
                    @if (\Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size: 1.5rem; color: white;
                        background-color: #3c763d; border-color: #3c763d; opacity: 1;">
                            {!! \Session::get('message') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>                 
                    @endif
                    <div class="row">
                        <div class="col-md-6 main-content-col">
                            <div class="main-content-col-body">
                                <div class="single-product-content single-content"> 
                                    <article class="cactus-single-content">
                                        <h3 class="hidden-heading">
                                            <span itemprop="name">{{ $supplie->number }}</span>
                                        </h3>
                                        <div class="style-post"> 
                                            <div class="ct-ft-standard">
                                                <img src="{{ asset('assets/images/parts.png')}}" class="attachment-full size-full" alt="" width="1200" height="300" style="max-height: 300px; object-fit:cover;">
                                            </div>       
                                        </div>
                                        <div class="product-information">
                                            <div class="info-table">
                                                <div class="info-row">
                                                    <div class="info-cell">
                                                        <div class="info-cell-content">
                                                            <div class="content-item">
                                                                <div>Fabricante</div>
                                                                <div>{{ $supplie->manufacturer->name }}</div>
                                                            </div>
                                                            <div class="content-item">
                                                                <div>N° de Parte</div>
                                                                <div>{{ $supplie->number }}</div>
                                                            </div>
                                                            <div class="content-item">
                                                                <div> Descripcion</div>
                                                                 <div>{{ $supplie->large_description }}</div>
                                                            </div>
                                                            <div class="content-item"></div>
                                                            <div class="content-item"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="info-cell">
                                                    <div class="info-cell-content">
                                                        <div class="ct-eddbutton-group">
                                                            <a href="{{ route('fabricantes.show', ['name'=> $supplie->manufacturer->slug]) }}" class="btn btn-default btn-style-1 btn-style-2  imp-color-1 bt-stylev1-product " style="width: 100%;">
                                                                <span class="add-style" style="margin: auto;">
                                                                    <span class="ct-icon-20-ecommerce-shopping-bag"></span> 
                                                                    <span>ver productos de {{$supplie->manufacturer->name}}</span>
                                                                </span>
                                                            </a>
                                                        </div>                                                                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 cactus-sidebar">
                            <div class="cactus-sidebar-content">     
                                <aside id="text-20" class=" widget-box-style-1  col-md-12 widget widget_text module widget-col">
                                    <div class="widget-inner">
                                        <h2 class="widget-title h4" style="color: white; font-size: 18px; text-align: center;
                                    ">Contactenos</h2>
                                    <div class="textwidget">    
                                        <div id="iconbox_2478" class="ct-sc-icon-box style-2">
                                            <div class="ct-sc-icon-box-content">
                                                <form action="{{ route('sendmail.partnumber.send') }}" autocomplete="off" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="" class="">Nombre</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="">Email</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email" id="" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="">Teléfono</label>
                                                        <input type="tel" name="phone" class="form-control" placeholder="Teléfono de contacto">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="">Fabricante</label>
                                                        <input type="text" name="manufacturer" value="{{$supplie->manufacturer->name}}" class="form-control" placeholder="Fabricante" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="">Nro de parte</label>
                                                        <input type="text" name="part_number" value="{{$supplie->number}}" class="form-control" placeholder="Número de parte" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="">Cantidad</label>
                                                        <input type="number" name="quantity" class="form-control" placeholder="cantidad" id="">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-sm btn-success" style="width:100%;">Contactar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside id="text-19" class="no-hr widget-box-style-1  col-md-12 widget widget_text module widget-col" style="    background-color: white;">
                            <div class="widget-inner">
                                <h2 class="widget-title h4 text-center">¿NECESITA AYUDA?</h2>            
                                <div class="textwidget">
                                    <a id="ct_custom_9991451999747" href="{{ route('index.contacto') }}" class="btn btn-default  btn-style-1 btn-style-2 btn-style-4" style="width: 100%;">
                                        <span class="add-style" style="margin: auto;">
                                            <span class="fa fa-life-ring"></span> 
                                            <span>CONTACTA AYUDA</span>            
                                        </span>    
                                    </a>
                                </div>
                            </div>
                        </aside>                   
                    </div>             
                </div>
            </div>
        </div>     
    </div>
</div>
<div class="ct-more-projects product-content">      
    <h3 class="primary-heading h3">MÁS PRODUCTOS QUE TE PUEDEN GUSTAR</h3>
    <span class="sub-heading">Seleccionamos algunos de nuestros productos</span>
</div> 
<div class="cactus-sub-wrap row container" style="margin: auto;">
    @foreach($supplies as $supplie)
        <div class="cactus-post-item hentry books col-sm-12 col-md-3">
            <div class="entry-content">
                <div class="picture">
                    <div class="picture-content">
                        
                        <a href="{{ route('products.show', [
                            'manufacturer'=> $supplie->manufacturer_slug,
                            'number' => $supplie->number_slug,
                            ]) }}" title="{{ $supplie->number }}}">
                            <div class="adaptive">
                                <img src="{{ asset('assets/images/parts.png')}}" alt="{{ $supplie->number }}}" class="cactus-lazy ct-done" style="display: block;" width="460" height="307">
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
                            ]) }}" title="{{ $supplie->number }}}">
                            <span itemprop="name">{{ $supplie->number }}</span>
                        </a> 
                    </h3>
                    <!--Title-->
                    <div class="cactus-last-child"></div>
                    <!--fix pixel no remove-->
                </div>
            </div>
        </div>
        <!--item listing-->
    @endforeach
</div>

</div>
@endsection