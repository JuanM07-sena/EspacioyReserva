@csrf
<div class="mb-3">
  <label class="form-label">Espacio</label>
  <select name="espacio_id" class="form-control" required>
    <option value=""> Selecciona un espacio</option>
    @foreach($espacios as $esp)
      <option value="{{ $esp->id }}" {{ (string)old('espacio_id', $reserva->espacio_id ?? '') === (string)$esp->id ? 'selected' : '' }}>
        {{ $esp->nombre }} — {{ $esp->ubicacion }}
      </option>
    @endforeach
  </select>
</div>

<div class="mb-3">
  <label class="form-label">Solicitante</label>
  <input name="solicitante" value="{{ old('solicitante', $reserva->solicitante ?? '') }}" class="form-control" required maxlength="255">
</div>

<div class="mb-3">
  <label class="form-label">Fecha</label>
  <input type="date" name="fecha" value="{{ old('fecha', $reserva->fecha ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
  <label class="form-label">Hora inicio</label>
  <input type="time" name="hora_inicio" value="{{ old('hora_inicio', $reserva->hora_inicio ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
  <label class="form-label">Hora fin</label>
  <input type="time" name="hora_fin" value="{{ old('hora_fin', $reserva->hora_fin ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
  <label class="form-label">Motivo (opcional)</label>
  <textarea name="motivo" class="form-control">{{ old('motivo', $reserva->motivo ?? '') }}</textarea>
</div>
