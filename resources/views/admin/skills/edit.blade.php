@extends('admin.layouts.navbarSidebar')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Skill</label>
                            <input autocomplete="off" type="text" class="form-control" id="skill_name" name="skill_name"
                                value="{{ $skill->skill_name }}" placeholder="Nama Skill" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Rate Skill</label>
                            <input autocomplete="off" class="form-control" id="rate_skill" name="rate_skill"
                                value="{{ $skill->rate_skill }}" type="number" placeholder="Rate Skill" required>
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
