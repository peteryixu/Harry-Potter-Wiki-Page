// autocomplet : this function will be executed every time we change the text
function autocomplet_1() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#country_id_1').val();
	$('#country_list_id_1').hide();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#country_list_id_1').show();
				$('#country_list_id_1').html(data);
			}
		});
	} else {
		$('#country_list_id_1').hide();
	}

	$('#country_list_id_1').click(function() {
		$('#country_id_1').val($('ul li:hover').text());
		$('#country_list_id_1').hide();
	});

	$(document).click(function() {
		$('#country_list_id_1').hide();
	});
}

function autocomplet_2() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#country_id_2').val();
	$('#country_list_id_2').hide();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#country_list_id_2').show();
				$('#country_list_id_2').html(data);
			}
		});
	} else {
		$('#country_list_id_2').hide();
	}

	$('#country_list_id_2').click(function() {
		$('#country_id_2').val($('ul li:hover').text());
		$('#country_list_id_2').hide();
	});

	$(document).click(function() {
		$('#country_list_id_2').hide();
	});
}

function autocomplet_3() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#country_id_3').val();
	$('#country_list_id_3').hide();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#country_list_id_3').show();
				$('#country_list_id_3').html(data);
			}
		});
	} else {
		$('#country_list_id_3').hide();
	}

	$('#country_list_id_3').click(function() {
		$('#country_id_3').val($('ul li:hover').text());
		$('#country_list_id_3').hide();
	});

	$(document).click(function() {
		$('#country_list_id_3').hide();
	});
}

function autocomplet_4() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#country_id_4').val();
	$('#country_list_id_4').hide();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#country_list_id_4').show();
				$('#country_list_id_4').html(data);
			}
		});
	} else {
		$('#country_list_id_4').hide();
	}

	$('#country_list_id_4').click(function() {
		$('#country_id_4').val($('ul li:hover').text());
		$('#country_list_id_4').hide();
	});

	$(document).click(function() {
		$('#country_list_id_4').hide();
	});
}

function autocomplet_5() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#country_id_5').val();
	$('#country_list_id_5').hide();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#country_list_id_5').show();
				$('#country_list_id_5').html(data);
			}
		});
	} else {
		$('#country_list_id_5').hide();
	}

	$('#country_list_id_5').click(function() {
		$('#country_id_5').val($('ul li:hover').text());
		$('#country_list_id_5').hide();
	});

	$(document).click(function() {
		$('#country_list_id_5').hide();
	});
}

// set_item : this function will be executed when we select an item
function set_item_1(item) {
	// change input value
	$('#country_id_1').val(item);
	// hide proposition list
	$('#country_list_id_1').hide();
}

function set_item_2(item) {
	// change input value
	$('#country_id_2').val(item);
	// hide proposition list
	$('#country_list_id_2').hide();
}

function set_item_3(item) {
	// change input value
	$('#country_id_3').val(item);
	// hide proposition list
	$('#country_list_id_3').hide();
}

function set_item_4(item) {
	// change input value
	$('#country_id_4').val(item);
	// hide proposition list
	$('#country_list_id_4').hide();
}

function set_item_5(item) {
	// change input value
	$('#country_id_5').val(item);
	// hide proposition list
	$('#country_list_id_5').hide();
}