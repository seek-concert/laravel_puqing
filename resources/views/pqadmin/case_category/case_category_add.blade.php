@extends('pqadmin.public')
@section('content')

    <div class="contents">
        <div class="grid_wrapper">

            <div class="g_6 contents_header">
                <h3 class="i_16_forms tab_label">新增分类</h3>
                <div><span class="label">新增分类信息</span></div>
            </div>
            <div class="g_6 contents_options">
                <div class="simple_buttons">
                    <div class="bwIcon i_16_help">Help</div>
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
            <form action="{{url('pqadmin/case_category_add')}}" method="post">
                {{ csrf_field() }}
                <div class="g_12">
                    <div class="widget_header">
                        <h4 class="widget_header_title wwIcon i_16_forms">添加分类信息</h4>
                    </div>
                    <div class="widget_contents noPadding">
                        <div class="line_grid">
                            <div class="g_3"><span class="label">分类名称</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="name" required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line_grid">
                    <div class="g_3"><span class="label"></span></div>
                    <div class="g_9">
                        <input type="submit" value="提交" class="submitIt simple_buttons"/>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection