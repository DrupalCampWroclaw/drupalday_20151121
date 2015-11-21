<?php

/**
 * @file
 * Contains \Drupal\block_example\Plugin\Block\ExampleEmptyBlock.
 */

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: empty block' block.
 *
 * @Block(
 *   id = "drupalday_block",
 *   admin_label = @Translation("DrupalDayBlock")
 * )
 */
class DrupalDayBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hello, DrupalDay!'),
    );
  }

}
