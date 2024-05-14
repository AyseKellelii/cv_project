@extends('admin.layout.admilayout')

@section('content')

    <a href="{{route('Experience.create')}}" class="btn btn-success">Ekle</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">BAŞLAMA ZAMANI</th>
            <th scope="col">AYRILMA ZAMANI</th>
            <th scope="col">FİRMA ISMI</th>
            <th scope="col">AÇIKLAMA</th>

        </tr>
        </thead>
        <tbody>
        @if(!empty($exp)&& count($exp)>0)
        @foreach($exp as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->job_start}}</td>
                <td>{{$item->job_finish}}</td>
                <td>{{$item->company_name}}</td>
                <td>{{$item->job_description}}</td>

                <td ><a href="{{route('Experience.edit',$item->id)}}" class="btn btn-info">Güncelle</a></td>
                <td >
                    <form action="{{route('Experience.destroy',$item->id)}}" method="post">
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
