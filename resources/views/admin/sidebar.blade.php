  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ route('admin.dashboard.dashboard') }}">
                                 <i class="fas fa-home"  style="color: rgb(237, 241, 237);"></i>
                                Dashboard
                            </a>
                           
                            

                            <a class="nav-link" href="{{route('categories.index')}}">
                                <i class="fas fa-list" style="color: rgb(237, 241, 237);"></i>
                                Categories
                            </a>

                             <a class="nav-link" href="{{route('cities.index')}}">
                                <i class="fas fa-city" style="color: rgb(237, 241, 237);"></i>
                                Cities
                            </a>

                            <a class="nav-link" href="{{route('countries.index')}}">
                                <i class="fas fa-map" style="color: rgb(237, 241, 237);"></i>
                                Countries
                            </a>

                            <a class="nav-link" href="{{route('qualifications.index')}}">
                                <i class="fas fa-graduation-cap" style="color: rgb(237, 241, 237);"></i>
                                Qualifications
                            </a>

                            <a class="nav-link" href="{{route('skills.index')}}">
                                <i class="fas fa-tools" style="color: rgb(237, 241, 237);"></i>
                                Skills
                            </a>

                            <a class="nav-link" href="{{route('states.index')}}">
                                <i class="fas fa-map-marker-alt" style="color: rgb(237, 241, 237);"></i>
                                States
                            </a>

                            <a class="nav-link" href="{{route('jobs.index')}}">
                                <i class="fas fa-briefcase text-light me-1" style="color: rgb(237, 241, 237);"></i>
                                Jobs
                            </a>
                           
                            <a class="nav-link" href="{{route('users.index')}}">
                                <i class="fas fa-users" style="color: rgb(237, 241, 237);"></i>
                                Users
                            </a>

                            <a class="nav-link" href="{{route('roles.index')}}">
                                <i class="fas fa-user" style="color: rgb(237, 241, 237);"></i>
                                Roles
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