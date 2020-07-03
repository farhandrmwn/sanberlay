@extends("layout.master")

@section("content")
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">


<div class="container">

    <div class="form-row mt-5">
        <h3 class="col-md-10 mt-5">List pertanyaan</h3>
        <a class="btn btn-sm btn-success col-md-2 mt-5" href="{{ route('pertanyaan.create') }}">Tambah Data pertanyaan</a>
    </div>



    <table id="table-datatables" class="table table-bordered table-hover table-sm text-center mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Id pertanyaan</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Date created</th>
                <th>Date Updated</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pertanyaan as $p)
            <tr>
                <td>{{++$i}}.</td>
                <td>{{$p->idpertanyaan}}</td>
                <td>{{$p->judul}}</td>
                <td>{{$p->isi}}</td>
                <td>{{$p->date_created}}</td>
                <td>{{$p->date_updated}}</td>
                <td>
                    <form action="{{ route('pertanyaan.destroy', $p->idpertanyaan) }}" method="post">
                        <a class="btn btn-sm btn-warning" href="{{route('pertanyaan.edit',$p->idpertanyaan)}}">Edit</a>
                        {{csrf_field()}}
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onClick="return confirm('Yakin?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table-datatables').DataTable();
    } );
</script>
@endsection