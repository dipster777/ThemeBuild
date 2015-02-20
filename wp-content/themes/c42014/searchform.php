<form action="<?php echo get_option('home'); ?>">
	<input type="text" value="I'm looking for" name="s" id="s" onfocus="if (this.value == 'I\'m looking for') {this.value = '';}" onblur="if (this.value == '') {this.value = 'I\'m looking for';}" />
    <input type="hidden" name="site_section" value="site-search" />
    <button type="submit"></button>
    </form>