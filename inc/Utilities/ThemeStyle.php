<?php
/**
 * WP Blueprint Theme Classic Utility: Theme Styles
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the OptionsHandler in order to register theme-specific options.
 */
class ThemeStyle extends \WPBlueprint\Theme\Core\Handlers\ThemeStyle {

	/**
	 * Constructor: Registering options
	 */
	public function __construct() {
		$colors = array(
			'white-100'   => array(
				'value'            => '#F6F7F9',
				'allow_in_backend' => true,
			),
			'white-200'   => array(
				'value'            => '#E7EAEE',
				'allow_in_backend' => true,
			),
			'neutral-700' => array(
				'value'            => '#4F4F4F',
				'allow_in_backend' => true,
			),
			'neutral-900' => array(
				'value'            => '#07090D',
				'allow_in_backend' => true,
			),
			'oxford-blue' => array(
				'value'            => '#000B28',
				'allow_in_backend' => true,
			),
			'primary'     => array(
				'value'            => '#8900FF',
				'allow_in_backend' => true,
			),
		);

		$gradients = array(
			'gradient'           => array(
				'value'            => 'linear-gradient(132deg, #572285 0%, #572285 0.01%, #9214FF 100%)',
				'allow_in_backend' => true,
			),
			'gradient-secondary' => array(
				'value'            => 'linear-gradient(53deg, #572285 0%, #572285 0.01%, #9214FF 100%)',
				'allow_in_backend' => true,
			),
		);

		$font_sizes = array(
			's'         => array(
				'value'            => '16px',
				'value_mobile'     => '16px',
				'allow_in_backend' => true,
			),
			'm'         => array(
				'value'            => '18px',
				'value_mobile'     => '18px',
				'allow_in_backend' => true,
			),
			'xl'        => array(
				'value'            => '25px',
				'value_mobile'     => '25px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'xxl'       => array(
				'value'            => '30px',
				'value_mobile'     => '25px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'xxxl'      => array(
				'value'            => '37px',
				'value_mobile'     => '25px',
				'elements'         => 'h4, h5, h6',
				'allow_in_backend' => true,
			),
			'display-3' => array(
				'value'            => '47px',
				'value_mobile'     => '36px',
				'elements'         => 'h3',
				'allow_in_backend' => false,
			),
			'display-2' => array(
				'value'            => '56px',
				'value_mobile'     => '48px',
				'elements'         => 'h2',
				'allow_in_backend' => false,
			),
			'display-1' => array(
				'value'            => '62px',
				'value_mobile'     => '64px',
				'elements'         => 'h1',
				'allow_in_backend' => false,
			),

		);

		parent::set_colors( $colors );
		parent::set_font_sizes( $font_sizes );
		parent::set_gradients( $gradients );
	}
}
