@extends('layouts.app')
@section('content')
    
<div class="row">
    <div class="col-md-12">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 本登録フォーム -->
        <form action="{{ url('order_index/update') }}" method="POST" class="form-horizontal">
                
            <!-- 本のタイトル -->
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Order Number </label>
                    <input type="text" name="order_number" id="order_number" class="form-control" value ="{{ $order->order_number }}">
                </div>
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Part Number </label>
                    <input type="text" name="part_number"  id="part_number" class="form-control" value ="{{ $order->part_number }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Order Qty</label>
                    <input type="text" name="order_qty"  id="order_qty" class="form-control" value ="{{ $order->order_qty }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Unit Price</label>
                    <input type="text" name="unit_price"　    id="unit_price" class="form-control" value ="{{ $order->unit_price }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Contract Date</label>
                     <input type="date" name="con_date"     id="con_date" class="form-control" value ="{{ $order->con_date }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">supplier_id </label>
                    <input type="text" name="supplier_id"      id="supplier_id" class="form-control" value ="{{ $order->supplier_id }}">
                </div>
                
                <div class="col-sm-6">
                    <label for="book" class="col-sm-3 control-label">Recieved Qty </label>
                    <input type="text" name="received_qty"           id="received_qty" class="form-control" value ="{{ $order->received_qty }}">
                </div>
            </div>
   
        
                <!-- 本 登録ボタン -->
            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">
                Save
                </button>
                <a class="btn btn-link pull-right" href="{{ url('order_index') }}">
                    <i class="glyphicon glyphicon-backward"></i> Back
                </a>
            </div>
            
            <!-- id 値を送信 -->
            <input type="hidden" name="id" value="{{ $order->id }}" /> 
            <!--/ id 値を送信 -->
            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
        </form>
    </div>
</div>
        
    
   
@endsection
