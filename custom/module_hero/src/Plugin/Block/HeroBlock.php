<<<<<<< HEAD
<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class HeroBlock extends BlockBase
{
/**
 * Provides a block called "Example hero block".
 *
 * @Block{
 *  id = "module_hero_hero"},
 *  admin_label = @Translation("Example Hero BLock")
 */

/**
 * {@inheritDoc}
 */
public function build(){
    return [
        '#type' => 'markup',
        '#markup' => $this->t('The output of our superhero Block')
    ];
}
}
=======
<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class HeroBlock extends BlockBase
{
/**
 * Provides a block called "Example hero block".
 *
 * @Block{
 *  id = "module_hero_hero"},
 *  admin_label = @Translation("Example Hero BLock")
 */

/**
 * {@inheritDoc}
 */
public function build(){
    return [
        '#type' => 'markup',
        '#markup' => $this->t('The output of our superhero Block')
    ];
}
}
>>>>>>> 6a8888e47abef535ca4247cd18e83cb4807d5af4
