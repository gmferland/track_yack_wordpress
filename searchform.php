<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="sr-only">Search input</span>
	</label>
  <input type="search" id="<?php echo $unique_id; ?>" 
  class="form-control" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'trackyack' ); ?>" 
  value="<?php echo get_search_query(); ?>" name="s" />
  <span class="input-group-btn">
    <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">Search</span></button>
  </span>
</form>