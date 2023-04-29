@foreach ($cars as $car)
    <p>{{$car->imagen}}{{$loop->index}}</p>
    <img src="{{url(''.$car->imagen)}}">
@endforeach