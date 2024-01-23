<?php

namespace App\Models;

class Listing {
    public static function all() {
        return   [  
         [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Direct Shot'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Five Stage Revolver Fake Volley'
        ]
        ];
    }
    public static function find($id) {
        $listings = self::all();
        foreach($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
};