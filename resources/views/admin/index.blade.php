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
                            <p class="nominal"> Education</p>
                            <h3 class="nominal" style="color:#c82224;"></h3>
                            <a href="/report/non" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <!-- small box -->
                    <div class="small-box ">
                        <div class="inner">
                            <p class="nominal"> Experience </p>
                            <h3 class="nominal"style="color:#c82224;"></h3>
                            <a href="/report/event" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- small box -->
                    <div class="small-box ">
                        <div class="inner">
                            <p class="nominal"> Portofolio </p>
                            <h3 class="nominal"style="color:#c82224;"></h3>
                            <a href="/report/event" class="small-box-footer" style="color:black;">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" card-body">
                <div class="row btnShortcut">
                    <button onClick="#" class="col bg-shortuct">Tambah
                        Education</button>
                    <button onClick="#" class="col bg-shortuct">Tambah
                        Experience</button>
                    <button onClick="#" class="col bg-shortuct">Tambah
                        Portofolio</button>
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
