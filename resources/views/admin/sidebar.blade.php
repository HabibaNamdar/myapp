  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ route('admin.dashboard.dashboard') }}">
                                 <i class="fas fa-home"  style="color: rgb(237, 241, 237);"></i>
                                Dashboard
                            </a>
                            {{-- @can('user-list') --}}
                                
                           
                            <a class="nav-link" href="{{route('admin.users.index')}}">
                               <i class="fas fa-users" style="color: rgb(237, 241, 237);"></i>
                                Users
                            </a> 
                            {{-- @endcan --}}
                            {{-- @can('role-list') --}}
                                
                            
                            <a class="nav-link" href="{{route('admin.roles.index')}}">
                                <i class="fas fa-user-shield" style="color: rgb(237, 241, 237);"></i>
                                Roles
                            </a>
                            {{-- @endcan --}}

                            <a class="nav-link" href="{{route('categories.index')}}">
                                <i class="fas fa-list" style="color: rgb(237, 241, 237);"></i>
                                Categories
                            </a>
                           
                          
    
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                  
                                    
                                </nav>
                            </div>
                           
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>