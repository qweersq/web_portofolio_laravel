@extends('admin.layouts.navbarSidebar')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Certificate Name</label>
                            <input autocomplete="off" class="form-control" id="certificate_name" name="certificate_name"
                                placeholder="Certificate Name" value="{{ $certificate->certificate_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input autocomplete="off" value="{{ $certificate->description }}" class="form-control" id="description" name="description"
                                placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Year</label>
                            <input autocomplete="off" value="{{ $certificate->year }}" class="form-control" id="year" name="year"
                                placeholder="2020" required>
                        </div>
                        <div class="form-group">
                            <label for="files">Photo</label>
                            <p class="fw-normal" for="photo">Uploaded : {{ $certificate->file_name ? $certificate->file_name : 'Choose a file' }}</p>
                            <div class="input-group">
                                <input style="height: 45px;" value="{{ $certificate->photo_url }}" id="photo" name="photo" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Certificate Url</label>
                            <input autocomplete="off" value="{{ $certificate->certificate_url }}" class="form-control" id="certificate_url" name="certificate_url"
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
        document.getElementById("changejudul").innerHTML = "Edit Certificate";
    </script>

@endsection
