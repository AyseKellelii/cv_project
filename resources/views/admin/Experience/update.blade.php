@extends('admin.layout.admilayout')

@section('content')

    <form action="{{route('About.update',$about->id)}}" method="POST">
        @csrf
        @method('PUT ')
        <div class="mb-3">

            <label  class="form-label">AD-SOYAD</label>
            <input type="text" class="form-control" name="name" value="{{$about->name}}">
        </div>

        <div class="mb-3">
            <label  class="form-label">TELEFON</label>
            <input type="text" class="form-control" name="phone_number" value="{{$about->phone_number}}">
        </div>
        <div class="mb-3">
            <label class="form-label">EMAİL</label>
            <input type="email" class="form-control" name="e_mail" value="{{$about->e_mail}}">
        </div>

        <div class="mb-3">
            <label  class="form-label">WEBSİTE</label>
            <input type="text" class="form-control" name="webiste" value="{{$about->website}}">
        </div>

        <div class="mb-3">
            <label type="text" class="form-label">ADRES</label>
            <input type="text" class="form-control" name="address" value="{{$about->address}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
