@extends('pqadmin.public')
@section('content')

    <div class="contents">
        <div class="grid_wrapper">

            <div class="g_6 contents_header">
                <h3 class="i_16_forms tab_label">新增客户</h3>
                <div><span class="label">新增客户信息</span></div>
            </div>
            <div class="g_6 contents_options">
                <div class="simple_buttons">
                    <a href="javascript:;" onclick="get_cache('')"><div class="bwIcon i_16_help">更新缓存</div></a>
                </div>
                <div class="simple_buttons">
                    <div class="bwIcon i_16_settings">Settings</div>
                    <div class="buttons_arrow">
                        <!-- Drop Menu -->
                        <ul class="drop_menu menu_with_icons right_direction">
                            <li>
                                <a class="i_16_add" href="#" title="New Flie">
                                    <span class="label">New File</span>
                                </a>
                            </li>
                            <li>
                                <a class="i_16_progress" href="#" title="2 Files Left">
                                    <span class="label">Files Left</span>
                                    <span class="small_count">2</span>
                                </a>
                            </li>
                            <li>
                                <a class="i_16_files" href="#" title="Browse Files">
                                    <span class="label">Browse Files</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="g_12 separator"><span></span></div>
            <form action="{{url('pqadmin/customer_add')}}" method="post">
            {{ csrf_field() }}
                <div class="g_12">
                    <div class="widget_header">
                        <h4 class="widget_header_title wwIcon i_16_forms">新增客户信息</h4>
                    </div>
                    <div class="widget_contents noPadding">
                        <div class="line_grid">
                            <div class="g_3"><span class="label">客户姓名</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="username"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">联系方式</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="phone"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">(公司)项目名称</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="web_name"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">项目链接</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="web_url"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">宝塔地址</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="bt_url"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">宝塔用户名</span></div>
                            <div class="g_9">
                                <input class="simple_field tooltip" type="text" name="bt_username"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">宝塔密码</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="bt_password"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label ">云服务器账户登录账号</span></div>
                            <div class="g_9">
                                <input class="simple_field fiwIcon" name="yun_username"/>
                            
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">云服务器账户登录密码</span></div>
                            <div class="g_9">
                                <input type="text" class="simple_field" name="yun_password"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">云服务器账户</span></div>
                            <div class="g_9">
                                <input type="text" class="simple_field" name="yun_services_username"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">云服务器密码</span></div>
                            <div class="g_9">
                                <input type="text" class="simple_field atC" name="yun_services_password"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">服务到期时间</span></div>
                            <div class="g_9">
                                <input class="simple_field pick_date" type="text" name="services_end_time" />
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">其他</span></div>
                            <div class="g_9">
                                <textarea class="simple_field elastic" name="description"></textarea>
                            </div>
                        </div>
                    
                    </div>
                </div>


                <div class="line_grid">
                    <div class="g_3"><span class="label"></span></div>
                    <div class="g_9">
                        <input type="submit" value="提交" class="submitIt simple_buttons" />
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection