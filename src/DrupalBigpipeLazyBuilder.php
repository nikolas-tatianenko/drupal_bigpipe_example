<?php
/**
 * @file
 * Contains \Drupal\block_example\LazyBuilder.
 */
namespace Drupal\drupal_bigpipe_example;
/**
 * Class DrupalBigpipeLazyBuilder.
 *
 * @package Drupal\timestamp_generator
 */
class DrupalBigpipeLazyBuilder {
  /**
   *
   */
  public function generateSlowContent() {
    sleep(5);
    return array(
      '#markup' => 'Laaaaaazy Content'
    );
  }
}