<h1> lista datos de la api </h1>

@foreach($tradjson as $tj)
    <div style="border:1px solid #49a19db2; margin:7px; padding:7px;"> 
        <h3> {{$tj['title']}} </h3>
        <p>
            {{$tj['body']}}
        </p>
    </div>
@endforeach