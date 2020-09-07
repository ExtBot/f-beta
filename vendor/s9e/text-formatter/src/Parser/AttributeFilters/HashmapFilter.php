<?php

/*
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2019 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Parser\AttributeFilters;
class HashmapFilter
{
	public static function filter($attrValue, array $map, $strict)
	{
		if (isset($map[$attrValue]))
			return $map[$attrValue];
		return ($strict) ? \false : $attrValue;
	}
}