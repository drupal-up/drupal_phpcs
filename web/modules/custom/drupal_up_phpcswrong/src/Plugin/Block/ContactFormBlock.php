<?php

namespace Drupal\drupal_up_phpcswrong\Plugin\Block;

// use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: empty block' block.
 *
 * @Block(
 *   id = "drupal_up_contact",
 *   admin_label = @Translation("Contact form block")
 * )
 */
class ContactFormBlock extends \Drupal\Core\Block\BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // We should use DI here.
    // It is also an unused
    $form_builder = /Drupal::service('form_builder');

    return [
      '#type' => 'markup',
      '#markup' => '',
    ];
  }

  public function getAllTrees() {

  }

}
