@extends('admin.layouts.navbarSidebar')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('portofolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Portofolio Name</label>
                            <input autocomplete="off" class="form-control" id="portofolio_name" name="portofolio_name"
                                placeholder="Portofolio Name" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input autocomplete="off" class="form-control" id="description" name="description"
                                placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label for="files">Upload Portofolio</label>
                            <div class="input-group">
                                <input style="height: 45px;" id="photo" name="photo" type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Url Apps</label>
                            <input autocomplete="off" class="form-control" id="url_apps" name="url_apps"
                                placeholder="http://" required>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        document.getElementById("changejudul").innerHTML = "Tambah Portofolio";
    </script>
@endsection
