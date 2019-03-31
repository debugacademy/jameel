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
  	$year = date("Y");
    $build = [];
    $build['dynamic_copyright_block']['#markup'] = "&copy;  $year All rights reserved";

    return $build;
  }

}
