@extends('layouts.app')
@section('content')
    
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
    
    <!-- 本登録フォーム -->
    <form action="{{ url('/order_apply') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
        <!-- 本のタイトル -->
        <div class="form-group">
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Order Number </label>
                <input type="text" name="order_number" id="order_number" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Part Number</label>
                <input type="text" name="part_number"  id="part_number" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Order Qty</label>
                <input type="text" name="order_qty"  id="order_qty" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Unit Price</label>
                <input type="text" name="unit_price"  id="unit_price" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Contract Date</label>
                 <input type="date" name="con_date"     id="con_date" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">supplier_id</label>
                <input type="text" name="supplier_id"      id="supplier_id" class="form-control">
            </div>
            
            <div class="col-sm-6">
                <label for="book" class="col-sm-3 control-label">Recieved Qty</label>
                <input type="text" name="received_qty"  id="received_qty" class="form-control">
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
