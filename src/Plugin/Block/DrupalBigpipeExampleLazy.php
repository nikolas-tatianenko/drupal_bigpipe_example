<?php
namespace Drupal\drupal_bigpipe_example\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *   id = "drupal_bigpipe_example_lazy",
 *   admin_label = @Translation("Bigpipe: Lazy")
 * )
 */
class DrupalBigpipeExampleLazy extends BlockBase {
	/**
	 * {@inheritdoc}
	 */
	public function build() {
		$build['header']['#markup'] = $this->t('content above');
		$build['slow_content'] = array(
			'#lazy_builder' => [
				'drupal_bigpipe_example.lazy_loader:generateSlowContent',
				array(),
			],
			'#create_placeholder' => TRUE,
		);
		$build['footer']['#markup'] = $this->t('content below');
		return $build;
	}
}

