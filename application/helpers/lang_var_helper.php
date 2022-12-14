<?php

function lang_var()
{
	$CI = get_instance();
	$CI->load->helper('language');

	$siteLang = $CI->session->userdata('site_lang');

	if ($siteLang) {
		$CI->lang->load('information', $siteLang);
	} else {
		$CI->lang->load('information', 'english');
	}

	// sidebar
	$data = [
		'home'                 			=> $CI->lang->line('home'),
		'account'						=> $CI->lang->line('account'),
		'setting'						=> $CI->lang->line('setting'),
		'facility'						=> $CI->lang->line('facility'),
		'store'							=> $CI->lang->line('store'),
		'class'							=> $CI->lang->line('class'),
		'close'							=> $CI->lang->line('close'),
		'close_all'						=> $CI->lang->line('close_all'),
		'close_all_other'				=> $CI->lang->line('close_all_other'),
		'uploaded'						=> '<i class="bi-cloud-check"></i> ' . $CI->lang->line('uploaded'),
		'null'							=> '<i class="bi-cloud"></i> ' . $CI->lang->line('null'),
		'no_tab_selected'				=> $CI->lang->line('no_tab_selected'),
		'change_password'				=> $CI->lang->line('change_password'),
		'back_i'						=> '<i class="bi-arrow-left me-1"></i> ' . $CI->lang->line('back'),
		'next_i'						=> $CI->lang->line('next') . ' <i class="bi-chevron-right"></i>',
		'prev_i'						=> '<i class="bi-chevron-left"></i> ' . $CI->lang->line('previous'),
		'submit'						=> $CI->lang->line('submit'),
		'submit_i'						=> $CI->lang->line('submit') . ' <i class="bi-send ms-1"></i>',
		'success_alert'					=> $CI->lang->line('success_alert'),
		'confirmation'					=> $CI->lang->line('confirmation'),
		'confirmation_body'				=> $CI->lang->line('confirmation_body'),
		'basic_information'				=> $CI->lang->line('basic_information'),
		'basic_information_add'			=> $CI->lang->line('basic_information_add'),
		'basic_information_edit'		=> $CI->lang->line('basic_information_edit'),
		'password_i'					=> '<i class="bi-lock"></i> ' . $CI->lang->line('password'),
		'old_password_i'				=> '<i class="bi-lock"></i> ' . $CI->lang->line('old_password'),
		'new_password_i'				=> '<i class="bi-lock"></i> ' . $CI->lang->line('new_password'),
		'confirm_password_i'			=> '<i class="bi-lock"></i> ' . $CI->lang->line('confirm_password'),
		'password_required'				=> $CI->lang->line('password_required'),
		'password_minlength'			=> $CI->lang->line('password_minlength'),
		'password_equalto'				=> $CI->lang->line('password_equalto'),
		'reset_password'				=> $CI->lang->line('reset_password'),
		'company'						=> $CI->lang->line('company'),
		'company_name_i'				=> '<i class="bi-building"></i> ' . $CI->lang->line('company_name'),
		'company_name_enter'			=> $CI->lang->line('company_name_enter'),
		'company_name_required'			=> $CI->lang->line('company_name_required'),
		'company_address_i'				=> '<i class="bi-geo-alt"></i> ' . $CI->lang->line('company_address'),
		'pic'							=> $CI->lang->line('pic'),
		'pic_i'							=> '<i class="bi-person"></i> ' . $CI->lang->line('pic'),
		'pic_enter'						=> $CI->lang->line('pic_enter'),
		'pic_required'					=> $CI->lang->line('pic_required'),
		'telephone_i'					=> '<i class="bi-telephone"></i> ' . $CI->lang->line('telephone'),
		'telephone_enter'				=> $CI->lang->line('telephone_enter'),
		'telephone_required'			=> $CI->lang->line('telephone_required'),
		'email_i'						=> '<i class="bi-envelope"></i> ' . $CI->lang->line('email'),
		'email_required'				=> $CI->lang->line('email_required'),
		'email_valid'					=> $CI->lang->line('email_valid'),
		'logo_i'						=> '<i class="bi-image"></i> ' . $CI->lang->line('logo'),
		'logo_required'					=> $CI->lang->line('logo_required'),
		'logo_extension'				=> $CI->lang->line('logo_extension'),
		'bank_account'					=> $CI->lang->line('bank_account'),
		'bank_account_edit'				=> $CI->lang->line('bank_account_edit'),
		'bank_name_i'					=> '<i class="bi-bank"></i> ' . $CI->lang->line('bank_name'),
		'bank_name_enter'				=> $CI->lang->line('bank_name_enter'),
		'bank_name_required'			=> $CI->lang->line('bank_name_required'),
		'bank_code_i'					=> '<i class="bi-123"></i> ' . $CI->lang->line('bank_code'),
		'bank_code_required'			=> $CI->lang->line('bank_code_required'),
		'bank_code_digits'				=> $CI->lang->line('bank_code_digits'),
		'branch_name_i'					=> '<i class="bi-pin-map"></i> ' . $CI->lang->line('branch_name'),
		'branch_name_enter'				=> $CI->lang->line('branch_name_enter'),
		'branch_name_required'			=> $CI->lang->line('branch_name_required'),
		'branch_code_i'					=> '<i class="bi-123"></i> ' . $CI->lang->line('branch_code'),
		'branch_code_required'			=> $CI->lang->line('branch_code_required'),
		'branch_code_digits'			=> $CI->lang->line('branch_code_digits'),
		'kinds_i'						=> '<i class="bi-tag"></i> ' . $CI->lang->line('kinds'),
		'kinds_ex'						=> $CI->lang->line('kinds_ex'),
		'kinds_required'				=> $CI->lang->line('kinds_required'),
		'account_number_i'				=> '<i class="bi-123"></i> ' . $CI->lang->line('account_number'),
		'account_number_required'		=> $CI->lang->line('account_number_required'),
		'account_number_digits'			=> $CI->lang->line('account_number_digits'),
		'account_holder_i'				=> '<i class="bi-credit-card-2-back"></i> ' . $CI->lang->line('account_holder'),
		'account_holder_enter'			=> $CI->lang->line('account_holder_enter'),
		'account_holder_required'		=> $CI->lang->line('account_holder_required'),
		'zip_code_enter'				=> $CI->lang->line('zip_code_enter'),
		'zip_code_required'				=> $CI->lang->line('zip_code_required'),
		'zip_code_digits'				=> $CI->lang->line('zip_code_digits'),
		'prefectures_enter'				=> $CI->lang->line('prefectures_enter'),
		'prefectures_required'			=> $CI->lang->line('prefectures_required'),
		'municipalities_ex'				=> $CI->lang->line('municipalities_ex'),
		'municipalities_required'		=> $CI->lang->line('municipalities_required'),
		'municipalities_kana_ex'		=> $CI->lang->line('municipalities_kana_ex'),
		'municipalities_kana_required'	=> $CI->lang->line('municipalities_kana_required'),
		'after_street_ex'				=> $CI->lang->line('after_street_ex'),
		'after_street_required'			=> $CI->lang->line('after_street_required'),
		'after_street_kana_ex'			=> $CI->lang->line('after_street_kana_ex'),
		'after_street_kana_required'	=> $CI->lang->line('after_street_kana_required'),
		'store'							=> $CI->lang->line('store'),
		'photo'							=> $CI->lang->line('photo'),
		'photo_i'						=> '<i class="bi-image"></i> ' . $CI->lang->line('photo'),
		'photo_required'				=> $CI->lang->line('photo_required'),
		'photo_extension'				=> $CI->lang->line('photo_extension'),
		'images'						=> $CI->lang->line('images'),
		'image'							=> $CI->lang->line('image'),
		'image_i'						=> '<i class="bi-image"></i> ' . $CI->lang->line('image'),
		'image_required'				=> $CI->lang->line('image_required'),
		'store'							=> $CI->lang->line('store'),
		'store_add'						=> $CI->lang->line('store_add'),
		'store_name_i'					=> '<i class="bi-shop"></i> ' . $CI->lang->line('store_name'),
		'store_name_enter'				=> $CI->lang->line('store_name_enter'),
		'store_name_required'			=> $CI->lang->line('store_name_required'),
		'store_address_i'				=> '<i class="bi-geo-alt"></i> ' . $CI->lang->line('store_address'),
		'store_information'				=> $CI->lang->line('store_information'),
		'store_edit'					=> $CI->lang->line('store_edit'),
		'publication_status'			=> $CI->lang->line('publication_status'),
		'operation'						=> $CI->lang->line('operation'),
		'now_open'						=> '<i class="bi-check2-circle"></i> ' . $CI->lang->line('now_open'),
		'while_editing'					=> '<i class="bi-exclamation-circle"></i> ' . $CI->lang->line('while_editing'),
		'temporary_close'				=> '<i class="bi-x-circle-fill"></i> ' . $CI->lang->line('temporary_close'),
		'not-active'					=> '<i class="bi-exclamation-circle"></i> ' . $CI->lang->line('not-active'),
		'active'						=> '<i class="bi-check-circle"></i> ' . $CI->lang->line('active'),
		'class'							=> $CI->lang->line('class'),
		'class_category'				=> $CI->lang->line('class_category'),
		'class_add'						=> $CI->lang->line('class_add'),
		'class_edit'					=> $CI->lang->line('class_edit'),
		'class_list'					=> $CI->lang->line('class_list'),
		'class_available'				=> $CI->lang->line('class_available'),
		'class_name'					=> $CI->lang->line('class_name'),
		'class_name_i'					=> '<i class="bi-clipboard-check"></i> ' . $CI->lang->line('class_name'),
		'class_name_enter'				=> $CI->lang->line('class_name_enter'),
		'class_name_required'			=> $CI->lang->line('class_name_required'),
		'class_setup'					=> $CI->lang->line('class_setup'),
		'status'						=> $CI->lang->line('status'),
		'category'						=> $CI->lang->line('category'),
		'category_i'					=> '<i class="bi-bookmark-check"></i> ' . $CI->lang->line('category'),
		'category_required'				=> $CI->lang->line('category_required'),
		'category_already_exists'		=> $CI->lang->line('category_already_exists'),
		'private_room'					=> $CI->lang->line('private_room'),
		'semi_private_room'				=> $CI->lang->line('semi_private_room'),
		'open_space'					=> $CI->lang->line('open_space'),
		'outdoors'						=> $CI->lang->line('outdoors'),
		'personal_gym'					=> $CI->lang->line('personal_gym'),
		'gym'							=> $CI->lang->line('gym'),
		'fitness_club'					=> $CI->lang->line('fitness_club'),
		'spa'							=> $CI->lang->line('spa'),
		'yoga'							=> $CI->lang->line('yoga'),
		'golf'							=> $CI->lang->line('golf'),
		'content'						=> $CI->lang->line('content'),
		'content_i'						=> '<i class="bi-journal-richtext"></i> ' . $CI->lang->line('content'),
		'content_enter'					=> $CI->lang->line('content_enter'),
		'content_required'				=> $CI->lang->line('content_required'),
		'training'						=> $CI->lang->line('training'),
		'equipment'						=> $CI->lang->line('equipment'),
		'reservations'					=> $CI->lang->line('reservations'),
		'type_room_i'					=> '<i class="bi-shop-window"></i> ' . $CI->lang->line('type'),
		'type_required'					=> $CI->lang->line('type_required'),
		'quota_per_session'				=> $CI->lang->line('quota_per_session'),
		'quota_per_session_required'	=> $CI->lang->line('quota_per_session_required'),
		'quota_per_session_digits'		=> $CI->lang->line('quota_per_session_digits'),
		'capacity'						=> $CI->lang->line('capacity'),
		'capacity_required'				=> $CI->lang->line('capacity_required'),
		'capacity_digits'				=> $CI->lang->line('capacity_digits'),
		'breadth'						=> $CI->lang->line('breadth'),
		'breadth_required'				=> $CI->lang->line('breadth_required'),
		'breadth_digits'				=> $CI->lang->line('breadth_digits'),
		'buffer_time'					=> $CI->lang->line('buffer_time'),
		'buffer_time_i'					=> '<i class="bi-clock"></i> ' . $CI->lang->line('buffer_time'),
		'buffer_time_enter'				=> $CI->lang->line('buffer_time_enter'),
		'buffer_time_required'			=> $CI->lang->line('buffer_time_required'),
		'buffer_time_digits'			=> $CI->lang->line('buffer_time_digits'),
		'minutes'						=> $CI->lang->line('minutes'),
		'number_of_floor_i'				=> '<i class="bi-building"></i> ' . $CI->lang->line('number_of_floor'),
		'floor_required'				=> $CI->lang->line('floor_required'),
		'underground'					=> $CI->lang->line('underground'),
		'ground'						=> $CI->lang->line('ground'),
		'rooftop'						=> $CI->lang->line('rooftop'),
		'title'							=> $CI->lang->line('title'),
		'title_i'						=> '<i class="bi-type-h1"></i> ' . $CI->lang->line('title'),
		'title_enter'					=> $CI->lang->line('title_enter'),
		'title_required'				=> $CI->lang->line('title_required'),
		'description_i'					=> '<i class="bi-body-text"></i> ' . $CI->lang->line('description'),
		'description_required'			=> $CI->lang->line('description_required'),
		'sunday'						=> $CI->lang->line('sunday'),
		'monday'						=> $CI->lang->line('monday'),
		'tuesday'						=> $CI->lang->line('tuesday'),
		'wednesday'						=> $CI->lang->line('wednesday'),
		'thursday'						=> $CI->lang->line('thursday'),
		'friday'						=> $CI->lang->line('friday'),
		'saturday'						=> $CI->lang->line('saturday'),
		'training_day_required'			=> $CI->lang->line('training_day_required'),
		'opening_hours_enter'			=> $CI->lang->line('opening_hours_enter'),
		'opening_hours_required'		=> $CI->lang->line('opening_hours_required'),
		'closing_hours_enter'			=> $CI->lang->line('closing_hours_enter'),
		'closing_hours_required'		=> $CI->lang->line('closing_hours_required'),
		'term_conditions_i'				=> '<i class="bi-exclamation-diamond"></i> ' . $CI->lang->line('term_conditions'),
		'equipment_i'					=> '<i class="fa-solid fa-dumbbell"></i> ' . $CI->lang->line('equipment'),
		'equipment_name_enter'			=> $CI->lang->line('equipment_name_enter'),
		'equipment_name_required'		=> $CI->lang->line('equipment_name_required'),
		'equipment_description_enter'	=> $CI->lang->line('equipment_description_enter'),
		'how_to_enter_i'				=> '<i class="bi-box-arrow-in-right"></i> ' . $CI->lang->line('how_to_enter'),
		'how_to_leave_i'				=> '<i class="bi-box-arrow-in-left"></i> ' . $CI->lang->line('how_to_leave'),
		'included_trainer_i'			=> '<i class="bi-person-check"></i> ' . $CI->lang->line('included_trainer'),
		'hourly_plan_i'					=> '<i class="bi-clock-history"></i> ' . $CI->lang->line('hourly_plan'),
		'hourly_plan_enter'				=> $CI->lang->line('hourly_plan_enter'),
		'hourly_plan_required'			=> $CI->lang->line('hourly_plan_required'),
		'daily_plan_i'					=> '<i class="bi-calendar2-date"></i> ' . $CI->lang->line('daily_plan'),
		'daily_plan_enter'				=> $CI->lang->line('daily_plan_enter'),
		'monthly_plan_i'				=> '<i class="bi-calendar2-month"></i> ' . $CI->lang->line('monthly_plan'),
		'monthly_plan_enter'			=> $CI->lang->line('monthly_plan_enter'),
		'monthly_plan_required'			=> $CI->lang->line('monthly_plan_required'),
		'plan_enter'					=> $CI->lang->line('plan_enter'),
		'price'							=> $CI->lang->line('price'),
		'price_enter'					=> $CI->lang->line('price_enter'),
		'price_required'				=> $CI->lang->line('price_required'),
		'discount'						=> $CI->lang->line('discount'),
		'discount_enter'				=> $CI->lang->line('discount_enter') . ' (??)',
		'discount_required'				=> $CI->lang->line('discount_required'),
		'trainers'						=> $CI->lang->line('trainers'),
		'trainer'						=> $CI->lang->line('trainer'),
		'trainer_i'						=> '<i class="bi-person-check"></i> ' . $CI->lang->line('trainer'),
		'trainer_add'					=> $CI->lang->line('trainer_add'),
		'trainer_name_i'				=> '<i class="bi-person"></i> ' . $CI->lang->line('trainer_name'),
		'trainer_name_enter'			=> $CI->lang->line('trainer_name_enter'),
		'trainer_name_required'			=> $CI->lang->line('trainer_name_required'),
		'address_i'						=> '<i class="bi-geo-alt"></i> ' . $CI->lang->line('address'),
		'birthday_i'					=> '<i class="bi-calendar2-date"></i> ' . $CI->lang->line('birthday'),
		'birthday_enter'				=> $CI->lang->line('birthday_enter'),
		'birthday_required'				=> $CI->lang->line('birthday_required'),
		'date_range'					=> $CI->lang->line('date_range'),
		'fee'							=> $CI->lang->line('fee'),
		'fee_i'							=> '?? ' . $CI->lang->line('fee'),
		'fee_enter'						=> $CI->lang->line('fee_enter'),
		'time_per_session'				=> $CI->lang->line('time_per_session'),
		'time_per_session_enter'		=> $CI->lang->line('time_per_session_enter'),
		'session'						=> $CI->lang->line('session'),
		'session_i'						=> '<i class="bi-hourglass-split"></i> ' . $CI->lang->line('session'),
		'hours'							=> $CI->lang->line('hours'),
		'start_office_hours_enter'		=> $CI->lang->line('start_office_hours_enter'),
		'end_office_hours_enter'		=> $CI->lang->line('end_office_hours_enter'),
		'with_trainer'					=> $CI->lang->line('with_trainer'),
		'with_trainer_i'				=> '<i class="bi-person-check"></i> ' . $CI->lang->line('with_trainer'),
		'without_trainer'				=> $CI->lang->line('without_trainer'),
		'without_trainer_i'				=> '<i class="bi-person-x"></i> ' . $CI->lang->line('without_trainer'),
		'booking'						=> $CI->lang->line('booking'),
		'booking_time'					=> $CI->lang->line('booking_time'),
		'user'							=> $CI->lang->line('user'),
		'paid'							=> '<i class="bi-check-circle"></i> ' . $CI->lang->line('paid'),
		'upload_file'					=> $CI->lang->line('upload_file'),
		'logout_message'				=> $CI->lang->line('logout_message'),
		'logout'						=> $CI->lang->line('logout'),
		'longitude'						=> $CI->lang->line('longitude'),
		'longitude_required'			=> $CI->lang->line('longitude_required'),
		'longitude_enter'				=> $CI->lang->line('longitude_enter'),
		'latitude'						=> $CI->lang->line('latitude'),
		'latitude_required'				=> $CI->lang->line('latitude_required'),
		'latitude_enter'				=> $CI->lang->line('latitude_enter'),
		'finish_i'						=> '<i class="bi-check2-circle"></i> ' . $CI->lang->line('finish'),
		'save_i'						=> $CI->lang->line('save') . ' <i class="bi-send ms-1"></i>',
		'valid_date_required'			=> $CI->lang->line('valid_date_required'),
		'valid_time_required'			=> $CI->lang->line('valid_time_required'),
		'hour_same_error'				=> $CI->lang->line('hour_same_error'),
		'discount_start_date_enter'		=> $CI->lang->line('discount_start_date_enter'),
		'discount_end_date_enter'		=> $CI->lang->line('discount_end_date_enter'),
		'discount_start_date_required'	=> $CI->lang->line('discount_start_date_required'),
		'discount_end_date_required'	=> $CI->lang->line('discount_end_date_required'),
		'partner'						=> $CI->lang->line('partner'),
		'journals'						=> $CI->lang->line('journals'),
		'journal_add'					=> $CI->lang->line('journal_add'),
		'journal_edit'					=> $CI->lang->line('journal_edit'),
		'journal_category'				=> $CI->lang->line('journal_category'),
		'journal_category_add'			=> $CI->lang->line('journal_category_add'),
		'journal_category_edit'			=> $CI->lang->line('journal_category_edit'),
		'publish_date'					=> $CI->lang->line('publish_date'),
		'publish_date_i'				=> '<i class="bi-calendar2-event"></i> ' . $CI->lang->line('publish_date'),
		'publish_date_required'			=> $CI->lang->line('publish_date_required'),
		'publish_date_enter'			=> $CI->lang->line('publish_date_enter'),	
		'publish_date_valid'			=> $CI->lang->line('publish_date_valid'),	
		'expiry_date'					=> $CI->lang->line('expiry_date'),
		'publish_by'					=> $CI->lang->line('publish_by'),
		'publish_by_i'					=> '<i class="bi-person"></i> ' . $CI->lang->line('publish_by'),
		'publish_by_required'			=> $CI->lang->line('publish_by_required'),
		'publish_by_enter'				=> $CI->lang->line('publish_by_enter'),
		'hit'							=> $CI->lang->line('hit'),
		'hit_i'							=> '<i class="bi-heart"></i> ' . $CI->lang->line('hit'),
		'hit_enter'						=> $CI->lang->line('hit_enter'),
		'hit_required'					=> $CI->lang->line('hit_required'),
		'hit_digits'					=> $CI->lang->line('hit_digits'),
		'slug'							=> $CI->lang->line('slug'),
		'slug_i'						=> '<i class="bi-at"></i> ' . $CI->lang->line('slug'),
		'slug_enter'					=> $CI->lang->line('slug_enter'),
		'slug_required'					=> $CI->lang->line('slug_required'),
		'seo_title'						=> $CI->lang->line('seo_title'),
		'seo_title_i'					=> '<i class="bi-type-h1"></i> ' . $CI->lang->line('seo_title'),
		'seo_title_enter'				=> $CI->lang->line('seo_title_enter'),
		'seo_title_required'			=> $CI->lang->line('seo_title_required'),
		'keywords'						=> $CI->lang->line('keywords'),
		'keywords_i'					=> '<i class="bi-star"></i> ' . $CI->lang->line('keywords'),
		'keywords_enter'				=> $CI->lang->line('keywords_enter'),
		'keywords_required'				=> $CI->lang->line('keywords_required'),
		'hashtag'						=> $CI->lang->line('hashtag'),
		'hashtag_i'						=> '<i class="bi-hash"></i> ' . $CI->lang->line('hashtag'),
		'hashtag_enter'					=> $CI->lang->line('hashtag_enter'),
		'hashtag_required'				=> $CI->lang->line('hashtag_required'),
		'seo_description'				=> $CI->lang->line('seo_description'),
		'seo_description_i'				=> '<i class="bi-journal-text"></i> ' . $CI->lang->line('seo_description'),
		'seo_description_enter'			=> $CI->lang->line('seo_description_enter'),
		'seo_description_required'		=> $CI->lang->line('seo_description_required'),
		'caption'						=> $CI->lang->line('caption'),
		'caption_i'						=> '<i class="bi-type"></i> ' . $CI->lang->line('caption'),
		'caption_enter'					=> $CI->lang->line('caption_enter'),
		'caption_required'				=> $CI->lang->line('caption_required'),
		'alt'							=> $CI->lang->line('alt'),
		'alt_i'							=> '<i class="bi-image-alt"></i> ' . $CI->lang->line('alt'),
		'alt_enter'						=> $CI->lang->line('alt_enter'),
		'alt_required'					=> $CI->lang->line('alt_required'),
		'rename_image'					=> $CI->lang->line('rename_image'),
		'rename_image_i'				=> '<i class="bi-input-cursor-text"></i> ' . $CI->lang->line('rename_image'),
		'rename_image_enter'			=> $CI->lang->line('rename_image_enter'),
		'rename_image_required'			=> $CI->lang->line('rename_image_required'),
		'tag_add'						=> $CI->lang->line('tag_add'),
		'tag_note'						=> $CI->lang->line('tag_note'),
		'change_logo'					=> $CI->lang->line('change_logo'),
		'data_success_saved'			=> $CI->lang->line('data_save_success'),
		'extension_not_allowed'			=> $CI->lang->line('extension_not_allowed'),
		'data_save_success'				=> $CI->lang->line('data_save_success'),
		'filename_exists'				=> $CI->lang->line('filename_exists'),
		'related_journals'				=> $CI->lang->line('related_journals'),
	];

	return $data;
}
