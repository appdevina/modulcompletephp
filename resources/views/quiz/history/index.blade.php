@extends('layout.main_template')

@section('content')
    <section class="content-header">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <div class="row d-inline-flex">
                                    <h3 class="card-title">Quiz History</h3>
                                    {{-- <a href="/question/export">
                                        <button class="badge bg-primary mx-3 elevation-0">EXPORT
                                            ALL</button></a> --}}
                                </div>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <form action="/quiz/history" class="d-inline-flex">
                                            <input type="text" name="search" class="form-control float-right"
                                                placeholder="Cari">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 500px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Quiz Modul</th>
                                        <th>User</th>
                                        <th>Value</th>
                                        <th>Start</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historys as $history)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $history->quiz->document->name }}</td>
                                            <td>{{ $history->user->full_name }}</td>
                                            <td>{{ $history->value }}</td>
                                            <td>{{ date('d M Y H:i', $history->created_at / 1000) }}</td>
                                            <td>
                                                <a href={{ '/quiz/history/' . $history->id }} target='_blank'
                                                    data-toggle="tooltip" title="view" class="badge bg-primary"><span><i
                                                            class="fas fa-eye"></i></span></a>
                                                <a href={{ '/quiz/history/delete/' . $history->id }}
                                                    onclick="return confirm('Apalah anda yakin menghapus quiz {{ $history->quiz->document->name }} atas nama {{ $history->user->full_name }}?')"
                                                     data-toggle="tooltip" title="view"
                                                    class="badge bg-danger"><span><i
                                                            class="fas fa-times-circle"></i></span></a>
                                                <a href={{ '/quiz/history/export/' . $history->id }} target='#'
                                                    data-toggle="tooltip" title="export" class="badge bg-success"><span><i
                                                            class="fas fa-download"></i></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </section>
@endsection
