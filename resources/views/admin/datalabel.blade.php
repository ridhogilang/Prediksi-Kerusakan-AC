@extends('layout.mainadmin')

@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Label</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Label</h4>
                            <div class="col-lg-14 ml-auto">
                                <a href="/tambahlabel" class="btn btn-primary">Tambah Data Label</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="display">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Label</th>
                                            <th>Deskripsi</th>
                                            <th>Probabilitas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item['label'] }}</td>
                                                <td>{{ $item['deskripsi'] }}</td>
                                                <td>{{ $item['probabilitas'] }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                            <form action="deletelabel/{{ $item->id }}" method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-danger shadow btn-xs sharp"
                                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Label</th>
                                            <th>Deskripsi</th>
                                            <th>Probabilitas</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
