<div class="container">
    <div class="row">

        <div class="sec-title text-center">
            <h2> Our Products</h2>
            <div class="devider"><i class="fa fa-spinner fa-spin fa-lg"></i></div>
        </div>

        <div class="sec-sub-title text-center">
            {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>--}}
        </div>

        <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
            <ul class="text-center">
                <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                <li><a href="javascript:;" data-filter=".branding" class="filter">Branding</a></li>
                <li><a href="javascript:;" data-filter=".web" class="filter">web</a></li>
                <li><a href="javascript:;" data-filter=".logo-design" class="filter">logo design</a></li>
                <li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li>
            </ul>
        </div>

    </div>
</div>

<div class="project-wrapper">
    @if($products)
        @foreach($products as $product)
            <figure class="mix work-item branding">
                <img src="{{ asset('plugins/img/works/item-1.jpg')}}" alt="">
                <figcaption class="overlay">
                    <a class="fancybox" rel="works" title="{{ $product->caption }}" href="{{ asset('plugins/img/works/item-1.jpg')}}"><i class="fa fa-eye fa-lg"></i></a>
                    <h4>Labore et dolore magnam</h4>
                    <p>Photography</p>
                </figcaption>
            </figure>
            @endforeach
        @endif


    <figure class="mix work-item web">
        <img src="{{ asset('plugins/img/works/item-2.jpg')}}" alt="">
        <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset('plugins/img/works/item-2.jpg')}}"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
        </figcaption>
    </figure>

    <figure class="mix work-item logo-design">
        <img src="{{ asset('plugins/img/works/item-3.jpg')}}" alt="">
        <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset('plugins/img/works/item-3.jpg')}}"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
        </figcaption>
    </figure>

    <figure class="mix work-item photography">
        <img src="{{ asset('plugins/img/works/item-4.jpg')}}" alt="">
        <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset('plugins/img/works/item-4.jpg')}}"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
        </figcaption>
    </figure>



</div>