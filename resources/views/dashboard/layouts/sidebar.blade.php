<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li class="mt-10 mb-10  text-muted ps-4 font-medium menu-title"><a href="{{route('dashboard')}}">Dashboard</a> </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#ManageSuppliers">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Manage Suppliers</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="ManageSuppliers" class="collapse" data-bs-parent="#sidebarnav">
                    <li> <a href="{{route('supplier.all')}}">All Suppliers</a> </li>

                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#ManageCustomers">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Manage Customers</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="ManageCustomers" class="collapse" data-bs-parent="#sidebarnav">
                    <li> <a href="{{route('customer.all')}}">All Customers</a> </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#ManageUnits">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Manage Units</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="ManageUnits" class="collapse" data-bs-parent="#sidebarnav">
                    <li> <a href="{{route('unit.all')}}">All Units</a> </li>

                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse"  data-bs-target="#ManageCategories">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Manage Categories</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="ManageCategories" class="collapse" data-bs-parent="#sidebarnav">
                    <li> <a href="{{route('category.all')}}">All Categories</a> </li>

                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Manageproducts">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Manage products</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="Manageproducts" class="collapse" data-bs-parent="#sidebarnav">
                    <li> <a href="{{route('product.all')}}">All Products</a> </li>

                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#ManagePurchases">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Manage Purchases</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="ManagePurchases" class="collapse" data-bs-parent="#sidebarnav">
                    <li> <a href="{{route('purchase.all')}}">All Products</a> </li>

                </ul>
            </li>
            <!-- menu title -->
{{--            <li class="mt-10 mb-10 text-muted ps-4 font-medium menu-title">Components </li>--}}
{{--            <!-- menu item Elements-->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#elements">--}}
{{--                    <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Elements</span></div>--}}
{{--                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>--}}
{{--                </a>--}}
{{--                <ul id="elements" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li><a href="accordions.html">Accordions</a></li>--}}
{{--                    <li><a href="alerts.html">Alerts</a></li>--}}
{{--                    <li><a href="button.html">Button</a></li>--}}
{{--                    <li><a href="colorpicker.html">Colorpicker</a></li>--}}
{{--                    <li><a href="dropdown.html">Dropdown</a></li>--}}
{{--                    <li><a href="lists.html">lists</a></li>--}}
{{--                    <li><a href="modal.html">modal</a></li>--}}
{{--                    <li><a href="nav.html">nav</a></li>--}}
{{--                    <li><a href="nicescroll.html">nicescroll</a></li>--}}
{{--                    <li><a href="pricing-table.html">pricing table</a></li>--}}
{{--                    <li><a href="ratings.html">ratings</a></li>--}}
{{--                    <li><a href="date-picker.html">date picker</a></li>--}}
{{--                    <li><a href="tabs.html">tabs</a></li>--}}
{{--                    <li><a href="typography.html">typography</a></li>--}}
{{--                    <li><a href="popover-tooltips.html">Popover tooltips</a></li>--}}
{{--                    <li><a href="progress.html">progress</a></li>--}}
{{--                    <li><a href="switch.html">switch</a></li>--}}
{{--                    <li><a href="sweetalert2.html">sweetalert2</a></li>--}}
{{--                    <li><a href="touchspin.html">touchspin</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!-- menu item calendar-->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#calendar-menu">--}}
{{--                    <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">calendar</span></div>--}}
{{--                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>--}}
{{--                </a>--}}
{{--                <ul id="calendar-menu" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li> <a href="calendar.html">Events Calendar </a> </li>--}}
{{--                    <li> <a href="calendar-list.html">List Calendar</a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!-- menu item todo-->--}}
{{--            <li>--}}
{{--                <a href="todo-list.html"><i class="ti-menu-alt"></i><span class="right-nav-text">Todo list</span> </a>--}}
{{--            </li>--}}
{{--            <!-- menu item chat-->--}}
{{--            <li>--}}
{{--                <a href="chat-page.html"><i class="ti-comments"></i><span class="right-nav-text">Chat </span></a>--}}
{{--            </li>--}}
{{--            <!-- menu item mailbox-->--}}
{{--            <li>--}}
{{--                <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">Mail box</span> <span class="badge bg-warning float-end mt-1">HOT</span> </a>--}}
{{--            </li>--}}
{{--            <!-- menu item Charts-->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#chart">--}}
{{--                    <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">Charts</span></div>--}}
{{--                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>--}}
{{--                </a>--}}
{{--                <ul id="chart" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li> <a href="chart-js.html">Chart.js</a> </li>--}}
{{--                    <li> <a href="chart-morris.html">Chart morris </a> </li>--}}
{{--                    <li> <a href="chart-sparkline.html">Chart Sparkline</a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <!-- menu font icon-->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#font-icon">--}}
{{--                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">font icon</span></div>--}}
{{--                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>--}}
{{--                </a>--}}
{{--                <ul id="font-icon" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li> <a href="fontawesome-icon.html">font Awesome</a> </li>--}}
{{--                    <li> <a href="themify-icons.html">Themify icons</a> </li>--}}
{{--                    <li> <a href="weather-icon.html">Weather icons</a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!-- menu title -->--}}
{{--            <li class="mt-10 mb-10 text-muted ps-4 font-medium menu-title">Widgets, Forms & Tables </li>--}}
{{--            <!-- menu item Widgets-->--}}
{{--            <li>--}}
{{--                <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span> <span class="badge bg-danger float-end mt-1">59</span> </a>--}}
{{--            </li>--}}
{{--            <!-- menu item Form-->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Form">--}}
{{--                    <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Form & Editor</span></div>--}}
{{--                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>--}}
{{--                </a>--}}
{{--                <ul id="Form" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li> <a href="editor.html">Editor</a> </li>--}}
{{--                    <li> <a href="editor-markdown.html">Editor Markdown</a> </li>--}}
{{--                    <li> <a href="form-input.html">Form input</a> </li>--}}
{{--                    <li> <a href="form-validation-jquery.html">form validation jquery</a> </li>--}}
{{--                    <li> <a href="form-wizard.html">form wizard</a> </li>--}}
{{--                    <li> <a href="form-repeater.html">form repeater</a> </li>--}}
{{--                    <li> <a href="input-group.html">input group</a> </li>--}}
{{--                    <li> <a href="toastr.html">toastr</a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!-- menu item table -->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#table">--}}
{{--                    <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">data table</span></div>--}}
{{--                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>--}}
{{--                </a>--}}
{{--                <ul id="table" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li> <a href="data-html-table.html">Data html table</a> </li>--}}
{{--                    <li> <a href="data-local.html">Data local</a> </li>--}}
{{--                    <li> <a href="data-table.html">Data table</a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="mt-10 mb-10 text-muted ps-4 font-medium menu-title">More Pages</li>--}}
{{--            <!-- menu item Custom pages-->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#custom-page">--}}
{{--                    <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">Custom pages</span></div>--}}
{{--                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>--}}
{{--                </a>--}}
{{--                <ul id="custom-page" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li> <a href="projects.html">projects</a> </li>--}}
{{--                    <li> <a href="project-summary.html">Projects summary</a> </li>--}}
{{--                    <li> <a href="profile.html">profile</a> </li>--}}
{{--                    <li> <a href="app-contacts.html">App contacts</a> </li>--}}
{{--                    <li> <a href="contacts.html">Contacts</a> </li>--}}
{{--                    <li> <a href="file-manager.html">file manager</a> </li>--}}
{{--                    <li> <a href="invoice.html">Invoice</a> </li>--}}
{{--                    <li> <a href="blank.html">Blank page</a> </li>--}}
{{--                    <li> <a href="layout-container.html">layout container</a> </li>--}}
{{--                    <li> <a href="error.html">Error</a> </li>--}}
{{--                    <li> <a href="faqs.html">faqs</a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!-- menu item Authentication-->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#authentication">--}}
{{--                    <div class="pull-left"><i class="ti-id-badge"></i><span class="right-nav-text">Authentication</span></div>--}}
{{--                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>--}}
{{--                </a>--}}
{{--                <ul id="authentication" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li> <a href="login.html">login</a> </li>--}}
{{--                    <li> <a href="register.html">register</a> </li>--}}
{{--                    <li> <a href="lockscreen.html">Lock screen</a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!-- menu item maps-->--}}
{{--            <li>--}}
{{--                <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span> <span class="badge bg-success float-end mt-1">06</span></a>--}}
{{--            </li>--}}
{{--            <!-- menu item timeline-->--}}
{{--            <li>--}}
{{--                <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text">timeline</span> </a>--}}
{{--            </li>--}}
{{--            <!-- menu item Multi level-->--}}
{{--            <li>--}}
{{--                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#multi-level"><div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi level Menu</span></div><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>--}}
{{--                <ul id="multi-level" class="collapse" data-bs-parent="#sidebarnav">--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#auth">Level item 1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>--}}
{{--                        <ul id="auth" class="collapse">--}}
{{--                            <li>--}}
{{--                                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#login">Level item 1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>--}}
{{--                                <ul id="login" class="collapse">--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#invoice">level item 1.1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>--}}
{{--                                        <ul id="invoice" class="collapse">--}}
{{--                                            <li> <a href="#">level item 1.1.1.1</a> </li>--}}
{{--                                            <li> <a href="#">level item 1.1.1.2</a> </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li> <a href="#">level item 1.2</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#error">level item 2<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>--}}
{{--                        <ul id="error" class="collapse" >--}}
{{--                            <li> <a href="#">level item 2.1</a> </li>--}}
{{--                            <li> <a href="#">level item 2.2</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </li>
        </ul>
    </div>
</div>
