<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\module_hero\HeroArticleService;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactory;

/**
 * Summary of HeroController
 */

class HeroController extends ControllerBase
{

    private $ArticleHeroService;
    protected $configFactory;

    public static function create(ContainerInterface $container)
    {
        return new static(
            $container->get("module_hero.hero_articles"),
            $container->get('config.factory')
        );
    }

    public function __construct(HeroArticleService $ArticleHeroService, ConfigFactory $configFactory)
    {
        $this->ArticleHeroService = $ArticleHeroService;
        $this->configFactory = $configFactory;
    }
    public function heroList()
    {
        // kint($this->ArticleHeroService);
        // kint($this->configFactory->get('example.settings')->get('example_thing'));
        // exit();
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
            '#title' => $this->configFactory->get('example.settings')->get('example_thing'),
            // '#title' => $this->t("Our wonderful Heros"),
        ];

    }
}
