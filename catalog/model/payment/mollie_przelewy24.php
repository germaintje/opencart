<?php
require_once(dirname(__FILE__) . "/mollie/base.php");

class ModelPaymentMolliePrzelewy24 extends ModelPaymentMollieBase
{
	const MODULE_NAME = MollieHelper::MODULE_NAME_PRZELEWY24;
}
