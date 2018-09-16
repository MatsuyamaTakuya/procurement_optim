@extends('layouts.app')
@section('content')
    
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
    
    <!-- 一覧 -->
    @if (count($orders) > 0)
        <div class="panel panel-default">
           <div class="panel-heading"> </div>
            <div class="panel-body">
                <table class="table table-striped task-table table-bordered">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>Order#</th>
                        <th>part#</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <!-- 契約番号 -->
                                <td class="table-text">
                                    <div>{{ $order->order_number }}</div>
                                </td>
                                <!-- 契約種類 -->                                                               <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $order->part_number}}</div>
                                </td>
                                
                                <!-- パーツ -->                                                               <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $order->order_qty}}</div>
                                </td>           
                                
                                <!-- サプライヤーid-->                                                               <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $order->unit_price}}</div>
                                </td>  
                                
                                <!-- スタート-->                                                               <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $order->con_date}}</div>
                                </td>          
                                <!-- エンド -->                                                               <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $order->supplier_id}}</div>
                                </td>   
                                
                                <!-- エンド -->                                                               <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $order->received_qty}}</div>
                                </td>   
                                
                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('order_edit/'.$order->id) }}" method="POST">
                                       {{ csrf_field() }}
                                       <button type="submit" class="btn btn-primary">
                                           <i class="glyphicon glyphicon-trash"></i>更新
                                       </button>
                                    </form>
                                </td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    <!--  ook: 既に登録されてる本 リスト -->
   
    </div>
@endsection
