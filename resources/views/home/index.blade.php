@extends('layouts.default')
@section('head')
    <title>Akilliphone - Online Store</title>
@endsection
@section('content')
    @include('home.main-slider')
    <x-section.category :title="$section_category['title']" :items="$section_category['items']" :banner="$section_category['banner']" />
    <x-section.image :images="$section_image1['images']" />
    <x-section.grid :title="$section_firsat['title']" :items="$section_firsat['products']" :banner="$section_firsat['banner']" :class="'sidebar-area'"/>
    @include('home.three-category-slider')
    <x-section.grid :title="'Yılbaşı Fırsatı'" :items="$section_firsat['products']" :class="'full-product-list'" />
    <x-section.carousel :title="'İndirime Girenler'" :items="$section_firsat['products']" :class="'full-product-list'" />
    @include('home.brand-slider')
    <x-section.carousel :title="'Yeniden Stokta'" :items="$section_firsat['products']" :banner="$section_firsat['banner']" :class="'sidebar-area'"/>
    @include('home.sezon-sonu')
    <x-section.grid :title="'Süper Fırsatlar'" :items="$section_firsat['products']" :class="'full-product-list'" />
    <x-section.image :images="$section_image2['images']" />
    <x-section.carousel :title="'Bitmek Üzere'" :items="$section_firsat['products']" :class="'full-product-list'" />
@endsection
@section('js')

@endsection
