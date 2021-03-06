@extends('layouts.adminlayout')

@section('content')


<div class="container">
<h4>@lang('Adminhome.Questions')</h4>
<h5>@lang('Adminhome.Total_Questions') : {{$num=count($pages)}}</h5>
    <table id="CT" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>@lang('Adminhome.ID')/th>
                <th>@lang('Adminhome.Category')</th>
                <th>@lang('Adminhome.Question')</th>
                <th>@lang('Adminhome.Date_Added')</th>
                <th>@lang('Adminhome.Date_Updated')</th>
            </tr>
        </thead>
        <tbody>
@if(count($pages)>0)
    @foreach ( $pages as $Cat )
        <div class="well">
            <tr>
                <td>{{$Cat->id}}</td>
                <td>{{$Cat->category_id}}</td>
                <td>{{$Cat->question}}</td>
                <td>{{$Cat->created_at}}</td>
                <td>{{$Cat->updated_at}}</td>
            </tr>
    @endforeach
@else
<p>@lang('Adminhome.No_Questions_Found')</p>

@endif
</tbody>
</table>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#CT').DataTable({
                lengthChange: false,
                buttons: [ 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#CT_wrapper .col-md-6:eq(0)');
        });
    </script>
</div>
        

@endsection
