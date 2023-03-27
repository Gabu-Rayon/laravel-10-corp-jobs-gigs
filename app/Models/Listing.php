<?php 

namespace App\Models;


class Listing{
     public static function all(){
        return [
            [  'id' => 1,
            'title' => 'Listing One',
            'description' => 'Here is where you can register web routes for your application.
                          These routes are loaded by the RouteServiceProvider and all of them will 
                          be assigned to the "web" middleware group. Make something great!'
        ],
        
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Here is where you can register web routes for your application.
                          These routes are loaded by the RouteServiceProvider and all of them will 
                          be assigned to the "web" middleware group. Make something great!'
        ]
        ];
        
     }

     public static function find($id){
        $listings = self::all();        
        foreach($listings as $listing){
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
     }
}