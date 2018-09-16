@extends('layouts.app')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<canvas id="myChart" height=50px></canvas>


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
                        <th>Ord Qty</th>
                        <th>U/P</th>
                        <th>C/D</th>
                        <th>id</th>
                        <th>Rcd Qty</th>
                        <th></th>
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
</div>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
    datasets: [{
      label: 'apples',
      data: [12, 19, 3, 17, 6, 3, 7],
      backgroundColor: "rgba(153,255,51,0.4)"
    }, {
      label: 'oranges',
      data: [2, 29, 5, 5, 2, 3, 10],
      backgroundColor: "rgba(255,153,0,0.4)"
    }]
  }
});
</script>

@endsection
