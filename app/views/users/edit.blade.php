<form action="/users/{{ $user->id }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div>
        <input name="nombre" type="text" value="{{ $user->nombre }}" placeholder="nombre">
    </div>
    <div>
        <input name="apellido" type="text" value="{{ $user->apellido }}" placeholder="apellido">
    </div>
    <div>
        <input name="email" type="text" value="{{ $user->email }}" placeholder="email">
    </div>
    <div>
        <input name="clave" type="password" placeholder="clave">
    </div>
    <button type="submit">Agregar</button>
</form>