<h1> Api holisss </h1>

@foreach($trjson as $tjn)
    <div style="border:1px solid #626363b2; margin:7px; padding:2px;"> 
        <h3> {{$tjn['title']}} </h3>
        <p>
            {{$tjn['body']}}
        </p>
    </div>
@endforeach