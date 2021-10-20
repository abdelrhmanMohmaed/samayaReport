@extends('layout')
@section('title')
    Scrap-Page
@endsection
@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Scrap Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Scrap Page</li>
                            <li class="breadcrumb-item"><a href="{{ url('/parts/show-table') }}">Table Page</a></li>
                            <li class="breadcrumb-item"> <a id="logout-link" href="#">logOut</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @include('inc.messages-Ajax')
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Scrap Report</h3>
                    </div>
                    <div class="card-body">
                        <form id="contact-Form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-2">
                                    <!-- select -->
                                    <div class="form-group" id="exampleSelectBorder">
                                        <label>Select Line</label>
                                        <select class="form-control" name="line_id">
                                            <option>Select Line</option>
                                            @foreach ($lines as $line)
                                                <option value="{{ $line->id }}">{{ $line->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="form-control cursor-no" id="shift" name="shift" disabled>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group m-1">
                                        <label>Part Number</label>
                                        <select class="js-example-placeholder-single js-states form-control cursor-no"
                                            id="partNu" disabled name="part_number">
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
                                            {{-- @foreach ($allparts as $part)
                                                <option>{{ $part->part_number }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control cursor-no" id="type" name="type" disabled>
                                            <option>Scrap</option>
                                            <option>V.R</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Scrap Quantity</label>
                                        <input type="Number" class="form-control reset-form cursor-no"
                                            placeholder="Enter Scrap Quantity" id="scrapQu" disabled name="scrapQty"
                                            min="1">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group pt-2">
                                        <label></label>
                                        <button id="contact-Form-Btn" type="submit"
                                            class="btn btn-block btn-outline-danger">Send
                                            Data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
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
        ////////////////
        $("#success-div").hide()
        $("#errors-div").hide()

        //AJAX
        $("#contact-Form-Btn").click(function(e) {
            $("#success-div").hide()
            $("#errors-div").hide()
            $("#success-div").empty()
            $("#errors-div").empty()

            e.preventDefault();

            let formData = new FormData($('#contact-Form')[0]);
            //console.log(formData.get('type'))

            $.ajax({
                type: "POST",
                url: "{{ url('/line/report') }}",
                data: formData,
                contentType: false,
                processData: false,

                success: function(data) {
                    $("#success-div").show()
                    $("#success-div").text(data.success)
                    $("#success-div").fadeOut(2500)
                    // console.log(data.success)
                    resetForm();
                },
                error: function(xhr, status, error) {
                    $("#errors-div").show();

                    $.each(xhr.responseJSON.errors, function(key, item) {

                        $("#errors-div").append("<p>" + item + "</p>")

                    });
                }
            });
        });
    </script>
@endsection
