
<?php
$label_width = @$form['label_width']?:"col-sm-2";
$col_width = $col_width?: "col-sm-10";

$cmp_ratio = @$form['cmp-ratio'];
$cmp_class = @$form['cmp-class'];
if(strlen($cmp_ratio) >= 1){
    $arr = explode(":", $cmp_ratio);
    if(count($arr) == 2){
        $label_width = "col-sm-".$arr[0];
        $col_width = "col-sm-".$arr[1];
    }
    if(count($arr) == 3){
        $cmp_class = "col-sm-".$arr[0];
        $label_width = "col-sm-".$arr[1];
        $col_width = "col-sm-".$arr[2];
    }
    
}
$class=@$form['class'];
?>

<div class='form-group custom-textarea {{$cmp_class}} {{$header_group_class}} {{ ($errors->first($name))?"has-error":"" }}' id='form-group-{{$name}}' style="{{@$form['style']}}">
							<label class='{{$label_width}}'>{{$form['label']}} {!!($required)?"<span class='text-danger' title='This field is required'>*</span>":"" !!}</label>							
							<div class="{{$col_width}}">
							<textarea name="{{$form['name']}}" id="{{$name}}" {{$required}} {{$readonly}} {!!$placeholder!!} {{$disabled}} {{$validation['max']?"maxlength=$validation[max]":""}} class='form-control customTextArea {{$class}}' rows='5'>{{ $value}}</textarea>
							<div class="text-danger">{!! $errors->first($name)?"<i class='fa fa-info-circle'></i> ".$errors->first($name):"" !!}</div>
							<p class='help-block'>{{ @$form['help'] }}</p>
							</div>
						</div>