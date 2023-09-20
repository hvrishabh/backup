<?php


namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

  /**
   * Summary of HeroController
   */

class HeroController extends ControllerBase{

    public function heroList(){
        $heros = [
            ["name" => "hulk"],
            ["name" => "Thor"],
            ["name" => "Iron Man"],
            ["name" => "Luke Cage"],
            ["name" => "Black Widow"],
            ["name" => "Daredevil"],
            ["name" => "Captain America"],
            ["name" => "Wolverine"],
        ];

        // $ourHeros = "";
        // foreach($heros as $hero){
        //     $ourHeros .= "<li>" . $hero['name'] . "</li>";
        // }

        // return [
        //     '#type' => 'markup',
        //     '#markup' => '<h4>'. $this->t("These are the Best Heros ".'</h4><ol>') . $ourHeros . '</ol>'
        // ];

        return [
            '#theme' => 'hero_list',
            '#items' => $heros,
            '#title' => $this->t("Our wonderful Heros")
        ];

    }
}

?>