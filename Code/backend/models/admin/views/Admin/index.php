<?php
use yii\helpers\Url;
\backend\assets\AppAsset::register($this);
$this->registerJsFile('@web/static/admin/admin.js', ['depends' => ['backend\assets\AppAsset']]);
?>
<div class="my-btn-box">
    <span class="fl">
        <a class="layui-btn layui-btn-danger radius btn-delect" id="btn-delete-all">批量删除</a>
        <a class="layui-btn btn-add btn-default" dialog-type="load" href-info="<?=Url::toRoute(['admin/edit'])?>">添加</a>
        <a class="layui-btn btn-add btn-default" id="btn-refresh"><i class="layui-icon">&#x1002;</i></a>
    </span>
</div>

<!-- 表格 -->
<div id="dateTable"></div>
<!-- 表格操作按钮集 -->
<script type="text/html" id="barOption">
    <a class="layui-btn layui-btn-mini">授权</a>
    <a class="layui-btn layui-btn-mini layui-btn-normal">更新</a>
    <a class="layui-btn layui-btn-mini layui-btn-danger">删除</a>
</script>