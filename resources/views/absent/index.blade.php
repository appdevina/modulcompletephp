@extends('layout.main_template')

@section('content')
    <section class="content-header">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- WILL ADD ABSENT TABLE HERE -->
                        <div class="card">
                            <div class="card-header bg-dark">
                                <div class="row d-inline-flex">
                                    <h3 class="card-title">Presence</h3>
                                </div>
                                <div class="card-tools d-flex">
                                    <div class="input-group input-group-sm mr-3" style="widows: 400px;">
                                        <form action="absent" class="d-inline-flex">
                                            <input type="text" class="form-control float-right" value="" name="date"
                                                id="tanggal" required>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 500px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>User</th>
                                            <th>Tanggal Check In</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($absents as $absent)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $absent->user->full_name }}</td>
                                                <td>{{ $absent->created_at->format('d M Y H:i') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
