<div style="margin: 1px auto">
    @isset($data['name'])
        <p>Имя: <span style="color: red">{{$data['name']}}</span></p>  
    @endisset
    @isset($data['email'])
        <p>Маил: <span style="color: red">{{$data['email']}}</span></p>
    @endisset
    <p>Телефон: <span style="color: red">{{$data['phone']}}</span></p>
    <p>Заказ: <span style="color: red">{{$data['order']}}</span></p>
    @isset($data['image'])
        <img src="{{$message->embed(public_path().'/images/'.$data['image'])}}">   
    @endisset
</div>