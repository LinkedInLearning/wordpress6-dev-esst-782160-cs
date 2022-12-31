<?php
/**
 * Controller for a widget.
 *
 * @package Rosegarden
 */

namespace Rosegarden\Controllers;

/**
 * The Controller class for a widget
 */
class Widget extends \WP_Widget {

	/**
	 * Self registers this class to keep the pluginfile clean.
	 */
	public static function init() {
		register_widget( get_called_class() );
	}

	/**
	 * Constructs the widget.
	 */
	public function __construct() {
		parent::__construct(
			'rosegarden',  // Base ID.
			'Rosegarden'   // Name.
		);
		add_action(
			'widgets_init',
			function() {
				register_widget( __( 'Rosegarden', 'rosegarden' ) );
			}
		);
	}

	/**
	 * Initializes the widget.
	 *
	 * @param array $args Holds settings.
	 * @param array $instance Holds actual data in widget.
	 */
	public function widget( $args, $instance ) {

		load_template(
			__DIR__ . '/../views/widget.php',
			true,
			$instance
		);

	}

	/**
	 * Display the form in the backend.
	 *
	 * @param array $instance Data of the widget.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$text  = ! empty( $instance['text'] ) ? $instance['text'] : '';
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'text_domain' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
		</p>
		<?php
	}

	/**
	 * Performs the update of data.
	 *
	 * @param array $new_instance New data.
	 * @param array $old_instance Old data.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['text']  = ( ! empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
		return $instance;
	}
}
