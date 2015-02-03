<?php
	namespace phnx\DropDown;
	class DropDown{
		var $classes;
		var $id;
		var $name;
		var $style;
		var $disabled;
		var $selected;
		var $html;

		function listoptions(){


			/*	Style : 0 through 9
				Code  : 0thru9
			*/
			if($this->style == '0thru9'){
				for ($i = 0; $i <= 9; $i++) {
					if($i == $this->selected){
						$this->html .= '<option value="'.$i.'" selected="selected">'.$i.'</option>';
					}else{
						$this->html .= '<option value="'.$i.'">'.$i.'</option>';
					}
				}
			}


			/*	Style : 1 through 9
				Code  : 1thru9
			*/
			if($this->style == '1thru9'){
				for ($i = 1; $i <= 9; $i++) {
					if($i == $this->selected){
						$this->html .= '<option value="'.$i.'" selected="selected">'.$i.'</option>';
					}else{
						$this->html .= '<option value="'.$i.'">'.$i.'</option>';
					}
				}
			}


			/*	Style : 1 through 31
				Code  : 1thru31
			*/
			if($this->style == '1thru31'){
				for ($i = 1; $i <= 31; $i++) {
					if($i == $this->selected){
						$this->html .= '<option value="'.$i.'" selected="selected">'.$i.'</option>';
					}else{
						$this->html .= '<option value="'.$i.'">'.$i.'</option>';
					}
				}
			}


			/*	Style : 1 through 12 leading zeros
				Code  : 1thru12
			*/
			if($this->style == '1thru12'){
				for ($i = 1; $i <= 12; $i++) {
					if($i == $this->selected){
						$this->html .= '<option value="'.sprintf('%02s',$i).'" selected="selected">'.sprintf('%02s',$i).'</option>';
					}else{
						$this->html .= '<option value="'.sprintf('%02s',$i).'">'.sprintf('%02s',$i).'</option>';
					}
				}
			}


			/*	Style : 12 then 1 through 11 leading zeros
				Code  : 12hour
			*/
			if($this->style == '12hour'){
				if($this->selected == '12'){
					$this->html .= '<option value="12" selected="selected">12</option>';
				}else{
					$this->html .= '<option value="12">12</option>';
				}
				for ($i = 1; $i <= 11; $i++) {
					if($i == $this->selected){
						$this->html .= '<option value="'.sprintf('%02s',$i).'" selected="selected">'.sprintf('%02s',$i).'</option>';
					}else{
						$this->html .= '<option value="'.sprintf('%02s',$i).'">'.sprintf('%02s',$i).'</option>';
					}
				}
			}

			/*	Style : 0 through 59 leading zeros
				Code  : 0thru59
			*/
			if($this->style == '0thru59'){
				for ($i = 0; $i <= 59; $i++) {
					if($i == $this->selected){
						$this->html .= '<option value="'.sprintf('%02s',$i).'" selected="selected">'.sprintf('%02s',$i).'</option>';
					}else{
						$this->html .= '<option value="'.sprintf('%02s',$i).'">'.sprintf('%02s',$i).'</option>';
					}
				}
			}


		}

		function display($opt = NULL){
			$this->html = '<select';
			if(isset($this->name)){
				$this->html .= ' name="'.$this->name.'"';
			}
			if(isset($this->id)){
				$this->html .= ' id="'.$this->id.'"';
			}
			if(isset($this->classes)){
				$this->html .= ' class="'.$this->classes.'"';
			}
			if($this->disabled === TRUE){
				$this->html .= ' disabled';
			}
			$this->html .= '>';
			$this->listoptions();
			$this->html .= '</select>';

			if($opt === 'print'){
				print $this->html;
			}else{
				return $this->html;
			}

		}

	}
?>
