<?php

namespace Drupal\dynamic_copyright_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DynamicCopyrightBlock' block.
 *
 * @Block(
 *  id = "dynamic_copyright_block",
 *  admin_label = @Translation("Dynamic copyright block"),
 * )
 */
class DynamicCopyrightBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $year = date("Y");
    $build = [];
    $build['dynamic_copyright_block']['#markup'] = "© $year. All rights reserved.";

    return $build;
  }

}
