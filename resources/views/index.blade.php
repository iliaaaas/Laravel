
<h1>All the shoes</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Marque</th>
        <th>Prix</th>
        <th>Date fabrication</th>
        <th>Color</th>
    </tr>
</table>

@foreach($shoes as $shoe)
    <tr>
        <td>{{$shoe->id}}</td>
        <td>{{$shoe->name}}</td>
        <td>{{$shoe->brand}}</td>
        <td>{{$shoe->price}}</td>
        <td>{{$shoe->fabrication}}</td>
        <td>{{$shoe->color}}</td>
    </tr>
@endforeach
