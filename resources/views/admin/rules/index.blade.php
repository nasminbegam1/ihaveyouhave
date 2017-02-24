@extends('admin/layout')
@section('title', 'Rules')
@section('content')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">How To Plays</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a href="javascript:void(0);">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">How To Plays</li>
        </ol>
        <div class="clearfix"></div>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet box portlet-orange">
                    <div class="portlet-header">
                        <div class="caption">How To Plays</div>
                            
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="flip-scroll">
                            <div id="w0" class="grid-view">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Description</th>
                                            <th width="10%">Status</th>
                                            <th width="10%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($lists->count() > 0)
                                            @php $i=1; @endphp
                                            @foreach($lists as $l)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{!! $l->description !!}</td>
                                                    <td width="10%">{{ $l->status }}</td>
                                                    <td width="20%">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                                                Action &nbsp;<i class="fa fa-gears"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="{{ URL::route('admin_howtoplay_edit',[$l->id]) }}"><i class="fa fa-pencil"></i> Edit</a></li>
                                                                <li><a href="{{ URL::route('admin_howtoplay_delete',[$l->id]) }}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @php $i++; @endphp    
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
                </div>
            </div>
        </div>
    </div>
@endsection