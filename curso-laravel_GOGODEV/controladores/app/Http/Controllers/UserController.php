<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use illuminate\Support\Facades\DB;
use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
    {
    public function index()
        {
        /* //& Tipo de consultas SQL usando el ORM eloquent: Recuperar todos los datos de la  por medio de all() metodo estatico del ORM Eloquent*/

        //$users = User::all();
        //$users = User::where('age', 30)->get();
        //$users = User::where('email', 'ivor@demo.com')->get();
        //$users = User::where('name', 'Ivor')->orWhere('email', 'zambrano@demo.com')->get();
        //$users = User::where('age', '>', 20)->orderBy('age', 'desc')->get();
        //$users = User::where('age', '>', 20)->orderBy('age', 'asc')->get();
        //$users = User::where('age', '>', 20)->orderBy('age', 'asc')->limit(3 )->get();
        //$users = User::where('age', '>', 20)->orderBy('age', 'asc')->limit(4)->get();



        //& Tipo de consultas con la clase DB de Laravel para consiltar con lengua Sql
        // $query = "SELECT * FROM users";
        // $users = DB::select(DB::raw($query)); //!  No Funcionan



        //& Tipo de consultas mistas  con la clase DB(Sql) de Laravel y seudo eloquent (ORM) 
        $users = DB::table('users')->select()->get();




        return (view('user.index', compact('users')));
        }




    //^ Utilizando 3 metodos diferentes para crear usuarios 
    public function crearUsuario()
        {
        //& Metodo 1 para creaer usuario agregando los datos en forma individual instanciar y luego guardar:
        $user = new User();
        $user->name = 'Ívor';
        $user->email = 'ivor@demo.com';
        $user->password = Hash::make('123');
        $user->age = 30; // Añadido: campo age
        $user->address = '123 Main St'; // Añadido: campo address
        $user->zip_code = 12345; // Añadido: campo zip_code
        $user->save();// se Usa para guardar el registro en la base de datos por via ORM Eloquent





        //& Metodo 2 para creaer usuario usando fill y save de Eloquentinstanciar y luego guardar:
        $data2 = [
            'name'     => 'Zambrano',
            'email'    => 'zambrano@demo.com',
            'password' => Hash::make('101112'), // nunca guardar texto plano
            'age'      => 59,
            'address'  => '789  Main St',
            'zip_code' => 12345,
        ];
        $user2 = new User();
        $user2->fill($data2); // requiere $fillable para
        $user2->save();//Se usa para guardar el registro en la base de datos por via ORM Eloquent






        //& Metodo 3 para creaer usuario usando el metodo crearUsuario de Eloquent
        $data2 = [
            'name'     => 'Alexander',
            'email'    => 'alexander@demo.com',
            'password' => Hash::make('456'), // nunca guardar texto plano
            'age'      => 40,
            'address'  => '456  Main St',
            'zip_code' => 12345,
        ];
        //^  Asegúrate de definir $fillable en App\Models\User para estos campos
        $user = User::create($data2); // crearUsuario ya guarda y devuelve el modelo





        //& Metodo 4 para creaer usuario usando el metodo crearUsuario de Eloquent
        User::create([ // crearUsuario ya guarda y devuelve el modelo
            'name'     => 'Guzmán',
            'email'    => 'guzman@demo.com',
            'password' => Hash::make('789'), // nunca guardar texto plano
            'age'      => 50,
            'address'  => '789  Main St',
            'zip_code' => 12345,
        ]);


        return redirect()->route('UserController_index');
        }
    }
