<?php

use Illuminate\Database\Seeder;
use App\Playa;
use App\User;
use App\Encuesta;
use App\informacionPlayas;

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
        $this->insertVoto(1,50,15,17,50,25,10,15,90,10);
        $this->insertVoto(2,12,1,11,50,25,16,15,90,10);
        $this->insertVoto(3,12,1,11,50,25,10,15,90,10);
        $this->insertVoto(4,15,16,17,18,19,20,21,22,30);
        $this->insertVoto(5,40,35,20,15,50,20,15,20,30);
        $this->insertVoto(6,70,90,100,50,50,25,10,20,30);
        //$this->insertUsuario('Admin','eath2497@gmail.com','Uniproyecto_1997','1');
        $this->insertPlaya('Playa gabiota',21.133444,-86.746234,1,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Langosta',21.137946,-86.781482,1,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Caracol',21.138829,-86.748853,2,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Chacmol',21.128981,-86.748892,2,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Blanca',21.121881,-86.753498,3,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Linda',21.145145,-86.788148,3,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa Tortugas',21.1516885,-86.7985591,4,'ninguno','disponible','Quintana Roo');
        $this->insertPlaya('Playa las Perlas',21.156927,-86.799771,4,'ninguno','disponible','Quintana Roo');
        
        $this->voto(1,10,15);
        $this->voto(2,20,15);
        $this->voto(3,30,25);
        $this->voto(4,40,35);
        $this->voto(5,50,45);
        $this->voto(6,20,53);
    }
    
    /*private function insertUsuario($name,$email,$password,$permiso){
        $usuario= new User();
        $usuario->name=$name;
        $usuario->email=$email;
        $usuario->password=bcrypt($password);
        $usuario->permiso=$permiso;
    }*/
    private function voto($idplaya,$votoP,$votoN){
        $voto = new informacionPlayas();
        $voto->idplaya = $idplaya;
        $voto->votospositivos = $votoP;
        $voto->votosnegativos = $votoN;
        $voto->save();

    }

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
        $Encuesta->save();
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
