<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\data\ArrayDataProvider;
$this->title = 'My Yii Application';

$data = [
    ['date' => '2018-10-12', 'type' => 'Mobile','description'=>'Iphone X 64GB Grey','status'=>'Processed','price'=>'100'],
    ['date' => '2018-10-12', 'type' => null,'description'=>'Iphone X 64GB Grey','status'=>'Processed','price'=>'100'],
];

$provider = new ArrayDataProvider([
    'allModels' => $data,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => ['id', 'name'],
    ],
]);
?>
    <div class="col-md-12 m-t-25">
    <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                    <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive m-b-40">

                                <?= GridView::widget([
    'dataProvider' => $provider,
    'emptyCell'=>'NA',
    'tableOptions'=>['class'=>'table table-borderless table-striped table-earning'],
    'columns' => [
        'date',
        'type',
        'description',
        'status',
        'price'
       
    ],
]) ?>
                    
                                </div>

</div>
</div>


