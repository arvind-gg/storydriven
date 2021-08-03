/**
 * Filename: album.js
 * Description: Album page JS
 */

const Album = function($) {
	const dataFile = '/api/album/1';
	const $intro = $('.intro');
	const $gallery = $('.gallery');
  let photos, currentAlbum, displayMode;

	/**
	 * Initialize module
	 * 
	 * @returns {void}
	 */
  function init() {
    loadDataFile();
		addListeners();
  }

	/**
	 * Load data file
	 * 
	 * @returns {void}
	 */
  function loadDataFile() {
    $.getJSON(dataFile, function(response){
			currentAlbum = response;
			console.log(response);
			populate();
    })
    .fail(function(){
      console.log('failed');
    });
	}

	/**
	 * Populate DOM
	 * 
	 * @returns {void}
	 */
	function populate() {
		// fill photos
		let photoHtml = '';
		for (var i in currentAlbum.photos) {
			var photo = currentAlbum.photos[i];
			photoHtml = photoHtml + `<div class="photo">
				<div class="img"><img src="/img/${photo.img}" alt="${photo.title}" /></div>
				<div class="title">${photo.title}</div>
				<div class="description">${photo.description}</div>
				<div class="meta">
					<span class="featured">`;
			if (photo.featured) {
				photoHtml += '<img src="/img/heart.png" alt="Favourite" />';
			}
			photoHtml += `</span><span class="date">${photo.date}</span>
				</div></div>`;
		}

		$gallery.html(photoHtml);
	}

	/**
	 * Add event listeners
	 * 
	 * @returns {void}
	 */
	function addListeners() {
		$('input[name=display_option]').on('change', function(){
			displayMode = $(this).val();
			$('.gallery').removeClass('display-grid display-list');
			$('.gallery').addClass('display-'+displayMode);
		})
	}

  init();

}(jQuery)