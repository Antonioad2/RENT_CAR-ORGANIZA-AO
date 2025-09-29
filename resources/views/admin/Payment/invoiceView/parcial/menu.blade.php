<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ url('assets/images/logo-full.png')}}" alt="" class="logo logo-lg">
                <img src="{{ url('assets/images/logo-abbr.png')}}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/">CRM</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/analytics">Analytics</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Reports</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/Reports/reportsSales">Sales Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Reports/reportsLeads">Leads Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Reports/reportsProject">Project Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Reports/reportsTimesheets">Timesheets Report</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Applications</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/Applications/appsChat">Chat</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Applications/appsEmail">Email</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Applications/appsTasks">Tasks</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Applications/appsNotes">Notes</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Applications/appsStorage">Storage</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Applications/appsCalendar">Calendar</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                        <span class="nxl-mtext">Proposal</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/proposal">Proposal</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/proposal/proposalView">Proposal View</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/proposal/proposalEdit">Proposal Edit</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/proposal/proposalCreate">Proposal Create</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                        <span class="nxl-mtext">COR</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{route('colors.index')}}" >CORES</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('colors.create')}}">Cor Ver</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('colors.show', ['color' => $color->id]) }}">Criar Cor</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('colors.edit')}}">Editar Cor</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                        <span class="nxl-mtext">Payment</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/payment">Payment</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/payment/invoiceView">Invoice View</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/payment/invoiceCreate">Invoice Create</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Customers</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/customers">Customers</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/customers/customersView">Customers View</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/customers/customersCreate">Customers Create</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                        <span class="nxl-mtext">Leads</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/leads">Leads</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/leads/leadsView">Leads View</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/leads/leadsCreate">Leads Create</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                        <span class="nxl-mtext">Projects</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/projects">Projects</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/projects/projectsView">Projects View</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/projects/projectsCreate">Projects Create</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layout"></i></span>
                        <span class="nxl-mtext">Widgets</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsLists">Lists</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsTables">Tables</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsCharts">Charts</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsStatistics">Statistics</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Widgets/widgetsMiscellaneous">Miscellaneous</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-settings"></i></span>
                        <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsGeneral">General</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsSeo">SEO</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsTags">Tags</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsEmail">Email</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsTasks">Tasks</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsLeads">Leads</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsSupport">Support</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsFinance">Finance</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsGateways">Gateways</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsCustomers">Customers</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsLocalization">Localization</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsRecaptcha">reCAPTCHA</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Settings/settingsMiscellaneous">Miscellaneous</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-power"></i></span>
                        <span class="nxl-mtext">Authentication</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Login</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="/Login/authLoginCover">Cover</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Login/authLoginMinimal">Minimal</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Login/authLoginCreative">Creative</a></li>
                            </ul>
                        </li>
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Register</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="/Register/authRegisterCover">Cover</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Register/authRegisterMinimal">Minimal</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Register/authRegisterCreative">Creative</a></li>
                            </ul>
                        </li>
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Error-404</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="/Error/auth404cover">Cover</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Error/auth404minimal">Minimal</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Error/auth404creative">Creative</a></li>
                            </ul>
                        </li>
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Reset Pass</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="/Reset/authResetCover">Cover</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Reset/authResetMinimal">Minimal</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Reset/authResetCreative">Creative</a></li>
                            </ul>
                        </li>
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Verify OTP</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="/VerifyOTP/authVerifyCover">Cover</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/VerifyOTP/authVerifyMinimal">Minimal</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/VerifyOTP/authVerifyCreative">Creative</a></li>
                            </ul>
                        </li>
                        <li class="nxl-item nxl-hasmenu">
                            <a href="javascript:void(0);" class="nxl-link">
                                <span class="nxl-mtext">Maintenance</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            </a>
                            <ul class="nxl-submenu">
                                <li class="nxl-item"><a class="nxl-link" href="/Maintenance/authMaintenanceCover">Cover</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Maintenance/authMaintenanceMinimal">Minimal</a></li>
                                <li class="nxl-item"><a class="nxl-link" href="/Maintenance/authMaintenanceCreative">Creative</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-life-buoy"></i></span>
                        <span class="nxl-mtext">Help Center</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="#/">Support</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Help/help-knowledgebase">KnowledgeBase</a></li>
                        <li class="nxl-item"><a class="nxl-link" href=".docs/documentations">Documentations</a></li>
                    </ul>
                </li>
            </ul>
            <div class="card text-center">
                <div class="card-body">
                    <i class="feather-sunrise fs-4 text-dark"></i>
                    <h6 class="mt-4 text-dark fw-bolder">Downloading Center</h6>
                    <p class="fs-11 my-3 text-dark">Duralux is a production ready CRM to get started up and running easily.</p>
                    <a href="javascript:void(0);" class="btn btn-primary text-dark w-100">Download Now</a>
                </div>
            </div>
        </div>
    </div>
</nav>