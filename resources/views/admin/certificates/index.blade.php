@extends('admin.layouts.navbarSidebar')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5" id="formInput">
                                <h3 class="card-title">Certificate</h3>
                                <a href="/certificate/create" class="btn btn-success float-right"><i
                                        class="fas fa-plus"></i> Tambah
                                    Certificate</a>
                            </div>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Certificate Name</th>
                                        <th>Description</th>
                                        <th>Year</th>
                                        <th>Photo</th>
                                        <th>Url Certificate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificates as $item)
                                        
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->certificate_name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->year }}</td>
                                            <td><button class="btn btn-primary" data-toggle="modal" data-target="#photoModal" data-photo="{{ asset($item->photo_url) }}">
                                                View
                                            </button></td>
                                            <td>{{ $item->certificate_url }}</td>
                                            <td><a href="{{ route('certificates.edit', $item->id) }}" class="btn btn-info">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('certificates.destroy', $item->id) }}" method="POST"
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
    document.getElementById("changejudul").innerHTML = "List Certificate";

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        document.getElementById('TopTitle').innerHTML = '<a href="/certificate" id="TopTitle" class="nav-link">Certificate</a>';
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
