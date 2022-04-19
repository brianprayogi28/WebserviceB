@extends('admin-tmp.tmp')

@section('author', 'Tambah Data Blog')

@section('isi')

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Tambah Data Blog
                <a class="btn btn-sm btn-info float-right" href="{{url('data-blog')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{url('simpan-blog')}}" method="POST">
                    @csrf
                    <div class="from-group">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Body</label>
                        <input type="text" name="body" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Keyword</label>
                        <input type="text" name="keyword" class="form-control">
                    </div>
                    <br><br>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    <a class="btn btn-warning float-right" href="{{url('data-blog')}}">
                        <i class="fas fa-backward"></i>Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection