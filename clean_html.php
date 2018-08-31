<?php
/*
Plugin Name: clean_html
Plugin URI: https://mon-siteweb.com/
Description: Nettoyer le html afin de valider auprès de W3C
Author: Adjan Consulting
Version: 1.0
Author URI: https://adjanconsulting.com
*/

// Hook the 'shutdown' action hook, add the function named 'mfp_clean_html' to it
add_action("shutdown", "mfp_clean_html");
 
// Define 'mfp_clean_html'
function mfp_clean_html()
{
  echo "
<script>
	// remove type= in script and style tags

	// i'm filling an array with all script Elements
	const scriptTags=document.getElementsByTagName('script')
	// for each script element, i remove the type attribute
	for (let script of scriptTags) {
		script.removeAttribute('type')
	}
	// i'm filling an array with all style Elements
	const styleTags=document.getElementsByTagName('style')
	// for each style element, i remove the type attribute
	for (let style of styleTags) {
		style.removeAttribute('type')
	}

	// search the duplicate Id and modify them

	// making an array that will be filled with the id of elements
	//const idArray=[]
	// push the value of the Id of the element if not in an array of Id
	/*for (let element of document) {
		if (!idArray.includes(element.getAttribute('id'))) {
			idArray[element.getAttribute('id')]=1	// first entry of the key element.getAttribute('id')
		}
	}*/
	// increment of counter if already exist
	// for all counter >1
	// modify the Id
	//

	//}
</script>";
}