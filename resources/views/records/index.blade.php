@extends("layout")

@section("content")

<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container">
        <!-- Featured Project Row-->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4>Գրանցվել օնլայն</h4>
                </div>
            </div>
        </div>
        <div id="calendar"  data-hours="{{json_encode($hours)}}"></div>
    </div>
</section>


@endsection
