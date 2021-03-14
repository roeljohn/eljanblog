<form role="search" method="get" id="searchform"
    class="signup-form form-inline justify-content-center pt-3" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control mr-md-1 semail" />
        <input type="submit" class="btn btn-primary" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    </div>
</form>
