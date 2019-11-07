        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{url('profile')}}"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Home</li>
                    <li>    
                        <a href="{{url('home')}}">
                            <i class="material-icons">home</i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>DASHBOARD</span>
                        </a>
                    </li>
                    <li class="header">Fitur</li>
                    <li>
                        <a href="{{url('siswa')}}">
                            <i class="material-icons">people</i>
                            <span>SISWA</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('jadwal')}}">
                            <i class="material-icons">today</i>
                            <span>INFO JADWAL</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('absensi')}}">
                            <i class="material-icons">border_color</i>
                            <span>INFO ABSENSI</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('nilai')}}">
                            <i class="material-icons">assignment_turned_in</i>
                            <span>INFO NILAI</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('event')}}">
                            <i class="material-icons">rss_feed</i>
                            <span>INFO EVENT</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('ringkasan')}}">
                            <i class="material-icons">bookmark</i>
                            <span>INFO RINGKASAN MATERI</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('tugas')}}">
                            <i class="material-icons">assignment</i>
                            <span>INFO TUGAS</span>
                        </a>
                    </li>
                    <li class="header">Setting</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>SETTING</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('user')}}">
                                    <i class="material-icons">people</i>
                                    <span>MANAGE USER</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('role')}}">
                                    <i class="material-icons">security</i>
                                    <span>MANAGE ROLE</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('cabang')}}">
                                    <i class="material-icons">account_balance</i>
                                    <span>MANAGE CABANG</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('kelas')}}">
                                    <i class="material-icons">location_city</i>
                                    <span>MANAGE KELAS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date('Y');?> <a href="javascript:void(0);">TIM Website - Neutron Yogyakarta</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->