<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use function var_dump;



class UserController extends Controller
    {
    public function index()
        {
        // Recuperar todos los datos de la  por medio de ORM Eloquent 
        $users = User::all();
        //var_dump($users->toArray());
        return (view('user.index', compact('users')));
        }




    //^ Utilizando 3 metodos diferentes para crear usuarios 
    public function create()
        {
        //& Metodo 1 para creaer usuario agregando los datos en forma individual instanciar y luego guardar:
        $user = new User();
        $user->name = 'Ívor';
        $user->email = 'ivor@demo.com';
        $user->password = '123';
        $user->age = 30; // Añadido: campo age
        $user->address = '123 Main St'; // Añadido: campo address
        $user->zip_code = 12345; // Añadido: campo zip_code
        $user->save();// se Usa para guardar el registro en la base de datos por via ORM Eloquent





        //& Metodo 2 para creaer usuario usando el metodo create de Eloquent
        $data2 = [
            'name'     => 'Alexander',
            'email'    => 'alexander@demo.com',
            'password' => Hash::make('456'), // nunca guardar texto plano
            'age'      => 50,
            'address'  => '456  Main St',
            'zip_code' => 12345,
        ];
        //^  Asegúrate de definir $fillable en App\Models\User para estos campos
        $user = User::create($data2); // create ya guarda y devuelve el modelo





        //& Metodo 3 para creaer usuario usando fill y save de Eloquentinstanciar y luego guardar:
        $data3 = [
            'name'     => 'Zambrano',
            'email'    => 'zambrano@demo.com',
            'password' => Hash::make('789'), // nunca guardar texto plano
            'age'      => 50,
            'address'  => '789  Main St',
            'zip_code' => 12345,
        ];
        $user = new User();
        $user->fill($data3); // requiere $fillable para
        $user->save();//Se usa para guardar el registro en la base de datos por via ORM Eloquent

        return redirect()->route('user_index');
        }
    }
