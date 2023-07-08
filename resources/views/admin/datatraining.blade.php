@extends('layout.mainadmin')

@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Training</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Training</h4>
                            <div class="col-lg-14 ml-auto">
                                <a href="/tambahdata" class="btn btn-primary">Data Data Training</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="display">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>G1</th>
                                            <th>G2</th>
                                            <th>G3</th>
                                            <th>G4</th>
                                            <th>G5</th>
                                            <th>G6</th>
                                            <th>G7</th>
                                            <th>G8</th>
                                            <th>G9</th>
                                            <th>G10</th>
                                            <th>G11</th>
                                            <th>G12</th>
                                            <th>G13</th>
                                            <th>G14</th>
                                            <th>G15</th>
                                            <th>Label</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item['G1'] }}</td>
                                                <td>{{ $item['G2'] }}</td>
                                                <td>{{ $item['G3'] }}</td>
                                                <td>{{ $item['G4'] }}</td>
                                                <td>{{ $item['G5'] }}</td>
                                                <td>{{ $item['G6'] }}</td>
                                                <td>{{ $item['G7'] }}</td>
                                                <td>{{ $item['G8'] }}</td>
                                                <td>{{ $item['G9'] }}</td>
                                                <td>{{ $item['G10'] }}</td>
                                                <td>{{ $item['G11'] }}</td>
                                                <td>{{ $item['G12'] }}</td>
                                                <td>{{ $item['G13'] }}</td>
                                                <td>{{ $item['G14'] }}</td>
                                                <td>{{ $item['G15'] }}</td>
                                                <td>{{ $item['label'] }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                            <form action="deletedata/{{ $item->id }}" method="POST">
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
                                            <th>G1</th>
                                            <th>G2</th>
                                            <th>G3</th>
                                            <th>G4</th>
                                            <th>G5</th>
                                            <th>G6</th>
                                            <th>G7</th>
                                            <th>G8</th>
                                            <th>G9</th>
                                            <th>G10</th>
                                            <th>G11</th>
                                            <th>G12</th>
                                            <th>G13</th>
                                            <th>G14</th>
                                            <th>G15</th>
                                            <th>Label</th>
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
