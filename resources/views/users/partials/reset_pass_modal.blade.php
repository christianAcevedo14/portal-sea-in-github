<div class="modal show" id="resetPassModal" tabindex="-1" role="dialog"
     aria-labelledby="resetPassModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cambiar Contraseña</h4>
            </div>
            <form action="{{ route('password.update') }}" method="post"
                  enctype="multipart/form-data">
                <div class="modal-body">
                    <p>Por su seguridad, debe cambiar su contraseña temporera.</p>
                    <p>La nueva contraseña debe contener al menos:</p>
                    <ul>
                        <li>Un mínimo de ocho (8) caracteres</li>
                        <li>Una letra mayúscula</li>
                        <li>Una letra minúscula</li>
                        <li>Un número</li>
                    </ul>
                    <div class="form-horizontal form-group-separated">
                        <div class="form-group">
                            <div>
                                <input type="password"
                                       class="form-control @if($errors->has('new_password')) is-invalid @endif"
                                       name="new_password" placeholder="Nueva Contraseña" required
                                       value="{{ old('new_password') }}">
                                @if($errors->has('new_password'))
                                    <div class="invalid-feedback">{{ $errors->first('new_password') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="password"
                                       class="form-control  @if($errors->has('confirm_password')) is-invalid @endif"
                                       name="confirm_password" placeholder="Repetir Contraseña" required
                                       value="{{ old('confirm_password') }}">
                                @if($errors->has('confirm_password'))
                                    <div class="invalid-feedback">{{ $errors->first('confirm_password') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Cambiar Contraseña</button>
                </div>
                <input type="hidden" name="_method" value="put">
                @csrf
            </form>
        </div>
    </div>
</div>

