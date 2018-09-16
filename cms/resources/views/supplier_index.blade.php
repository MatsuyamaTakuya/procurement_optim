@extends('layouts.app')
@section('content')
    
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
    
    <!-- 本登録フォーム -->
    <form action="{{ url('/supplier_store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
        <!-- 本のタイトル -->
        <div class="form-group">
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">supplier name </label>
                <input type="text" name="company_name" id="company_name" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">supplier_id </label>
                <input type="text" name="supplier_id"  id="supplier_id" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">funded_date</label>
                <input type="date" name="funded_date"  id="funded_date" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">revenue </label>
                <input type="text" name="revenue"　    id="revenue" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">rep_name </label>
                 <input type="text" name="rep_name"     id="rep_name" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">capital</label>
                <input type="text" name="capital"      id="capital" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">address </label>
                <input type="text" name="address"      id="address" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">employers_number </label>
                <input type="text" name="employers_number" id="employers_number" class="form-control">
            </div>
            
              <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">url </label>
                <input type="url" name="url"           id="url" class="form-control">
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
        
   
    </div>
@endsection
