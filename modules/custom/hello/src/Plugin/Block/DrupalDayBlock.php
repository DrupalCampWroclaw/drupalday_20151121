<?php

/**
 * @file
 * Contains \Drupal\block_example\Plugin\Block\ExampleEmptyBlock.
 */

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

use Drupal\hello_world\DrupalDayForm;

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

    $form = \Drupal::formBuilder()->getForm('Drupal\hello_world\Form\DrupalDayForm');

    return array(
      '#markup' => render($form),
    );
  }

}
