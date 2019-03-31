<?php

namespace Drupal\dynamic_coyright_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DynamicCopyRightBlock' block.
 *
 * @Block(
 *  id = "dynamic_copyright_block",
 *  admin_label = @Translation("Dynamic copyright block"),
 * )
 */
class DynamicCopyRightBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['dynamic_copyright_block']['#markup'] = 'Implement DynamicCopyRightBlock.';

    return $build;
  }

}
