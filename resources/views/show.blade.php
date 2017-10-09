
@extends ('welcome')
@section ('content')
@foreach ( $ravintolat as $ravintola )

    <div class="links">
        <p> {{ $ravintola -> ravintola }} </p>
        <p> {{ $ravintola -> kaupunki }} </p>

        <p>
            <span class="glyphicon glyphicon-star-empty"></span>

            {{ number_format( $ravintola->tahdet / $ravintola->tahdetlkm , 1) }} / 5

        </p>

        <a  href=" {{ $ravintola -> url }} "> {{ $ravintola -> url }} </a>
    </div>
    <hr>

@endforeach



@endsection