@extends('admin/layout')

@section('title', 'Question Edit')

@section('content')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Update Question</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="javascript:void(0);">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ URL::route('admin_question') }}">Question</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Update</li>
                </ol>
                <div class="clearfix"></div>
    </div>
    <div class="page-content">
                <div class="col-lg-12">
                        <div class="panel panel-pink">
                            <div class="panel-heading">Update Question</div>
                            <div class="panel-body ">
                                {!! Form::open(['route'=>['admin_question_edit',$details->id],'class'=>"form-validate",'files'=>true]) !!}
                                    
                                        <div class="form-group"><label class="col-md-3 control-label" for="inputUsername"> Title<span class="require">*</span></label>

                                            <div class="col-md-9">
                                                <div class="input-icon"><i class="fa fa-font"></i>{!!  Form::text('title',$details->title,['class'=>'form-control required']) !!}</div>
                                            </div>
                                        </div><br/><br/><br/>
                                   
                                        <div class="form-group"><label class="col-md-3 control-label" for="inputUsername"> Description<span class="require">*</span></label>

                                            <div class="col-md-9">
                                                <div class="input-icon">{!!  Form::textarea('description',$details->description,['class'=>'form-control required']) !!}</div>
                                            </div>
                                        </div><div style="clear:both"></div><br/><br/>
                                        
                                         
                                        
                                        <div class="col-md-offset-3 col-md-9">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                            &nbsp;
                                            <button class="btn btn-green" type="button" onclick="window.location.href='{{ URL::route('admin_question') }}'">Cancel</button>
                                        </div>
                                    
                                </form>
                            </div>
                        </div>
                                    </div>
    </div>

@endsection