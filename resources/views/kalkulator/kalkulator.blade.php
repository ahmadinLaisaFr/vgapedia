<div>
    <form action="{{ url('kalkulator') }}" method="post">
        @csrf
        <input type="number" name="bilangan1" id="">
        <input type="number" name="bilangan2" id="">
        <button type="submit" name="submit">Hitung</button>
    </form>

    @if (isset($hasil))
    <h1>{{ $hasil }}</h1>
    @endif
</div>