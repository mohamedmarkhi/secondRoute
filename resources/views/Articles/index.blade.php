{{-- {{ print_r($TousLesProduits) }}; --}}

<body style={{'background: olive'}}>
    <table border=1>
        <tr>
            <th>Identification</th>
            <th>Created at time</th>
            <th>Updated at time</th>
        </tr>
        @foreach ( $TousLesProduits as $Produit )
        <tr>
            <td>{{$Produit->id}}</td>
            <td>{{$Produit->created_at}}</td>
            <td>{{$Produit->updated_at}}</td>
        </tr>
        @endforeach
    </table>
</body>

{{-- {{ $Produit['Designation'] }}
<br>     --}}
