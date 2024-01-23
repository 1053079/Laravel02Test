<?php

namespace App\Models;

class Listing {
    public static function all() {
        return   [  
         [
            'id' => 1,
            'title' => 'Direct Shot',
            'image' => 'https://i.pinimg.com/originals/96/cb/5a/96cb5a29b529cd85483b9dc1d322ca93.gif',
            'description' => "Isagi first assesses the positions of defenders and the trajectory of the ball, then lands a powerful kick on the ball's impact point in order to score a clean goal. In doing this, Isagi avoids having to overthink his positioning and next move and can just score a clean shot with no interference. It was noted by Nagi that Isagi has no wasted motion when performing his shot, implying that Isagi performs it with flawless technique and control."
        ],
        [
            'id' => 2,
            'title' => 'Two Stage Revolver Fake Volley',
            'image' => 'https://c.tenor.com/pPtKViokf2oAAAAd/tenor.gif',
            'description' => "First performed in the rematch between Isagi's Team White vs. Rin's Team Red, when Nagi was pressured to score and prove his worth on the field in such a high level game. Nagi starts by setting up a high powered shot from an incoming pass but at the last second changes the angle of the shot to send the ball spinning in the air. The speed of the ball's spin makes it float in place, allowing Nagi to follow up with a high powered shot. Rin himself could not predict or counter the move and it was good enough to provoke him into getting serious. When Anri first saw it, she described it as a miracle, but Ego suggested it was a move possible because of Flow State."
        ],
        [
            'id' => 3,
            'title' => 'Mid Range Power Shot',
            'image' => 'https://www.icegif.com/wp-content/uploads/2023/02/icegif-1293.gif',
            'description' => "When in possession of the ball and holding off two defenders, Kunigami is able to push past his defenders while opening up space for himself and shooting a high powered shot with his right foot, almost scoring an effortless shot."
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