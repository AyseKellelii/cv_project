@extends('admin.layout.admilayout')

@section('content')

    <a href="{{route('About.create')}}" class="btn btn-success">Ekle</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">iSİM</th>
            <th scope="col">TELEFON</th>
            <th scope="col">EMAİL</th>
            <th scope="col">WEBSİTESİ</th>
            <th scope="col">ADRES</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($about)&& (count($about)>0))
        @foreach($about as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->phone_number}}</td>
                <td>{{$item->e_mail}}</td>
                <td>{{$item->website}}</td>
                <td>{{$item->address}}</td>
                <td ><a href="{{route('About.edit',$item->id)}}" class="btn btn-info">Güncelle</a></td>
                <td >
                    <form action="{{route('About.destroy',$item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sil</button>
                    </form>
                   </td>
            </tr>

        @endforeach
        @endif

    </table>
@endsection
