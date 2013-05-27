/**
 * Author Preselect
 *
 * @author Jon Mifsud
 * @version 0.1
 */
(function($) {
	$(function() {		
		$authorField = $('select[name="fields[author]"]');

		if ($authorField.length()>0 && $authorField.find('option:selected').val()=""){
			$authorField.find('option:contains('+Symphony.Author.first_name+' '+Symphony.Author.last_name+')').attr('selected', 'selected');
		}
	});
})(jQuery);