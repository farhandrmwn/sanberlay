<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Detail Perusahaan</h3>
                <hr>
            </div>
        </div>
        <div class="row">
             <div class="col-md-12">
                <div class="form-group">
                    <strong>Id Perusahaan :</strong> {{$perusahaan['id_perusahaan']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Nama :</strong> {{$perusahaan['nama']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Jenis Industri :</strong> {{$perusahaan['jenis_industri']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Alamat :</strong> {{$perusahaan['alamat']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Situs :</strong> {{$perusahaan['situs']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Bahasa :</strong> {{$perusahaan['bahasa']}}
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{route('perusahaan.index')}}" class="btn btn-sm btn-success">Back</a>
            </div>
        </div>
    </div>