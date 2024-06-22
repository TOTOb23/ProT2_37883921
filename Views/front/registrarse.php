<div class="container mt-4">
    <h2 class="mb-4">Formulario de Registro</h2>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required>
        </div>
        <div class="form-group col-md-6">
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" id="apellido" placeholder="Ingresa tu apellido" required>
        </div>
      </div>
      <div class="form-group">
        <label for="usuario">Usuario:</label>
        <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu nombre de usuario" required>
      </div>
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirmar Contraseña:</label>
        <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary mr-2">Registrarse</button>
        <button type="reset" class="btn btn-secondary">Borrar</button>
      </div>
    </form>
  </div>