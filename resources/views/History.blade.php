@extends('layouts.app')
@section('content')
<head>
<style>
    .small-order{
  margin: 80px auto;
}
table{
  width:100%;
  border-collapse:collapse;
}
.cart-info{
  display: flex;
  flex-wrap: wrap;
}
th{
  text-align:left;
  padding:5px;
  color:#fff;
  background:#ff523b;
  font-weight: normal;
}
td{
  padding: 10px 5px;
}
td input{
  width: 55px;
  height: 40px;
  padding: 5px;
}
td a{
  color:#ff523b;
  font-size: 12px;
}

td img{
  width: 120px;
  height: 120px;
  margin-right:10px;

}

</style>

</head>
<div class="container small-order">

    <table>
        <tr>
            <th>{{$user->name}}</th>
            
            <th>Subtotal</th>
        </tr>
        @foreach($user->Historys as $history)
        <tr>
            <td>
            

                <div class="cart-info">   
                    <div>
                        <p>รายละเอียด:  {{$history->item}}</p>
                        <small>ราคารวม {{$history->totalprice}} บาท</small>
                        <br><br>
                        
                    </div>
                </div>
            </td>            
            <td>{{$history->totalprice}} บาท</td>
        </tr>
        @endforeach
        
    </table>
    <br>
    <div class ='d-flex justify-content-end'>
    <a href="/dashboard" class="btn btn-primary">สั่งซื้ออีกครัง</a>
    </div>
    
</div>
@endsection