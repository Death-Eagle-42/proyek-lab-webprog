@extends('fromInsertUpdate')

@section('method')
    method="POST"
@endsection

@section('action')
    action="/updateData/{{$currBike->id}}"
@endsection

@section('method_field')
    @method('PATCH')
@endsection

@section('option')
    <option selected value="{{$currBike->brandId}}">{{$currBike->brandName}}</option>

    @foreach ($brandsets as $brandset)
        @if ($brandset->brandName != $currBike->brandName)
            <option value="{{ $brandset->brandId }}">{{ $brandset->brandName }}</option>
        @endif
    @endforeach
@endsection

@section('nameValue')
    value='{{$currBike->bikeName}}'
@endsection

@section('priceValue')
    value='{{$currBike->bikePrice}}'
@endsection

@section('descriptionValue'){{$currBike->bikeDescription}}@endsection

@section('submit_button')
    <button type="submit" class="btn btn-primary">Update</button>
@endsection
