@extends('layout')
@section('title')
    Chart-Page
@endsection
@section('main')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Table Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Table Page</li>
                            <li class="breadcrumb-item"> <a id="logout-link" href="#">logOut</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container-fluid">
            <div class="card">

                <!-- /.card-header -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Chart Report</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ url('chart/show') }}" method="GET">
                                <div class="row">
                                    <div class="col-sm-12">
                                        {{-- data table and fillter --}}
                                        <div class="card-body">
                                            {{-- fillter --}}
                                            <div class="row justify-content-center">
                                                <div class="col-sm-2">
                                                    <div class="form-group m-1">
                                                        <label>PartNumber</label>
                                                        <select class="js-example-placeholder-single js-states form-control"
                                                            name="part_number">
                                                            <option id="select-free"></option>
                                                            <option>10071115-01</option>
                                                            <option>10094395-01</option>
                                                            <option>10134880-01</option>
                                                            <option>10100764-00</option>
                                                            <option>58502-01</option>
                                                            <option>10069275-00</option>
                                                            <option>10069285-00</option>
                                                            <option>10089266-00</option>
                                                            <option>10089276-00</option>
                                                            <option>10069295-01</option>
                                                            <option>10147845-01</option>
                                                            <option>58261-00</option>
                                                            <option>58265-01</option>
                                                            <option>58252-02</option>
                                                            <option>10069443-02</option>
                                                            <option>58258-02</option>
                                                            <option>10071105-00</option>
                                                            <option>58259-00</option>
                                                            <option>58253-02</option>
                                                            <option>10069433-01</option>
                                                            <option>58260-01</option>
                                                            <option>58267-00</option>
                                                            <option>58257-01</option>
                                                            <option>58372-00</option>
                                                            <option>58371-00</option>
                                                            <option>58268-01</option>
                                                            <option>58256-00</option>
                                                            <option>20547-01</option>
                                                            <option>54754-02</option>
                                                            <option>54771-01</option>
                                                            <option>10071056-00</option>
                                                            <option>10100764-00</option>
                                                            <option>10102572-05</option>
                                                            <option>16590-15</option>
                                                            <option>10102582-04</option>
                                                            <option>58248-02</option>
                                                            <option>58504-02</option>
                                                            <option>58251-06</option>
                                                            <option>58262-01</option>
                                                            <option>58313-00</option>
                                                            <option>58443-01</option>
                                                            <option>58509-00</option>
                                                            {{-- @foreach ($parts as $part)
                                                                            <option>{{ $part->part_number }}</option>
                                                                        @endforeach --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Date Start</label>
                                                        <input class="form-control" type="date" name="fromDate">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Date End</label>
                                                        <input class="form-control" type="date" name="toDate">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Shift</label>
                                                        <select type="text" name="shift" class="form-control">
                                                            <option value="">Select Shift</option>
                                                            <option>A</option>
                                                            <option>B</option>
                                                            <option>C</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Chart Shape</label>
                                                        <select id="chart" onchange="myFunution()" class="form-control">
                                                            <option value="">select Chart</option>
                                                            <option value="column">column</option>
                                                            <option value="pie">pie</option>
                                                            <option value="bar">bar</option>
                                                            <option value="pyramid">pyramid</option>
                                                            <option value="line">line</option>
                                                            <option value="area">area</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group mt-4 p-2">
                                                        <button type="submit" class="btn btn-block btn-outline-primary">
                                                            <i class="fas fa-fw fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- /fillter --}}
                                        </div>
                                        {{-- /data table and fillter --}}

                                        @if (isset($dataPoints))

                                            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                        @endif

                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('script')
    <script>
        //select partNumber options
        $(".js-example-placeholder-single").select2({
            theme: "classic",
            placeholder: "Select Part number",
            allowClear: true,
        });
        ////////////////// 
        @if (isset($dataPoints))
            function myFunution() {
            let chartType = document.getElementById("chart").value;
            console.log(chartType)
            var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title: {
            text: "Chart Report"
            },
            data: [{
            type:chartType , //change type to bar, line, area, pie, etc
            dataPoints: <?php echo json_encode($dataPoints); ?>
            }]
            });
            chart.render();
        
            }
        @endif
    </script>

@endsection
