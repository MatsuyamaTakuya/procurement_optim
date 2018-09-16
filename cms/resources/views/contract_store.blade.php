@extends('layouts.app')
@section('content')
    
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
    
    <!-- 本登録フォーム -->
    <form action="{{ url('/contract_apply') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
        <!-- 本のタイトル -->
        <div class="form-group">
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Contract Number </label>
                <input type="text" name="con_number" id="con_number" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Contract Type</label>
                <input type="text" name="con_type"  id="con_type" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Part Number</label>
                <input type="text" name="part_number"  id="part_number" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">supplier_id </label>
                <input type="text" name="supplier_id"　    id="supplier_id" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Valid Date</label>
                 <input type="date" name="con_start"     id="con_start" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Invalid Date</label>
                <input type="date" name="con_end"      id="con_end" class="form-control">
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
