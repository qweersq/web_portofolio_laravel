@extends('admin.layouts.navbarSidebar')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('portofolios.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Portofolio Name</label>
                            <input autocomplete="off" value="{{ $portofolio->portofolio_name }}" class="form-control" id="portofolio_name" name="portofolio_name"
                                placeholder="Portofolio Name" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input autocomplete="off" value="{{ $portofolio->description }}" class="form-control" id="description" name="description"
                                placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label for="files">Upload Portofolio</label>
                            <p class="fw-normal" for="photo">Uploaded : {{ $portofolio->file_name ? $portofolio->file_name : 'Choose a file' }}</p>
                            <div class="input-group">
                                <input style="height: 45px;" id="photo" name="photo" type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Url Apps</label>
                            <input autocomplete="off" value="{{ $portofolio->url_apps }}" class="form-control" id="url_apps" name="url_apps"
                                placeholder="http://" required>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        document.getElementById("changejudul").innerHTML = "Edit Portofolio";
    </script>
@endsection
