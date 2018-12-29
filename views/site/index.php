<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Статистика по Республике
                    <div class="pull-right">
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Статистика по степени годности
                    <div class="pull-right">
<!--                        <div class="btn-group">-->
<!--                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">-->
<!--                                Actions-->
<!--                                <span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu pull-right" role="menu">-->
<!--                                <li><a href="#">Action</a>-->
<!--                                </li>-->
<!--                                <li><a href="#">Another action</a>-->
<!--                                </li>-->
<!--                                <li><a href="#">Something else here</a>-->
<!--                                </li>-->
<!--                                <li class="divider"></li>-->
<!--                                <li><a href="#">Separated link</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Дата</th>
                                        <th>ВУС</th>
                                        <th>Количество</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>10/21/2013</td>
                                        <td>100</td>
                                        <td>54</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>10/21/2013</td>
                                        <td>120</td>
                                        <td>234</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>10/21/2013</td>
                                        <td>125</td>
                                        <td>724</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>10/21/2013</td>
                                        <td>156</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>10/21/2013</td>
                                        <td>168</td>
                                        <td>834</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>10/21/2013</td>
                                        <td>166</td>
                                        <td>245</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>10/21/2013</td>
                                        <td>144</td>
                                        <td>663</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>10/21/2013</td>
                                        <td>189</td>
                                        <td>94</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Список призывников в возрасте 27 лет
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-bookmark"></i> Аблакулов Бегзод Ихтиерович
                            <span class="pull-right text-muted small"><em>29.12.2018</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-bookmark"></i> Абдурахмонов Эркин Шеркузи угли
                            <span class="pull-right text-muted small"><em>29.12.2018</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-bookmark"></i> Абдухакимов Тимур Геннадьевич
                            <span class="pull-right text-muted small"><em>29.12.2018</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-bookmark"></i> Хусанов Сардор Аскар угли

                            <span class="pull-right text-muted small"><em>29.12.2018</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-bookmark"></i> Шомахсудов Даврон Шавкат угли

                            <span class="pull-right text-muted small"><em>29.12.2018</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-bookmark"></i> Эркинов Нодирбек Рустам угли

                            <span class="pull-right text-muted small"><em>29.12.2018</em>
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-bookmark"></i> Янчиков Дониёр Бахтиёрович


                            <span class="pull-right text-muted small"><em>29.12.2018</em>
                                    </span>
                        </a>

                    </div>
                    <a href="#" class="btn btn-default btn-block">Показать весь список</a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Статистика по районам за 2018 год
                </div>
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
<!--                    <a href="#" class="btn btn-default btn-block">View Details</a>-->
                </div>
            </div>
        </div>
    </div>

</div>
