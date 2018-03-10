<?php

namespace NF\NestedQuotes\XF\BbCode\ProcessorAction;

/**
 * Extends \XF\BbCode\ProcessorAction\StripQuotes
 */
class StripQuotes extends XFCP_StripQuotes
{
	public function filterQuoteTag(array $tag, array $options)
	{
		// don't remove anything within :)
		return;
	}
}