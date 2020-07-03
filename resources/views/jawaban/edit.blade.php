@extends("layout.master")

@section("content")
<div class="container">
    <!-- <div class="row">
        <div class="col-lg-12">
            <h3>Edit Data jawaban </h3>
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

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">Input Data jawaba</div>
                    <div class="card-body">
                        <form action="{{route('jawaban.update',$jawaban->idjawaban)}}" method="post">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-row ">
                                <div class="form-group col-md-5 mt-2">
                                    <label for="inputIsi">Isi</label>
                                    <input type="text" name="isi" id="inputIsi" class="form-control" value="{{$jawaban->isi}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputDate_created">Date created</label>
                                    <input type="date" name="date_created" id="inputDate_created" class="form-control" value="{{$jawaban->date_created}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputDate_updated">Date updated</label>
                                    <input type="date" name="date_updated" id="inputDate_updated" class="form-control" value="{{$jawaban->date_updated}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{route('jawaban.index')}}" class="btn btn-sm btn-success">Back</a>
                                <button type="submit" class="btn btn-sm btn-primary float-right">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>