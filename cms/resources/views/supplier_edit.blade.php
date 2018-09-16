@extends('layouts.app')
@section('content')
    
<div class="row">
    <div class="col-md-12">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 本登録フォーム -->
        <form action="{{ url('supplier_index/update') }}" method="POST" class="form-horizontal">
                
            <!-- 本のタイトル -->
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">supplier name </label>
                    <input type="text" name="company_name" id="company_name" class="form-control" value ="{{ $supplier->company_name }}">
                </div>
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">supplier_id </label>
                    <input type="text" name="supplier_id"  id="supplier_id" class="form-control" value ="{{ $supplier->supplier_id }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">funded_date</label>
                    <input type="date" name="funded_date"  id="funded_date" class="form-control" value ="{{ $supplier->funded_date }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">revenue </label>
                    <input type="text" name="revenue"　    id="revenue" class="form-control" value ="{{ $supplier->revenue }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">rep_name </label>
                     <input type="text" name="rep_name"     id="rep_name" class="form-control" value ="{{ $supplier->rep_name }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">capital</label>
                    <input type="text" name="capital"      id="capital" class="form-control" value ="{{ $supplier->capital }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">address </label>
                    <input type="text" name="address"      id="address" class="form-control" value ="{{ $supplier->address }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">employers_number </label>
                    <input type="text" name="employers_number" id="employers_number" class="form-control" value ="{{ $supplier->employers_number }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">url </label>
                    <input type="url" name="url"           id="url" class="form-control" value ="{{ $supplier->url }}">
                </div>
            </div>
   
        
                <!-- 本 登録ボタン -->
            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">
                Save
                </button>
                <a class="btn btn-link pull-right" href="{{ url('/') }}">
                    <i class="glyphicon glyphicon-backward"></i> Back
                </a>
            </div>
            
            <!-- id 値を送信 -->
            <input type="hidden" name="id" value="{{ $supplier->id }}" /> 
            <!--/ id 値を送信 -->
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
        </form>
    </div>
</div>
        
    
   
@endsection
