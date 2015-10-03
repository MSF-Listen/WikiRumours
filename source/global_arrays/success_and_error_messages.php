<?php

	$errorMessages = array(
		'gmail_login_cancelled' => "Your Gmail login was unsuccessful.",
		'user_disabled' => "Unable to login via Gmail because account is disabled.",
		'bad_key' => "There's something wrong with the link that brought you here. Please check that the link is complete or rekey it by hand; sometimes mail readers cut a link in two by inserting an inopportune line break.",
		'bad_user' => "There's something wrong with the user account you're trying to modify; it may have been inactivated.",
		'duplicate_email' => "The new email address you've specified already belongs to an existing user.",
	);

	$successMessages = array(
		// profile and registration
			'profile_updated' => "Profile updated",
			'profile_updated_check_email' => "Your profile has been successfully updated. If you've changed your email address, please check your email for a confirmation link.",
			'profile_image_deleted' => "Successfully updated profile image",
			'password_updated' => "Password successfully updated",
			'user_purged' => "Successfully purged all traces of user from database (except for logs and CMS entries, obviously)",
			'password_reset_link_sent' => "If your email address is in our system, you'll shortly receive instructions on how to reset your password",
			'registration_received' => "Thank you for registering. Please check your email.",
			'registration_pending_approval' => "Thank you for registering. An administrator will review your request shortly.",
			'registration_complete' => "Congratulations, your registration is complete. Please log in.",
			'registrant_approved' => "Successfully approved registrant",
			'registrant_deleted' => "Successfully deleted registrant",
			'problem_adding_user' => "There was an unknown error attempting to complete your registration. Please <a href='/contact'>let us know</a> so that we can sort this out.",
			'email_reset_successful' => "Successfully reset your email address",
			'password_reset_successful' => "Successfully reset your password",
		// admin dashboard
			'alert_resolved' => "Successfully marked alert as resolved",
			'backup_deleted' => "Successfully deleted backup",
		// email
			'email_queued' => "Successfully queued email",
			'message_sent' => "Thank you. Your message has been sent",
			'email_validated' => "Thank you for validating your email. An administrator will review your request shortly.",
		// comments
			'comment_disabled' => "Successfully deleted comment",
			'flags_removed' => "Successfully removed flags",
		// cms
			'page_added' => "Page successfully added",
			'page_updated' => "Page successfully updated",
			'page_deleted' => "Page successfully deleted",
			'block_added' => "Content block successfully added",
			'block_updated' => "Content block successfully updated",
			'block_deleted' => "Content block successfully deleted",
			'file_added' => "File successfully added",
			'file_updated' => "File successfully updated",
			'file_deleted' => "File successfully deleted",
		// API
			'key_generated' => "API key successfully generated",
			'query_threshold_updated' => "Query threshold successfully updated",
		// friends
			'friend_request_sent' => "Friend request sent",
			'unfriended' => "Unfriended... :(",
			'too_many_invitations' => "Too many friend requests sent to this user. Leave them be.",
			'friend_request_accepted' => "Friend request accepted",
			'friend_request_rejected' => "Friend request rejected",
		// settings
			'setting_updated' => "Successfully updated setting",
			'setting_edited' => "Successfully edited setting",
			'setting_added' => "Successfully added setting",
			'setting_deleted' => "Successfully deleted setting",
		// coupons
			'coupon_added' => "Successfully added coupon",
			'coupon_updated' => "Successfully updated coupon",
			'coupon_deleted' => "Successfully deleted coupon",
		// FAQs
			'faqs_updated' => "Successfully updated FAQs",
			'faq_deleted' => "Successfully deleted FAQ",
			'faq_sections_updated' => "Successfully updated FAQ sections",
			'faq_section_deleted' => "Successfully deleted FAQ section",
		// notifications
			'notifications_updated' => "Successfully updated notifications",
			'notification_deleted' => "Successfully deleted notification",
		// plans
			'plan_deleted' => "Successfully deleted plan",
			'plan_updated' => "Successfully updated plan",
			'plan_added' => "Successfully added plan",
		// pseudonyms
			'instance_logo_deleted' => "Successfully deleted existing instance logo",
			'instance_deleted' => "Successfully deleted instance",
			'instance_updated' => "Successfully updated instance",
		// custom WikiRumours messages
			'sighting_added' => "Successfully added sighting",
			'sighting_removed' => "Successfully removed sighting",
			'sighting_updated' => "Successfully updated sighting",
			'tags_updated' => "Successfully updated tags",
			'tag_removed' => "Successfully removed tag",
			'comment_added' => "Successfully added comment",
			'comment_flagged' => "Successfully flagged comment",
			'comment_disabled' => "Successfully disabled comment",
			'comment_enabled' => "Successfully enabled comment",
			'added_to_watchlist' => "Successfully added to watchlist",
			'removed_from_watchlist' => "Successfully removed from watchlist",
			'rumour_added' => "Successfully added rumour",
			'rumour_updated' => "Successfully updated rumour",
			'rumour_removed' => "Successfully removed rumour",
			'notification_added' => "Successfully added notification",
			'notification_removed' => "Successfully removed notification",
			'photographic_evidence_deleted' => "Successfully removed photographic evidence from this rumour",
			'priority_deleted' => "Successfully deleted priority",
			'priorities_updated' => "Successfully updated priorities",
			'status_deleted' => "Successfully deleted status",
			'statuses_updated' => "Successfully updated statuses",
	);

	$apiErrorCodes = array(
		1 => "No valid filters found.",
		2 => "Missing API key.",
		3 => "Invalid API key.",
		4 => "Maximum daily queries already reached; the query limit resets every 24 hours.",
		5 => "Unable to determine a valid query type.",
		6 => "This API version is now retired. Please upgrade to the latest API."
	);
	
	$apiWarningCodes = array(
		1 => "Approaching maximum daily queries.",
		2 => "No vocabulary was retrieved based on your input parameters.",
		3 => "No sightings were retrieved based on your input parameters.",
		4 => "This API version has been deprecated and will soon be retired. Please upgrade to the latest API."
	);

?>
