@extends("layout.master")

@section("content")
<div class="container">
    <!-- <div class="row">
        <div class="col-lg-12">
            <h3>Data pertanyaan Baru</h3>
        </div>
    </div> -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whooops! </strong> There where some problems with your input.<br>
        <ul>
            @foreach($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Input Data pertanyaan</div>
                <div class="card-body">
                    <form action="{{route('pertanyaan.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-7 mt-2">
                                <label for="inputJudul">Judul</label>
                                <input type="text" name="judul" id="inputJudul" class="form-control">
                            </div>
                            <div class="form-group col-md-5 mt-2">
                                <label for="inputIsi">Isi</label>
                                <input type="text" name="isi" id="inputIsi" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputDate_created">Date created</label>
                                <input type="date" name="date_created" id="inputDate_created" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputDate_updated">Date updated</label>
                                <input type="date" name="date_updated" id="inputDate_updated" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('pertanyaan.index')}}" class="btn btn-sm btn-success">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

    <!-- <form action="{{route('pertanyaan.store')}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <strong>Nama :</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col-md-12">
                <strong>Jenis Industri :</strong>
                <input type="text" name="jenis_industri" class="form-control" placeholder="Jenis Industri">
                </select>
            </div>
            <div class="col-md-12">
                <strong>Alamat :</strong>
                <input type="textarea" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="col-md-12">
                <strong>Situs :</strong>
                <input type="text" name="situs" class="form-control" placeholder="Situs">
            </div>
            <div class="col-md-12">
                <strong>Bahasa :</strong>
                <input type="text" name="bahasa" class="form-control" placeholder="Bahasa">
            </div>
            <br>
            <div class="col-md-12">
                <a href="{{route('pertanyaan.index')}}" class="btn btn-sm btn-success">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </div>
    </form> -->

        </div>
    </div>
</div>
@endsection