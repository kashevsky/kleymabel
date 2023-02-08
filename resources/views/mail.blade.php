<div style="margin: 1px auto">
<p>Имя: <span style="color: red">{{$data['name']}}</span></p>
<p>Телефон: <span style="color: red">{{$data['phone']}}</span></p>
<p>Маил: <span style="color: red">{{$data['email']}}</span></p>
<p>Заказ:
<br>
 <span style="color: red">{{$data['order']}}</span></p>
<img src="{{$message->embed(public_path().'/images/'.$data['image'])}}">
</div>