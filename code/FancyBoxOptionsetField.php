<?php

class FancyBoxOptionsetField extends OptionsetField {

	protected $Subtitle;
	protected $Subparagraph;

	/**
	 * An array of column_name => span_length pairs.
	 * @example
	 * <code>
	 * array (
	 * 	'xs' => 12,
	 * 	'sm' => 12,
	 * 	'md' => 6,
	 * 	'lg' => 3
	 * )
	 * </code>
	 * @var array
	 */
	protected $columnCounts = array ();


	/**
	 * Number of columns in the options layout
	 * @var int
	 */
	protected $numberOfColumns;

	public function setSubtitle($sub) {
        $this->Subtitle = $sub;
    }

	public function getSubtitle() {
        return $this->Subtitle;
    }

	public function setSubparagraph($paraStr) {
        $this->Subparagraph = $paraStr;
    }

	public function getSubparagraph() {
        return $this->Subparagraph;
    }

	/**
	 * Enable or disable "inline" presentation, in which
	 * buttons are laid out left to right, rather than top to bottom.
	 *
	 * @param boolean $bool
	 * @return SSMasterLibOptionsetField
	 */
	public function setInline($bool = true) {
		$this->owner->Inline = $bool;
		return $this->owner;
	}


	/**
	 * Sets the column layout for the options
	 * @param array $cols An array of column_name => span_length pairs
	 * @see  $columnCounts
	 *
	 * @return   OptionsetField
	 */
	public function setColumns($cols) {
		if(!is_array($cols)) {
			throw new Exception("SSMasterLibOptionsetField::setColumns must be passed an array.");
		}

		$allowed_keys = array('lg','md','sm','xs');
		$diff = array_diff($allowed_keys, array_keys($cols));
		if(!empty($diff)) {
			throw new Exception("SSMasterLibOptionsetField::setColumns must be passed an array with keys " . implode(', ', $allowed_keys));
		}

		$this->columnCounts = $cols;

		$maxSpan = max(array_values($this->columnCounts));
		$minSpan = min(array_values($this->columnCounts));
		$this->numberOfColumns = ceil($maxSpan/$minSpan);

		return $this->owner;
	}


	/**
	 * Tells whether this option set is using a columnar layout
	 *
	 * @return boolean
	 */
	public function HasColumns() {
		return !empty($this->columnCounts);
	}


	/**
	 * Number of columns in the layout
	 *
	 * @return  int
	 */
	public function ColumnCount() {
		return $this->numberOfColumns;
	}


	/**
	 * A list of classes for the column divs
	 *
	 * @return  string
	 */
	public function ColumnClasses() {
		$classes = array();
		foreach($this->columnCounts as $colName => $val) {
			$classes[] = "col-{$colName}-{$val}";
		}

		return implode(" ", $classes);
	}


	/**
	 * Number of options per column
	 *
	 * @return  int
	 */
	public function PerColumn() {
		return ceil(count($this->owner->getSource())/$this->numberOfColumns);
	}


}
