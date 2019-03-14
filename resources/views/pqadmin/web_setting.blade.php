@extends('pqadmin.public')
@section('content')

    <div class="contents">
        <div class="grid_wrapper">

            <div class="g_6 contents_header">
                <h3 class="i_16_forms tab_label">网站设置</h3>
                <div><span class="label">修改网站信息</span></div>
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

            <div class="g_12">
                <div class="widget_header">
                    <h4 class="widget_header_title wwIcon i_16_forms">Simple Fields</h4>
                </div>
                <div class="widget_contents noPadding">
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Simple Text Field</span></div>
                        <div class="g_9">
                            <input class="simple_field" type="text" />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">With Placeholder</span></div>
                        <div class="g_9">
                            <input class="simple_field" type="text" placeholder="Any Stuff .." />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">With Predefined Value</span></div>
                        <div class="g_9">
                            <input class="simple_field" type="text" value="google" />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Input with Description</span></div>
                        <div class="g_9">
                            <input class="simple_field" type="text" />
                            <div class="field_notice">Description About The Field Content</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Label with Description</span><div class="field_notice">Description About Label</div></div>
                        <div class="g_9">
                            <input class="simple_field" type="text" />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Label With Tooltip</span></div>
                        <div class="g_9">
                            <input class="simple_field tooltip" placeholder="Focus to See" type="text" title="Tooltip trigger on Focus!" />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Disabled Field</span></div>
                        <div class="g_9">
                            <input class="simple_field" disabled="disabled" placeholder="It's Disabled :(" type="text" />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label lwIcon i_16_pie">Label With Icon</span></div>
                        <div class="g_9">
                            <input class="simple_field fiwIcon" />
                            <img alt="data" src="Images/Icons/16/i_16_data.png" class="fwIcon" />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Masked Input</span></div>
                        <div class="g_9">
                            <form />
                            <input type="text" class="simple_field date_mask" />
                            <div class="field_notice">Format: YYYY/MM/DD</div>
                            </form>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Read Only</span></div>
                        <div class="g_9">
                            <input type="text" class="simple_field" readonly value="You can't edit me :p" />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Auto Complete</span></div>
                        <div class="g_9">
                            <input type="text" class="simple_field atC" />
                            <div class="field_notice">Try typing: a or j| Use Up & Down Key too ..</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Simple Textarea</span></div>
                        <div class="g_9">
                            <textarea class="simple_field"></textarea>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Auto Resizing Textarea</span></div>
                        <div class="g_9">
                            <textarea class="simple_field elastic"></textarea>
                            <div class="field_notice">Make a lot of lines to see</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Chars Remained</span></div>
                        <div class="g_9">
                            <textarea class="simple_field twMaxChars"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="g_12 separator"><span></span></div>
            <div class="g_12">
                <div class="widget_header">
                    <h4 class="widget_header_title wwIcon i_16_valid">Form Validations</h4>
                </div>
                <div class="widget_contents noPadding">
                    <form />
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Full Name <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input type="text" placeholder="Jake Bob" class="simple_field" required />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Password <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input class="simple_field" type="password" required />
                            <div class="field_notice">a-z-A-Z-0-9</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Birthday Date <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input class="simple_field pick_date" type="text" required />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Email <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input class="simple_field" type="email" required />
                            <div class="field_notice">Try typing a wrong email, without @ for ex ..</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Website <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input class="simple_field" type="Url" required />
                            <div class="field_notice">Try typing a wrong Url ..</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Address <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input class="simple_field tooltip" placeholder="Focus to see a tooltip" type="text" title="The Country is Optional" required />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Phone <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input class="simple_field phone_mask" type="text" required />
                            <div class="field_notice">Format: (999) 999-9999</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Budget <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input class="simple_field spinner3" type="text" required />
                            <div class="field_notice">Min 0$ | Ps: Try focus and using Up and Down Key ..</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Sex <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input class="simple_form" type="radio" name="sex" value="male" /><span class="label ilC">Male</span>
                            <input class="simple_form" type="radio" name="sex" value="female" /><span class="label ilC">Female</span>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Preferred Color <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input type="text" class="simple_field fwColorpicker" required />
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label"> Term of Use </span></div>
                        <div class="g_9">
										<textarea class="simple_field" readonly>
Term Of use:

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper sagittis dui, nec tempor lorem ultrices vel. Quisque et nisl velit, vitae ullamcorper nisi. Sed feugiat sollicitudin rhoncus. Quisque ac euismod velit. Phasellus accumsan laoreet mi, at suscipit arcu sagittis at. Aenean quis enim sed mauris posuere dignissim nec ut sem. Proin pulvinar arcu vitae mi mollis interdum. Mauris laoreet mollis dapibus. Proin fermentum molestie sapien, non molestie enim fringilla ac.
										</textarea>
                            <div class="field_notice">Read-Only</div>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Are you agree? <span class="must">*</span></span></div>
                        <div class="g_9">
                            <input type="checkbox" class="simple_form" required />
                            <span class="label ilC">Check this box</span>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">Submit</span></div>
                        <div class="g_9">
                            <input type="submit" value="Validate" class="submitIt simple_buttons" />
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection