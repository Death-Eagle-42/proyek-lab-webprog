@extends('Component.navbar')
@section('document_title', 'Insert Bike')

@section('body')
    <div class="d-flex flex-column align-items-center mt-4">
        <p id="title" class="fs-1 fw-bold">Insert Bike</p>
        <form enctype="multipart/form-data" @yield('method') @yield('action') class="d-flex flex-column align-items-center">
                {{-- CSRF --}}
                @csrf
                {{-- Method --}}
                @yield('method_field')
                <div class="mb-3 w-100">
                    <label for="inputBrand">Bike Brandset</label>
                    <select name="inputBrandset" class="form-select mt-2" aria-label="Default select example">
                        @yield('option')
                    </select>
                </div>

                <div class="mb-3 w-100">
                    <label for="InputName" class="form-label">Bike Name</label>
                    <input type="text" name="inputName" class="form-control" @yield('nameValue') id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 w-100">
                    <label for="inputPrice" class="form-label">Bike Price ($)</label>
                    <input type="text" name="inputPrice" class="form-control" @yield('priceValue') id="exampleInputPassword1">
                </div>
                <div class="mb-3 w-100">
                    <label for="inputDescription" class="form-label">Bike Description</label>
                    <textarea type="textarea" name="inputDescription" class="form-control" id="exampleInputPassword1">@yield('descriptionValue')</textarea>
                </div>
                <div class="mb-3">
                    <label for="inputImage" class="form-label">Bike Image</label>
                    <input class="form-control" name="inputImage" type="file" id="formFile">
                </div>

                {{-- error message --}}

                @if ($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif

                @yield('submit_button')
        </form>
    </div>

@endsection
