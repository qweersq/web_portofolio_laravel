@extends('admin.layouts.navbarSidebar')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Contact Name</label>
                            <input autocomplete="off" class="form-control" id="contact_name" name="contact_name"
                                placeholder="Contact Name" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Range Year</label>
                            <input autocomplete="off" class="form-control" id="range_year" name="range_year"
                                placeholder="2019-2020" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input autocomplete="off" class="form-control" id="description" name="description"
                                placeholder="Description" required>
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
        document.getElementById("changejudul").innerHTML = "Tambah Contact";
    </script>
@endsection
