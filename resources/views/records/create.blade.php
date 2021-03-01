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
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div id="calendar" data-hours="{{json_encode($hours)}}"></div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Գրանցման հայտ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route("records.store")}}">
                                <div class="row">
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="date">Օր/Ժամ *</label>
                                            <input type="text" class="form-control" id="date" name="date" readonly required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first_name">Անուն *</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="last_name">Ազգանուն *</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="phone">Հեռախոսահամար *</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Մեկնաբանություն *</label>
                                            <textarea type="text" class="form-control" id="comment" name="comment"required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mt-5 text-right">
                                            <button type="submit" class="btn btn-primary">Գրանցվել</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
