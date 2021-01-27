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
                <div class="container container-1340-main  portfolio is-single ">
                    <div class="row">
                        <div class="col-md-12 main-content-col">
                            <div class="main-content-col-body">
                                <div class="cactus-listing-wrap">
                                    <div class="cactus-listing-config ">
                                        <div class="cactus-listing-config style-2 ">
                                            <div class="cactus-sub-wrap">                                                                
                                                @foreach($items as $item)                    
                                                <!--item listing-->
                                                <div class="cactus-post-item hentry business">
                                                    <div class="entry-content">
                                                        <!--picture (remove)-->
                                                        <div class="picture">
                                                            <div class="picture-content">
                                                                <a href="{{ route('products.show', [ 'manufacturer'=> $item->manufacturer_slug,
                                                                'number' => $item->number_slug]) }}" title="{{ $item->number }}">
                                                                <div class="adaptive">
                                                                    <img src="{{ asset('assets/images/parts.png') }}" alt="{{ $item->number }}" class="cactus-lazy ct-done" style="display: block;" width="460" height="307">
                                                                </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <!--Title (no title remove)-->
                                                            <h3 class="h5 cactus-post-title entry-title">
                                                                <a href="{{ route('products.show', ['manufacturer'=> $item->manufacturer_slug,
                                                                    'number' => $item->number_slug]) }}" title="">{{ $item->number }}</a>
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
                                            <div class="page-navigation" style="text-align: center;">{{ $items->appends(['search' => Request::get('search')])->links() }}</div>
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
@endsection