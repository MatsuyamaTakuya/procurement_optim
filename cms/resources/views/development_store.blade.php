@extends('layouts.app')
@section('content')
    
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
    
    <!-- 本登録フォーム -->
    <form action="{{ url('/development_apply') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
        <!-- タイトル -->
        <div class="form-group">
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Part Number </label>
                <input type="text" name="part_number" id="part_number" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Supplier Number</label>
                <input type="text" name="supplier_id"  id="supplier_id" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Start Date</label>
                <input type="date" name="start_date"  id="start_date" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">End Date</label>
                 <input type="date" name="end_date"     id="end_date" class="form-control">
            </div>
            
        </div>
        
        <!-- 本 登録ボタン -->
         <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="glyphicon glyphicon-plus"></i> Save
                </button>
            </div>
        </div>
    </form>
</div>
        
@endsection
