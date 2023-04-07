@extends('admin.layouts.navbarSidebar')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('educations.update', $education->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">School Name</label>
                            <input autocomplete="off" type="text" class="form-control" id="school_name" name="school_name"
                                value="{{ $education->school_name }}" placeholder="School Name" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Range Year</label>
                            <input autocomplete="off" class="form-control" id="range_year" name="range_year"
                                value="{{ $education->range_year }}" type="text" placeholder="Range Year" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input autocomplete="off" class="form-control" id="description" name="description"
                                value="{{ $education->description }}" type="text" placeholder="Description" required>
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
