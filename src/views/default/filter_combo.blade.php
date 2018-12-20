<?php 
    $tb_col=explode(',',$col['join']);
    $tb=$tb_col[0];
    $col_cm=$tb_col[1];
    $combo_data=DB::table($tb)->get();
    $reqname=$col["name"];
    $name=$table.'.'.$col["name"];
    $req=Request::get('filter_column');
    $selected=($req[$name][value]);
?>
<div hidden>
<select  name='filter_column[{{$name}}][type]' class='filter_combo'>
<option typeallow="all" selected="" value="=">=(Equal to)</option>
</select>
</div>
<div class='row-filter-combo row'>

<div class="col-sm-2">
<strong>{{$col['label']}}</strong>
</div> 
<div class='col-sm-3' id="cbfiltercombo">

<select id='{{$reqname}}' name='filter_column[{{$name}}][value]' class="filter-combo">

    <!-- <select id='{{$col["name"]}}' name='filter_column[mst_client_products.client_id][value]' class='filter_combo'> -->
        <option value="">Select {{ $col['name'] }}</option>
        @foreach($combo_data as $combo_data)
            <option typeallow="all" value="{{$combo_data->id}}" <?php if($selected==$combo_data->id){echo " selected ";}?> > {{$combo_data->$col_cm}}</option>
        @endforeach
    </select> 
</div><!--END COL_SM_4-->

</div>

