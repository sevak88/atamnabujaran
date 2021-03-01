@extends("layout")

@section("content")

    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <!-- Featured Project Row-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Գրանցման հայտեր</h4>
                    </div>
                </div>
            </div>
            @foreach($records as $record)
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Օր/Ժամ</th>
                        <th scope="col">Անուն</th>
                        <th scope="col">Ազգանուն</th>
                        <th scope="col">Հեռախոսահամար</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$record->date}}</td>
                        <td>{{$record->first_name}}</td>
                        <td>{{$record->last_name}}</td>
                        <td>{{$record->phone}}</td>

                    </tr>
                    <tr>
                        <td colspan="4">{{$record->comment}}</td>
                    </tr>
                    </tbody>
                </table>
            @endforeach

            <div class="col-12 mt-5 text-center">
                {{$records->links("vendor.pagination.bootstrap-4")}}
            </div>
        </div>


    </section>


@endsection
