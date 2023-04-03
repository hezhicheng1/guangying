<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>轮播图列表</title>
    <!-- 导入layui的css样式文件 -->
    <link href="/layui/css/layui.css" rel="stylesheet" >
    <!--    导入jquery的js文件-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--导入layui的js文件-->
    <script src="/layui/layui.js"></script>
</head>
</head>
<body>
    <div class="layuimini-container">
    <div class="layuimini-main">
      <ul class="layui-nav" lay-filter="">
        <li class="layui-nav-item"><a href="http://packagistdemo/">首页</a></li>
        <li class="layui-nav-item"><a href="http://packagistdemo/api/activitylist">消息列表</a></li>
        <li class="layui-nav-item layui-this"><a href="http://packagistdemo/api/bannerlist">轮播图</a></li>
      </ul>
    </div>
    </div>
    <div class="layuimini-main">
         <table class="layui-table">
              <colgroup>
                <col width="150">
                <col width="200">
                <col>
              </colgroup>
              <thead>
                <tr>
                  <th>标题</th>
                  <th>图片</th>
                  <th>时间</th>
                </tr> 
              </thead>
              <tbody>
                @foreach ($data as $key => $value)
                    <tr>
                      <td> {{$data[$key]['title'] }}</td>
                      <td><img src="{{$data[$key]['img'] }}" width="80" height="50"></img></td>
                      <td>{{$data[$key]['created_at'] }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</body>
 
<script>
//注意：导航 依赖 element 模块，否则无法进行功能性操作
layui.use('element', function(){
  var element = layui.element;
});
</script>  
</html>
