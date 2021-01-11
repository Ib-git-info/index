<?php
/**
 * Template for displaying search forms
 */
?>

<form action="<?php echo esc_url(home_url('/')); ?>" class="u-border-3 u-border-palette-1-base u-gradient u-input-round u-radius-50 u-search u-search-right u-search-1" method="">
      <button class="u-search-button" type="submit">
        <span class="u-search-icon u-spacing-10 u-text-grey-40">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b04b"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-b04b" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
        </span>
      </button>
      <input class="u-custom-font u-font-playfair-display u-search-input u-text-black u-search-input-1" type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php _e(sprintf(__('Search'))); ?>">
    </form>