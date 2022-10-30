<h2>5. elem megjelenitése a parts táblából</h2>

<p>Tipusok:</p>
 @foreach($types_5 as $type)
<p>{{$type->type}}</p>
@endforeach
<br>

<p>Alkatrész:</p>
 @foreach($parts_5 as $part)
<p>{{$part->part}}</p> 
@endforeach 
<br>
<p>Ár:</p>

 @foreach($parts_5 as $part)
<p>{{$part->price}} Ft</p> 
@endforeach 

