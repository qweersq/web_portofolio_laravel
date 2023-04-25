@extends('admin.layouts.navbarSidebar')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div id="cardNominal" class="row">
                <div class="col">
                    <!-- small box -->
                    <div class="small-box">
                        <div class="inner">
                            <p class="nominal"> Skill</p>
                            <h3 class="nominal" style="color:#045CB1;">{{ $skillCount }}</h3>
                            <a href="{{ route('skills.index') }}" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <!-- small box -->
                    <div class="small-box ">
                        <div class="inner">
                            <p class="nominal"> Education </p>
                            <h3 class="nominal"style="color:#045CB1;">{{ $educationCount }}</h3>
                            <a href="{{ route('educations.index') }}" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- small box -->
                    <div class="small-box ">
                        <div class="inner">
                            <p class="nominal"> Experience </p>
                            <h3 class="nominal"style="color:#045CB1;">{{ $experienceCount }}</h3>
                            <a href="{{ route('experiences.index') }}" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <!-- small box -->
                    <div class="small-box ">
                        <div class="inner">
                            <p class="nominal"> Portofolio </p>
                            <h3 class="nominal"style="color:#045CB1;">{{ $portofolioCount }}</h3>
                            <a href="{{ route('portofolios.index') }}" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- small box -->
                    <div class="small-box ">
                        <div class="inner">
                            <p class="nominal"> Certificate </p>
                            <h3 class="nominal"style="color:#045CB1;">{{ $certificateCount }}</h3>
                            <a href="{{ route('certificates.index') }}" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- small box -->
                    <div class="small-box ">
                        <div class="inner">
                            <p class="nominal"> Contact Me </p>
                            <h3 class="nominal"style="color:#045CB1;">{{ $contactCount }}</h3>
                            <a href="{{ route('contacts.index') }}" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" card-body">
                <div class="row btnShortcut">
                    <button onClick="location.href='{{ route('skills.create') }}'" class="col bg-shortuct">Tambah
                        Skill</button>
                    <button onClick="location.href='{{ route('educations.create') }}'" class="col bg-shortuct">Tambah
                        Education</button>
                    <button onClick="location.href='{{ route('experiences.create') }}'" class="col bg-shortuct">Tambah
                        Experience</button>
                </div>
                <div class="row btnShortcut">
                    <button onClick="location.href='{{ route('portofolios.create') }}'" class="col bg-shortuct">Tambah
                        Portofolio</button>
                    <button onClick="location.href='{{ route('certificates.create') }}'" class="col bg-shortuct">Tambah
                        Certificate</button>
                    <button onClick="location.href='{{ route('contacts.index') }}'" class="col bg-shortuct">Lihat
                        Contact Me</button>
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
    <script>
        if (window.matchMedia("(max-width: 600px)").matches) {
            document.getElementById("sliceEvent").className = "row";
            document.getElementById("cardNominal").className = "col";
        }
    </script>
    <script type="text/javascript">
        var data = new Date();
        // document.write(data.getHours() + ':' + data.getMinutes());
        console.log(data.getDate())
    </script>
@endsection
