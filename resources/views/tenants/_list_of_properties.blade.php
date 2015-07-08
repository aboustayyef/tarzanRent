{{-- 

This partial provides html of a list linked, coma-separated properties
it requires a $properties variable,
which is a collection of App\Property objects

--}}

@foreach($properties as $key=>$property)

	<a href={{route('properties.show', ['properties' => $property->id])}}>{{$property->description}}</a>
	@if($key < $properties->count() - 1 ) , @endif

@endforeach