<h1>Form information</h1>

<p>Tipusok:</p>
@foreach($types as $type)
<p>{{$type->type}}</p>
@endforeach
<br>
<p>Alkatrész:</p>
@foreach($parts as $part)
<p>{{$part->part}}</p> 
@endforeach
<br>
<p>Ár:</p>
@foreach($parts as $part)
<p>{{$part->price}} Ft</p> 
@endforeach

