@extends('admin/layout')

@section('title', 'Card Create')

@section('content')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Create New Card</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="javascript:void(0);">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><i class="fa fa-home"></i>&nbsp;<a href="{{ URL::route('admin_card') }}">Card</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Create</li>
                </ol>
                <div class="clearfix"></div>
    </div>
    <div class="page-content">
                <div class="col-lg-12">
                        <div class="panel panel-pink">
                            <div class="panel-heading">New Card</div>
                            <div class="panel-body ">
                                {!! Form::open(['route'=>'admin_card_create','class'=>"form-validate",'files'=>true]) !!}
                                    
                                        
                                   
                                        <div class="form-group"><label class="col-md-3 control-label" for="inputUsername"> Question<span class="require">*</span></label>

                                            <div class="col-md-9">
                                                <div class="input-icon">{!!  Form::textarea('description','',['class'=>'form-control required']) !!}</div>
                                            </div>
                                        </div><div style="clear:both"></div><br/><br/>
                                        
                                        <div class="form-group"><label class="col-md-3 control-label" for="inputUsername"> Answer<span class="require">*</span></label>

                                            <div class="col-md-9">
                                                <div class="input-icon"><i class="fa fa-font"></i>{!!  Form::text('answer','',['class'=>'form-control required']) !!}</div>
                                            </div>
                                        </div><br/><br/><br/>
                                       
                                    
                                        <div class="form-group"><label class="col-md-3 control-label" for="inputUsername"> Photo<span class="require">*</span></label>

                                            <div class="col-md-9">
                                                <div class="input-icon">{!!  Form::file('image',['class'=>'form-control required','accept'=>'image/*']) !!}</div>
                                            </div>
                                        </div><br/><br/><br/>
                                        
                                        <div class="col-md-offset-3 col-md-9">
                                            <button class="btn btn-primary" type="submit">Add</button>
                                            &nbsp;
                                            <button class="btn btn-green" type="button" onclick="window.location.href='{{ URL::route('admin_card') }}'">Cancel</button>
                                        </div>
                                    
                                </form>
                            </div>
                        </div>
                                    </div>
    </div>

@endsection