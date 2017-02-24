@extends('admin/layout')

@section('title', 'Question')

@section('content')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Question</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="javascript:void(0);">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Question</li>
                </ol>
                <div class="clearfix"></div>
    </div>
    <div class="page-content">
                
            <div class="row">
                        <div class="col-md-12 text-right">
                         <a href="{{ URL::route('admin_question_create') }}" class="btn btn-info" ><i class="fa fa-plus"></i> Create New Question</a>
                         <br/><br/>
                        </div>
                        <div class="col-md-12">
                        <table class="table table-hover table-striped table-bordered table-advanced tablesorter tb-sticky-header">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th width="10%">Status</th>
                            <th width="10%">Actions</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @if($lists->count() > 0)
                            @foreach($lists as $l)
                            <tr>
                              
                               <td>{{ $l->title }}</td>
                               <td width="10%"><span class="status_span">{{ $l->status }}</span></td>
                               <td width="20%"><div class="btn-group">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                                Action &nbsp;<i class="fa fa-gears"></i></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ URL::route('admin_question_edit',[$l->id]) }}"><i class="fa fa-pencil"></i> Edit</a></li>
                                                <li><a href="{{ URL::route('admin_question_delete',[$l->id]) }}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i> Delete</a></li>
                                                <li><a class="change_status_btn" href="{{ URL::route('admin_question_change_status',[$l->id]) }}"><i class="fa fa-exchange"></i> Change Status</a></li>
                                            </ul>
                                        </div></td>
                               
                           </tr>
                            @endforeach
                        @else
                        <tr>
                        <td colspan="4" class="text-center">No Record Found</td>
                        </tr>     
                        @endif
                        </tbody>
                        <tfoot>
                        <tr>
                        <td colspan="4">{!! $lists->render() !!}</td>
                        </tr>
                        </tfoot>
                        </table>
                        </div>
                        </div>
    </div>

@endsection