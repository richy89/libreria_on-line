<?php

class AuthController extends BaseController {


    /**
     * Muestra el formulario para login.
     */
    public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return View::make('cliente.usuario');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('index.login');
    }


    /**
     * Valida los datos del usuario.
     */
    public function postLogin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $nombre = Input::get('nombre');
        // Obtenemos la contraseña enviada
        $password = Input::get('password');
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if (Auth::attempt(['nombre' => $nombre, 'password' => $password, 'tipousuario'=>'cliente']))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return View::make('cliente.usuario');
        }
        if (Auth::attempt(['nombre' => $nombre, 'password' => $password, 'tipousuario'=>'admin']))
        {
            return View::make('administrador.administrador');
        }
        else
        {
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            return Redirect::to('login')
            ->with('mensaje_error', 'Tus datos son incorrectos')
            ->withInput();
        }
    }


    /**
     * Muestra el formulario de login mostrando un mensaje de que cerró sesión.
     */
    public function logOut()
    {
        Auth::logout();
        return Redirect::to('login')
        ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }
}