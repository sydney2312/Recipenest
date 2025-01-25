<x-mylayouts.layout-prototype>


    @include('pages.prototype.users.portfolio.mini-profile')

    {{--
    <x-slider :collection="$featured_data" id="featured-slider" title="Featured Recipes" items="0" /> --}}
    {{--
    <x-additional.slider-alternative2 :collection="$featured_data" id="featured-slider-alternative"
        title="Featured Recipes" items="1" /> --}}

    <h2>Portfolio Title</h2>
    @include('pages.prototype.users.portfolio.filters')


    @include('pages.prototype.users.portfolio.body')


</x-mylayouts.layout-prototype>