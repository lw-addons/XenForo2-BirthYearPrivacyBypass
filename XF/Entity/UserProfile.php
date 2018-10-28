<?php

namespace LiamW\BirthYearPrivacyBypass\XF\Entity;

class UserProfile extends XFCP_UserProfile
{
	public function getAge($bypassPrivacy = false)
	{
		$bypassPrivacy = $bypassPrivacy || \XF::visitor()->hasPermission('general', 'bypassUserPrivacy');

		return parent::getAge($bypassPrivacy);
	}
}