<?php

use Illuminate\Database\Seeder;
use App\Playa;
use App\User;
use App\Encuesta;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'eath2497@gmail.com',
            'password' => bcrypt('Uniproyecto_1997'),
            'permiso' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'richi@gmail.com',
            'password' => bcrypt('123456'),
            'permiso' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'edgar',
            'email' => 'edgar@gmail.com',
            'password' => bcrypt('123456'),
            'permiso' => '2',
        ]);
        DB::table('users')->insert([
            'name' => 'ricardo',
            'email' => 'ricardo@gmail.com',
            'password' => bcrypt('123456'),
            'permiso' => '2',
        ]);

        DB::table('encuestas')->insert([
            
            'idplaya'=> 1,
            'hombre'=> 10,
            'sargazo'=> 10,
            'organica'=> 10,
            'inorganica'=> 10,
            'mucha'=> 10,
            'poca'=> 10,
            'menosCincuenta'=> 10,
            'menosCien'=> 10,
            'masCien'=> 10,
        ]);
        DB::table('encuestas')->insert([
            
            'idplaya'=> 2,
            'hombre'=> 50,
            'sargazo'=> 40,
            'organica'=> 30,
            'inorganica'=> 20,
            'mucha'=> 10,
            'poca'=> 20,
            'menosCincuenta'=> 30,
            'menosCien'=> 40,
            'masCien'=> 10,
        ]);
        DB::table('encuestas')->insert([
            
            'idplaya'=> 3,
            'hombre'=> 10,
            'sargazo'=> 10,
            'organica'=> 10,
            'inorganica'=> 10,
            'mucha'=> 10,
            'poca'=> 10,
            'menosCincuenta'=> 10,
            'menosCien'=> 10,
            'masCien'=> 10,
        ]);
        DB::table('encuestas')->insert([
            
            'idplaya'=> 4,
            'hombre'=> 50,
            'sargazo'=> 40,
            'organica'=> 30,
            'inorganica'=> 20,
            'mucha'=> 10,
            'poca'=> 20,
            'menosCincuenta'=> 30,
            'menosCien'=> 40,
            'masCien'=> 10,
        ]);
        DB::table('encuestas')->insert([
            
            'idplaya'=> 5,
            'hombre'=> 10,
            'sargazo'=> 10,
            'organica'=> 10,
            'inorganica'=> 10,
            'mucha'=> 10,
            'poca'=> 10,
            'menosCincuenta'=> 10,
            'menosCien'=> 10,
            'masCien'=> 10,
        ]);
        $this->insertVoto(2,12,1,11,50,25,10,15,90,10);
        //$this->insertUsuario('Admin','eath2497@gmail.com','Uniproyecto_1997','1');
        $this->insertPlaya('Playa gabiota',21.133444,-86.746234,1,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Langosta',21.137946,-86.781482,1,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Caracol',21.138829,-86.748853,2,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Chacmol',21.128981,-86.748892,2,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Blanca',21.121881,-86.753498,3,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Linda',21.145145,-86.788148,3,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Tortugas',21.1516885,-86.7985591,4,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa las Perlas',21.156927,-86.799771,4,'ninguno','disponible','Quintana Roo');
        
        
    }
    
    /*private function insertUsuario($name,$email,$password,$permiso){
        $usuario= new User();
        $usuario->name=$name;
        $usuario->email=$email;
        $usuario->password=bcrypt($password);
        $usuario->permiso=$permiso;
    }*/

    private function insertVoto($idplaya,$hombre,$sargazo,$organica,$inorganica,$mucha,$poca,$menosCin,$menosCien,$masCien){
        $Encuesta = new Encuesta();
        $Encuesta->idplaya = $idplaya;
        $Encuesta->hombre = $hombre;
        $Encuesta->sargazo = $sargazo;
        $Encuesta->organica = $organica;
        $Encuesta->inorganica = $inorganica;
        $Encuesta->mucha = $mucha;
        $Encuesta->poca = $poca;
        $Encuesta->menosCincuenta = $menosCin;
        $Encuesta->menosCien = $menosCien;
        $Encuesta->masCien = $masCien;     

    }

    private function insertPlaya($nombre,$latitud,$longitud,$bandera,$evento,$estacionamiento,$ubicacion){
        $Playa = new Playa();
        $Playa->nombre=$nombre;
        $Playa->latitud=$latitud;
        $Playa->longitud=$longitud;
        $Playa->ubicacion=$ubicacion;
        $Playa->bandera=$bandera;
        $Playa->estacionamiento=$estacionamiento;
        $Playa->Evento=$evento;
        $Playa->save();

    }
}
