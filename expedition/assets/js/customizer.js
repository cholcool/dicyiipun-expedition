/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
} )( jQuery );

function checkLeter() {
	var elem = document.getElementById('s').value;
	if (elem === "เเ") {
		alert("กรุณาใส่สระ แอ ให้ถูกต้อง เพื่อให้ได้ผลการค้นหาตามที่ต้องการ");
		document.getElementById('s').value = "";
	}
};