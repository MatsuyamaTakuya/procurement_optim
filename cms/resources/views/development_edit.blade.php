@extends('layouts.app')
@section('content')
    
<div class="row">
    <div class="col-md-12">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 本登録フォーム -->
        <form action="{{ url('development/update') }}" method="POST" class="form-horizontal">
                
            <!-- 本のタイトル -->
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Part Number </label>
                    <input type="text" name="part_number" id="part_number" class="form-control" value ="{{ $development->part_number }}">
                </div>
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Supplier Number</label>
                    <input type="text" name="supplier_id"  id="supplier_id" class="form-control" value ="{{ $development->supplier_id }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Start Date</label>
                    <input type="date" name="start_date"  id="start_date" class="form-control" value ="{{ $development->start_date }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">End Date</label>
                    <input type="date" name="end_date"　    id="end_date" class="form-ntrol" val value ="{{ $development->end_date }}">
                </div>

            </div>
   
        
                <!-- 本 登録ボタン -->
            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">
                Save
                </button>
                <a class="btn btn-link pull-right" href="{{ url('development') }}">
                    <i class="glyphicon glyphicon-backward"></i> Back
                </a>
            </div>
            
            <!-- id 値を送信 -->
            <input type="hidden" name="id" value="{{ $development->id }}" /> 
            <!--/ id 値を送信 -->
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
        </form>
    </div>
</div>
        
    
   
@endsection
