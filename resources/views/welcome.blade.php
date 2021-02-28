@extends("layout")

@section("content")
<!-- Masthead-->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Ատամնաբուժարան</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Բարի Գալուստ Ստոմատոլոգիական Կլինիկա</h2>
            <a class="btn btn-primary js-scroll-trigger" href="#about">Բաժանորդագրվել Online</a>
        </div>
    </div>
</header>
<!-- About-->
<section class="about-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Մեր Մասին</h2>
                <p class="text-white-50">
                    Ստոմատոլոգիական կլինիկան հիմնադրվել է 2005 թ-ին բժիշկ ստոմատոլոգ Մուրազ Գրիգորյանի կողմից: Առաջին մասնաճյուղը բացվել է ք. Հրազդանում, երկրորդ մասնաճյուղը ք. Երևանում` 2015թ-ին: Երկու մասնաճյուղերն էլ համալրված են ժամանակակից սարքավորումներով, որոնք ժամանակին համընթաց նորացվում են: Ստոմատոլոգիական կլինիկայի ծառայություններն իրականացնում են բարձր որակավորում ունեցող մասնագետները, ովքեր իրենց մասնագիտական հմտությունները ժամանակ առ ժամանակ լրացնում են Գերմանիայի բարձրակարգ կլինիկաներում Երկար տարիների վաստակ ունեցող փորձառու մասնագետները, որակյալ ծառայությունների շնորհիվ, բազմիցս արժանացել են այցելուների բարձր գնահատանքին ու գոհունակությանը:
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container">
        <!-- Featured Project Row-->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4>Մեր Ծառայությունները</h4>
                </div>
            </div>
        </div>
        <!-- Project One Row-->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6"><img class="img-fluid" src="{{asset("assets/img/terapevt.jpg")}}" alt="" /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Թերապևտիկ Ստոմատոլոգիա</h4>
                            <p class="mb-0 text-white-50">
                                <ol>
                                    <li>Կարիեսի Բուժում</li>
                                    <li>Կարիեսի Պրոֆիլակտիկա</li>
                                    <li>Բարդացած Կարիեսի Բուժում</li>
                                    <li>Պուլպիտի Բուժում</li>
                                    <li>Պարոդոնտիտի Բուժում</li>
                                    <li>Բերանի Խոռոչի Լորձաթաղանթի Հիվանդությունների Բուժում </li>
                                </ol>
                            </p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><img class="img-fluid" src="{{asset("assets/img/17.jpg")}}" alt="" /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Վիրաբուժական Ստոմատոլոգիա</h4>
                            <p class="mb-0 text-white-50">
                            <ol>
                                <li>Ատամների Հեռացում</li>
                                <li>Ատամի Կիստայի Հեռացում</li>
                                <li>Ատամնային Իմպլանտացիա</li>
                                <li>Դեպուլպացիա</li>
                            </ol>
                            </p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signup-->
<section class="signup-section" id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Կոնտակտային տվյալներ</h2>
            </div>
        </div>
    </div>
</section>

@endsection
