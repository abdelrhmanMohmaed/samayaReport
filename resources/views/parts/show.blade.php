@extends('layout')
@section('title')
    Data-Table
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
                            <li class="breadcrumb-item active">Table Page</li>
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Scrap Page</a></li>
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
                        <div class="card-header bg-secondary ">
                            <h3 class="card-title">Data Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="fillter-form" action="{{ url('/parts/show-table') }}" method="GET">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            {{-- data table and fillter --}}
                                            <table id="example1"
                                                class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                                aria-describedby="example1_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="example1" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Rendering engine: activate to sort column descending">
                                                            Line
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Browser: activate to sort column ascending"
                                                            style="">Part Number
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Platform(s): activate to sort column ascending"
                                                            style="">Type
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Engine version: activate to sort column ascending"
                                                            style="">Date/ Week
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="CSS grade: activate to sort column ascending"
                                                            style="">Shift
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Platform(s): activate to sort column ascending"
                                                            style="">Scrap Quantity
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Platform(s): activate to sort column ascending"
                                                            style="">Seen
                                                        </th>
                                                    </tr>
                                                </thead>
                                                {{-- data table && fillter --}}
                                                <tbody>
                                                    <div class="card-body">
                                                        {{-- fillter --}}
                                                        <div class="row">
                                                            <div class="col-sm-2">
                                                                <!-- select -->
                                                                <div class="form-group" id="exampleSelectBorder">
                                                                    <label>Select Line</label>
                                                                    <select type="text" name="line_id"
                                                                        class="form-control">
                                                                        <option value="">Select Line</option>
                                                                        @foreach ($lines as $line)
                                                                            <option value="{{ $line->id }}">
                                                                                {{ $line->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group m-1">
                                                                    <label>PartNumber</label>
                                                                    <select
                                                                        class="js-example-placeholder-single js-states form-control"
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
                                                                    <label>Type</label>
                                                                    <select type="text" name="type" class="form-control">
                                                                        <option value="">Select Type</option>
                                                                        <option>Scrap</option>
                                                                        <option>V.R</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-group">
                                                                    <label>Date</label>
                                                                    <input class="form-control" type="date"
                                                                        name="created_at">
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
                                                                <div class="form-group mt-4 p-2">
                                                                    <button type="submit"
                                                                        class="btn btn-block btn-outline-secondary">
                                                                        <i class="fas fa-fw fa-search"></i>
                                                                    </button>
                                                                    <a class="float-right py-2"
                                                                        href="{{ url('/parts/show-table') }}">All
                                                                        Parts</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- /fillter --}}
                                                    </div>
                                                    {{-- ouput data table --}}
                                                    @foreach ($parts as $part)
                                                        <tr class="odd">
                                                            <td class="dtr-control sorting_1" tabindex="0">
                                                                {{ $part->line->name }}
                                                            </td>
                                                            <td style="">{{ $part->part_number }}</td>
                                                            <td style="">{{ $part->type }}</td>
                                                            <td style="">
                                                                {{ Carbon\Carbon::parse($part->created_at)->format('d M, Y/ W') }}
                                                            </td>
                                                            <td style="">{{ $part->shift }}</td>
                                                            <td style="">{{ $part->scrapQty }}</td>
                                                            @if (Auth::user()->role_id == 1)
                                                                <td>

                                                                    {{-- <button type="button" data-toggle="modal"
                                                                        data-target="#edit-modal"
                                                                        data-line_id="{{ $part->line->name }}"
                                                                        data-shift="{{ $part->shift }}"
                                                                        data-part_number="{{ $part->part_number }}"
                                                                        data-type="{{ $part->type }}"
                                                                        data-scrapQty="{{ $part->scrapQty }}"
                                                                        class="btn btn-sm btn-outline-info">
                                                                        <i class="fas fa-edit"></i>
                                                                    </button> --}}

                                                                    <a href="{{ url("/parts/delete/$part->id") }}"
                                                                        class="btn btn-sm btn-outline-danger">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>

                                                                    @if ($part->active)
                                                                        <a class="btn btn-sm btn-outline-secondary"
                                                                            href="{{ url("/parts/toggle-admin/$part->id") }}">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a><span class="badge bg-success">Active</span>

                                                                    @else

                                                                        <a class="btn btn-sm btn-outline-secondary"
                                                                            href="{{ url("/parts/toggle-admin/$part->id") }}">
                                                                            <i class="fas fa-eye"></i>

                                                                        </a><span class="badge bg-danger">NotActive</span>

                                                                    @endif
                                                                </td>
                                                            @else
                                                                <td>
                                                                    @if ($part->active)
                                                                        @if (Auth::user()->role_id == 3)
                                                                            <a class="btn btn-sm btn-outline-secondary"
                                                                                href="{{ url("/parts/toggle/$part->id") }}">
                                                                                <i class="fas fa-eye"></i>
                                                                            </a>
                                                                        @endif
                                                                        <span class="badge bg-success">Active</span>
                                                                    @else
                                                                        <span class="badge bg-danger">NotActive</span>
                                                                    @endif
                                                                </td>
                                                            @endif

                                                        </tr>
                                                    @endforeach
                                                    {{-- /ouput data table --}}
                                                </tbody>
                                                {{-- /data table && fillter --}}
                                            </table>
                                            {{-- /data table and fillter --}}
                                        </div>
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


    <!-- .edit-modal -->
    {{-- <div class="modal fade" id="edit-modal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Categorie</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="POST" action="{{ url("/parts/update/$part->id") }}" id="edit-form">
                        @csrf
                        <input type="hidden" name="id" id="edit-form-id">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="form-control " id="shift" name="shift">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-1">
                                        <label>Part Number</label>
                                        <br>
                                        <select class="js-example-placeholder-single js-states form-control" id="partNu"
                                            name="part_number">
                                            <option id="select-free"></option>
                                            @foreach ($parts as $part)

                                                <option>{{ $part->part_number }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control cursor-no" id="type" name="type">
                                            <option>Scrap</option>
                                            <option>V.R</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Scrap Quantity</label>
                                        <input type="Number" class="form-control reset-form "
                                            placeholder="Enter Scrap Quantity" id="scrapQu" name="scrapQty" min="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button form="edit-form" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div> --}}
    <!-- /.edit-modal -->





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
        $(document).ready(function() {
            $('#example1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'selectRows',
                    'selectColumns',
                    'selectCells',
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "paging": false,
            });
        });
        $('.edit-btn').click(function() {
            let id = $(this).attr('data-id')
            let line_id = $(this).attr('data-line_id')
            let shift = $(this).attr('data-shift')
            let part_number = $(this).attr('data-part_number')
            let type = $(this).attr('data-type')
            let scrapQty = $(this).attr('data-scrapQty')
            console.log(scrapQty, type)
        })
    </script>
@endsection
