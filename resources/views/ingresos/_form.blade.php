<div class="row g-3">
    <div class="col-md-4">
        <label class="form-label">Placa</label>
        <input type="text" name="placa" class="form-control" maxlength="10"
               value="{{ old('placa', $ingreso->placa ?? '') }}" required>
    </div>

    <div class="col-md-4">
        <label class="form-label">Marca</label>
        <input type="text" name="marca" class="form-control" maxlength="50"
               value="{{ old('marca', $ingreso->marca ?? '') }}" required>
    </div>

    <div class="col-md-4">
        <label class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" maxlength="50"
               value="{{ old('modelo', $ingreso->modelo ?? '') }}" required>
    </div>

    <div class="col-12">
        <label class="form-label">Problema</label>
        <textarea name="problema" class="form-control" rows="3" required>{{ old('problema', $ingreso->problema ?? '') }}</textarea>
    </div>

    <div class="col-md-6">
        <label class="form-label">Cliente</label>
        <input type="text" name="cliente_nombre" class="form-control" maxlength="80"
               value="{{ old('cliente_nombre', $ingreso->cliente_nombre ?? '') }}" required>
    </div>

    <div class="col-md-3">
        <label class="form-label">Teléfono</label>
        <input type="text" name="cliente_telefono" class="form-control" maxlength="20"
               value="{{ old('cliente_telefono', $ingreso->cliente_telefono ?? '') }}" required>
    </div>

    <div class="col-md-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-select" required>
            @foreach($estados as $estado)
                <option value="{{ $estado }}"
                    @selected(old('estado', $ingreso->estado ?? 'RECIEN_LLEGO') === $estado)>
                    {{ str_replace('_',' ', $estado) }}
                </option>
            @endforeach
        </select>
    </div>
</div>

