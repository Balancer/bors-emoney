<?php

namespace B2\Emoney;

class Yandex extends \bors_object
{
	var $title = 'Яндекс.Деньги';
	var $deposit_fees = '0';

	var $withdrawal_with_fees = 'amount*0.97';
	var $withdrawal_with_fees_back = 'amount/0.97';
	var $withdrawal_fees_info = 'Яндекс.Деньги взымают 3% от стоимости выводимых средств';

	var $deposit_with_fees = 'amount';
	var $deposit_with_fees_back = 'amount';
	var $deposit_fees_info = 'Яндекс.Деньги не взымают комиссии при принятии средств';

	var $currency_short = 'RUB';
}
