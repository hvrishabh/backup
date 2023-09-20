<?php

namespace Drupa\block_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class HeroBlock extends BlockBase
{

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "Block_hero_id",
 *   admin_label = @Translation("Hero block Basics"),
 *   category = "Examples"
 * )
 */

    public function build()
    {
        return [
            '#type' => 'markup',
            '#markup' => $this->t('The output of our superhero Block'),
        ];
    }
}
