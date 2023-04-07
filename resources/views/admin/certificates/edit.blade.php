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
                            <input autocomplete="off" type="text" class="form-control" id="certificate_name" name="certificate_name"
                                value="{{ $certificate->school_name }}" placeholder="School Name" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input autocomplete="off" class="form-control" id="description" name="description"
                                value="{{ $certificate->description }}" type="text" placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label for="files">Photo</label>
                            <div class="input-group">
                                <input style="height: 45px;" id="files" name="files" type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Perbaharui</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        document.getElementById("changejudul").innerHTML = "Edit POS";
    </script>
@endsection
