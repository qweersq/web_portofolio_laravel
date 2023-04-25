@extends('admin.layouts.navbarSidebar')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5" id="formInput">
                                <h3 class="card-title">Portofolio</h3>
                                <a href="/portofolio/create" class="btn btn-success float-right"><i class="fas fa-plus"></i>
                                    Tambah
                                    Portofolio</a>
                            </div>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Portofolio Name</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>Url Apps</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portofolios as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->portofolio_name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td><button class="btn btn-primary" data-toggle="modal" data-target="#photoModal" data-photo="{{ asset($item->photo_url) }}">
                                                View Photo
                                            </button></td>
                                            <td>{{ $item->url_apps }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td><a href="{{ route('portofolios.edit', $item->id) }}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('portofolios.destroy', $item->id) }}" method="POST"
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
                            <!-- Modal -->
                            <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Photo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="photo" src="" alt="" style="max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        document.getElementById("changejudul").innerHTML = "List Portofolio";

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        document.getElementById('TopTitle').innerHTML =
            '<a href="/portofolio" id="TopTitle" class="nav-link">Portofolio</a>';
    </script>
    <script>
        $('#photoModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var photoUrl = button.data('photo')
          var modal = $(this)
          modal.find('.modal-body #photo').attr('src', photoUrl)
        })
      </script>
      
@endsection
