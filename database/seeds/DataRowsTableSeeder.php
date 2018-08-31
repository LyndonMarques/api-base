<?php

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('data_rows')->delete();

        \DB::table('data_rows')->insert(array (
            0 =>
            array (
                'id' => 33,
                'data_type_id' => 1,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            1 =>
            array (
                'id' => 34,
                'data_type_id' => 1,
                'field' => 'role_id',
                'type' => 'text',
                'display_name' => 'Role Id',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 2,
            ),
            2 =>
            array (
                'id' => 35,
                'data_type_id' => 1,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 3,
            ),
            3 =>
            array (
                'id' => 36,
                'data_type_id' => 1,
                'field' => 'email',
                'type' => 'text',
                'display_name' => 'Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 4,
            ),
            4 =>
            array (
                'id' => 37,
                'data_type_id' => 1,
                'field' => 'avatar',
                'type' => 'text',
                'display_name' => 'Avatar',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 5,
            ),
            5 =>
            array (
                'id' => 38,
                'data_type_id' => 1,
                'field' => 'password',
                'type' => 'text',
                'display_name' => 'Password',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 6,
            ),
            6 =>
            array (
                'id' => 39,
                'data_type_id' => 1,
                'field' => 'remember_token',
                'type' => 'text',
                'display_name' => 'Remember Token',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 7,
            ),
            7 =>
            array (
                'id' => 40,
                'data_type_id' => 1,
                'field' => 'settings',
                'type' => 'text',
                'display_name' => 'Settings',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 8,
            ),
            8 =>
            array (
                'id' => 41,
                'data_type_id' => 1,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 9,
            ),
            9 =>
            array (
                'id' => 42,
                'data_type_id' => 1,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 10,
            ),
            10 =>
            array (
                'id' => 43,
                'data_type_id' => 3,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            11 =>
            array (
                'id' => 44,
                'data_type_id' => 3,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            12 =>
            array (
                'id' => 45,
                'data_type_id' => 3,
                'field' => 'display_name',
                'type' => 'text',
                'display_name' => 'Display Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 3,
            ),
            13 =>
            array (
                'id' => 46,
                'data_type_id' => 3,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 4,
            ),
            14 =>
            array (
                'id' => 47,
                'data_type_id' => 3,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 5,
            ),
            15 =>
            array (
                'id' => 49,
                'data_type_id' => 4,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            16 =>
            array (
                'id' => 50,
                'data_type_id' => 4,
                'field' => 'user_id',
                'type' => 'text',
                'display_name' => 'User Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 2,
            ),
            17 =>
            array (
                'id' => 51,
                'data_type_id' => 4,
                'field' => 'base_category_id',
                'type' => 'text',
                'display_name' => 'Base Category Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            18 =>
            array (
                'id' => 52,
                'data_type_id' => 4,
                'field' => 'event',
                'type' => 'array',
                'display_name' => 'Event',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 6,
            ),
            19 =>
            array (
                'id' => 53,
                'data_type_id' => 4,
                'field' => 'guest',
                'type' => 'array',
                'display_name' => 'Guest',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 7,
            ),
            20 =>
            array (
                'id' => 54,
                'data_type_id' => 4,
                'field' => 'quoted_items',
                'type' => 'array',
                'display_name' => 'Quoted Items',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 8,
            ),
            21 =>
            array (
                'id' => 55,
                'data_type_id' => 4,
                'field' => 'file',
                'type' => 'file',
                'display_name' => 'Arquivo',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 9,
            ),
            22 =>
            array (
                'id' => 56,
                'data_type_id' => 4,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Criado em',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 11,
            ),
            23 =>
            array (
                'id' => 57,
                'data_type_id' => 4,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 10,
            ),
            24 =>
            array (
                'id' => 58,
                'data_type_id' => 1,
                'field' => 'user_belongsto_role_relationship',
                'type' => 'relationship',
                'display_name' => 'roles',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"name","pivot_table":"base_categories","pivot":"0","taggable":"0"}',
                'order' => 11,
            ),
            25 =>
            array (
                'id' => 59,
                'data_type_id' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'type' => 'relationship',
                'display_name' => 'roles',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'order' => 12,
            ),
            26 =>
            array (
                'id' => 60,
                'data_type_id' => 4,
                'field' => 'quotation_belongsto_base_category_relationship',
                'type' => 'relationship',
                'display_name' => 'Categoria',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\BaseCategory","table":"base_categories","type":"belongsTo","column":"base_category_id","key":"id","label":"name","pivot_table":"base_categories","pivot":"0","taggable":"0"}',
                'order' => 5,
            ),
            27 =>
            array (
                'id' => 61,
                'data_type_id' => 4,
                'field' => 'quotation_belongsto_user_relationship',
                'type' => 'relationship',
                'display_name' => 'Usuário',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"id","key":"id","label":"name","pivot_table":"base_categories","pivot":"0","taggable":"0"}',
                'order' => 4,
            ),
        ));


    }
}
