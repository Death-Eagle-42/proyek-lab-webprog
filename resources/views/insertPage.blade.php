@extends('fromInsertUpdate')

{{-- ke Controller --}}
@section('method')
    method="POST"
@endsection

@section('action')
    action="/insertData"
@endsection

@section('option')
    {{-- brandSet --}}

    @foreach ($brandsets as $brandset)
        <option value="{{ $brandset->brandId }}">{{ $brandset->brandName }}</option>
    @endforeach

@endsection

@section('submit_button')
    <button type="submit" class="btn btn-success">Insert</button>
@endsection
