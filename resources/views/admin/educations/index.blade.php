@extends('admin.layouts.navbarSidebar')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5" id="formInput">
                                <h3 class="card-title">Education</h3>
                                <a href="/education/create" class="btn btn-success float-right"><i
                                        class="fas fa-plus"></i> Tambah
                                    Education</a>
                            </div>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>School Name</th>
                                        <th>Range Year</th>
                                        <th>Description</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($educations as $item)
                                        
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->school_name }}</td>
                                            <td>{{ $item->range_year }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td><a href="{{ route('educations.edit', $item->id) }}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('educations.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
    document.getElementById("changejudul").innerHTML = "List Education";

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        document.getElementById('TopTitle').innerHTML = '<a href="/education" id="TopTitle" class="nav-link">Education</a>';
    </script>
@endsection
