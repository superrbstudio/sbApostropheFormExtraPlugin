<?php

class sbApostropheJQueryInputAutocomplete extends sfWidgetFormInputText
{
	/**
	 * @param string $options['source'] A url to retrieve a json encoded string of values
	 */
	protected function configure($options = array(), $attributes = array())
	{
		$this->addOption('source');
		$this->setOption('source', $options['source']);
		return parent::configure($options, $attributes);
	}

	public function render($name, $value = null, $attributes = array(), $errors = array())
	{
		$html = parent::render($name, $value, $attributes, $errors);
		$html .= "<script>$(document).ready(function(){ $(\"#" . $this->generateId($name) . "\").autocomplete({source: '" . $this->getOption('source') . "'});});</script>";
		return $html;
	}
}
