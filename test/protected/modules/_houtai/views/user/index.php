<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">地区</a> </div>
        <h1>用户列表</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-th"></i></span> 
                        <h5>用户列表</h5>
                        <div class="buttons">
                            <a id="add-event"  href="./index.php?r=user/form" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i>添加用户</a>
                        </div>
                    </div>
                    <div class="widget-content">
                        <table class="table table-bordered table-striped with-check">
                            <thead>
                                <tr>
                                    <th style='width: 50px;'>用户ID</th>
                                    <th>用户名</th>
                                    <th>邮箱</th>
                                    <th>手机</th>
                                    <th style='width: 100px;'>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($userList as $key => $value) { ?>
                                    <tr class="gradeC">
                                        <td style='text-align:center;'><?php echo $value['userid']; ?></td>
                                        <td style='text-align:center;'><?php echo $value['username']; ?></td>
                                        <td style='text-align:center;'><?php echo $value['useremail']; ?></td>
                                        <td style='text-align:center;'><?php echo $value['photo']; ?></td>
                                        <td style='text-align:center;' ><a href='javascript:;' class="btn btn-mini" ><i class="icon-edit"></i></a>&nbsp;&nbsp;<a href='javascript:;' class="btn btn-mini"  onclick="Basic.zoombox().show('confirm', 'User.delUser(<?php echo $value['userid']; ?>)')"><i class="icon-remove"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div style='text-align: right;'>
                            <?php echo $page_list; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
