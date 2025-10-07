<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'a direcao'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'anuncio'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'auditoria'=>[
                'Visualizar',
            ],
            'beneficios'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'categorias do noticias'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'categorias do projeto'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'projetos'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'convenios'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'contato'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'denuncie'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'editais'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'email'=>[
                'Visualizar',
                'configurar smtp',
                'testar conexao smtp'
            ],
            'estatuto'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'agenda'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'grupo'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'juridico'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'lead contato'=>[
                'Visualizar',
                'Remover'
            ],
            'municipios'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'newsletter'=>[
                'Visualizar',
                'Remover'
            ],
            'noticias'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Aprovar, Reprovar ou Remover Comentário',
                'Remover'
            ],
            'notificacao'=>[               
                'Visualizar',
                'Notificacao de auditoria',
            ],
            'parceiros'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'regionais'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'sindicalize-se'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'slide'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'sobre nos'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'topicos'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'usuario'=>[
                'Criar',
                'Editar',
                'Visualizar',
                'Remover',
                'Visualizar outros usuarios',
                'Atribuir grupos',
                'Tornar usuario master'
            ],
            'videos'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
        ];

        foreach($permissions as $key => $permission){
            foreach($permission as $value){
                Permission::create([
                    'name'=>strtolower("{$key}.{$value}")
                ]);
            }
        }
    }
}
