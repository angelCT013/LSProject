<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller {

    /**
     * Display login of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function login(){
        $title = "Login";
        $description = "Some description for the page";
        return view('auth.login',compact('title','description'));
    }

    /**
     * Display register of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function register(){
        $title = "Registro";
        $description = "Some description for the page";
        return view('auth.register',compact('title','description'));
    }

    /**
     * Display forget password of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function forgetPassword(){
        $title = "Olvide mi contraseña";
        $description = "Some description for the page";
        return view('auth.forget_password',compact('title','description'));
    }

    /**
     * make the user able to register
     *
     * @return
     */
    public function signup(Request $request){
        $validators=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:usuario',
            'password'=>'required'
        ]);
        if($validators->fails()){
            return redirect()->route('register')->withErrors($validators)->withInput();
        }else{
            // $direccion = new direccion();
              // Crear una nueva dirección y obtener su ID
            $direccionId = DB::table('direccion')->insertGetId([
                'calle' => $request->calle,
                'colonia' => $request->colonia,
                'codigo_postal' => $request->cp,
                'ciudad_id' => $request->ciudad_id
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->lastname = $request->apellido;
            $user->tipo_de_usuario_id = $request->tipo_usuario_id;
            $user->password = bcrypt($request->password);
            $user->direccion_id = $direccionId;
            $user->save();
            auth()->login($user);
            // Autenticación exitosa, obtenemos el usuario autenticado
            $user = Auth::user();

            // Almacenamos el valor de tipo_de_usuario_id en una variable de sesión llamada 'rol'
            session(['rol' => $user->tipo_de_usuario_id]);
            return redirect()->intended(route('dashboard.landpage','en'))->with('message','Registration was successfull !');
        }
            // } else {
            //     // dd($request->all()); // Agrega esta línea
            //     // Llamar al stored procedure pasando los datos del usuario
            //     DB::statement("CALL sp_alta_usuario(?, ?, ?, ?, ?, ?, ?, ?)", [
            //    $request->calle,
            //    $request->colonia,
            //    $request->cp,
            //    $request->ciudad_id,
            //    $request->name,
            //    $request->apellido,
            //    $request->email,
            //        bcrypt($request->password),
            //     ]);

            //     // Realizar el login
            //     auth()->attempt([
            //         'email' => $request->email,
            //         'password' => $request->password,
            //     ]);

            //     // Redirigir al usuario
            //     return redirect()->intended(route('dashboard.landpage', 'en'))->with('message', 'Registration was successful!');
            // }
    }

    /**
     * make the user able to login
     *
     * @return
     */
    public function authenticate(Request $request){
        $validators=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($validators->fails()){
            return redirect()->route('login')->withErrors($validators)->withInput();
        }else{
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            // Autenticación exitosa, obtenemos el usuario autenticado
            $user = Auth::user();

            // Almacenamos el valor de tipo_de_usuario_id en una variable de sesión llamada 'rol'
            session(['rol' => $user->tipo_de_usuario_id]);
                return redirect()->intended(route('dashboard.landpage','es'))->with('message','Bienvenido!');
            }else{
                return redirect()->route('login')->with('message','Error !Email/Password son incorrectas !');
            }
        }

    }

    /**
     * make the user able to logout
     *
     * @return
     */
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('message','Successfully Logged out !');
    }
}
