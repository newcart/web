@extends('layouts.default')
@section('head')
    <title>Akilliphone - Online Store</title>
@endsection
@section('content')
    <x-section.main-slider :slider="$main_slider['items']" />
    @if(isset($section_category)&& !empty($section_category))
        <x-section.category :title="$section_category['title']" :items="$section_category['items']" :banner="$section_category['banner']" />
    @endif
    @if(isset($section_image1)&& !empty($section_image1))

        <x-section.image :images="$section_image1['images']" />
    @endif
    @if(isset($section_grid1)&& !empty($section_grid1))
        <x-section.grid :title="$section_grid1['title']" :items="$section_grid1['items']" :banner="$section_grid1['image']" :class="'sidebar-area'"/>
    @endif
    @include('home.three-category-slider')
    @if(isset($section_grid2)&& !empty($section_grid2))
        <x-section.grid :title="'Yılbaşı Fırsatı'" :items="$section_grid2['items']" :class="'full-product-list'" />
    @endif
    @if(isset($section_carousel1)&& !empty($section_carousel1))

        <x-section.carousel :title="'İndirime Girenler'" :items="$section_carousel1['product']" :class="'full-product-list'" />
    @endif
    @include('home.brand-slider')
    @if(isset($section_carousel2)&& !empty($section_carousel2))

        <x-section.carousel :title="'Yeniden Stokta'" :items="$section_carousel2['product']" :banner="$section_carousel2['title']" :class="'sidebar-area'"/>
    @endif

    @include('home.sezon-sonu')
    @if(isset($section_grid3)&& !empty($section_grid3))

        <x-section.grid :title="'Süper Fırsatlar'" :items="$section_grid3['items']" :class="'full-product-list'" />
    @endif
    @if(isset($section_image2)&& !empty($section_image2))

        <x-section.image :images="$section_image2['images']" />
    @endif
    @if(isset($section_carousel3)&& !empty($section_carousel3))

        <x-section.carousel :title="'Bitmek Üzere'" :items="$section_carousel3['product']" :class="'full-product-list'" />
    @endif
@endsection
@section('js')

@endsection
