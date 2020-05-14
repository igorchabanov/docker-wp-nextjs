<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Advanced Custom Fields: SVG Icon - https://github.com/BeAPI/acf-svg-icon/blob/master/README.md

echo $this->indent . htmlspecialchars("<?php \$".$this->var_name." = " . $this->get_field_method . "( '" . $this->name ."'". $this->location . " ); ?>")."\n";
echo $this->indent . htmlspecialchars("<?php if ( \$".$this->var_name." ) { ?>")."\n";
echo $this->indent . htmlspecialchars("	<?php echo wp_get_attachment_image( \$".$this->var_name.", 'full', true ); ?>")."\n";
echo $this->indent . htmlspecialchars("<?php } ?>\n");